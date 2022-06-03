<?php

class Roouter {
    private $req;
    /**
     * fetch requested page
     * #2
     */
    public function requestPage()
    {
        $page = '404';
        if(isset($_SERVER["QUERY_STRING"])) {
            $uri = explode("/", $_SERVER["QUERY_STRING"]);
            $page = isset($uri[0]) && !empty($uri[0]) ? $uri[0] : 'home'; 
        }
        $this->req = $page;
        return $this; 
    }
    /**
     * Render the requested page
     * #3
     */
    public function renderPage() {
        require_once './components/inc.import.php';
        switch(strtolower($this->req)){
            case "/":
            case "home":
                $pageTitle = "Crud";
                require_once "page/home.php";
                break;
            case "crud.create":
                $pageTitle = "Create";
                require_once "page/crud.create.php";
                break;
            case "crud.read":
                $pageTitle = "Read";
                require_once "page/crud.read.php";
                break;
            case "crud.update":
                $pageTitle = "Update";
                require_once "page/crud.update.php";
                break;
            case "crud.delete":
                $pageTitle = "Delete";
                require_once "page/crud.delete.php";
                break;
            case "about":
                $pageTitle = "about Page";
                require_once "page/about.php";
                break;
            default:
                require_once "page/404.php";
        }
    }
}

/*QOP*/