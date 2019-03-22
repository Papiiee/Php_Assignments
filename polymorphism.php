<?php
abstract class User
{
    public $article=20;
    abstract public function calculateScore();
}
class Author extends User
{
    public $authored=38;
    public function calculateScore()
    {
        echo "<br><br>The Author's score is:<br><br>" . $this->article * $this->authored;
    }
}
class Editor extends User
{
    public $edited=52;
    public function calculateScore()
    {
        echo "<br><br>The Editor's  score is:<br><br>" . $this->article * $this->edited;
    }
}
$author=new Author();
$author->calculateScore();
$editor=new Editor();
$editor->calculateScore();
?>


<?php
interface Philosophers
{

    public function calculateScore();
}
class Reader implements Philosophers
{
    public $article=10;
    public $read=15;
    public function calculateScore()
    {
        echo "<br><br>The Reader's score is:<br><br>" . $this->article * $this->read;
    }
}
class Writer implements Philosophers
{
    public $article=12;
    public $written=23;
    public function calculateScore()
    {
        echo "<br><br>The Writer's  score is:<br><br>" . $this->article * $this->written;
    }
}
$reader=new Reader();
$reader->calculateScore();
$writer=new Writer();
$writer->calculateScore();
