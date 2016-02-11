<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamagotchi.php";

    session_start();
    if (empty($_SESSION['living_tamagotchi'])) {
        $_SESSION['living_tamagotchi'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('new_tamagotchi.html.twig');
    });

    $app->post("/tamagotchi", function() use ($app) {
        $new_tamagotchi = new Tamagotchi($_POST['name'], 6, 21, 15);
        $new_tamagotchi->save();
        return $app['twig']->render('tamagotchi_status.html.twig', array('new_tamagotchi' => $new_tamagotchi));
    });

    $app->post("/feed", function() use ($app) {
        $tamagotchi = Tamagotchi::getAll();
        $my_food = $tamagotchi[0]->getFood();
        $tamagotchi[0]->setFood($my_food + 6);
        return $app['twig']->render('fed.html.twig');
    });








    // $app->post("/care", function() use ($app) {
    //     if($_POST['action'] == 'feed') {
    //         $my_food = $new_tamagotchi->getFood();
    //         $new_tamagotchi->setFood($my_food + 6);
    //
    //     } elseif ($_POST['action'] == 'sleep') {
    //         $my_food = $new_tamagotchi->getFood();
    //         $new_tamagotchi->setFood($my_food - 1);
    //
    //     } elseif ($_POST['action'] == 'attention') {
    //         $my_food = $new_tamagotchi->getFood();
    //         $new_tamagotchi->setFood($my_food - 1);
    //
    //     } else {
    //
    //     }
    //
    // });

    // $app->post("/tamagotchi", function() use ($app) {
    //     if($_POST['action'] == 'feed') {
    //         ldksjflkdsjl
    //     } elseif ($_POST['action'] == 'sleep'){
    //         dfsdfaf
    //     }
    // })


    return $app;
 ?>
