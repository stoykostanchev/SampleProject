<?php

namespace Convertonet\Views{
    class Categories extends CompositeView{  
        public $child_views = array('Categories\Menu', 'Games');
        
        public function __construct(\Convertonet\ViewModels\Categories $view_model){                       
            parent::__construct($view_model);
        }
    }
}
