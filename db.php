<?php

    // REQUIRE
    //chiama tutti i file
    require_once(__DIR__ . "/models/category.php");
    require_once(__DIR__ . "/models/product.php");
    require_once(__DIR__ . "/models/food.php");
    require_once(__DIR__ . "/models/animalHouse.php");
    
    // CATEGORIES
    //da il nome alle categorie 
    $dog = new Category(1, "Cane", "https://cdn4.iconfinder.com/data/icons/eldorado-medicine/40/dog-512.png");
    $cat = new Category(2, "Cat", "https://cdn3.iconfinder.com/data/icons/animal-and-tool/283/animal_and_tool-02-512.png");

    // PRODUCTS
    $prod_food = new Food(
        1, "Croccantini", "https://shop-cdn-m.mediazs.com/bilder/9/400/26635_pla_meradog_puppyknochen_10kg_9.jpg", 35,
        $cat, "10/05/2024"
    );
    $prod_cuccia = new AnimalHouse(
        2, "Cuccia per cani", "https://www.original-legno.com/wp-content/uploads/2022/02/Cucce_in_legno_italy_con_veranda_per_cani_Barboncino.webp", 100,
        $dog, "100x45x40"
    );

    $prods = [ $prod_food, $prod_cuccia ];