<?php

class Tungtt_SinhVien_IndexController extends Mage_Core_Controller_Front_Action
{
	/**
	 * index action: http://mageosc.local/student
	 */
	public function indexAction()
	{
		$list_student = Mage::getModel('sinhvien/student')->getCollection()->toArray();
		$this->loadLayout('tungtt_listsinhvien_handle');
		$this->getLayout()->getBlock('mainlist')->setData($list_student);
		$this->renderLayout();
	}
	
	/**
	 *
	 */
	
	public function insertAction()
	{
		$this->loadLayout('tungtt_addsinhvien_handle');
		$this->getLayout()->getBlock('mainadd');
		$this->renderLayout();
	}
	
	/**
	 *
	 */
	public function postInsertAction()
	{
		$data = $this->validate();
		if (is_array($data)) {
			$add = Mage::getModel('sinhvien/student')->setData($data);
			$add->save();
			$this->_redirect('sinhvien/index/index');
		} else {
			$this->loadLayout('tungtt_addsinhvien_handle');
			$this->getLayout()->getBlock('mainadd')->setData('error', $data);
			$this->renderLayout();
		}
	}
	
	public function updateAction()
	{
		$id = $this->getRequest()->getParam('id');
		$edit = Mage::getModel('sinhvien/student');
		$edit->load($id);
		$this->loadLayout('tungtt_editsinhvien_handle');
		$this->getLayout()->getBlock('mainedit')->setData($edit);
		$this->renderLayout();
	}
	
	public function deleteAction()
	{
		$id = Mage::app()->getRequest()->getParam('id');
		$del = Mage::getModel('sinhvien/student');
		$del->load($id);
		$del->delete();
		$this->_redirect('sinhvien/index/index');
	}
	
	public function validate()
	{
		$id = Mage::app()->getRequest()->getParam('id');
		if ($id) {
			$data['id'] = $id;
		}
		
		$data['name'] = $this->getRequest()->getPost('name');
		$data['lop'] = $this->getRequest()->getPost('lop');
		$data['birth'] = $this->getRequest()->getPost('birth');
		
		if (empty($data['name']) || empty($data['lop']) || empty($data['birth'])) {
			return 'Vui lòng nhập đầy đủ thông tin *!';
		}
		if (strlen($data['name']) < 2) {
			return "Tên phải từ 2 ký tự trở lên!";
		}
		if (strlen($data['lop']) < 2) {
			return "Lớp phải từ 2 ký tự trở lên!";
		}
		if (!preg_match('/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/', $data['birth'])) {
			return 'Ngày sinh có dạng yyyy-mm-đd';
		}
		return $data;
	}
}