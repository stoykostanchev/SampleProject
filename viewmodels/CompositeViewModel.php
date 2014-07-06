<?php
namespace Convertonet\ViewModels{
    abstract class CompositeViewModel extends ViewModel{                
        //instead of strings in the extending classes, having interfaces would be better
//        public $included_view_models = array();        
        private $view_models = array();        
        public $view_to_vm_map;
        public $models;
    
        public function __construct($models = array(), $model_views = array(), $view_to_vm_map = array()){
            foreach($models as $model){
                if(!is_a($model, '\Convertonet\Models\AbstractModel')){
                    var_dump($model);
                    echo " is not a "."\Convertonet\Models\AbstractModel";
                }
            }            
//            for($i = 0, $len = count($this->included_view_models); $i < $len; $i++){
//                $full_vm_name = "\\Convertonet\\ViewModels\\".$this->included_view_models[$i];
//                $vm = new $full_vm_name($models[$i]);                            
//                $this->view_models[] = $vm;                
//            }
            $this->models = $models;
            $this->view_to_vm_map = $view_to_vm_map;
        }
        
        public function getViewModel($view_name){
            return $this->view_to_vm_map[$view_name];
        }        
    }
}