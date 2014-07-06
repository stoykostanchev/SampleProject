<?php

namespace Convertonet\ViewModels{
    class Categories extends SimpleViewModel{
        public function getCategories(){
            return $this->getModel('category')->all();
        }
        
        public function getAllGames(){
           return $this->getModel('game')->all();
        }
        private function constrParamsCheck($options){
       
            parent::constrParamsCheck($options);
            
            $models_map = $options['models_map'] ?: array();
            if(!isset($models_map['category']) || !isset($models_map['product'])){
                echo "Error. Convertonet\ViewModels\Categories requires 2 models, mapped"
                . " under keys 'product' and 'category' respectively";
            }
        }
    }
}