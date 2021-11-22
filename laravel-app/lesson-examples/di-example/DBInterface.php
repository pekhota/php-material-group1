<?php

interface DBInterface
{
    public function create();
    public function patch();
    public function destroy();
}

interface DBCanCreate {
    public function create();
}

interface DBCanPatch {
    public function patch();
}

interface DBCanDestroy {
    public function destroy();
}


