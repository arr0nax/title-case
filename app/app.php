<?php

date_default_timezone_set("America/Los_Angeles");
require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/TitleCaseGenerator.php";

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), ["twig.path" => __DIR__."/../views"]);

$app->get("/", function() use ($app) {
    return $app["twig"]->render("input.html.twig");
});

$app->post("/result", function() use ($app) {
    $title_caser = new TitleCaseGenerator;
    $result = $title_caser->titleCaseIt($_POST['string-input']);
    return $app["twig"]->render("result.html.twig", ["result" => $result]);
});

return $app;
?>
