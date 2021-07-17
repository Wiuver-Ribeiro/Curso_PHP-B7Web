<?php 

  class Post {
    public $likes = 0;
    public $comments = [];
    public $author;

    public function addLike($like) {
      $this->likes+=$like;
    }

    public function editAuthor($author) {
      $this->author = $author;
    }

    public function addComment($comment) {
      $this->comments[] = array_push($comments, $comment);
    }
  

  }



  $post1 = new Post();
  $post1->likes = 20;
  $post1->author = "Wiuver Ribeiro";

  $post2 = new Post();
  $post2->likes = 650;
  $post2->author = "Lara Kamilly";



  echo "POST 1: Autor: {$post1->author} <br>";
  echo "POST 1: {$post1->likes} likes <br>";
  $post1->addLike(20);
  echo "POST 1: {$post1->likes} likes <br>";

  echo "=============================================== <br>";

  echo "POST 2: Autor: {$post2->author} <br>";
  echo "POST 2: {$post2->likes} likes <br>";
  $post2->editAuthor("Djoan Adormevil");
  echo "POST 2: Autor: {$post2->author} <br>";

