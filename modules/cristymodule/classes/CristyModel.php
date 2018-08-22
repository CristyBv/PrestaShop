<?php

    class CristyModel extends ObjectModel 
    {
        public $id_cristy;
        public $body;
        public $date_add;

        public static $definition = array(
            'table' => 'cristy_module',
            'primary' => 'id_cristy',
            'multilang' => false,
            'fields' => array(
              'body' => array('type' => self::TYPE_STRING),
              'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            ),
        );
    }

?>