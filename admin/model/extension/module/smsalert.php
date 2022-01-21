<?php
class ModelExtensionModuleSmsAlert extends Model {
	/**added on 06-05-2019 */
	const PATTERN_PHONE	= '/^(\+)?(country_code)?0?\d+$/';
	public function getCountries()
	{
		return $this->country_list();
	}
	public function send_in_stock_message($product_id = 0, $data = array()){
	$active_language_id = [];
		foreach ($data['product_description'] as $key => $value) {
			$active_language_id[] = $key;
		}

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "smsalert_notify WHERE product_id = '".(int)$product_id."' AND status=0");
		foreach ($query->rows as $result) {

			$this->load->model('setting/setting');
		    //get the store url
			$store_info = $this->model_setting_setting->getSetting('config', $result['store_id']);
			if($result['store_id'] == 0){
				$store_url = HTTP_CATALOG;
			}else{
				$store_url = $store_info['config_url'];
			}

			if(in_array($result['language_id'], $active_language_id)){
				$send_language_id = $result['language_id'];
			}else{
				$send_language_id = $active_language_id[0];
			}

			$product = [
				$data['product_description'][$send_language_id]['name'],
				$this->config->get('config_name'),
				$store_url."index.php?route=product/product&product_id=". $result['product_id'],
			];

			$templates = $this->getSMSTemplates('back_in_stock', $result['store_id'],1);
		    $template_data = false;
		    foreach ($templates as $template) {
				$template_data = $template;
		    }
		
			if ($template_data && !empty($template_data) && $template_data['status']=='1') {
				$message = strip_tags(str_replace(array('{item_name}','{store_name}','{item_url}'), $product, html_entity_decode($template_data['message'])));
				$response = $this->sendSMS($result['phone'], $message);
				if($response['status']=='success')
				{
					$this->db->query("UPDATE " . DB_PREFIX . "smsalert_notify set status=1 where phone = '" . $result['phone'] . "' AND product_id = '" . (int)$result['product_id'] . "'");
				}
			}

		}

	}
	public function get_notify_products($start = 0, $limit = 10) {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "smsalert_notify ORDER BY date_added DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}
	public function get_notify_total() {
		$query = $this->db->query("SELECT COUNT(*) AS total  FROM " . DB_PREFIX . "smsalert_notify");

		return $query->row['total'];
	}
	public function getSmsTemplate()
	{
		if (!$this->config->get('smsalert_auth_key') || !$this->config->get('smsalert_auth_secret')) {
			return;
		}
		$post_data = array(
				'user'			=> $this->config->get('smsalert_auth_key'),
				'pwd'			=> $this->config->get('smsalert_auth_secret'),
				'order'		=> 'desc',
				'limit'		=> '100',
			);
		$response_arr = $this->sendCurl(base64_decode('aHR0cHM6Ly93d3cuc21zYWxlcnQuY28uaW4vYXBpL3RlbXBsYXRlbGlzdC5qc29u'), $post_data);
		$option = '<option value="">Select Template</option>';
		if($response_arr['status']=='success')
		{
			foreach($response_arr['description'] as $template)
			{
				$option.='<option value="'.$template['Smstemplate']['template'].'">'.$template['Smstemplate']['title'].'</option>';
			}
		}
		return $option;
	}	
	public function getPhonePattern()
	{
		$country_code=$this->config->get('smsalert_country');
		$pattern = ($this->config->get('smsalert_mobile_pattern')!='') ? $this->config->get('smsalert_mobile_pattern'):self::PATTERN_PHONE;
		
		$country_code = str_replace('+', '', $country_code);
		$pattern_phone = str_replace("country_code",$country_code,$pattern);
		return $pattern_phone;
	}	
	/** closed added on 06-05-2019 */
	public function addTemplate($data,$customer_notify=1,$otp_template=0) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "sms_template SET store_id = '" . (int)$data['store_id'] . "', type = '" . $this->db->escape($data['type']) . "', status = '" . $this->db->escape($data['status']) . "', customer_notify = '" . $customer_notify . "', otp_template = '" . $otp_template . "'");
		
		$template_id = $this->db->getLastId();
		
		foreach ($data['description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "sms_template_message SET sms_template_id = '" . (int)$template_id . "', language_id = '" . (int)$language_id . "', message = '" . $this->db->escape($value['message']) . "'");
		}
	}
	
	/*added on 24-06-2019*/
	public function getTemplateByType($type,$store_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sms_template inner join " . DB_PREFIX . "sms_template_message on (" . DB_PREFIX . "sms_template.sms_template_id=" . DB_PREFIX . "sms_template_message.sms_template_id) WHERE type = '" . $type . "' and  store_id = '" . $store_id . "'");
		
		if ($query->num_rows) {
			$description_data = array();
			
			foreach ($query->rows as $description) {
				$description_data[$description['language_id']] = array(
					'message'		=> $description['message']
				);
			}
			
			return array(
				'sms_template_id'	=> $query->row['sms_template_id'],
				'type'				=> $query->row['type'],
				'store_id'			=> $query->row['store_id'],
				'status'			=> $query->row['status'],
				'description'		=> $description_data
			);
		} else {
			return false;
		}
	}
	
	public function editTemplate($template_id, $data) {
		if(array_key_exists('status',$data) && $data['status']=='on')
		{
			$data['status']='1';
		}
		else{
			$data['status']='0';
		}
		$this->db->query("UPDATE " . DB_PREFIX . "sms_template SET store_id = '" . (int)$data['store_id'] . "', type = '" . $this->db->escape($data['type']) . "', status = '" . $this->db->escape($data['status']) . "' WHERE sms_template_id = '" . (int)$template_id . "'");
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "sms_template_message WHERE sms_template_id = '" . (int)$template_id . "'");
		
		foreach ($data['description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "sms_template_message SET sms_template_id = '" . (int)$template_id . "', language_id = '" . (int)$language_id . "', message = '" . $this->db->escape($value['message']) . "'");
		}
	}
	
	public function deleteTemplate($template_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "sms_template WHERE sms_template_id = '" . (int)$template_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "sms_template_message WHERE sms_template_id = '" . (int)$template_id . "'");
	}
	
	public function getTemplate($template_id) { 
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sms_template WHERE sms_template_id = '" . (int)$template_id . "'");
		
		if ($query->num_rows) {
			$description = $this->db->query("SELECT * FROM " . DB_PREFIX . "sms_template_message WHERE sms_template_id = '" . (int)$template_id . "'");
			
			$description_data = array();
			
			foreach ($description->rows as $description) {
				$description_data[$description['language_id']] = array(
					'message'		=> $description['message']
				);
			}
			
			return array(
				'sms_template_id'	=> $query->row['sms_template_id'],
				'type'				=> $query->row['type'],
				'store_id'			=> $query->row['store_id'],
				'status'			=> $query->row['status'],
				'description'		=> $description_data
			);
		} else {
			return false;
		}
	}
		
	public function getTemplates($data = array(),$customer_notify,$otp_template=0) {
		$sql = "SELECT * FROM " . DB_PREFIX . "sms_template where customer_notify = ".$customer_notify." AND otp_template = ".$otp_template."";

		

		$sql .= " ORDER BY type";	
		
		
		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}
		
		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}					

			if ($data['limit'] < 1) {
				$data['limit'] =  $this->config->get('config_limit_admin');
			}	
		
			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}		
		
		$query = $this->db->query($sql);

		return $query->rows;
	}
		
	public function getTotalTemplates($data = array(),$customer_notify,$otp_template=0) {
      	$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "sms_template where customer_notify = ".$customer_notify." AND otp_template = ".$otp_template."");
		
		return $query->row['total'];
	}
	
	private function getSMSTemplates($type, $store_id, $customer_notify=1) { 
	   $this->load->model('localisation/language');
		
	   $language = $this->model_localisation_language->getLanguageByCode($this->config->get('config_admin_language'));
	   $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sms_template st LEFT JOIN " . DB_PREFIX . "sms_template_message stm ON st.sms_template_id = stm.sms_template_id WHERE type = '" . $this->db->escape($type) . "' AND store_id = '" . (int)$store_id . "' AND language_id = '" . $language['language_id'] . "' AND customer_notify = '" . $customer_notify . "'");
		
		return $query->rows;
	}
	
	private function getSearch($type) {
		if ($type == 'register') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{email}',
				'{store_name}',
				'{telephone}',
				'{password}'
			);
		} elseif ($type == 'affiliate') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{email}',
				'{store_name}',
				'{telephone}'
			);
		} elseif ($type == 'affiliate_transaction') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{email}',
				'{commission}',
				'{store_name}',
				'{total_commission}'
			);
		} elseif ($type == 'affiliate_approve') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{store_name}',
				'{email}'
			);
		} elseif ($type == 'forgotten') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{email}',
				'{store_name}',
				'{password}'
			);
		} elseif ($type == 'order') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{email}',
				'{telephone}',
				'{order_id}',
				'{date_added}',
				'{payment_method}',
				'{shipping_method}',
				'{ip}',
				'{order_comment}',
				'{payment_address}',
				'{shipping_address}',
				'{products}',
				'{store_name}',
				'{order_amount}',
			);
		} elseif ($type == 'reward') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{email}',
				'{points}',
				'{store_name}',
				'{total_points}'
			);
		} elseif ($type == 'account_approve') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{store_name}',
				'{email}'
			);
		} elseif ($type == 'account_deny') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{store_name}',
				'{email}'
			);
		} elseif ($type == 'account_transaction') {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{email}',
				'{credits}',
				'{store_name}',
				'{total_credits}'
			);
		} else {
			$search = array(
				'{firstname}',
				'{lastname}',
				'{email}',
				'{telephone}',
				'{order_id}',
				'{products}',
				'{date_added}',
				'{return_comment}',
				'{store_name}',
				'{return_id}'
			);
		}
	
		return $search;
	}
	
	public function parseSMS($type, $store_id, $number, $replace) {
		$number = preg_replace('/[^0-9]/', '', $number);
		
		$templates = $this->getSMSTemplates($type, $store_id,1);
		$template_data = false;
		
	$template_data = false;
		foreach ($templates as $template) {
				$template_data = $template;
		}
		
		if ($template_data && !empty($template_data) && $template_data['status']=='1') {
			$search = $this->getSearch($type);
			$message = strip_tags(str_replace($search, $replace, html_entity_decode($template_data['message'])));
			
			$this->sendSMS($number, $message);
			
			$admin_templates = $this->getSMSTemplates($type, $store_id,0);

			$template_data = false;
			foreach ($admin_templates as $admin_template) {
					$template_data = $admin_template;
				
			}
			$admin_numbers = $this->config->get('smsalert_admin_number');
			$numbers = explode(',', $admin_numbers);
			if ($template_data && !empty($template_data) && $template_data['status']=='1' && !empty($numbers) && array_key_exists('message',$template_data)) {
				$search = $this->getSearch($type);
			    $message = strip_tags(str_replace($search, $replace, html_entity_decode($template_data['message'])));
				foreach ($numbers as $number) {
				if ($number) {
					$this->sendSMS($number, $message);
				}
			}
			}
		} else {
			return false;
		}
	}
	
	private function sendCurl($url, $post_data) {
		$extra_params = array('plugin'=>'opencart', 'website'=>$_SERVER['SERVER_NAME']);
		$post_data = (!is_null($post_data)) ? array_merge($post_data, $extra_params) : $extra_params; 

		$curl = curl_init();
		
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLINFO_HEADER_OUT, true);
		curl_setopt($curl, CURLOPT_USERAGENT, 'OpenCart Two Factor Authentication');
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));

		$response = curl_exec($curl);
		
		if (curl_errno($curl)) {
			$curl_error = 'SmsAlert cURL Error ' . curl_errno($curl) . ': ' . curl_error($curl);
		} else {
			$curl_error = '';
		}
		
		if ($curl_error) {
			$this->log->write($curl_error);
			return array('error'=>$curl_error);
		}

		curl_close($curl);
		
		return json_decode($response, true);
	}
	public function sendMessage($receiver, $message)
	{
		return $this->sendSMS($receiver, $message);
	}
	private function sendSMS($receiver, $message) {
		if (!$this->config->get('smsalert_auth_key') || !$this->config->get('smsalert_auth_secret')) {
			return;
		}
        $enable_short_url=$this->config->get('smsalert_enable_short_url');	
		/*added on 06-05-2019 */
		$country_code=$this->config->get('smsalert_country');
		$no = preg_replace('/[^0-9]/', '', $receiver);
		$no = ltrim($no, '0');
		$no = (substr($no,0,strlen($country_code))!=$country_code) ? $country_code.$no : $no;
		$match = preg_match($this->getPhonePattern(),$no);
		/*closed added on 06-05-2019 */
		if($match)
		{
			$post_data = array(
				'user'			=> $this->config->get('smsalert_auth_key'),
				'pwd'			=> $this->config->get('smsalert_auth_secret'),
				'sender'		=> $this->config->get('smsalert_default_senderid'),
				'mobileno'		=> $no,
				'text'			=> $message
			);
             if($enable_short_url=='1'){
				$post_data['shortenurl']=1;
			}
			$response_arr = $this->sendCurl(base64_decode('aHR0cHM6Ly93d3cuc21zYWxlcnQuY28uaW4vYXBpL3B1c2guanNvbg=='), $post_data);
			if($response_arr['status']=='error') {
			$error = (is_array($response_arr['description'])) ? $response_arr['description']['desc'] : $response_arr['description'];
			if($error == "Invalid Template Match")
			{
				$this->sendtemplatemismatchemail($message);
			}
		}
		return $response_arr;
	 }
	}
	public function sendtemplatemismatchemail($template)
	{
		$username = $this->config->get('smsalert_auth_key');
		$To_mail=$this->config->get('smsalert_alert_email');
		$emailid = explode(',',$To_mail);
		if(!empty($emailid))
		{
		//Email template with content
		$data = array(
                'template' => nl2br($template),
                'username' => $username,
                'server_name' => $_SERVER['SERVER_NAME']
        );
		$mail = new Mail();
		$mail->protocol = $this->config->get('config_mail_protocol');
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		$mail->setTo($To_mail);
		$mail->setFrom('support@cozyvision.com');
		$mail->setSender(html_entity_decode('SMS Alert', ENT_QUOTES, 'UTF-8'));
		$mail->setSubject(html_entity_decode('❗ ✱ SMS Alert ✱ Template Mismatch', ENT_QUOTES, 'UTF-8'));
		$mail->setHtml($this->load->view('extension/module/smsalert_mismatch_template', $data));
		$mail->send();
		}
	}

	public function sendOtp($receiver) {
		
		if (!$this->config->get('smsalert_auth_key') || !$this->config->get('smsalert_auth_secret')) {
			return;
		}
		
		
		/*added on 06-05-2019 */
		$country_code=$this->config->get('smsalert_country');
		$no = preg_replace('/[^0-9]/', '', $receiver);
		$no = ltrim($no, '0');
		$no = trim($no, ' ');
		$no = (substr($no,0,strlen($country_code))!=$country_code) ? $country_code.$no : $no;
		$match = preg_match($this->getPhonePattern(),$no);
		/*closed added on 06-05-2019 */
		if($match)
		{
			$post_data = array(
				'user'			=> $this->config->get('smsalert_auth_key'),
				'pwd'			=> $this->config->get('smsalert_auth_secret'),
				'sender'		=> $this->config->get('smsalert_default_senderid'),
				'mobileno'		=> $no,
				//'text'			=> $message
			);
			$response_arr = $this->sendCurl(base64_decode('aHR0cHM6Ly93d3cuc21zYWxlcnQuY28uaW4vYXBpL212ZXJpZnkuanNvbg=='), $post_data);
			if($response_arr['status']=='error') {
			$error = (is_array($response_arr['description'])) ? $response_arr['description']['desc'] : $response_arr['description'];
			if($error == "Invalid Template Match")
			{
				$this->sendtemplatemismatchemail($template);
			}
		}
		return $response_arr;
	}
	}
	
	public function getSMSCredits() {
		
		if (!$this->config->get('smsalert_auth_key') || !$this->config->get('smsalert_auth_secret')) {
			return;
		}
		
		$post_data = array(
				'user'			=> $this->config->get('smsalert_auth_key'),
				'pwd'			=> $this->config->get('smsalert_auth_secret'),
		);
		
		$result=$this->sendCurl(base64_decode('aHR0cHM6Ly93d3cuc21zYWxlcnQuY28uaW4vYXBpL2NyZWRpdHN0YXR1cy5qc29u'), $post_data);
		if(isset($result['status']) && ($result['status'] == "success")){
            return $result['description']['routes'][0]['credits'];
        }
		else{
			 return array_key_exists('error',$result)?$result['error']:'';
        }
		
	}
	
	public function country_list()
    {
		$result=$this->sendCurl(base64_decode('aHR0cHM6Ly93d3cuc21zYWxlcnQuY28uaW4vYXBpL2NvdW50cnlsaXN0Lmpzb24='), array());
		if(isset($result['status']) && ($result['status'] == "success")){
            return $result['description'];
        }
		else{
			 return $result;
        }
		return $result;
    }
	public function verifyuser($username=NULL,$password=NULL)
    {
		$post_data = array(
				'user'			=> $username,
				'pwd'			=> $password,
		);
		$result=$this->sendCurl(base64_decode('aHR0cDovL3d3dy5zbXNhbGVydC5jby5pbi9hcGkvc2VuZGVybGlzdC5qc29u'), $post_data);
		return json_encode($result);
    }
}