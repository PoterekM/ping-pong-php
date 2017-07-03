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

    $app->get("/create", function () use($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $input_number = $my_PingPongGenerator->numbers_divisible_by_three($_GET['number']);
        return $app['twig']->render('pingpong.html.twig', array('result' => $input_number));

    });

    return $app;
?>
