<?php

namespace Convertonet\Views{
    class Games extends SimpleView{
        public function getContent(){
            $games = $this->vm->getAllGames();
            $html = '';
            
            foreach($games as $game){
                $html .= '<div>' . $game->game_id.' '.$game->game_name . '</div>';
            }
            return $html;
        }
    }
}
