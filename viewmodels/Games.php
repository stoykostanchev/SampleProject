<?php

namespace Convertonet\ViewModels{
    class Games extends SimpleViewModel{
         public function __construct(\Convertonet\Models\Game $model){
            parent::__construct($model);
        }
        public function getAllGames(){
           return $this->model->all();
        }
    }
}