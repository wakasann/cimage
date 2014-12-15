<?php
// Include config for all testcases
include __DIR__ . "/config.php";



// The title of the test case
$title = "Testing option no-upscale";



// Provide a short description of the testcase.
$description = "Do not upscale image when original image (slice) is smaller than target image.";



// Use these images in the test
$images = array(
    'car.png',
);



// For each image, apply these testcases
$nc = null; //"&nc"; //null; //&nc'; 
$testcase = array(
    $nc . '&w=600',
    $nc . '&w=600&no-upscale',
    $nc . '&h=400',
    $nc . '&h=400&no-upscale',
    $nc . '&w=600&h=400',
    $nc . '&w=600&h=400&no-upscale',
    $nc . '&w=600&h=400&stretch',
    $nc . '&w=600&h=400&no-upscale&stretch',
    $nc . '&w=600&h=400&crop-to-fit',
    $nc . '&w=600&h=400&no-upscale&crop-to-fit',
    $nc . '&w=600&h=400&fill-to-fit',
    $nc . '&w=600&h=400&no-upscale&fill-to-fit',
/*
    $nc . '&w=600&ar=1.6',
    $nc . '&w=600&ar=1.6&no-upscale',
    $nc . '&h=400&ar=1.6',
    $nc . '&h=400&ar=1.6&no-upscale',
*/
);



// Apply testcases and present results
include __DIR__ . "/template.php";
