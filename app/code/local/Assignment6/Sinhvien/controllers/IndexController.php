<?php
/**
 * Created by PhpStorm.
 * User: baohan-baotran
 * Date: 10/16/2017
 * Time: 3:18 PM
 */

class Assignment6_Sinhvien_IndexController extends Mage_Core_Controller_Front_Action
{


    public function indexAction(){
        $this->loadLayout('sinhvienhandler');
        $this->renderLayout();

       }
       public function add(Request $request){

           $sv= Mage::getModel('sv/sinhvien');
           $sv->getData();
           var_dump($request);
       }
       public function edit(Request $request){
           $sv= Mage::getModel('sv/sinhvien')->getId($request->getParam('id'));
           $sv->setName($request->getParam('name'));
           $sv->setEmail($request->getParam('email'));
           $sv->save();
           $this->getlist();
       }
       public function delete(Request $request){
           Mage::getModel('sv/sinhvien')->setId($request->getParam('id'))->delete();
           $this->getlist();
       }
       public function getlist(){
           $this->loadLayout('listlayout');
           $this->renderLayout();


       }
}
