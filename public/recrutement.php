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
echo $twig->render('recrutement.html.twig',
    [
        'headTitle' => 'Scub',
        'headDescription' => 'Scub recrute des ingénieurs Java, Javascript, Flutter, Cloud sur Angoulême, Bordeaux & Niort',
        'bannerTitle' => 'Nous recrutons',
        'bannerPage' => 'Recrutement',
    ]);