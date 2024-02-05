<?php
declare(strict_types=1);

require '../vendor/autoload.php';

function includeView(string $view): void
{
    global $data;
    \extract($data[$view] ?? []);
    $path = \sprintf('../views/%s.phtml', $view);

    if (! \file_exists($path)) {
        echo \sprintf('View nicht gefunden: %s', $view);
        die();
    }

    include $path;
}

$dataFile = '../data.yaml';

if (! \file_exists($dataFile)) {
    echo 'Bitte Datei "data.yaml" anlegen';
}

$data = \Symfony\Component\Yaml\Yaml::parseFile($dataFile);

$view = $_GET['view'] ?? 'welcome';
includeView($view);