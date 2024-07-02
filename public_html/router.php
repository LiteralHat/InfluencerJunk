<?php

class Router
{
    protected $defaultController = 'HomeController';
    protected $defaultMethod = 'index';

    public function route($url)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Instantiate the controller
            require '../controllers/cartcontroller.php';
            $controller = new CartController();
            // Call a method to handle the form data
            $controller->Add($_POST);
        } else {

            $urlSegments = explode('/', $url);

            $controllerName = !empty($urlSegments[0]) ? ucfirst($urlSegments[0]) . 'Controller' : $this->defaultController;
            $controllerFile = '../controllers/' . $controllerName . '.php';

            if (file_exists($controllerFile)) {
                require_once $controllerFile;

                $controller = new $controllerName;
                $method = $this->defaultMethod;

                unset($urlSegments[0]);

                $params = array_values($urlSegments);

                if (method_exists($controller, $method)) {
                    $controller->$method(...$params);
                } else {
                    echo "Method not found";
                }
            } elseif ($urlSegments[0]=='apparel' ||$urlSegments[0]=='accessories') {
                require_once '../controllers/homecontroller.php';
                $controller = new HomeController(); 
                $controller->subpage($urlSegments[0]);
            } else {
                $this->serveStaticPage($url);
            }
        }
    }

    protected function serveStaticPage($url)
    {
        $file = '../views/' . $url . '.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo "Page not found";
        }
    }
}
