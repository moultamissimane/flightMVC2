<?php   
    require_once './views/includes/header.php';
    require_once './autoload.php';
    require_once './controllers/HomeControllers.php';
    // require_once './controllers/employersControllers.php';
    require_once './controllers/airlineControllers.php';
    require_once './controllers/flightControllers.php';

    
    $home= new HomeController();
    $pages=['home','dashboard','login', 'signup', 'addAireline', 'addFlight', 'homeUser', 'updateFlight'];
    
    if(isset($_GET['page'])){
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
            $home -> index ($page);
        }else{
            include('views/includes/404.php');
        }
    }else{
        $home ->index('home');
    }
?>
<?php   
    require_once './views/includes/footer.php';
?>
