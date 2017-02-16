<?php

date_default_timezone_set("America/Los_Angeles");
require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/PalindromeChecker.php";

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), ["twig.path" => __DIR__."/../views"]);

$app->get("/", function() use ($app) {
    return $app["twig"]->render("home.html.twig");
});

$app->post("/result", function() use ($app) {
    $new_PalindromeChecker = new PalindromeChecker;
    $result = $new_PalindromeChecker->checkPalindrome($_POST["user-input"]);
    return $app["twig"]->render("result.html.twig", ["result" => $result]);
});

return $app;
?>
