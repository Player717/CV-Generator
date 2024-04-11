<?php
declare(strict_types=1);

require '../vendor/autoload.php';

function includeView(string $view, array $data): void
{
    \extract($data);
    $path = \sprintf('../views/%s.phtml', $view);

    if (! \file_exists($path)) {
        echo \sprintf('View nicht gefunden: %s', $view);
        die();
    }

    include $path;
}

$dataFile = '../data1.yaml';

if (! \file_exists($dataFile)) {
    echo 'Bitte Datei "data.yaml" anlegen';
}

$data = \Symfony\Component\Yaml\Yaml::parseFile($dataFile);

$view = $_GET['view'] ?? 'welcome';
$viewData = $data[$view] ?? [];
includeView($view, $viewData);