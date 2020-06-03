<?php

class TelephonePortable extends Telephone {

    public $tailleEcran;

    use traitComposer;

    public function sonner(): string
    {
        return 'Tutututut';
    }

}


$port = new TelephonePortable();

echo $port->sonner();