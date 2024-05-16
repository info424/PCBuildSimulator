<?php
declare(strict_types=1);
require_once('vendor/autoload.php');

//use Ilbah\Curs11\Book;
//use Ilbah\Curs11\Author;
use Ilbah\Curs11\{Book, Author};
use Ilbah\Curs11\Library\Book as BookLibrary; // Pentru ca exista deja o clasa cu acelasi nume trebuie sa ii dai un nickname folosit doar aici
use Ilbah\Curs11\Library\PublishingHouse;

$book = new Book('Confesiunile unei masti');
$author = new Author();
$book2 = new BookLibrary();
$publishingHouse = new PublishingHouse();
dd($book, $author, $publishingHouse, $book2);













