<?php

namespace Convertonet\Utils\Db\Readers{
    
    class JSON{
        public static function readFile($url){
            return json_decode(file_get_contents($url));
        }
    }

}
