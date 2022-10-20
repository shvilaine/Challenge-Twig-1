<?php

require_once __DIR__ . '/../config/twig.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new \Twig\Environment(
    $loader,
    [
        'cache' => false,
    ]
);
$twig->addExtension(new \Twig\Extension\DebugExtension());

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
echo $twig->render('products.html.twig', ['products' => $products]);
