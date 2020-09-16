<?php

// =====================================================================================================================
// Load Twig.
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

// =====================================================================================================================
// Run Twig.
echo $twig->render('publications.html.twig',
    [
        'headTitle' => 'Scub',
        'headDescription' => 'gardener',
        'bannerTitle' => 'Nos publications',
    ]);