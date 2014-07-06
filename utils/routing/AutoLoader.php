<?php
namespace Convertonet\Utils\Routing{
    
    class AutoLoader {
        public static $loader;

        public static function init(){
            if (self::$loader == NULL){
                self::$loader = new self();
            }                
        }
        
        public function classToPath($class_name){
            $ns = explode("\\", $class_name);
            
            if(count($ns) > 1){
                array_shift($ns); //remove base namespace               
            }
            $class = array_pop($ns);

            $path = dirname(__FILE__) . "../../../" . 
                    strtolower(implode('/', $ns)) . '/'. 
                    $class . ".php"; 
            
            return $path; 
        }

        private function __construct(){
            spl_autoload_register(array($this,'getClass'));
        }        
        
        private function getClass($class_name){
            $path = $this->classToPath($class_name);
            
            if(file_exists($path)){                 
                include $path;  
             }
        }
    }
    AutoLoader::init();
}