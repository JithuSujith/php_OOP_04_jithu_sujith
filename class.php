<?php
abstract class Category{
    public abstract function getMyCategory();
}
class Attualita extends Category{
    public function getMyCategory(){
        echo "Attualita \n";
    }

}
class Sport extends Category{
    public function getMyCategory(){
        echo "Sport \n";
}  
} 
class  Gossip extends Category{
    public function getMyCategory(){
        echo "Gossip \n";
} 
}
class Storia extends Category{
     public function getMyCategory(){
        echo "Storia \n";
} 
}

$category= new Attualita();
$category->getMyCategory();
$category = new Sport();
$category->getMyCategory();
$category= new Storia();
$category->getMyCategory();
$category = new Gossip();
$category->getMyCategory();
?>