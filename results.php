<?php

    //Includes the stringAlgorithm class
    include('stringAlgorithm.php');
 
    //First string from our form
    $firstString = strtolower($_POST["firstString"]);
    //Second string from our form
    $secondString = strtolower($_POST["secondString"]);
    //Third string from our form
    $thirdString = strtolower($_POST["thirdString"]);
    //Creates a string algorithm object
    $stringAlgo = new stringAglorithm($firstString, $secondString, $thirdString);
    //Checks for occurences in our string algorithm and update the counters
    $stringAlgo->checkOccurences();

    /* Below we echo out a simple UI */
    echo "String One: " . $firstString;
    echo '<br>';
    echo "String Two: " . $secondString;
    echo '<br>';
    echo "String Three: " . $thirdString;
    echo '<br>';
    echo '<br>';

    echo 'Appearances of String One: ' . $stringAlgo->firstStringCounter; 
    echo '<br>';

    echo 'Appearances of String Two: ' . $stringAlgo->secondStringCounter; 
    echo '<br>';

    echo 'Appearances of String Three: ' . $stringAlgo->thirdStringCounter; 
    echo '<br>';
    echo '<br>';
    
    echo 'Random String: ';
    echo '<br>';
    echo $stringAlgo->randomString;
    
?>

