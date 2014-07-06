<?php

namespace Convertonet\Views{
    abstract class View{                
        private $css = array(
            'utils/external/bootstrap-3.2.0-dist/css/bootstrap.css',
            'utils/external/bootstrap-3.2.0-dist/css/bootstrap-theme.css'            
        );
        private $js = array(
            'javascript/Convertonet.js'
        );
        protected $viewJs = array();
        protected $viewCss = array();
        
        public function wrap($content){        
            $html = '<!DOCTYPE html>' .
                    '<html lang="en">' .
                    '<head>' . $this->getHeadHtml() . '</head>'.
                    '<body class="body">' . $content . '</body>' . 
                    '</html>'; 
            return $html;
        }
        public function getHeadHtml(){            
            return '<title>'. 'Controvet' . '</title>'
                    . $this->getCssIncludes() 
                    . $this->getJsIncludes();
        }
        private function getJsIncludes(){
            $html = '';
            
            foreach(array_merge($this->js, $this->viewJs) as $url){
                $html .= "<script type='text/javascript' src='{$url}'></script>";
            }
            
            return $html;
        }
        private function getCssIncludes(){
            $html = '';
            
            foreach(array_merge($this->css, $this->viewCss) as $url){
                $html .= "<link rel='stylesheet' type='text/css' href='{$url}'>";
            }
            return $html;
        }
        protected function getViewJs(){            
            return $this->viewJs;            
        }
        abstract public function display();
    }
}