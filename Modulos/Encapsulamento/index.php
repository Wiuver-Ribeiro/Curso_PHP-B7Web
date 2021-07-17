<?php 

  class Post {
    public int $likes = 0;
    public array $comments = [];
    private string $author;


    public function addLike($like) {
      $this->likes+=$like;
    }

    public function getAuthor() {
      //Caso tiver author coloca nome, caso contrário coloque => visitante;
     return $this->author ?? 'Visitante';
    }

    public function getLikes() {
      return $this->likes;
    }

    public function setAuthor($author) {
      if(strlen($author) >=3) {
        $this->author = ucfirst($author);
      }
    }

    public function setLikes($likes) {
      $this->likes = $likes;
    }

  }


  $post1 = new Post();
  $post2 = new Post();

  $post1->setAuthor('wiuver Ribeiro');
  $post2->setAuthor('Ayeksa Alves');

  $post1->setLikes(200);
  $post2->setLikes(876);

  
  echo "POST 1: Autor: {$post1->getAuthor()} | Likes: {$post1->getLikes()}<br>";


  echo "<hr>";

  echo "POST 2: Autor: {$post2->getAuthor()} | Likes: {$post2->getLikes()}<br>";





