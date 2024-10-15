<?php

class ResolviaPay
{

    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function getLayout()
    {
        if(file_exists(ROOT . '/cust/layout.php')) {
            return ROOT . '/cust/layout.php';
        } elseif(file_exists(ROOT . '/src/layout.php')) {
            return ROOT . '/src/layout.php';
        } else {
            throw new Exception('Layout file not found, make sure you have layout.php in cust or src folder');
        }
    }

    public function getContent()
    {

        $route = $this->getRoute();

        if(empty($route)) {
            return 'Hjem';
        } elseif(isset($route[1]) && is_numeric($route[1]) && isset($route[2]) && is_numeric($route[2])) {
            return 'Vis betalingsinformasjon';
        } elseif(isset($route[1]) && is_numeric($route[1])) {
            return 'Bekreft postnummer';
        } else {
            dd($route);
            return '404 - Siden ble ikke funnet';
        }
    }

    private function getRoute()
    {
        $route = $_SERVER['REQUEST_URI'];
        $route = str_replace($this->config['app_folder'], '', $route);
        $route = explode('/', $route);
        $route = array_filter($route);
        return $route;
    }

}

function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}