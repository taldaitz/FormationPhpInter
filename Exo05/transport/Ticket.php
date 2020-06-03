<?php

namespace transport;

class Ticket implements IControlable {
    public $date;
    public $estVerifie;

    public function verifier() : bool {
        if($this->date == date('d/m/Y'))
            return true;
        return false;
    }

    public function lancerControle(): bool
    {
        return $this->verifier();
    }
}