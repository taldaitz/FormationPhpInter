<?php

namespace classes;

class Page {
    public $nom;
    public $url;


    public function __toString()
    {
        return $this->nom . '(' . $this->url . ')';
    }
}