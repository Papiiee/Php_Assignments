<?php
class Library
{
    private $book;
    protected $author;
    public  $publishers;
    private $about;

    public function setBook($book)

    {
        $this->book=$book;
    }

    public function getBook()
    {
        echo "<br><br>The book's name is:<br><br><br><br>" . $this->book;
    }

    public function setAbout($about)
    {
        $this->about=$about;
    }

    public function getAbout()
    {
        echo "<br><br>The book is about:<br><br><br><br>". $this->about;
    }

    public function setAuthor($author)
    {
        $this->author=$author;
    }

    public function getAuthor()
    {
        echo "<br><br>The author's name is:<br><br><br><br>".$this->author;
    }

    public function setPublishers($publishers)
    {
        $this->publishers=$publishers;
    }

    public function getPublishers()
    {
        echo "<br><br>The publishers are:<br><br><br><br>".$this->publishers;
    }

}
$library = new Library();
$library->setBook(The_Vampire_Diaries);
$library->getBook();
$library->setAbout(Vampires);
$library->getAbout();
$library->setAuthor(Salvatore);
$library->getAuthor();
$library->setPublishers(Longhorn);
$library->getPublishers();
?>

