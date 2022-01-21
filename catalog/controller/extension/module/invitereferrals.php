<?php
class ControllerExtensionModuleinvitereferrals extends Controller {

	public function index($setting = null) {
		$this->load->language('extension/module/invitereferrals');
		$this->load->model('checkout/order');

		$data['brandID'] = !empty($setting['brandID']) ? $setting['brandID'] : '';
		$data['encryptedKey'] = !empty($setting['encryptedKey']) ? $setting['encryptedKey'] : '';
		$data['secretKey'] = !empty($setting['secretKey']) ? $setting['secretKey'] : '';

		$data['name'] = !empty($this->customer->getFirstName())?$this->customer->getFirstName():''.' '.!empty($this->customer->getLastName())?$this->customer->getLastName():'';
		$data['email'] = !empty($this->customer->getEmail())?$this->customer->getEmail():'';
		$data['mobile'] = !empty($this->customer->getTelephone())?$this->customer->getTelephone():'';
		$data['rt'] = time();
		
		$data['order_id'] = '';
		if(!empty($this->session->data['order_id'])){
			$order = $this->model_checkout_order->getOrder($this->session->data['order_id']);
			if (is_array($order) && !empty($order['order_id'])) {
				$data['order_id'] = $order['order_id'];
				if(!empty($order['total'])){
					$data['total'] = $order['total'];
				}
				if(!empty($order['email'])){
					$data['email'] = $order['email'];
				}
				if(!empty($order['telephone'])){
					$data['mobile'] = $order['telephone'];
				}
				if(!empty($order['payment_firstname'])){
					$data['name'] = $order['payment_firstname'].' '.!empty($order['payment_lastname'])?$order['payment_lastname']:'';
				}
			}
		}

		$data['sso_key'] = (!empty($data['secretKey']) && !empty($data['email']))?md5($data['secretKey'].'||'.$data['email'].'||'.$data['rt']):'';
		$data['current_page'] = !empty($this->request->get['route'])?$this->request->get['route']:'';

		if(!empty($data['brandID'])){
			return $this->load->view('extension/module/invitereferrals', $data);
		}
				
	}
}
?>