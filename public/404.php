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
echo $twig->render('404.html.twig', ['headTitle' => 'Scub', 'headDescription' => 'Scub vous accompagne dans la réalisation de vos projets d\'ingénierie informatique (Java, Javascript, Flutter, Agilité...)']);