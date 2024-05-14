<?php
declare(strict_types=1);

namespace Ilbah\Curs11;


class Book{
    public string $title;

    public function __construct(string $title)

    {
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

}
