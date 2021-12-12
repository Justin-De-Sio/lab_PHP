<?php

class Library
{
    private const MAX_BOOKS= 100;
    private string $name;
    private string $address;
    private int $max;
    private array $books;

    /**
     * @param string $name
     * @param string $address
     * @param int $max
     * @param array $books
     */
    public function __construct(string $name, string $address, int $max, array $books)
    {
        $this->name = $name;
        $this->address = $address;
        $this->max = $max;
        $this->books = $books;
    }

    public function addBook(Book $book){
        $this->books.array_push($book);
    }





}