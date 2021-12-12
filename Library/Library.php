<?php

class Library
{
    private const MAX_BOOKS = 100;
    private string $name;
    private string $address;
    private int $max;
    private array $books= [];


    /**
     * @param string $name
     * @param string $address
     * @param int $max
     * @param array $books
     */
    public function __construct(string $name, string $address, int $max)
    {
        $this->name = $name;
        $this->address = $address;
        $this->max = $max;
    }

    public function addBook(Book $book)
    {
        if (count($this->books) <= self::MAX_BOOKS) {
            array_push($this->books, $book);
        } else {
            echo "The library is full";
        }
    }

    public function __toString(): string
    {


        return
            'name : ' . $this->name . '<br>' .
            'address: ' . $this->address . '<br>' .
            'max : ' . $this->max . '<br>' . $this->displayBooks();


    }

    public function displayBooks()
    {
        {
            foreach ($this->books as &$book) {
                echo $book;
            }
        }
    }
}