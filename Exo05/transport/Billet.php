<?php

namespace transport;

class Billet implements IControlable {
    public $date;
    public $numPlace;
    public $estPoinconne;

    public function poinconner() : bool {
        if($this->date == date('d/m/Y'))
            return true;
        return false;
    }

    public function lancerControle(): bool
    {
        return $this->poinconner();
    }
}