<h1>
<?php
    require_once "Dog.php";
    require_once "Cat.php";

    $pochi = new Dog();
    $pochi->name = "ポチ";
    $pochi->age = 3;
    $pochi->greeting(); // 我輩はポチ、3才だワン！
    $tama = new Cat();
    $tama->name = "タマ";
    $tama->age = 2;
    $tama->greeting(); // 我輩はタマ、2才だニャン！
?>