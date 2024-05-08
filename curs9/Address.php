<?php

class Adress {
    public string $country;
    public string $county;
    public string $street;
    public int $streetNumber;
    public string $postalCode; //nu poate fi int pentru ca are 0 in fata. Int nu poate incepe cu 0.

    public function _construct(
        $country1,
        $county1,
        $street1,
        $streetNumber1,
        $postalCode1,
        ) {
        $this->country = $country1;
        $this->county = $county1;
        $this->street = $street1;
        $this->streetNumber = $streetNumber1;
        $this->postalCode = $postalCode1;
    }
}

?>