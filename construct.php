<?php

class Library
{
    private $book;
    private $about;
    private $author;
    private $publishers;

    public function __construct($book, $about, $author, $publishers)
    {
        $this->book = $book;
        $this->about = $about;
        $this->author = $author;
        $this->publishers = $publishers;
    }

    public function getDetails()
    {
        return '<br><br>The book is called: ' . $this->book . '<br><br>The book is about: ' . $this->about . '<br><br>The author is called: ' . $this->author . '<br><br>The publishers are:' . $this->publishers;
    }
}

$library = new Library('The_Vampire_Diaries', 'Vampires', 'Salvatore', 'Longhorn');
echo $library->getDetails();
?>