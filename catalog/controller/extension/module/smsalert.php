<?php
class ControllerExtensionModuleSmsAlert extends Controller {
	private $error = array();
	
	public function index() {
		$this->load->model('account/customer');
		$this->load->model('extension/module/smsalert');
		if(!empty($this->request->get['otp_event']))
		{
			$mobile = '';$vendor='';$reg='0';
			$otp_event=$this->request->get['otp_event'];
			$mobile = (!empty($this->session->data['guest']['telephone'])) ? $this->session->data['guest']['telephone'] : $this->customer->getTelephone();
			if(isset($this->request->get['phone']) && $this->request->get['phone']!='undefined')
			{
				$mobile=$this->request->get['phone'];
			}
			if(isset($this->request->get['register']) && $this->request->get['register']!='undefined')
			{
				$reg=$this->request->get['register'];
			}
			if(isset($this->request->get['vendor']))
			{
				$vendor=$this->request->get['vendor'];
			}
			if(isset($this->request->get['user']))
			{
				$username=$this->request->get['user'];
				$password=$this->request->get['pwd'];
			}
			if($otp_event=='checkout')
			{
				$template = $this->getOtpTemplates('otp_for_checkout', $this->config->get('config_store_id'));
				if($reg=='1')
				{
					$allow_same_mobile = $this->config->get('smsalert_allow_same_mobile');
					$customer = $this->getCustomerByPhone($mobile);
					if($allow_same_mobile == '0' && $customer)
					{
						$json['error'] = 'An account is already registered with your mobile number.';
						$this->response->addHeader('Content-Type: application/json');
						$this->response->setOutput(json_encode($json));
					}
					else if($template)
					{
						return $this->sendotpforcheckout($mobile,$template);
					}
				}
				else{
					if($template)
					{
						return $this->sendotpforcheckout($mobile,$template);
					}
				}
			}
			elseif($otp_event=='register')
			{
				$template = $this->getOtpTemplates('otp_for_register', $this->config->get('config_store_id'));
				$allow_same_mobile = $this->config->get('smsalert_allow_same_mobile');
				$customer = $this->getCustomerByPhone($mobile);
				if($allow_same_mobile == '0' && $customer)
				{
					$json['error'] = 'An account is already registered with your mobile number.';
					$this->response->addHeader('Content-Type: application/json');
		            $this->response->setOutput(json_encode($json));
				}
				else if($template)
				{
					return $this->sendotpforcheckout($mobile,$template);
				}
			}
			elseif($otp_event=='verify')
			{
				if((!empty($this->request->post['code'])))
				{
					return $this->verifyotpforcheckout($mobile,$this->request->post['code']);
				}
			}
			elseif($otp_event=='login')
			{
				$json =array();
				if($mobile!='')
				{
					if($vendor=='1')
					{
						if($this->checkVendorModule())
						{
					      $customer = $this->getVendorByPhone($mobile);
						}
					}
					else{
					  $customer = $this->getCustomerByPhone($mobile);
					}
				  $json['error'] = 'Mobile number is not registered.';
					
				}
				else{
					if($vendor=='1')
					{
				      $customer = $this->getCustomer($username,$password);
					  if(!empty($customer) && $this->checkVendorModule)
					  {
						  $this->load->model('vendor/lts_vendor');
						  $vendor_info = $this->model_vendor_lts_vendor->getVendor($customer['customer_id']);
						  $customer = $vendor_info?$customer:array();
					  }
					}
					else{
					  $customer = $this->getCustomer($username,$password);
					}
				  $json['error'] = 'Invalid Username or Password.';
				}
				if(!empty($customer))
				{
					if($mobile=='')
				    {
					  $mobile = $customer['telephone'];
					}
					$template = $this->getOtpTemplates('login_with_otp', $this->config->get('config_store_id'));
					if($template)
					{
						return $this->sendotpforcheckout($mobile,$template,$customer);
					}
				}
				else{
					$this->response->addHeader('Content-Type: application/json');
		            $this->response->setOutput(json_encode($json));
				}
			}
			elseif($otp_event=='dologin')
			{
				$email=$this->request->get['email'];
				return $this->login($email);
			}	
		}	
	}
	public function add_notify_request(){

		$this->load->language('extension/module/smsalert');
		$this->load->model('extension/module/smsalert');

		$json = array();

		if (utf8_strlen(trim($this->request->post['product_id'])) < 1) {
			$json['error'] = $this->language->get('error_warning');
		}

		if ((utf8_strlen($this->request->post['phone']) > 13) || !(strlen(preg_replace('/[^0-9]/', '', $this->request->post['phone']))>=10)) {
			$json['error'] = $this->language->get('error_phone');
		}
		if($this->checkSubscribe($this->request->post['phone'],$this->request->post['product_id']))
		{
			$json['error'] = 'You have already subscribed for this product';
		}
		if(!$json){
			$data = [
				'phone' 		=> $this->request->post['phone'],
				'product_id' 	=> $this->request->post['product_id'],
			];
			$customer_id = 0;
			if ($this->customer->isLogged()) {
				$customer_id = $this->customer->getId();
			}
			$data = array_merge($data,['customer_id' => $customer_id]);

			$this->model_extension_module_smsalert->add_notify_request($data);
			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}
	public function checkSubscribe($phone = '', $product_id = '') {
		$ph 		= $this->checkPhoneNos($phone);
		$wc_ph    	= $this->checkPhoneNos($phone,false);
		$wth_pls_ph    	= '+'.$wc_ph;
		$wth_zro_ph    	= '0'.$wc_ph;

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "smsalert_notify WHERE phone in('$wth_zro_ph','$phone','$ph','$wc_ph','$wth_pls_ph') AND product_id = '" . (int)$product_id . "' AND status=0");

		return $query->rows;
	}
	public function checkVendorModule()
	{
		$result = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `code` = 'lts_vendor'");
		if($result->num_rows) {
		   return true;
		} else {
		   return false;
		}
		
	}
	public function getVendorByPhone($phone) {
		$phone = preg_replace('/[^0-9]/', '', $phone);
		$ph 		= $this->checkPhoneNos($phone);
		$wc_ph    	= $this->checkPhoneNos($phone,false);
		$wth_pls_ph    	= '+'.$wc_ph;
		$wth_zro_ph    	= '0'.$wc_ph;
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "lts_vendor` v LEFT JOIN `". DB_PREFIX ."customer` c ON (c.customer_id = v.vendor_id) WHERE telephone in('$wth_zro_ph','$phone','$ph','$wc_ph','$wth_pls_ph')");

