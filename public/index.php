<?php

require_once '../vendor/autoload.php';

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new \Twig\Environment($loader, [
   'cache' => false,
]);
echo $twig->render('myView.html.twig', [
   'datas' => $products,
]);
