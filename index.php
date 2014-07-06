<?php
    require_once dirname(__FILE__).'/utils/routing/AutoLoader.php';   
    
    function getReuiredModels($view_model_name){
        $models = array();
        $mv_models = array(
            'Categories' => array(
                'Game', 
                'Game\Category'
            ),
            'Games' => array('Game'),
            'Categories\Menu' => array('Game\Category')
        );   
        if(!isset($mv_models[$view_model_name])){
            foreach($mv_models[$view_model_name] as $model_str){
                $model_name = 'Convertonet\\Models\\' . $model_str;        
                $models[] = new $model_name();
            }
        }
        return $models;
    }
    function getCommand(){
        return ucfirst(filter_input(
            \INPUT_GET, 
            "view", 
            \FILTER_SANITIZE_STRING,
            array(
                "options"=>array(
                    'default'=>'Categories',
                    "regexp"=>"^[a-zA-Z]+$")
                )
        ));    
    }
                    
                

    $view_str = getCommand();
    $is_composite_view = is_subclass_of($view_str, 'Convertonet\Views\CompositeView' );
    
    
    
    
    
    $models = getReuiredModels($view_str);
    $view_name = 'Convertonet\\Views\\'.$view_str;
    $vm_name = 'Convertonet\\ViewModels\\'.$view_str;
    $vm = new $vm_name(count($models) > 1 ? $models : $models[0]);
    $view = new $view_name($vm);
    
    echo $view->display();
 
 