<?php

namespace Convertonet\ViewModels{
    class Categories extends SimpleViewModel{
        private $active_dir;
        
        public function getCategories(){
            return $this->getModel('category')->all();
        }
        
        public function getGamesByCategory($cat_name){
            return $this->getModel('game')->getByCategory($cat_name);
        }
        public function setActiveCategory($cat_name){
            $this->active_dir = $cat_name;
        }
        public function getActiveCategory(){
            return $this->active_dir;
        }
        private function constrParamsCheck($options){
       
            parent::constrParamsCheck($options);
            
            $models_map = $options['models_map'] ?: array();
            if(!isset($models_map['category']) || !isset($models_map['game'])){
                echo "Error. Convertonet\ViewModels\Categories requires 2 models, mapped"
                . " under keys 'product' and 'category' respectively";
            }
        }
    }
}