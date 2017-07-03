<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";

    // session_start();

    // if (empty($_SESSION['list_of_numbers'])) {
    //     $_SESSION['list_of_numbers'] = array();
    // }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('pingpong.html.twig');


        // , array('numbers' => PingPongGenerator::getAll()));
    });

    $app->get("views")

    // $app->get("/create", function() use ($app) {
    //     $my_PingPongGenerator = new PingPongGenerator;
    //     $pingPongNumber = $my_PingPongGenerator->generatePingPongArray($_GET['number'])
    //     return $app['twig']->render('create.html.twig', array('result' => $pingPongNumber));
    // });



    return $app;
?>
