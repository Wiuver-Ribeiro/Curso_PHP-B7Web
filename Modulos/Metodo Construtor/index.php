<?php 

  class Post {
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function __construct($like, $authorr) {
      $this->likes = $like;
      $this->author = $authorr;
    }

    public function addLike($like) {
      echo "ABC";
      $this->likes+=$like;
    }

  }



  $post1 = new Post(200, "Wiuver Ribeiro");
  $post2 = new Post(100, "Lara Vitoria Rabelo Monteiro");
  

  echo "POST 1: Autor: {$post1->author} <br>";
  echo "POST 1: {$post1->likes} likes <br>";

  echo "POST 2: Autor: {$post2->author} <br>";
  echo "POST 2: {$post2->likes} likes <br>";




