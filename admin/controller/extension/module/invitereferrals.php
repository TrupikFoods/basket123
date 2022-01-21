<?php
#################################################################
## Open Cart Module: invitereferrals - Referral Marketing Software	   ##
##-------------------------------------------------------------##
## Copyright © 2019 "Invitereferrals" All rights reserved.     ##
## http://www.invitereferrals.com						       ##
##-------------------------------------------------------------##
## Permission is hereby granted, when purchased, to  use this  ##
## mod on one domain. This mod may not be reproduced, copied,  ##
## redistributed, published and/or sold.				       ##
##-------------------------------------------------------------##
## Violation of these rules will cause loss of future mod      ##
## updates and account deletion				      			   ##
#################################################################
class ControllerExtensionModuleinvitereferrals extends Controller {
    private $error = array();
    
    const DEFAULT_MODULE_SETTINGS = [
		'brandID' => 0,
		'secretKey' => '',
		'encryptedKey' => '',
		'status' => 1 /* Enabled by default*/
    ];
    
    public function index() {
        if (!isset($this->request->get['module_id'])) {
			$module_id = $this->addModule();
			$this->response->redirect($this->url->link('extension/module/invitereferrals','&user_token='.$this->session->data['user_token'].'&module_id='.$module_id));
		} else {
		   $this->editModule($this->request->get['module_id']);
		}
    }
    
    private function addModule() {
		$this->load->model('setting/module');
	
		$this->model_setting_module->addModule('invitereferrals', self::DEFAULT_MODULE_SETTINGS);
		
		return $this->db->getLastId();
	}
	protected function editModule($module_id) {
		$this->load->model('setting/module');
		$data = array(); 
		$this->load->language('extension/module/invitereferrals');
			if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate()) {
				$this->request->post['name'] = 'Invite Referrals';
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
				
				$this->session->data['success'] = $this->language->get('text_success');
							
				$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/invitereferrals', 'user_token=' . $this->session->data['user_token'], true)
        );
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->load->model('setting/module');
        $module_setting = $this->model_setting_module->getModule($module_id);
        $data['brandID'] = $module_setting['brandID'];
        $data['secretKey'] = $module_setting['secretKey'];
        $data['encryptedKey'] = $module_setting['encryptedKey'];
        $data['status'] = $module_setting['status'];

        $this->load->language('extension/module/invitereferrals');
        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->request->post['brandID'])) {
			$data['brandID'] = $this->request->post['brandID'];
		} else {
			$data['brandID'] = $module_setting['brandID'];
        }
        if (isset($this->request->post['secretKey'])) {
			$data['secretKey'] = $this->request->post['secretKey'];
		} else {
			$data['secretKey'] = $module_setting['secretKey'];
		}
		if (isset($this->request->post['encryptedKey'])) {
			$data['encryptedKey'] = $this->request->post['encryptedKey'];
		} else {
			$data['encryptedKey'] = $module_setting['encryptedKey'];
		}
        
		$data['action']['cancel'] = $this->url->link('marketplace/extension', 'user_token='.$this->session->data['user_token'].'&type=module');
		$data['action']['save'] = "";
		$data['error'] = $this->error;	
        
		$htmlOutput = $this->load->view('extension/module/invitereferrals', $data);
		$this->response->setOutput($htmlOutput);
	}
	public function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/invitereferrals')) {
			$this->error['permission'] = true;
			return false;
        }
        
        if (!utf8_strlen($this->request->post['brandID'])) {
			$this->error['brandID'] = true;
		}
		
		if (!utf8_strlen($this->request->post['secretKey'])) {
			$this->error['secretKey'] = true;
		}

		if (!utf8_strlen($this->request->post['encryptedKey'])) {
			$this->error['encryptedKey'] = true;
		}
		
		return empty($this->error);
    }
    
 
    public function install() {
		$this->load->model('setting/setting');

		$this->model_setting_setting->editSetting('module_invitereferrals', ['module_invitereferrals_status'=>1]);
    }
 
    public function uninstall() {
		$this->load->model('setting/setting');
		$this->model_setting_setting->deleteSetting('module_invitereferrals');
    }
}