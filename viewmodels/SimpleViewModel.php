<?php

namespace Convertonet\ViewModels{
    abstract class SimpleViewModel extends ViewModel{
        public $models_map;
        
        public function __construct($options = array()){
        
            $this->constrParamsCheck($options);            
            $this->models_map = $options['models_map'];
        }
                
        public function getModel($key){
            return isset($this->models_map[$key]) ? $this->models_map[$key] : NULL;
        }
        
        private function constrParamsCheck($options){
            if(!isset($options['models_map'])){
                 echo "Error. Convertonet\ViewModels\View model implementations "
                    . "require a model map under the 'models_map' key in "
                    . "the options for their constructor";                         
            }
        }
    }
}