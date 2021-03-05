<?php

function age_controller($age)
{
    switch ($age >= 18) {
        case true:
            echo "com on in ";
            break;
        case false:
            echo "Stop";
            break;
    }
}

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '<pre>';
}
