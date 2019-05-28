<?php
function dd($value = '')
{
    die(
        "<pre>" . var_dump($value) . "</pre>"
    );

}
