<?php

namespace transport;

class BilletElectronique implements IControlable {
    public $qrCode;
    public $numPlace;
    public $estScanne;

    public function scanner() : bool {
        if($this->qrCode == 'code valide')
            return true;
        return false;
    }

    public function lancerControle(): bool
    {
        return $this->scanner();
    }
}