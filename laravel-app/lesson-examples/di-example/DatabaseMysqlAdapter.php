<?php

class DatabaseMysqlAdapter extends DatabaseMysql implements DBCanCreate, DBCanPatch, DBCanDestroy
{
    public function create()
    {
        $this->insert();
    }
//
    public function patch()
    {
        $this->update();
    }

    public function destroy()
    {
        $this->delete();
    }
}
