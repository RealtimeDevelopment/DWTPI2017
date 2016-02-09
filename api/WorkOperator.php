<?php
    class WorkOperator{
        //Fields
        private $_fields;
        private $_operatorDomainID;
        private $_operatorFlowGroupID;
        private $_operatorFlowID;
        private $_privilege;
        private $arrayLock;
        private $iden;
        private $lockFields;

        //Properties
        var $Domain;
        function getDomain(){ 
            return $Domain; 
        }
        function setDomain($dataDomain){
            $Domain=$dataDomain;
        }

        var $Email;
        function getEmail(){
            return $Email;
        }
        function setEmail($dataEmail){
            $Email=$dataEmail;
        }

        var $Identity;
        function getIdentity(){
            return $Identity;
        }
        function setIdentity($dataIdentity){
            $Identity=$dataIdentity;
        }

        var $IsReadOnly;
        function getIsReadOnly(){
            return $IsReadOnly;
        }
        function setIsReadOnly($dataIsReadOnly){
            $IsReadOnly=$dataIsReadOnly;
        }

    } 
?>
