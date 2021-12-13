<?php
require 'Book.php';
require 'Library.php';
require '../utils.inc.php';
start_page('library');
echo '<h1>library</h1>';
$livre = new Book('Factulness', 'Hans Rosling', 'Flammarion', 400);

$livre2 = new Book('toto', 'Hans rz', 'HYT', 23);

$biblio = new Library('bioblio1','3 rue bobo',4);
$biblio->addBook($livre);
$biblio->addBook($livre2);

echo $biblio;

end_page();