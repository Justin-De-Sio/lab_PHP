<?php

class Library
{
    private const MAX_BOOKS = 100;
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
    public function __construct(string $name, string $address, int $max)
    {
        $this->name = $name;
        $this->address = $address;
        $this->max = $max;
        $this->books = [];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     */
    public function setMax(int $max): void
    {
        $this->max = $max;
    }

    /**
     * @return array
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    /**
     * @param array $books
     */
    public function setBooks(array $books): void
    {
        $this->books = $books;
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
            'max : ' . $this->max . '<br>' . $this->displayBooks() . '<br>';


    }

    public function displayBooks()
    {
        {
            foreach ($this->books as &$book) {
                echo $book . '<br>';
            }
        }
    }
}