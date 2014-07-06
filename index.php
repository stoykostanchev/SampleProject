<?php
    require_once dirname(__FILE__).'/utils/routing/AutoLoader.php';   
    
    function getReuiredModels($view_model_name){
        $models_map = array();
        $mv_model_maps = array(
            'Categories' => array(
                'Game' => 'game', 
                'Game\Category' => 'category'
            )
        );   
        if(isset($mv_model_maps[$view_model_name])){
            foreach($mv_model_maps[$view_model_name] as $model_str => $alias){
                $model_name = 'Convertonet\\Models\\' . $model_str;        
                $models_map[$alias] = new $model_name();
            }
        }
        return $models_map;
    }
    function getCommand(){
        return array(
            'view_name' => ucfirst(filter_input(
                \INPUT_GET, 
                "view", 
                \FILTER_SANITIZE_STRING,
                array(
                    "options"=>array(
                        'default'=>'Categories',
                        "regexp"=>"^[a-zA-Z]+$")
                    )
            ))
        );
    }
    
    $command = getCommand();    
    $models = getReuiredModels($command['view_name']);
    
    $view_name = 'Convertonet\\Views\\'.$command['view_name'];
    $vm_name = 'Convertonet\\ViewModels\\'.$command['view_name'];
    $vm = new $vm_name(array( 'models_map' => $models));
    $view = new $view_name($vm);
    
    echo $view->display();
 
 