		return $query->row;
	}
	public function getCustomerByPhone($phone) {
		$phone = preg_replace('/[^0-9]/', '', $phone);
		$ph 		= $this->checkPhoneNos($phone);
		$wc_ph    	= $this->checkPhoneNos($phone,false);
		$wth_pls_ph    	= '+'.$wc_ph;
		$wth_zro_ph    	= '0'.$wc_ph;
		
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "customer WHERE telephone in('$wth_zro_ph','$phone','$ph','$wc_ph','$wth_pls_ph')");

		return $query->row;
	}
	public function getCustomer($username,$password) {
		
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "customer WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($username)) . "' AND (password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape($password) . "'))))) OR password = '" . $this->db->escape(md5($password)) . "') AND status = '1'");

		return $query->row;
	}
	public function checkPhoneNos($nos=NULL,$force_prefix=true)
	{
		$country_code=$this->config->get('smsalert_country');
		
		$nos = explode(',',$nos);
		$valid_no=array();
		if(is_array($nos))
		{			
			foreach($nos as $no){
				$no = ltrim(ltrim($no, '+'),'0'); //remove leading + and 0
				if(!$force_prefix)
				{
					$no = (substr($no,0,strlen($country_code))==$country_code) ? substr($no,strlen($country_code)) : $no;
				}
				else
				{
					$no = (substr($no,0,strlen($country_code))!=$country_code) ? $country_code.$no : $no;
				}
					$valid_no[] = $no;
			}
		}
		
		if(sizeof($valid_no)>0)
		{
			return implode(',',$valid_no);
		}
		else
		{
			return false;
		}
	}
	public function getOtpTemplates($type,$store_id)
	{
		$this->load->model('extension/module/smsalert');
		$templates = $this->model_extension_module_smsalert->getTemplates($type, $store_id);
		$template = array_shift($templates);
		if(!empty($template['message']) && $template['status']=='1')
		{
			return $template['message'];
		}
		return false;
	}
	
	protected function resend($receiver,$template) {
		$this->load->model('account/customer');
		$this->load->model('extension/module/smsalert');
		if (!$this->config->get('smsalert_auth_key') || !$this->config->get('smsalert_auth_secret')) {
			exit('No key is configured to send SMS. Please contact the administrator.');
		}
		$this->load->language('extension/module/smsalert');
		$this->session->data['two_fa_smsalert_time'] = time();
		
		$response = $this->model_extension_module_smsalert->sendOtp($receiver,$template);
		if(!empty($response['status']) && $response['status']=='error')
		{
			$this->session->data['error_warning'] = $this->language->get('error_invalid_number');
			return false;
		}
		
		$this->session->data['success'] = sprintf($this->language->get('text_success'), $receiver);
		return true;
	}
	
	private function validate() {
		
		if (empty($this->request->post['code'])) 
		{
			    $this->session->data['error_warning'] = $this->language->get('blank_otp');
		        return false;
		}
		else 
		{
			//call mverify for check the otp
			$receiver = $this->request->post['telephone'];
			$this->load->model('extension/module/smsalert');
			
			$response = $this->model_extension_module_smsalert->verifyOtp($receiver,$this->request->post['code']);
			if(!empty($response['description']['desc']) && $response['description']['desc']=='Code does not match.')
			{
				$this->session->data['error_warning'] = $response['description']['desc'];
		        return false;
			}
		} 
		return true;
	}
	/**checkout register otp**/
	 public function eventPreControllerCheckoutRegister($route, &$data) {
		 $template = $this->getOtpTemplates('otp_for_register', $this->config->get('config_store_id'));
		$data['otp_for_register']= 0;
		if($template)
		{
			$data['otp_for_register']= 1;
		}
		$data['resend_timer']=$this->config->get('smsalert_resend_timer')!=''?$this->config->get('smsalert_resend_timer'):'15';//in secs
	    $data['blank_otp'] = $this->language->get('blank_otp');
		echo $this->load->view('extension/module/smsalert_register_otp', $data); 
	} 	
	/**checkout register otp ends**/
	/*add html code for checkout otp popup*/
	public function eventPostControllerCheckoutPaymentMethod($route, &$data) {
		$template = $this->getOtpTemplates('otp_for_checkout', $this->config->get('config_store_id'));
		$enabled_payment_methods=$this->config->get('smsalert_payment_method');
		
		if($template)
		{
			if ($this->cart->hasShipping()) {
				$data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 5);
				$data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 6);
			} else {
				$data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 3);
				$data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 4);	
			}
			$data['resend_timer']=$this->config->get('smsalert_resend_timer')!=''?$this->config->get('smsalert_resend_timer'):'15';//in secs
			$data['blank_otp'] = $this->language->get('blank_otp');
			$data['enabled_payment_methods'] = $enabled_payment_methods;
			echo $this->load->view('extension/module/smsalert_checkout_otp', $data);
		}
	}
	
	/*send OTP to Mobile Number from checkout page*/
	public function sendotpforcheckout($receiver,$template,$customer=array()) {
		$this->load->model('extension/module/smsalert');
		$json=array();
		$json = $this->model_extension_module_smsalert->sendOtp($receiver,$template);
		//$this->response->addHeader('Content-Type: application/json');
		//$this->response->setOutput(json_encode($json));
		$json['telephone']=$receiver;
		if(!empty($customer))
		{
		  $json['email']=$customer['email'];
          $json['store_id']=$this->config->get('config_store_id');		
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	/*send OTP to Mobile Number from checkout page*/
	public function verifyotpforcheckout($receiver,$code) {
		
		$this->load->model('extension/module/smsalert');
		
		$json=array();
		$json = $this->model_extension_module_smsalert->verifyOtp($receiver,$code);
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function login($login)
	{
		$email=$this->request->get['email'];
		$this->customer->login($email, '', true);
	}
	
	public function eventPostControllerAccountLogout($route, &$data) {
		unset($this->session->data['two_fa_sms']);
		unset($this->session->data['two_fa_r_sms']);
	}
		
	public function eventPostModelAccountCustomerAdd($route, $args, $output) {
		$this->load->model('account/customer');
		$this->load->model('extension/module/smsalert');
		
		$customer_info = $this->model_account_customer->getCustomer($output);
		
		$replace = array(
			$customer_info['firstname'],
			$customer_info['lastname'],
			$customer_info['email'],
			$customer_info['telephone'],
			$this->config->get('config_name'),
			$customer_info['password']
		);
		$this->model_extension_module_smsalert->parseSMS('register', $this->config->get('config_store_id'), $customer_info['telephone'], $replace);
	}

	public function eventPostModelAccountCustomerAddAffiliate($route, $args, $output) {
		$this->load->model('account/customer');
		$this->load->model('extension/module/smsalert');
		
		$customer_info = $this->model_account_customer->getCustomer($args[0]);
		
		$replace = array(
			$customer_info['firstname'],
			$customer_info['lastname'],
			$customer_info['email'],
			$this->config->get('config_name'),
			$customer_info['telephone']
		);
		
		$this->model_extension_module_smsalert->parseSMS('affiliate', $this->config->get('config_store_id'), $customer_info['telephone'], $replace);
	}
	
	public function eventPostModelAccountCustomerAddTransaction($route, $args, $output) {
		$this->load->model('account/customer');
		$this->load->model('extension/module/smsalert');
		
		$customer_id = isset($args[0]) ? $args[0] : 0;
		$description = isset($args[1]) ? $args[1] : '';
		$amount = isset($args[2]) ? $args[2] : 0;
		$order_id = isset($args[3]) ? $args[3] : 0;
		
		$customer_info = $this->model_account_customer->getCustomer($customer_id);
				
		$replace = array(
			$customer_info['firstname'],
			$customer_info['lastname'],
			$customer_info['email'],
			$this->currency->format($amount, $this->config->get('config_currency')),
			$this->config->get('config_name'),
			$this->currency->format($this->model_account_customer->getTransactionTotal($customer_id), $this->config->get('config_currency'))
		);
		
		$this->model_extension_module_smsalert->parseSMS('affiliate_transaction', $this->config->get('config_store_id'), $customer_info['telephone'], $replace);
	}
	
	public function eventPostModelAccountCustomerEditCode($route, $args, $output) {
		$this->load->model('account/customer');
		$this->load->model('extension/module/smsalert');
		
		$customer_info = $this->model_account_customer->getCustomerByEmail($args[0]);
		
		$replace = array(
			$customer_info['firstname'],
			$customer_info['lastname'],
			$customer_info['email'],
			$this->config->get('config_name'),
			$this->url->link('account/reset', 'code=' . $args[1], true)
		);
		
		$this->model_extension_module_smsalert->parseSMS('forgotten', $this->config->get('config_store_id'), $customer_info['telephone'], $replace);
	}
	
	public function eventPreModelCheckoutOrderAddOrderHistory($route, $args) {
		if (isset($args[0])) {
			$order_id = $args[0];
		} else {
			$order_id = 0;
		}

		if (isset($args[1])) {
			$order_status_id = $args[1];
		} else {
			$order_status_id = 0;
		}	

		if (isset($args[2])) {
			$comment = $args[2];
		} else {
			$comment = '';
		}
		
		if (isset($args[3])) {
			$notify = $args[3];
		} else {
			$notify = '';
		}
						
		$order_info = $this->model_checkout_order->getOrder($order_id);
		if ($order_info && ($order_info['order_status_id']!=$order_status_id)) {
			// Order confirmation
				$this->load->model('extension/module/smsalert');
								
				if ($order_info['payment_address_format']) {
					$format = $order_info['payment_address_format'];
				} else {
					$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
				}
				
				$find = array(
					'{firstname}',
					'{lastname}',
					'{company}',
					'{address_1}',
					'{address_2}',
					'{city}',
					'{postcode}',
					'{zone}',
					'{country}'
				);
			
				$replace = array(
					'firstname' => $order_info['payment_firstname'],
					'lastname'  => $order_info['payment_lastname'],
					'company'   => $order_info['payment_company'],
					'address_1' => $order_info['payment_address_1'],
					'address_2' => $order_info['payment_address_2'],
					'city'      => $order_info['payment_city'],
					'postcode'  => $order_info['payment_postcode'],
					'zone'      => $order_info['payment_zone'],
					'country'   => $order_info['payment_country']  
				);
				
				$payment_address = trim(str_replace($find, $replace, $format));						
				
				if ($order_info['shipping_address_format']) {
					$format = $order_info['shipping_address_format'];
				} else {
					$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
				}
				
				$find = array(
					'{firstname}',
					'{lastname}',
					'{company}',
					'{address_1}',
					'{address_2}',
					'{city}',
					'{postcode}',
					'{zone}',
					'{country}'
				);
			
				$replace = array(
					'firstname' => $order_info['shipping_firstname'],
					'lastname'  => $order_info['shipping_lastname'],
					'company'   => $order_info['shipping_company'],
					'address_1' => $order_info['shipping_address_1'],
					'address_2' => $order_info['shipping_address_2'],
					'city'      => $order_info['shipping_city'],
					'postcode'  => $order_info['shipping_postcode'],
					'zone'      => $order_info['shipping_zone'],
					'country'   => $order_info['shipping_country']  
				);
				
				$shipping_address = trim(str_replace($find, $replace, $format));
				
				$order_product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");

				$plain_product_table = '';
				$vendors = array();
				foreach ($order_product_query->rows as $product) {
					//check product stock
					$prod = $this->db->query("SELECT * FROM " . DB_PREFIX . "product p INNER JOIN " . DB_PREFIX . "product_description pd ON p.product_id = pd.product_id WHERE p.product_id = '" . (int)$product['product_id'] . "'");
					$produc = $prod->rows;
					if(!empty($produc) && $produc[0]['quantity']==0 && $order_status_id==1)
					{
						$this->model_extension_module_smsalert->notifyStock($produc[0],$order_info['store_id']);
					}
					$plain_product_table .= $product['quantity'] . 'x ' . $product['name'];
					
					$order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$product['order_product_id'] . "'");

					foreach ($order_option_query->rows as $option) {
						$plain_product_table .= '- ' . $option['name'] . ': ' . $option['value'] . "\n";
					}
					//vendor number 
				if($this->checkVendorModule())
				{
					$this->load->model('vendor/lts_product');
		            $vendor_product = $this->model_vendor_lts_product->getVendorProductById($product['product_id']);
					if($vendor_product)
					{
						$this->load->model('vendor/lts_vendor');
						$vendor_info = $this->model_vendor_lts_vendor->getVendor($vendor_product['vendor_id']);
						$vendors[$vendor_product['vendor_id']]['phone']= $vendor_info?$vendor_info['telephone']:'';
						$vendors[$vendor_product['vendor_id']]['product'][]= $product['name'];
						$vendors[$vendor_product['vendor_id']]['total'][]= $product['total'];
					}
				}
				}
				if($vendors)
				{
					foreach($vendors as $vendor_id => $vendor)
					{
						$ven_phone = $vendor['phone'];
						$ven_product = implode(',',$vendor['product']);
						$ven_total = array_sum($vendor['total']);
						$replace = array(
							$order_info['firstname'],
							$order_info['lastname'],
							$order_info['email'],
							$order_info['telephone'],
							$order_info['order_id'],
							date($this->language->get('date_format_short'), strtotime($order_info['date_added'])),
							$order_info['payment_method'],
							$order_info['shipping_method'],
							$order_info['ip'],
							$notify ? $comment : '',
							$payment_address,
							$shipping_address,
							$ven_product,
							$this->config->get('config_name'),
							HTTPS_SERVER,
							$this->currency->format($ven_total, $this->config->get('config_currency')),
							(isset($args[5]) && $args[5]!='undefined') ? $args[5] : '',
					         (isset($args[6]) && $args[5]!='undefined') ? $args[6] : '',
						);
						$this->model_extension_module_smsalert->parseSMS($order_status_id, $order_info['store_id'], '', $replace, $ven_phone);
					}	
				}
				$replace = array(
					$order_info['firstname'],
					$order_info['lastname'],
					$order_info['email'],
					$order_info['telephone'],
					$order_info['order_id'],
					date($this->language->get('date_format_short'), strtotime($order_info['date_added'])),
					$order_info['payment_method'],
					$order_info['shipping_method'],
					$order_info['ip'],
					$notify ? $comment : '',
					$payment_address,
					$shipping_address,
					$plain_product_table,
					$this->config->get('config_name'),
					HTTPS_SERVER,
					$this->currency->format($order_info['total'], $this->config->get('config_currency')),
					(isset($args[5]) && $args[5]!='undefined') ? $args[5] : '',
					(isset($args[6]) && $args[5]!='undefined') ? $args[6] : '',
				);
				$this->model_extension_module_smsalert->parseSMS($order_status_id, $order_info['store_id'], $order_info['telephone'], $replace);
				//send review request
				$review_status = $this->config->get('smsalert_schedule_status');
				if($order_status_id == $review_status)
				{
					$templates = $this->model_extension_module_smsalert->getTemplates('review_request', $order_info['store_id'],1);
					
					$template_data = false;
					foreach ($templates as $template) {
							$template_data = $template;
						
					}
					if ($template_data && !empty($template_data) && $template_data['status']=='1') {
						print_r($template_data);exit();
						$days = $this->config->get('smsalert_schedule_day');
						$time_enabled = $this->config->get('smsalert_schedule_time_checkbox');
						if($time_enabled == '1'){
							$schedule_time = $this->config->get('smsalert_schedule_time');
							$date_modified 	= $order_info['date_modified'];
							$default_time = date('Y-m-d',strtotime($date_modified)).' '.$schedule_time;
							$schedule = date('Y-m-d H:i:s',strtotime('+'.$days.' days',strtotime($default_time)));

						}else{
							$order_time		= date('Y-m-d H:i:s');
							$schedule 		= date('Y-m-d H:i:s',strtotime('+'.$days.' days',strtotime($order_time)));
						}
						$search = $this->model_extension_module_smsalert->getSearch('review_request');
						$message = strip_tags(str_replace($search, $replace, html_entity_decode($template_data['message'])));
						$this->model_extension_module_smsalert->sendSMS($order_info['telephone'], $message, $schedule);
					}
					
				}
			
		}
	}
}
