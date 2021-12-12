<?php

class Book
{
    private string $title;
    private string $author;
    private string $editor;
    private int $pageNb;

    /**
     * @param string $title
     * @param string $author
     * @param string $editor
     * @param int $pageNb
     */
    public function __construct(string $title, string $author, string $editor, int $pageNb)
    {
        $this->title = $title;
        $this->author = $author;
        $this->editor = $editor;
        $this->pageNb = $pageNb;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getEditor(): string
    {
        return $this->editor;
    }

    /**
     * @param string $editor
     */
    public function setEditor(string $editor): void
    {
        $this->editor = $editor;
    }

    /**
     * @return int
     */
    public function getPageNb(): int
    {
        return $this->pageNb;
    }

    /**
     * @param int $pageNb
     */
    public function setPageNb(int $pageNb): void
    {
        $this->pageNb = $pageNb;
    }

    public function __toString(): string
    {
        return
            'Title : ' . $this->title . '\n' .
            'Number of pages : ' . $this->pageNb . '\n' .
            'editor : ' . $this->editor . '\n' .
            'author : ' . $this->author . '\n';

    }
}

$livre = new Book('Factulness','Hans Rosling','Flammarion',400);
echo $livre;