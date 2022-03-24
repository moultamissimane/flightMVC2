<?php   
    require_once './autoload.php';
    require_once './controllers/HomeControllers.php';
    require_once './controllers/airlineControllers.php';
    require_once './controllers/flightControllers.php';
    require_once './controllers/ReservationControllers.php';
    $home= new HomeController();
    $pages=['dashFlight', 'dashUser', 'confirmation','myReservations' ,'ticket' ,'loginUser','logout', 'signup', 'addAirline', 'addFlight', 'home', 'loginAdmin' , 'updateFlight', 'reservation'];
    
    if(isset($_GET['page'])){
        // check the item are available or not in array
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
            $home -> index ($page);
        }else{
            include('views/includes/404.php');
        }
    }else{
        $home ->index('home');
    }
    require_once './views/includes/header.php';

    
    
?>


<title><?php echo $page ?></title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</body>
</html>

<?php   
    require_once './views/includes/footer.php';
?>
