<?php
namespace Convertonet\Utils\Routing{
    class PathsConfig{
        private static $wasInit = false;
        public static $BASE_PATH; 
        
        private function __construct() {}
                       
        public static function init(){
            if(self::$wasInit){
                return;
            }
            self::initCommonPaths();                                    
            self::initEnvPaths();
            self::$wasInit = true;
        }
        
        public static function getEnv(){
            return 'dev';
        }
        
        private static function initCommonPaths(){
            self::$BASE_PATH = dirname(__FILE__).'/../../';
        }
        
        private static function initEnvPaths(){
            $env_paths = self::getEnvPaths();
            
            foreach($env_paths as $name => $path){
                self::$$name = $path;
            }
        } 
        
        private static function getEnvPaths(){
            $paths = array();
            
            switch(self::getEnv()){
                case 'dev' : {
                    break;
                }
                case 'prod' : {
                    break;
                }
            }
            return $paths;
        }                
    }
    PathsConfig::init();
}
