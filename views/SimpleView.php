<?php
namespace Convertonet\Views{
    abstract class SimpleView extends View{
        public $vm;
        public function __construct(\Convertonet\ViewModels\ViewModel $vm){
            $this->vm = $vm;
        }
        public function display(){
            return self::wrap($this->getContent());
        }
        abstract public function getContent();
    }
}