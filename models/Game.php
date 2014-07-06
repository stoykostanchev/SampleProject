<?php
namespace Convertonet\Models{
    class Game extends AbstractModel{
        public static function getByCategory($cat){
            $json = \Convertonet\Utils\Db\Readers\JSON::readFile(
                  \Convertonet\Utils\Routing\PathsConfig::$BASE_PATH.'/resources/json/games.json'                  
            );
            return property_exists($json, $cat) ? $json->$cat : array();                         
        }
        public static function all(){
            $json = \Convertonet\Utils\Db\Readers\JSON::readFile(
                  \Convertonet\Utils\Routing\PathsConfig::$BASE_PATH.'/resources/json/games.json'                    
            );
            $all_games = array();
            
            foreach($json as $cat=>$games){
                $all_games = array_merge($all_games, $games);
            }
            return $all_games;   
        }
    }
}
