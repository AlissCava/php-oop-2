<?php

class Food extends Product{

    private static $typology = "cibo";

    protected $dietType;
    protected $feedingInstructions;

    public function __construct($id, $name, $description, $price, $category, $quantityInStock, $image, $type, $dietType, $feedingInstructions){

        // Chiama il costruttore della classe padre per settare le proprietà ereditate
        parent::__construct($id, $name, $description, $price, $category, $quantityInStock, $image, $type);

        $this ->dietType = $dietType;
        $this ->feedingInstructions = $feedingInstructions;
    }

    // Metodi getter specifici per la classe Food
    public function getDietType(){
        return $this ->dietType;
    }

    public function getFeedingInstructions() {
        return $this->feedingInstructions;
    }
}

?>