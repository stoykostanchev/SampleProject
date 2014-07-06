<?php

namespace Convertonet\ViewModels\Categories{
    class Menu extends \Convertonet\ViewModels\SimpleViewModel{
        public function __construct(\Convertonet\Models\Game\Category $model){

            parent::__construct($model);
        }
        public function getCategories(){
           return $this->model->all();
        }
    }
}
