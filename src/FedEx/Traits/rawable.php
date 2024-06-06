<?php


namespace FedEx\Traits;


trait rawable
{
    public $raw = false;

    public function asRaw()
    {
        $this->raw = true;
        return $this;
    }
}