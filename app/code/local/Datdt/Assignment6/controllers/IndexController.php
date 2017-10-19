<?php

class Datdt_Assignment6_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $list = Mage::getModel('demoasm6/student')->getCollection()->toArray();

        $this->loadLayout('demoasm6_layout_index');

        $this->getLayout()->getBlock('show')->setData('list', $list);

        $this->renderLayout();
    }

    public function addAction()
    {
        $data = '';
        $check = $this->getRequest()->getPost('require');
        if($check && $check == 'add')
        {
            if(is_array($data))
            {
                $std = Mage::getModel('demoasm6/student')->setData($data);

                $std->save();

                $this->_redirect('demoasm6');
            }
        }

        $this->loadLayout('demoasm6_layout_add');

        $this->getLayout()->getBlock('add')->setData('err', $data);

        $this->renderLayout();


    }

    public function updateAction()
    {
        $data = '';
        $id = $this->getRequest()->getParam('id');
        $std = Mage::getModel('demoasm6/student');
        $std->load($id);

        $check = $this->getRequest()->getPost('require');
        if($check && $check == 'update')
        {
            if(is_array($data))
            {
                $std->setName($data['name']);
                $std->setPhone($data['phone']);
                $std->setEmail($data['email']);
                $std->setAddress($data['address']);

                $std->save();
                $this->_redirect('demoasm6');
            }
        }
        $std = $std->toArray();

        $this->loadLayout('demoasm6_layout_update');

        $this->getLayout()->getBlock('update')->setData('std', $std)->setData('err', $data);

        $this->renderLayout();
    }

    public function deleteAction()
    {
        $id = Mage::app()->getRequest()->getParam('id');
        $std = Mage::getModel('demoasm6/student');
        $std->load($id);
        $std->delete();
        $this->_redirect('demoasm6');
    }

}