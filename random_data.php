<?php
require_once 'business_names.php';
header('Content-Type: text/plain');

$type = $_GET['type'] ?? '';


$boyNames = ['Liam', 'Noah', 'Oliver', 'Elijah', 'James', 'William', 'Benjamin', 'Lucas', 'Henry', 'Alexander'];

$girlNames = ['Emma', 'Olivia', 'Ava', 'Isabella', 'Sophia', 'Charlotte', 'Mia', 'Amelia', 'Harper', 'Evelyn'];

$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

switch ($type) {
    case 'business':
        echo $businessNames[array_rand($businessNames)];
        break;
    case 'boy':
        echo $boyNames[array_rand($boyNames)];
        break;
    case 'girl':
        echo $girlNames[array_rand($girlNames)];
        break;
    case 'lorem':
        echo $loremIpsum;
        break;
    default:
        echo 'Invalid request';
        break;
}
