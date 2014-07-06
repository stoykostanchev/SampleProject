<?php

namespace Convertonet\Views{
    abstract class View{                
        public static function wrap($content){
            $html = '<html>' .
                    '<head>' . self::getHeadHtml() . '</head>'.
                    '<body>' . $content . '</body>' . 
                    '</html>'; 
            return $html;
        }
        public static function getHeadHtml(){
            return '<title>'. 'Controvet' . '</title>';
        }
        abstract public function display();
    }
}