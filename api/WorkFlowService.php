<?php
    class WorkFlowService {
       
        private $_formulaProvider;

        public $ActiveAssociateFlows;
        public $AssociateDomains;
        public $CurrentDomain;
        public $CurrentFlow;
        public $CurrentFlowGroup;
        public $CurrentStep;
        public $FormulaProvider;
        public $Identity;
        public $Observer;

       
     public function CreateDomain($data)
     {
            $db         = nDB();
            $aError     = array();
        
     }
     var $CreateFlow;
     function getCreateFlow()
     { return $CreateFlow; }
     function setCreateFlow($a)
     { $CreateFlow=$a; }

     public function CreateFlowGroup($data)
     {
    
     }
     public function CreateStep($data)
     {
    
     }
     public function GetAllAssociateFlows($data)
     {
     }
     public function InitailizeWorkResource($data)
     {
     }
     public function  Refresh() 
     {
     }
     
     public function WorkFlowService($data)
     {
     }
   }
?>
