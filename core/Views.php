<?php
    class Views{
        
        function getView($controller, $view, $info=''){
            $controller = get_class($controller);
            $viewController = str_replace('Controller', '', $controller);
            //dep($viewController);return;
            if($viewController == 'Home'){
                $view = 'views/'. $view. '.php';
            }
            else{
                $view = 'views/'. $viewController. '/'. $view. '.php';
            }
            require_once($view);
        }


    }