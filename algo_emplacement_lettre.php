<?php

$alphab = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

$Lfournie = 'j';

for($i = 1 ; $i < count($alphab) ; $i++ ){ // Je sors de la boucle lorsque $i est égal à $Lfournie, je doit parcourir le tableau jusqu'à tomber sur l'emplacement de la bonne lettre 

  if($alphab[$i] == $Lfournie){
    echo"La lettre saisie est ici et elle est à l'emplacement numéro : . $i <br>";
  }elseif ($alphab[$i] != $Lfournie){
    echo"La lettre n'est pas ici, et on est à l'emplacement numéro : . $i <br>";
  }
}


?>