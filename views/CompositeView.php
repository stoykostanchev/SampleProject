<?php

namespace Convertonet\Views{
    abstract class CompositeView extends View{             
        public $child_views = array();
        public $view_model;
        public $views = array();
        
        public function __construct(\Convertonet\ViewModels\CompositeViewModel $view_model){
            $this->view_model = $view_model;
                        
            for($i = 0, $len = count($this->child_views); $i < $len; $i++){                
                $child_view = $this->child_views[$i];
                $full_view = '\\Convertonet\\Views\\'. $child_view;              
                $v = new $full_view($view_model->getViewModel($child_view));                
                $this->views[] = $v;
            }
        }

        public function display(){
            $content = '';

            for($i = 0, $len = count($this->views); $i< $len ; $i++){
                $content .= $this->views[$i]->display();
            }
            return self::wrap($content);
        }
    }
}