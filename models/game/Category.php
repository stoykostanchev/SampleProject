<?php
namespace Convertonet\Models\Game{
    class Category extends \Convertonet\Models\AbstractModel{
        public static function all(){
            $json = \Convertonet\Utils\Db\Readers\JSON::readFile(
                  \Convertonet\Utils\Routing\PathsConfig::$BASE_PATH.'/resources/json/games.json'                  
            );
            return array_keys(get_object_vars($json));            
        }
    }
}
