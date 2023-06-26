<?php

function gravatar($email)
{
    $hash = md5(strtolower(trim($email)));
    $url = "https://www.gravatar.com/avatar/$hash?d=identicon&s=60";
    
    return '<img src="' . $url . '" width="60" height="60" class="gravatar">';
}
