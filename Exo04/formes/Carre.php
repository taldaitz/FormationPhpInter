<?php

namespace formes;

class Carre extends Rectangle {
    public function __construct(int $cote)
    {
        parent::__construct($cote, $cote);
    }

    public function getNomClasse()
    {
        return 'Carré';
    }
}
