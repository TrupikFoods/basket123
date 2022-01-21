<?php
class ControllerExtensionModuleSmsAlert extends Controller {
	protected $version = '2.0.0';
	protected $error = array();

	public function index() {
		$this->load->language('extension/module/smsalert');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		
		$this->load->model('extension/module/smsalert');
				
		$this->getList(isset($this->request->get['tab'])?$this->request->get['tab']:'');
	}
	
	public function insert() {
		$this->load->language('extension/module/smsalert');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		
		$this->load->model('extension/module/smsalert');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$exist_template = $this->model_extension_module_smsalert->getTemplateByType($this->request->post['type'],$this->request->post['store_id']);
			if(!empty($exist_template))
			{
				$this->session->data['success'] = 'Template already exists. Please edit template - '.$exist_template['type'];
				$this->response->redirect($this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'] . $url, true));
			}
			
			$this->model_extension_module_smsalert->addTemplate($this->request->post,$this->request->get['customer_notify'],$this->request->get['otp_template']);		
					
			$this->session->data['success'] = $this->language->get('text_success');
			
			$url = '';
		
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}
			
			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
			
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
						
			$this->response->redirect($this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
				
		$this->getForm();
	}
	
	public function update() {
		$this->load->language('extension/module/smsalert');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		
		$this->load->model('extension/module/smsalert');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_extension_module_smsalert->editTemplate($this->request->get['template_id'], $this->request->post);		
					
			$this->session->data['success'] = $this->language->get('text_success');
			
			$url = '';
		
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}
			
			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
			
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
						
			$this->response->redirect($this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
				
		$this->getForm();
	}
	
	public function delete() {
		$this->load->language('extension/module/smsalert');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		
		$this->load->model('extension/module/smsalert');
		
		if (isset($this->request->post['selected']) && $this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $template_id) {
				$this->model_extension_module_smsalert->deleteTemplate($template_id);
			}
					
			$this->session->data['success'] = $this->language->get('text_success');
			
			$url = '';
		
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}
			
			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
			
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
						
			$this->response->redirect($this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
		
		$this->getList();
	}
	
	public function copy() {
		$this->load->language('extension/module/smsalert');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		
		$this->load->model('extension/module/smsalert');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && isset($this->request->post['selected'])) {
			foreach ($this->request->post['selected'] as $template_id) {
				$template_info = $this->model_extension_module_smsalert->getTemplate($template_id);
				
				$template_info['name'] .= ' Copy';
				
				$this->model_extension_module_smsalert->addTemplate($template_info);
			}
			
			$this->session->data['success'] = $this->language->get('text_success');
		}
		
		$url = '';
	
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}
		
		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		$this->response->redirect($this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'] . $url, true));
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
	public function checkModule($code)
	{
		$result = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `code` = '".$code."'");
		if($result->num_rows) {
		   return true;
		} else {
		   return false;
		}
		
	}
	
	public function checkSettingKey($key)
	{
		$result = $this->db->query("SELECT * FROM `" . DB_PREFIX . "setting` WHERE `key` = '".$key."'");
		if($result->num_rows) {
		   return true;
		} else {
		   return false;
		}
		
	}
	
	protected function getList($tab) {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}
		
		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		$url = '';
		
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}
		
		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		$data = array(
			'sort'		=> $sort,
			'order'		=> $order,
			'page'		=> $page,
			'start'		=> $this->config->get('config_limit_admin') * ($page - 1),
			'limit'		=> $this->config->get('config_limit_admin')
		);
		
 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'user_token=' . $this->session->data['user_token'], true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_module'),
			'href'      => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
   		);
		
   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'], true)
   		);
		$data['vendor_plugin']='';
		if($this->checkVendorModule())
		{
			$data['vendor_plugin']='1';
		}
		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_register'] 	 	= $this->language->get('text_register');
		$data['text_unregister'] 	= $this->language->get('text_unregister');
		$data['text_show_customer'] = $this->language->get('text_show_customer');
		$data['column_product'] 	= $this->language->get('column_product');
		$data['column_customer'] 	= $this->language->get('column_customer');
		$data['column_date_added'] 	= $this->language->get('column_date_added');
		$data['column_name'] = $this->language->get('column_name');
		$data['column_type'] = $this->language->get('column_type');
		$data['column_store'] = $this->language->get('column_store');
		$data['column_action'] = $this->language->get('column_action');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		
		$data['tab_config'] = $this->language->get('tab_general');
		$data['tab_customer'] = $this->language->get('tab_customer');
		$data['tab_admin'] = $this->language->get('tab_admin');
		$data['tab_otp'] = $this->language->get('tab_otp');
		$data['tab_support'] = $this->language->get('tab_support');
		$data['tab_subscribe'] = $this->language->get('tab_subscribe');
		$data['tab_setting'] = $this->language->get('tab_setting');
	
		$data['entry_auth_key'] = $this->language->get('entry_auth_key');
		$data['entry_auth_secret'] = $this->language->get('entry_auth_secret');
		$data['entry_default_senderid'] = $this->language->get('entry_default_senderid');
		$data['entry_debug'] = $this->language->get('entry_debug');
		
		$data['text_no_results'] = $this->language->get('text_no_results');
		
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_copy'] = $this->language->get('button_copy');
		
		$data['copy'] = $this->url->link('extension/module/smsalert/copy', 'user_token=' . $this->session->data['user_token'], true);
		$data['action'] = $this->url->link('extension/module/smsalert/delete', 'user_token=' . $this->session->data['user_token'], true);
		$data['c_action'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'].'&tab=customer', true);
		$data['a_action'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'].'&tab=admin', true);
		$data['s_action'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'].'&tab=support', true);
		$data['adv_action'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'].'&tab=advance', true);
		$data['o_action'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'].'&tab=otp', true);
		$data['co_action'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'].'&tab=config', true);
		$data['sub_action'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'].'&tab=subscribe', true);
		$data['user_token'] = $this->session->data['user_token'];
		
		$data['smsalert_auth_key'] = $this->config->get('smsalert_auth_key');
		$data['smsalert_auth_secret'] = $this->config->get('smsalert_auth_secret');
		$data['smsalert_default_senderid'] = $this->config->get('smsalert_default_senderid');
		$data['module_smsalert_status'] = $this->config->get('module_smsalert_status');
		//Added on 06-05-2019 
		$data['smsalert_country']=$this->checkSettingKey('smsalert_country')?$this->config->get('smsalert_country'):'91';	
		$data['smsalert_admin_number']=$this->config->get('smsalert_admin_number');	
		$data['smsalert_admin_type']=$this->config->get('smsalert_admin_type');	
		$data['smsalert_alert_email']=$this->checkSettingKey('smsalert_alert_email')?$this->config->get('smsalert_alert_email'):$this->config->get('config_email');	
		$data['smsalert_allow_same_mobile']=$this->checkSettingKey('smsalert_allow_same_mobile')?$this->config->get('smsalert_allow_same_mobile'):'1';
		$data['smsalert_enable_short_url']=$this->config->get('smsalert_enable_short_url');	
		$data['smsalert_button_text']=$this->config->get('smsalert_button_text');	
		$data['smsalert_disable_default_login']=$this->config->get('smsalert_disable_default_login');
		$data['smsalert_schedule_status']=$this->checkSettingKey('smsalert_schedule_status')?$this->config->get('smsalert_schedule_status'):'5';
		$data['smsalert_schedule_time']=$this->checkSettingKey('smsalert_schedule_time')?$this->config->get('smsalert_schedule_time'):'10:00';
		$data['smsalert_schedule_time_checkbox']=$this->config->get('smsalert_schedule_time_checkbox');
		$data['smsalert_schedule_day']=$this->checkSettingKey('smsalert_schedule_day')?$this->config->get('smsalert_schedule_day'):'1';
		$data['smsalert_schedule_day']=$this->checkSettingKey('smsalert_schedule_day')?$this->config->get('smsalert_schedule_day'):'1';
		$data['smsalert_schedule_day']=$this->checkSettingKey('smsalert_schedule_day')?$this->config->get('smsalert_schedule_day'):'1';
		$data['smsalert_resend_timer']=$this->checkSettingKey('smsalert_resend_timer')?$this->config->get('smsalert_resend_timer'):'15';
		$data['smsalert_resend_allowed']=$this->checkSettingKey('smsalert_resend_allowed')?$this->config->get('smsalert_resend_allowed'):'4';
        $this->load->model('localisation/order_status');
				
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		$countries = $this->model_extension_module_smsalert->getCountries();
		$data['countries'] = array();
		if(!empty($countries) && !array_key_exists('error',$countries))
		{
			$data['countries'][] = array('name'=>'Global','countryCode'=>'','pattern'=>'/^(\+)?(country_code)?0?\d+$/');
			foreach($countries as $country)
			{
				$data['countries'][] = array(
					'name' => $country['Country']['name'],
					'countryCode'=> $country['Country']['c_code'],
					'pattern'=> $country['Country']['pattern'],
				);
			}
		}
		/*get payment methods*/
		$payment_methods = array();
		$results = $this->getPaymentMethods('payment');
		
		foreach ($results as $result) {
				if ($this->config->get('payment_' . $result['code'] . '_status')) {
					$payment_methods[$result['code']] = $result['code'];
				}
		}
		
		$data['payment_methods'] =$payment_methods;
		$data['selected_payment_methods'] =$this->checkSettingKey('smsalert_payment_method')?explode(',',$this->config->get('smsalert_payment_method')):array();
		$data['smsalert_mobile_pattern'] =$this->config->get('smsalert_mobile_pattern');
		
		
		/*/-get payment methods*/
		$credits = $this->model_extension_module_smsalert->getSMSCredits();
		if($credits!='')
		{
		$data['sms_credit'] = $credits;
		}
		else{
           $this->load->model('setting/setting');			
			$this->model_setting_setting->editSetting('smsalert', array('smsalert_auth_key'=>'','smsalert_auth_secret'=>''));
		}
		$templates = array();
		$total=0;
		
       //Closed Added on 06-05-2019
	   if($tab=='customer')
	   {
		  $templates = $this->model_extension_module_smsalert->getTemplates($data,1,0); 
		  $total = $this->model_extension_module_smsalert->getTotalTemplates($data,1,0);
	   }
	   else if($tab=='admin')
	   {
		  $templates = $this->model_extension_module_smsalert->getTemplates($data,0,0);
		  $total = $this->model_extension_module_smsalert->getTotalTemplates($data,0,0);
	   }
	   else if($tab=='otp')
	   { 
		  $templates = $this->model_extension_module_smsalert->getTemplates($data,1,1);
		  $total = $this->model_extension_module_smsalert->getTotalTemplates($data,1,1);
	   }
	   else if($tab=='subscribe')
	   { 
		  $total = $this->model_extension_module_smsalert->get_notify_total();
		  if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
         $this->load->model('customer/customer');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');
		$this->load->model('setting/setting');
		$this->load->model('localisation/language');
		$data['products'] = array();
		$results = $this->model_extension_module_smsalert->get_notify_products(($page - 1) * 10, $this->config->get('config_limit_admin'));
        if($results)
		{
		foreach ($results as $result) {
			$product_info = $this->model_catalog_product->getProduct($result['product_id']);
			$product_edit = $this->url->link('catalog/product/edit', 'product_id='.$result['product_id'].'&user_token=' . $this->session->data['user_token'], true);
			$customer_edit = $this->url->link('customer/customer/edit', 'customer_id='.$result['customer_id'].'&user_token=' . $this->session->data['user_token'], true);
			
			if (is_file(DIR_IMAGE . $product_info['image'])) {
				$thumb = $this->model_tool_image->resize($product_info['image'], 40, 40);
			} else {
				$thumb = $this->model_tool_image->resize('no_image.png', 40, 40);
			}

			if($result['store_id']>0){
				$store_info = $this->model_setting_setting->getSetting('config', $result['store_id']);
				$store_name = $store_info['config_name'];
			}else{
				$store_name = $this->language->get('text_default');
			}	

			$language 	= $this->model_localisation_language->getLanguage($result['language_id']);
            $customer = $this->model_customer_customer->getCustomer($result['customer_id']);
			 
			$data['products'][] = array(
				'product_id'		=> $result['product_id'],
				'product_name'		=> ($product_info)?$product_info['name']:'',
				'product_thumb'		=> $thumb,
				'product_edit'		=> $product_edit,
				'customer_id'		=> $result['customer_id'],
				'status'		=> $result['status'],
				'customer_name'		=> ($customer)?$customer['firstname'].' '.$customer['lastname']:'',
				'customer_phone'	=> $result['phone'],
				'date_added'  		=> date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'customer_edit'		=> $customer_edit,
				'store_name' 		=> sprintf($this->language->get('text_store_name'),$store_name),
				'language' 			=> "<img src='language/".$language['code']."/".$language['code'].".png' title='". $language['name'] ."' /> ".$language['name'],
			);
		}
		}
	   }
		
	   $data['templates'] = array();
		
		$this->load->model('localisation/order_status');
		$this->load->model('setting/store');
		
		foreach ($templates as $template) {
		    if(!$this->checkModule('order_shipment'))
			{	
				if($template['type']=='os_tracking_info')
				{
					continue;
				}
			}
				
			$action = array();
			
			$action[] = array(
				'link'		=> $this->url->link('extension/module/smsalert/update', 'user_token=' . $this->session->data['user_token'] . $url . '&template_id=' . $template['sms_template_id'], true),
				'name'		=> $this->language->get('text_edit_template')
			);
			
			$type = $this->model_localisation_order_status->getOrderStatus($template['type']);
			
			if ($type) {
				$type = $this->language->get('text_status') . ' ' . $type['name'];
			} else {
				$type = ucwords(preg_replace("[_]", " ", $template['type']));
			}
			
			if ($template['store_id']) {
				$store = $this->model_setting_store->getStore($template['store_id']);
				$store = $store['name'];
			} else {
				$store = $this->language->get('text_default');
			}
			
			$data['templates'][] = array(
				'sms_template_id'		=> $template['sms_template_id'],
				'status'				=> $template['status'],
				'type'					=> $type,
				'store'					=> $store,
				'selected'     			=> isset($this->request->post['selected']) && in_array($template['sms_template_id'], $this->request->post['selected']),
				'action'				=> $action
			);
		}
		
		$url = '';
		
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}
		
		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		$pagination = new Pagination();


		$pagination->total = $total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->text = $this->language->get('text_pagination');
		$pagination->url = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}&tab='.$tab, true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total - $this->config->get('config_limit_admin'))) ? $total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total, ceil($total / $this->config->get('config_limit_admin')));

		
		$data['sort'] = $sort;
		$data['order'] = $order;
		
		if ($order == 'ASC') {
			$order = 'DESC';
		} else {
			$order = 'ASC';
		}
		
		$url = '';
		
		if (isset($this->request->get['page'])) { 
			$url .= '&page=' . $this->request->get['page'];
		}
		
		$data['sort_name'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'] . '&sort=name&order=' . $order . $url, true);
		$data['sort_type'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'] . '&sort=type&order=' . $order . $url, true);
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/smsalert_list', $data));
	}
	
	protected function getForm() {
		$url = '';
		
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}
		
		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'user_token=' . $this->session->data['user_token'], true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_module'),
			'href'      => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
   		);
		
   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'], true)
   		);
		
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['tab_general'] = $this->language->get('tab_general');
		
		$data['entry_type'] = $this->language->get('entry_type');
		$data['entry_store'] = $this->language->get('entry_store');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_country'] = $this->language->get('entry_country');
		$data['entry_admin'] = $this->language->get('entry_admin');
		$data['entry_message'] = $this->language->get('entry_message');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_register'] = $this->language->get('text_register');
		$data['text_affiliate'] = $this->language->get('text_affiliate');
		$data['text_order'] = $this->language->get('text_order');
		$data['text_contact'] = $this->language->get('text_contact');
		$data['text_forgotten'] = $this->language->get('text_forgotten');
		$data['text_reward'] = $this->language->get('text_reward');
		$data['text_account_approve'] = $this->language->get('text_account_approve');
		$data['text_account_deny'] = $this->language->get('text_account_deny');
		$data['text_account_transaction'] = $this->language->get('text_account_transaction');
		$data['text_affiliate_approve'] = $this->language->get('text_affiliate_approve');
		$data['text_affiliate_transaction'] = $this->language->get('text_affiliate_transaction');
		$data['text_gift_voucher'] = $this->language->get('text_gift_voucher');
		$data['text_status'] = $this->language->get('text_status');
		$data['text_code'] = $this->language->get('text_code');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_select_all'] = $this->language->get('text_select_all');
		$data['text_unselect_all'] = $this->language->get('text_unselect_all');
		
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		
		$data['aftership_plugin']='';
		if($this->checkModule('da_track_shipment'))
		{
			$data['aftership_plugin']='1';
		}
		$data['ost_plugin']='';
		if($this->checkModule('order_shipment'))
		{
			$data['ost_plugin']='1';
		}
		
		if (isset($this->request->get['template_id'])) {
			$data['action'] = $this->url->link('extension/module/smsalert/update', 'user_token=' . $this->session->data['user_token'] . $url . '&template_id=' . $this->request->get['template_id'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/smsalert/insert', 'user_token=' . $this->session->data['user_token'] . $url . '&customer_notify=' . $this->request->get['customer_notify'], true);
		}
		if (isset($this->request->get['tab_common'])) {
			$data['tab_common'] = $this->request->get['tab_common'];
		}
		$data['cancel'] = $this->url->link('extension/module/smsalert', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['user_token'] = $this->session->data['user_token'];
		
		if (isset($this->request->get['template_id'])) { 
			$template_info = $this->model_extension_module_smsalert->getTemplate($this->request->get['template_id']);
		} else {
			$template_info = '';
		}
		
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($template_info)) {
			$data['status'] = $template_info['status'];
		} else {
			$data['status'] = '';
		}
		
		if (isset($this->request->post['type'])) {
			$data['type'] = $this->request->post['type'];
		} elseif (!empty($template_info)) {
			$data['type'] = $template_info['type'];
		} else {
			$data['type'] = '';
		}
		
		$this->load->model('setting/store');
		
		$data['stores'] = $this->model_setting_store->getStores();
		
		if (isset($this->request->post['store_id'])) {
			$data['store_id'] = $this->request->post['store_id'];
		} elseif (!empty($template_info)) {
			$data['store_id'] = $template_info['store_id'];
		} else {
			$data['store_id'] = '';
		}
		
		if (isset($this->request->post['country'])) {
			$data['country'] = $this->request->post['country'];
		} else {
			$data['country'] = array();
		}
		
		$this->load->model('localisation/order_status');
		$this->load->model('localisation/return_status');
		
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		
		$data['return_statuses'] = $this->model_localisation_return_status->getReturnStatuses();
		
		if (isset($this->request->post['description'])) {
			$data['description'] = $this->request->post['description'];
		} elseif (!empty($template_info)) {
			$data['description'] = $template_info['description'];
		} else {
			$data['description'] = array();
		}
		
		$this->load->model('localisation/language');
		
		$data['languages'] = $this->model_localisation_language->getLanguages();
		
		$this->load->model('localisation/country');
		
		$data['countries'] = $this->model_localisation_country->getCountries();
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/smsalert_form', $data));
	}
	
	public function config() {
		if ($this->validateDelete()) {
			$this->load->model('setting/setting');
			$this->model_setting_setting->editSetting('smsalert', $this->request->post);			
			$this->model_setting_setting->editSetting('module', array('module_smsalert_status'=>'1'));
			$data['status'] = 'success'; 
			$data['description'] = 'Success: You have modified module SmsAlert!'; 
			$this->response->setOutput(json_encode($data));
		}
    }
	
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'extension/module/smsalert')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		return !$this->error;
	}
	
	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'extension/module/smsalert')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}
	
	public function install() {
		if (!$this->user->hasPermission('modify', 'extension/extension/module')) {
			return;
		}
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "sms_template` (
		  `sms_template_id` int(11) NOT NULL AUTO_INCREMENT,
		  `type` varchar(255) NOT NULL,
		  `store_id` int(11) NOT NULL,
		  `status` boolean default true,
		  `customer_notify` boolean default true,
		  `otp_template` boolean default false,
		  PRIMARY KEY (`sms_template_id`),
		  UNIQUE KEY (`sms_template_id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;");
		
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "sms_template_message` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `sms_template_id` int(11) NOT NULL,
		  `language_id` int(11) NOT NULL,
		  `message` text NOT NULL,
		  UNIQUE KEY (`sms_template_id`),
		  UNIQUE KEY (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8;");
		
		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "smsalert_notify ( notify_id INT AUTO_INCREMENT PRIMARY KEY, customer_id int(11) DEFAULT 0 NOT NULL, product_id int(11) DEFAULT 0 NOT NULL, phone VARCHAR (15)  DEFAULT '' NOT NULL, status INT(11) DEFAULT 0 NOT NULL, language_id int(11) DEFAULT 0 NOT NULL, store_id int(11) DEFAULT 0 NOT NULL, date_added DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00') ENGINE MyISAM DEFAULT CHARSET utf8 COLLATE utf8_general_ci");
		
		$this->load->model('setting/store');
		$stores = $this->model_setting_store->getStores();
        $stores[] = array('store_id'=>0);
		$i=1;
		foreach($stores as $store)
		{
		$this->db->query("INSERT IGNORE INTO `" . DB_PREFIX . "sms_template` (`sms_template_id`, `type`, `store_id`, `customer_notify`, `otp_template`) VALUES
			(".$i."+1, 'register', ".$store['store_id'].", 1,0),
			(".$i."+2, 'affiliate', ".$store['store_id'].", 1,0),
			(".$i."+3, '1', ".$store['store_id'].", 1,0),
			(".$i."+4, 'forgotten', ".$store['store_id'].", 1,0),
			(".$i."+5, 'reward', ".$store['store_id'].", 1,0),
			(".$i."+6, 'account_approve', ".$store['store_id'].", 1,0),
			(".$i."+7, 'account_transaction', ".$store['store_id'].", 1,0),
			(".$i."+8, 'affiliate_approve', ".$store['store_id'].", 1,0),
			(".$i."+9, 'affiliate_transaction', ".$store['store_id'].", 1,0),
			(".$i."+10, '2', ".$store['store_id'].", 1,0),
			(".$i."+11, '3', ".$store['store_id'].", 1,0),
			(".$i."+12, '5', ".$store['store_id'].", 1,0),
			(".$i."+13, '7', ".$store['store_id'].", 1,0),
			(".$i."+14, '8', ".$store['store_id'].", 1,0),
			(".$i."+15, '9', ".$store['store_id'].", 1,0),
			(".$i."+16, '10', ".$store['store_id'].", 1,0),
			(".$i."+17, '11', ".$store['store_id'].", 1,0),
			(".$i."+18, '12', ".$store['store_id'].", 1,0),
			(".$i."+19, '13', ".$store['store_id'].", 1,0),
			(".$i."+20, '14', ".$store['store_id'].", 1,0),
			(".$i."+21, '15', ".$store['store_id'].", 1,0),
			(".$i."+22, '16', ".$store['store_id'].", 1,0),
			(".$i."+23, 'Awaiting Products', ".$store['store_id'].", 1,0),
			(".$i."+24, 'Complete', ".$store['store_id'].", 1,0),
			(".$i."+25, 'Pending', ".$store['store_id'].", 1,0),
			(".$i."+26, 'otp_for_register', ".$store['store_id'].", 1,1),
			(".$i."+27, 'otp_for_login', ".$store['store_id'].", 1,1),
			(".$i."+28, 'otp_for_checkout', ".$store['store_id'].", 1,1),
			(".$i."+29, 'register', ".$store['store_id'].", 0,0),
			(".$i."+30, 'affiliate', ".$store['store_id'].", 0,0),
			(".$i."+31, '1', ".$store['store_id'].", 0,0),
			(".$i."+32, 'forgotten', ".$store['store_id'].", 0,0),
			(".$i."+33, 'reward', ".$store['store_id'].", 0,0),
			(".$i."+34, 'account_approve', ".$store['store_id'].", 0,0),
			(".$i."+35, 'account_transaction', ".$store['store_id'].", 0,0),
			(".$i."+36, 'affiliate_approve', ".$store['store_id'].", 0,0),
			(".$i."+37, 'affiliate_transaction', ".$store['store_id'].", 0,0),
			(".$i."+38, '2', ".$store['store_id'].", 0,0),
			(".$i."+39, '3', ".$store['store_id'].", 0,0),
			(".$i."+40, '5', ".$store['store_id'].", 0,0),
			(".$i."+41, '7', ".$store['store_id'].", 0,0),
			(".$i."+42, '8', ".$store['store_id'].", 0,0),
			(".$i."+43, '9', ".$store['store_id'].", 0,0),
			(".$i."+44, '10', ".$store['store_id'].", 0,0),
			(".$i."+45, '11', ".$store['store_id'].", 0,0),
			(".$i."+46, '12', ".$store['store_id'].", 0,0),
			(".$i."+47, '13', ".$store['store_id'].", 0,0),
			(".$i."+48, '14', ".$store['store_id'].", 0,0),
			(".$i."+49, '15', ".$store['store_id'].", 0,0),
			(".$i."+50, '16', ".$store['store_id'].", 0,0),
			(".$i."+51, 'Awaiting Products', ".$store['store_id'].", 0,0),
			(".$i."+52, 'Complete', ".$store['store_id'].", 0,0),
			(".$i."+53, 'Pending', ".$store['store_id'].", 0,0),
			(".$i."+54, 'login_with_otp', ".$store['store_id'].", 1,1),
			(".$i."+55, 'out_of_stock', ".$store['store_id'].", 0,0),
			(".$i."+56, 'product_subscription', ".$store['store_id'].", 1,0),
			(".$i."+57, 'back_in_stock', ".$store['store_id'].", 1,0),
			(".$i."+58, 'os_tracking_info', ".$store['store_id'].", 1,0),
			(".$i."+59, 'contact_form', ".$store['store_id'].", 1,0),
			(".$i."+60, 'contact_form', ".$store['store_id'].", 0,0),
			(".$i."+61, 'review_request', ".$store['store_id'].", 1,0),
			(".$i."+62, 'account_deny', ".$store['store_id'].", 1,0),
			(".$i."+63, 'account_deny', ".$store['store_id'].", 0,0);
		");
		$this->load->model('localisation/language');
		
		$languages = $this->model_localisation_language->getLanguages();
		foreach($languages as $language)
		{
			$lang_id = $language['language_id'];
		$this->db->query("INSERT IGNORE INTO `" . DB_PREFIX . "sms_template_message` (`sms_template_id`, `language_id`, `message`) VALUES
			(".$i."+1, ".$lang_id.", 'Welcome {firstname} and thank you for registering at {store_name}. Your account has now been created and you can log in by using your email address and password on our website at " . HTTPS_CATALOG . ".'),
			(".$i."+2, ".$lang_id.", 'Welcome {firstname} and thank you for joining {store_name}\'s Affiliate Program. We will inform you once your account has been approved.'),
			(".$i."+3, ".$lang_id.", 'Hi {firstname},\r\n\r\nYour order #{order_id} has been received and will be processed once payment has been confirmed.'),
			(".$i."+4, ".$lang_id.", 'Hi {firstname},\r\n\r\nA password reset was requested for your account on {store_name}. If you did not request for a new password, please inform us immediately and update your password.'),
			(".$i."+5, ".$lang_id.", 'Hi {firstname},\r\n\r\nYou have received {points} reward points! You may now spend it in our store. You currently have a total of {total_points} reward points.'),
			(".$i."+6, ".$lang_id.", 'Hi {firstname},\r\n\r\nYour account has now been approved and you can log in by using your email address and password on our website at " . HTTPS_CATALOG . ".'),
			(".$i."+7, ".$lang_id.", 'Hi {firstname},\r\n\r\nYou have received {credits} store credits! You may now spend it in our store. You currently have a total of {total_credits} store credits.'),
			(".$i."+8, ".$lang_id.", 'Hi {firstname},\r\n\r\nYour affiliate account has now been approved and you can log in by using your email address and password on our website at " . HTTPS_CATALOG . ".'),
			(".$i."+9, ".$lang_id.", 'Hi {firstname},\r\n\r\nYou have received {commission} commission! You have currently earned a total of {total_commission} commission.'),
			(".$i."+10, ".$lang_id.", 'Hi {firstname},\r\n\r\nWe are currently processing your order #{order_id} with {store_name}. Feel free drop us an email if you have any queries.'),
			(".$i."+11, ".$lang_id.", 'Hello {firstname}, your order #{order_id} with {store_name} has been shipped.Feel free drop us an email if you have any queries.'),
			(".$i."+12, ".$lang_id.", 'Hello {firstname}, your order #{order_id} with {store_name} has been dispatched and shall deliver to you shortly.'),
			(".$i."+13, ".$lang_id.", 'Hello {firstname}, your order #{order_id} with {store_name} has been cancelled due to some un-avoidable conditions. Sorry for the inconvenience caused.'),
			(".$i."+14, ".$lang_id.", 'Hello {firstname}, your order #{order_id} with {store_name} has been denied due to some un-avoidable conditions. Sorry for the inconvenience caused.'),
			(".$i."+15, ".$lang_id.", 'Hello {firstname}, your order #{order_id} with {store_name} has been Canceled Reversal due to some un-avoidable conditions. Sorry for the inconvenience caused.'),
			(".$i."+16, ".$lang_id.", 'Hello {firstname}, status of your order #{order_id} with {store_name} has been changed to failed.'),
			(".$i."+17, ".$lang_id.", 'Hello {firstname}, status of your order #{order_id} with {store_name} has been changed to refunded.'),
			(".$i."+18, ".$lang_id.", 'Hello {firstname}, status of your order #{order_id} with {store_name} has been changed to reversed.'),
			(".$i."+19, ".$lang_id.", 'Hello {firstname}, status of your order #{order_id} with {store_name} has been changed to chargeback.'),
			(".$i."+20, ".$lang_id.", 'Hello {firstname}, status of your order #{order_id} with {store_name} has been changed to expired.'),
			(".$i."+21, ".$lang_id.", 'Hello {firstname}, status of your order #{order_id} with {store_name} has been changed to processed.'),
			(".$i."+22, ".$lang_id.", 'Hello {firstname}, status of your order #{order_id} with {store_name} has been changed to voided.'),
			(".$i."+23, ".$lang_id.", 'Hello {firstname}, status of your return #{return_id} with {store_name} has been changed to Return Awaiting Products.'),
			(".$i."+24, ".$lang_id.", 'Hello {firstname}, status of your return #{return_id} with {store_name} has been changed to Return Complete.'),
			(".$i."+25, ".$lang_id.", 'Hello {firstname}, status of your return #{return_id} with {store_name} has been changed to Return Pending.'),
			(".$i."+26, ".$lang_id.", 'Your verification code for [url] is [otp]'),
			(".$i."+27, ".$lang_id.", 'Your verification code for [url] is [otp]'),
			(".$i."+28, ".$lang_id.", 'Your verification code for [url] is [otp]'),
		    (".$i."+29, ".$lang_id.", '{store_name}: New user signup.\r\n\r\nName: {firstname} {lastname}\r\n\r\nEmail:{email}\r\n\r\nPhone: {telephone}.'),
			(".$i."+30, ".$lang_id.", '{store_name}: New user has joined Affiliate Program.\r\n\r\nName: {firstname} {lastname}\r\n\r\nEmail:{email}\r\n\r\nPhone: {telephone}.'),
		    (".$i."+31, ".$lang_id.", '{store_name}: You have a new order #{order_id} for order value Rs. {order_amount}. Please check your admin dashboard for complete details.'),
			(".$i."+32, ".$lang_id.", '{store_name}: A password reset request was generated by {firstname}.'),
			(".$i."+33, ".$lang_id.", '{store_name}: {points} reward points added in {firstname} account. Total reward points are {total_points}.'),
			(".$i."+34, ".$lang_id.", '{store_name}: {firstname} account has approved.'),
			(".$i."+35, ".$lang_id.", '{store_name}: {credits} store credits added in {firstname} account! Total store credits are {total_credits}.'),
			(".$i."+36, ".$lang_id.", '{store_name}: {firstname} affliate account has approved.'),
			(".$i."+37, ".$lang_id.", '{store_name}: {commission} commission added in {firstname} affliate account! Total commission is {total_commission}.'),
		    (".$i."+38, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is processing.'),
			(".$i."+39, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is shipped.'),
			(".$i."+40, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is dispatched.'),
			(".$i."+41, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is Cancelled.'),
			(".$i."+42, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is denied.'),
			(".$i."+43, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is Canceled Reversal.'),
			(".$i."+44, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is Failed.'),
			(".$i."+45, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is Refunded.'),
			(".$i."+46, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is Reversed.'),
			(".$i."+47, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is Chargeback.'),
			(".$i."+48, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is Expired.'),
			(".$i."+49, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is Processed.'),
			(".$i."+50, ".$lang_id.", '{store_name}: Your order #{order_id} Rs. {order_amount}. is Voided.'),
			(".$i."+51, ".$lang_id.", '{store_name}: Your return #{return_id} is Return Awaiting Products.'),
			(".$i."+52, ".$lang_id.", '{store_name}: Your return #{return_id} is Return Complete.'),
			(".$i."+53, ".$lang_id.", '{store_name}: Your return #{return_id} is Return Pending.'),
			(".$i."+54, ".$lang_id.", 'Your verification code for [url] is [otp]'),
			(".$i."+55, ".$lang_id.", '{store_name}: Out Of Stock Alert For Product {item_name}, current stock {item_qty}.'),
			(".$i."+56, ".$lang_id.", 'We have noted your request and we will notify you as soon as {item_name} is available for order with us.'),
		    (".$i."+57, ".$lang_id.", 'Hello, {item_name} is now available, you can order it on {item_url}.'),
			(".$i."+58, ".$lang_id.", 'Hello, we are providing the tracking details for your order {order_id} and product {products}. Tracking Provider : {ost_provider_name}, Tracking Number : {ost_tracking_number}, Tracking Link : {ost_tracking_link}, Expected Delivery : {ost_expct_dlvry_date}.'),
			(".$i."+59, ".$lang_id.", 'Hello {name}, thank you for submitting the query form. We will contact you shortly.'),
			(".$i."+60, ".$lang_id.", '{store_name}: New enquiry.\nName : {name}\nEmail : {email}\nPhone : {phone}\nMessage : {enquiry}.'),
		    (".$i."+61, ".$lang_id.", 'Hi {firstname}, thank you for your recent order on {store_name}. Can you take 1 minute to leave a review about your experience with us? https://www.google.com/search?q={store_url}.'),
			(".$i."+62, ".$lang_id.", 'Hi {firstname},\r\n\r\nYour account has deny.'),
			(".$i."+63, ".$lang_id.", '{store_name}: {firstname} account has deny.');");
		}
			$i = $i+63;
		}
		$this->model_setting_event->addEvent('module_smsalert', 'admin/controller/extension/hbapps/order_shipment/savecourier/after', 'extension/module/smsalert/eventPostControllerOstracking');
		$this->model_setting_event->addEvent('module_smsalert', 'catalog/controller/checkout/payment_method/after', 'extension/module/smsalert/eventPostControllerCheckoutPaymentMethod');
		$this->model_setting_event->addEvent('module_smsalert', 'catalog/controller/checkout/register/before', 'extension/module/smsalert/eventPreControllerCheckoutRegister');
		
		$this->model_setting_event->addEvent('module_smsalert', 'catalog/controller/account/logout/after', 'extension/module/smsalert/eventPostControllerAccountLogout');
		
		$this->model_setting_event->addEvent('module_smsalert', 'catalog/model/account/customer/addCustomer/after', 'extension/module/smsalert/eventPostModelAccountCustomerAdd');
		
		$this->model_setting_event->addEvent('module_smsalert', 'catalog/model/account/customer/addAffiliate/after', 'extension/module/smsalert/eventPostModelAccountCustomerAddAffiliate');
		$this->model_setting_event->addEvent('module_smsalert', 'catalog/model/account/customer/addTransaction/after', 'extension/module/smsalert/eventPostModelAccountCustomerAddTransaction');
		$this->model_setting_event->addEvent('module_smsalert', 'catalog/model/account/customer/editCode/after', 'extension/module/smsalert/eventPostModelAccountCustomerEditCode');
		
		$this->model_setting_event->addEvent('module_smsalert', 'admin/model/sale/return/addReturnHistory/after', 'extension/module/smsalert/eventPostModeladdReturnHistory');
		
		$this->model_setting_event->addEvent('module_smsalert', 'catalog/model/checkout/order/addOrderHistory/before', 'extension/module/smsalert/eventPreModelCheckoutOrderAddOrderHistory');
		
		$this->model_setting_event->addEvent('module_smsalert', 'admin/model/customer/customer/addReward/after', 'extension/module/smsalert/eventPostModelCustomerCustomerAddReward');
		$this->model_setting_event->addEvent('module_smsalert', 'admin/model/customer/customer/addTransaction/after', 'extension/module/smsalert/eventPostModelCustomerCustomerAddTransaction');
		$this->model_setting_event->addEvent('module_smsalert', 'admin/model/customer/customer_approval/approveCustomer/after', 'extension/module/smsalert/eventPostModelCustomerCustomerApprovalApproveCustomer');
		$this->model_setting_event->addEvent('module_smsalert', 'admin/model/customer/customer_approval/denyCustomer/after', 'extension/module/smsalert/eventPostModelCustomerCustomerApprovalDenyCustomer');
		$this->model_setting_event->addEvent('module_smsalert', 'admin/model/customer/customer_approval/approveAffiliate/after', 'extension/module/smsalert/eventPostModelCustomerCustomerApprovalApproveAffiliate');
	}
	
	public function uninstall() {
		if (!$this->user->hasPermission('modify', 'extension/extension/module')) {
			return;
		}
		
		//$this->db->query("DROP TABLE IF EXISTS " . DB_PREFIX . "sms_template");
		//$this->db->query("DROP TABLE IF EXISTS " . DB_PREFIX . "sms_template_message");
		//$this->db->query("DROP TABLE IF EXISTS " . DB_PREFIX . "smsalert_notify");
		
		$this->load->model('setting/event');
		
		$this->model_setting_event->deleteEventByCode('module_smsalert');
	}
	public function eventPostControllerOstracking($route, $args) {
		$this->load->model('extension/module/smsalert');
		$this->load->model('sale/order');
		$order_id			= $this->request->get['order_id'];
		$store_id			= $this->request->get['store_id'];
		$courier_id		 	= isset($this->request->post['id'])?$this->request->post['id']:$this->request->post['courier_select'];
		$tracking_code 		= isset($this->request->post['tracking_id'])?$this->request->post['tracking_id']:$this->request->post['courier_tracking_id'];
		$product_array 		= isset($this->request->post['product_array'])?$this->request->post['product_array']:$this->request->post['courier_select_product'];
		$delivery_date 		= $this->request->post['delivery_date'];
		
		
		$order_info = $this->model_sale_order->getOrder($order_id);
		if ($order_info) {
			$templates = $this->getSMSTemplates('os_tracking_info', $order_info['store_id'],1);
			$template_data = false;
				
			$template_data = false;
			foreach ($templates as $template) {
					$template_data = $template;
			}
				
			if ($template_data && !empty($template_data) && $template_data['status']=='1') {
			// Order confirmation
			if ($order_info['order_status_id']) {
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
			$plain_product_table = '';
					
			if ($product_array) {
			   foreach ($product_array as $order_product_id) {
				$order_product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_product_id = '" . (int)$order_product_id . "'");

				$product = $order_product_query->rows[0];
				if($product)
				{
					$plain_product_table .= $product['quantity'] . 'x ' . $product['name'];
					
					$order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$product['order_product_id'] . "'");

					foreach ($order_option_query->rows as $option) {
						$plain_product_table .= '- ' . $option['name'] . ': ' . $option['value'] . "\n";
					}
				}
			   }
			}
			
				$order_shipment_data = $this->db->query("SELECT * FROM " . DB_PREFIX . "hb_shipping_company where id = '".(int)$courier_id."'");
				$order_shipment = $order_shipment_data->rows[0];
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
					'',
					$payment_address,
					$shipping_address,
					$plain_product_table,
					$this->config->get('config_name'),
					$this->currency->format($order_info['total'], $this->config->get('config_currency')),
					$order_shipment['name'],
					$tracking_code,
					str_replace('{tracking_id}',$tracking_code,$order_shipment['link']),
					($delivery_date == NULL or $delivery_date == '0000-00-00') ? '' : date('d-m-Y',strtotime($delivery_date)),
				);
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
				'{ost_provider_name}',
				'{ost_tracking_number}',
				'{ost_tracking_link}',
				'{ost_expct_dlvry_date}',
			);
			    $message = strip_tags(str_replace($search, $replace, html_entity_decode($template_data['message'])));
				$this->model_extension_module_smsalert->sendMessage($order_info['telephone'], $message);
			}
		}
	}
	}
	public function eventPostModeladdReturnHistory($route, $args) {
		$this->load->model('sale/return');
		if (isset($args[0])) {
			$return_id = $args[0];
		} else {
			$return_id = 0;
		}

		if (isset($args[1])) {
			$return_status_id = $args[1];
		} else {
			$return_status_id = 0;
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
						
		$order_info = $this->model_sale_return->getReturn($return_id);
		if ($order_info) {
			// Order confirmation
			if ($order_info['return_id'] && $return_status_id) {
				$this->load->model('extension/module/smsalert');
								
				$replace = array(
					$order_info['firstname'],
					$order_info['lastname'],
					$order_info['email'],
					$order_info['telephone'],
					$order_info['order_id'],
					$order_info['product'],
					date($this->language->get('date_format_short'), strtotime($order_info['date_added'])),
					$notify ? $comment : '',
					$this->config->get('config_name'),
					$order_info['return_id']
				);
				$this->model_extension_module_smsalert->parseSMS($order_info['return_status'], '0', $order_info['telephone'], $replace);
			}
		}
	}
	public function eventPostModelCustomerCustomerAddReward($route, $args, $output) {
		$this->load->model('customer/customer');
		$this->load->model('extension/module/smsalert');
		
		$customer_id = isset($args[0]) ? $args[0] : 0;
		$description = isset($args[1]) ? $args[1] : '';
		$points = isset($args[2]) ? $args[2] : 0;
		$order_id = isset($args[3]) ? $args[3] : 0;
		
		$customer_info = $this->model_customer_customer->getCustomer($customer_id);
		
		$replace = array(
			$customer_info['firstname'],
			$customer_info['lastname'],
			$customer_info['email'],
			$points,
			$this->config->get('config_name'),
			$this->model_customer_customer->getRewardTotal($customer_id)
		);
		
		if ($order_id) {
			$this->load->model('sale/order');
			
			$order_info = $this->model_sale_order->getOrder($order_id);
		
			$store_id = $order_info['store_id'];
		} else {
			$store_id = $customer_info['store_id'];
		}
		
		$this->model_extension_module_smsalert->parseSMS('reward', $store_id, $customer_info['telephone'], $replace);
	}
	
	public function eventPostModelCustomerCustomerAddTransaction($route, $args, $output) {
		$this->load->model('customer/customer');
		$this->load->model('extension/module/smsalert');
		
		$customer_id = isset($args[0]) ? $args[0] : 0;
		$description = isset($args[1]) ? $args[1] : '';
		$amount = isset($args[2]) ? $args[2] : 0;
		$order_id = isset($args[3]) ? $args[3] : 0;
		
		$customer_info = $this->model_customer_customer->getCustomer($customer_id);
				
		$replace = array(
			$customer_info['firstname'],
			$customer_info['lastname'],
			$customer_info['email'],
			$this->currency->format($amount, $this->config->get('config_currency')),
			$this->config->get('config_name'),
			$this->currency->format($this->model_customer_customer->getTransactionTotal($customer_id), $this->config->get('config_currency'))
		);
		
		if ($order_id) {
			$this->load->model('sale/order');
			
			$order_info = $this->model_sale_order->getOrder($order_id);
		
			$store_id = $order_info['store_id'];
		} else {
			$store_id = $customer_info['store_id'];
		}
		
		$this->model_extension_module_smsalert->parseSMS('account_transaction', $store_id, $customer_info['telephone'], $replace);
	}
	
	public function eventPostModelCustomerCustomerApprovalApproveCustomer($route, $args, $output) {
		$this->load->model('customer/customer');
		$this->load->model('extension/module/smsalert');
		$customer_info = $this->model_customer_customer->getCustomer($args[0]);
				
		$replace = array(
			$customer_info['firstname'],
			$customer_info['lastname'],
			$this->config->get('config_name'),
			$customer_info['email']
		);
		
		$this->model_extension_module_smsalert->parseSMS('account_approve', $customer_info['store_id'], $customer_info['telephone'], $replace);
	}
	
	public function eventPostModelCustomerCustomerApprovalDenyCustomer($route, $args, $output) {
		$this->load->model('customer/customer');
		$this->load->model('extension/module/smsalert');
		$customer_info = $this->model_customer_customer->getCustomer($args[0]);
				
		$replace = array(
			$customer_info['firstname'],
			$customer_info['lastname'],
			$this->config->get('config_name'),
			$customer_info['email']
		);
		$this->model_extension_module_smsalert->parseSMS('account_deny', $customer_info['store_id'], $customer_info['telephone'], $replace);
	}
	
	public function eventPostModelCustomerCustomerApprovalApproveAffiliate($route, $args, $output) {
		$this->load->model('customer/customer');
		$this->load->model('extension/module/smsalert');
		
		$customer_info = $this->model_customer_customer->getCustomer($args[0]);
		
		$replace = array(
			$customer_info['firstname'],
			$customer_info['lastname'],
			$this->config->get('config_name'),
			$customer_info['email']
		);
		
		$this->model_extension_module_smsalert->parseSMS('affiliate_approve', $this->config->get('config_store_id'), $customer_info['telephone'], $replace);
	}
	
	
	public function getPaymentMethods($type) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "extension WHERE `type` = '" . $this->db->escape($type) . "'");

		return $query->rows;
	}
	public function sender_list()
    {
		$this->load->model('extension/module/smsalert');
		echo $this->model_extension_module_smsalert->verifyuser($_POST['user'],$_POST['pwd']);
    }
	public function sendCustomSms()
    {
		$this->load->model('extension/module/smsalert');
		$this->load->model('sale/order');
		$order_id = $_POST['order_id'];
		$order_info = $this->model_sale_order->getOrder($order_id);
		if ($order_info) {
			// Order confirmation
			if ($order_info['order_status_id']) {
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
					$plain_product_table .= $product['quantity'] . 'x ' . $product['name'];
					
					$order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$product['order_product_id'] . "'");

					foreach ($order_option_query->rows as $option) {
						$plain_product_table .= '- ' . $option['name'] . ': ' . $option['value'] . "\n";
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
					'',
					$payment_address,
					$shipping_address,
					$plain_product_table,
					$this->config->get('config_name'),
					$this->currency->format($order_info['total'], $this->config->get('config_currency')),
				);
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
			    $message = strip_tags(str_replace($search, $replace, html_entity_decode($_POST['message'])));
				echo json_encode($this->model_extension_module_smsalert->sendMessage($order_info['telephone'], $message));
			}
		}
    }
	public function sendTrackingSms()
    {
		$this->load->model('extension/module/smsalert');
		$this->load->model('sale/order');
		$order_id = $_POST['order_id'];
		$product_id = $_POST['product_id'];
		$order_info = $this->model_sale_order->getOrder($order_id);
		if ($order_info) {
			$templates = $this->getSMSTemplates('os_tracking_info', $order_info['store_id'],1);
			$template_data = false;
				
			$template_data = false;
			foreach ($templates as $template) {
					$template_data = $template;
			}
				
			if ($template_data && !empty($template_data)) {
			// Order confirmation
			if ($order_info['order_status_id']) {
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
				
				$order_product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_product_id = '" . (int)$product_id . "'");

				$plain_product_table = '';
				$product = $order_product_query->rows[0];
				if($product)
				{
					$plain_product_table .= $product['quantity'] . 'x ' . $product['name'];
					
					$order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$product['order_product_id'] . "'");

					foreach ($order_option_query->rows as $option) {
						$plain_product_table .= '- ' . $option['name'] . ': ' . $option['value'] . "\n";
					}
				}
				$order_shipment_data = $this->db->query("SELECT *, a.id as shipment_id, c.name as pname, b.name as cname FROM " . DB_PREFIX . "hb_shipment_order_info a , `" . DB_PREFIX . "hb_shipping_company` b, " . DB_PREFIX . "order_product c where a.courier_id = b.id and a.order_product_id = c.order_product_id and a.order_id = c.order_id and a.order_id = '".(int)$order_id."' and a.order_product_id = '".(int)$product_id."'");
				$order_shipment = $order_shipment_data->rows[0];
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
					'',
					$payment_address,
					$shipping_address,
					$plain_product_table,
					$this->config->get('config_name'),
					$this->currency->format($order_info['total'], $this->config->get('config_currency')),
					$order_shipment['cname'],
					$order_shipment['code'],
					str_replace('{tracking_id}',$order_shipment['code'],$order_shipment['link']),
					($order_shipment['delivery_date'] == NULL or $order_shipment['delivery_date'] == '0000-00-00') ? '' : date('d-m-Y',strtotime($order_shipment['delivery_date'])),
				);
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
				'{ost_provider_name}',
				'{ost_tracking_number}',
				'{ost_tracking_link}',
				'{ost_expct_dlvry_date}',
			);
			    $message = strip_tags(str_replace($search, $replace, html_entity_decode($template_data['message'])));
				echo json_encode($this->model_extension_module_smsalert->sendMessage($order_info['telephone'], $message));
			}
		}
	  }
    }
	private function getSMSTemplates($type, $store_id, $customer_notify=1) { 
	   $this->load->model('localisation/language');
		
	   $language = $this->model_localisation_language->getLanguageByCode($this->config->get('config_admin_language'));
	   $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sms_template st LEFT JOIN " . DB_PREFIX . "sms_template_message stm ON st.sms_template_id = stm.sms_template_id WHERE type = '" . $this->db->escape($type) . "' AND store_id = '" . (int)$store_id . "' AND language_id = '" . $language['language_id'] . "' AND customer_notify = '" . $customer_notify . "'");
		
		return $query->rows;
	}
}