<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 20/10/2017
 * Time: 16:16
 */
class Hungbd_Megamenu_Model_Resource_Menuitem extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('mymodel/menuitem', 'id');
    }
}
?>