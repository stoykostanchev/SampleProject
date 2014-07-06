<?php

namespace Convertonet\Views{
    class Categories extends SimpleView{
        public function getContent(){
            $categories = $this->vm->getCategories();
            $games = $this->vm->getAllGames();
            
            $html = '';
            
            foreach($categories as $cat){
                $html .= '<span>' . $cat . '</span> | ';
            }
            foreach($games as $game){
                $html .= '<div>' . $game->game_name. '</div>';
            }
            return $html;
        }
    }
}
