<?php

$DOC_ROOT = __DIR__.'/..';

function getDocumentRoot() {
    global $DOC_ROOT;
    return $DOC_ROOT;
}

var_dump($_SERVER);
//require_once __DIR__."/../config/db.php";
