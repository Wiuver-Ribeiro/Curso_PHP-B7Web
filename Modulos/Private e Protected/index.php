<?php 

class Post {
  protected int $id;
  private int $likes = 0;

  public function getLikes() {
    return $this->likes;
  }

  public function getId() {
    return $this->id;
  }

  public function setLikes($likes) {
    $this->likes = $likes;
  }

  public function setId($id) {
    $this->id = $id;
  }

}

class Foto extends Post {
  public string $legenda;

  public function __construct($id) {
    $this->setId($id);
  }

  public function getLegenda() {
    return  $this->legenda;
  }

  public function setLegenda($legenda) {
    $this->legenda = $legenda;
  }
} 


$post1 = new Post('','');
$post1->setLikes(200);
echo "LIKES: {$post1->getLikes()} <br>";

$foto = new Foto(10);
$foto->setLikes(400);
echo "FOTOS: ID: {$foto->getId()} {$foto->getLikes()} <br>";