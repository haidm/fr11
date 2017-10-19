<?php
    class Luannt3_Assignment_Model_Resource_Student extends Mage_Core_Model_Resource_Db_Abstract{
        protected function _construct()
        {
            $this->_init('luannt3_assignment6/student','student_id');
        }
    }
?>