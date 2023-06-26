<?php

function script_path($path)
{
    return preg_replace('/^(?:scripts|userscript\:[0-9]+)(?:\/|\\\\)(.*)\.(?:php|lua)$/', '$1', $path);
}
