<?php

namespace App\Builder;

class Composer extends Php
{
    public function getProgramName()
    {
        return 'app composer';
    }

    public function makeWrapper() : ?Command
    {
        return DockerComposeExec::make()->setUser(env('FWD_ASUSER'));
    }

    public function getDockerComposeExec() : DockerComposeExec
    {
        return $this->wrapper;
    }
}
