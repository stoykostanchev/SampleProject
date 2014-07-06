<?php

namespace Convertonet\Views{
    class Categories extends SimpleView{
        public function getContent(){
            $html = $this->getCategoriesHtml();
            $html .= $this->getGamesHtml();
            
            return $html;
        }
        private function getCategoriesHtml(){            
            $categories = $this->vm->getCategories();
            
            $html  = '<div class="container-fluid categories">';
   
            foreach($categories as $cat){
                $html .= '<div class="col-xs-3 category-wrapper">'
                    . '<button class="category">'. ucfirst($cat) . ' Games'.'</button>'                        
                        .'</div>';
            }
            $html .= '</div>';
            return $html;
        }
        private function getGamesHtml(){
            $games = $this->vm->getAllGames();
            
            $html  = '<div class="container-fluid games">';
            
            foreach($games as $game){                
                $html .= '<div class="col-xs-4 game-wrapper">'.
                        '<div class="game">'.
                        '<a class="head" href=#> '.$game->game_name.' </a>'.
                        '<div class="body">'.
                        '<img src=""></img>'
                       .'</div>' 
                       .'</div>' .
                        '</div>';
            }
            $html .= '</div>';
            return $html;
        }
    }
}
