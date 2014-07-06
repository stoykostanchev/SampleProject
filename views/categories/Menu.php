<?php

namespace Convertonet\Views\Categories{
    class Menu extends \Convertonet\Views\SimpleView{
        public function getContent(){
            $categories = $this->vm->getCategories();
            $html = '';
            
            foreach($categories as $cat){
                $html .= '<span>' . $cat . '</span> | ';
            }
            return $html;
        }
    }
}
