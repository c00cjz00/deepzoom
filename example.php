<?php
require("vendor/autoload.php");

// Setup Deepzoom
$deepzoom = Jeremytubbs\Deepzoom\DeepzoomFactory::create([
  'path' => 'imageFolder', // Export path for tiles
  'driver' => 'imagick', // Choose between gd and imagick support.
  'format' => 'jpg',
]);

// folder, file are optional and will default to filename
$inputFile="KISS.jpg";
$outputFolder=basename($inputFile,".jpg");
$response = $deepzoom->makeTiles($inputFile, 'file', $outputFolder);