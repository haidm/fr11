<?php
    class Luannt3_Assignment6_Model_Resource_Student_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract{
        public function _construct()
        {
            $this->_init('luannt3_assignment6/student');
        }
    }