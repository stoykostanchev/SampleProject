<?php

namespace Convertonet\ViewModels{
    abstract class SimpleViewModel extends ViewModel{
        public $model;
        
        public function __construct(\Convertonet\Models\AbstractModel $model){
            $this->model = $model;
        }
        
        public function display(){
            return $this->view->display();
        }
    }
}