<?php
require 'Book.php';
require 'Library.php';

$livre = new Book('Factulness', 'Hans Rosling', 'Flammarion', 400);
echo $livre;
$livre2 = new Book('Factulness', 'Hans Rosling', 'Flammarion', 400);
echo $livre;
$biblio = new Library('bioblio1','3 rue bobo',4);
$biblio->addBook($livre);
$biblio->addBook($livre2);
echo $biblio;
