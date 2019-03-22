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