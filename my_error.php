<?php



function countDown()
{
    $x = rand(1, 20);
    try {
        if ($x <= 0 && $x >= 10) {
            throw new Exception("Er is iets fouts gegaan! ");
        } else {
            echo $x;
        }
    } catch (Exception $e) {

        echo "Error: ", $e->getMessage();
    }
}

countDown();
