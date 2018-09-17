<?php

class App
{
    /*
     * Split Request URI and call controller and method based on result
     *
     * @param $token[1] contains name of controllers
     * @param $tokens[2] contains method name
     * @param $tokens[3] contains parameters given to controllers method
     */
    public function __construct()
    {
        // Router
        $tokens = explode('?',rtrim($_SERVER['REQUEST_URI']));
        $tokens = explode('/',rtrim($tokens[0]));
        // Dispatcher
        $controllerName = ucfirst($tokens[1]).'Controller';

        if (file_exists('Controllers/'.$controllerName.'.php')) {
            require_once('Controllers/'.$controllerName.'.php');
            $controller = new $controllerName;
            if (isset($tokens[2])) {
                if (method_exists($controllerName,$tokens[2])) {
                    $method = $tokens[2];
                    if (isset($tokens[3])) {
                        $controller->{$method}($tokens[3]);
                    } else {
                        $controller->{$method}();
                    }
                } else {
                    require_once('Controllers/ErrorController.php');
        			$controller = new ErrorController;
        			$controller->index();
                }
            } else {
                // default action
				$controller->index();
            }
        } else {
			require_once('Controllers/ErrorController.php');
			$controller = new ErrorController;
			$controller->index();
		}
    }
}
