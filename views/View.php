<?php

namespace Convertonet\Views{
    abstract class View{                
        private static $css = array(
            'utils/external/bootstrap-3.2.0-dist/css/bootstrap.css',
            'utils/external/bootstrap-3.2.0-dist/css/bootstrap-theme.css',
            'resources/styles/categories.css'            
        );
        private static $js = array();
        
        public function wrap($content){
            $html = '<!DOCTYPE html>' .
                    '<html lang="en">' .
                    '<head>' . self::getHeadHtml() . '</head>'.
                    '<body class="body">' . $content . '</body>' . 
                    '</html>'; 
            return $html;
        }
        public static function getHeadHtml(){            
            return '<title>'. 'Controvet' . '</title>'
                    . self::getCssIncludes() 
                    . self::getJsIncludes();
        }
        private static function getJsIncludes(){
            $html = '';
            
            foreach(self::$js as $url){
                $html .= "<script type='text/javascript' src='{$url}'>";
            }
        }
        private static function getCssIncludes(){
            $html = '';
            
            foreach(self::$css as $url){
                $html .= "<link rel='stylesheet' type='text/css' href='{$url}'>";
            }
            return $html;
        }
        abstract public function display();
    }
}