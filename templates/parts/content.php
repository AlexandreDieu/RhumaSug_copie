<main>
    <?php

    if (isset($_GET["page"])) {
        $router = new Router(CONFIG_ROUTES, TEMPLATES_PAGES);
        // $router->callContent($db);
        $controllerMethod = $router->callContent(); //accueil || about || panier || profil || s'inscrire
        $controller = new Controller();
        $controller->$controllerMethod($db);
    } else {
        include TEMPLATES_PAGES . "/accueil.php";
    }
    ?>
</main>