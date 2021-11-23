<?php

class DatabasePostgresqlAdapter extends DatabasePostgresql implements DBInterface
{

    public function create()
    {
        $this->add();
    }

    public function patch()
    {
        $this->set();
    }

    public function destroy()
    {
        $this->remove();
    }
}
