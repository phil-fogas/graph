<?php

declare(strict_types=1);

include 'app/graph.php';

$graf = new Graph();



$data1 = ['lundi' => 125, 'mardi' => '348', 'mercredi' => '100', 'jeudi' => 425, 'vendredi' => 100, 'samedi' => '568', 'dimanche' => 405];
$data2 = ['lundi' => 205, 'mardi' => '748', 'mercredi' => '400', 'jeudi' => 55, 'vendredi' => 500, 'samedi' => '578', 'dimanche' => 805];
$data3 = ['lundi' => 115, 'mardi' => '398', 'mercredi' => '190', 'jeudi' => 25, 'vendredi' => 150, 'samedi' => '68', 'dimanche' => 505];

include('template/graph.phtml');
