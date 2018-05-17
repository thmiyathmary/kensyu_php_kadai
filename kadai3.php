<h1>
<?php
    require_once "Cat.php";
    require_once "Dog.php";

    $pets[] = new Cat("タマ", 2);
    $pets[] = new Dog("ポチ", 3);
    $pets[] = new Dog("ジョン", 1);
    foreach ($pets as $pet) {
        $pet->greeting();  // 我輩はタマ、2才だニャン！・・・
    }
?>
</h1>