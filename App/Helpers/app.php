<?php

function assets($assetsName)
{
    return URL.'public/'.$assetsName;
}
function redirect($url)
{
    header('Location: '.URL.$url);
}