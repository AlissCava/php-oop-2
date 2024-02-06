<?php

class product {
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $quantityInStock;
    protected $categories;
    protected $image;
    protected $type;

    public function __construct($id, $name, $description, $price, $quantityInStock, $categories, $image, $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantityInStock = $quantityInStock;
        $this->categories = $categories;
        $this->image = $image;
        $this->type = $type;
    }

    public function getDatails() 
    {
        return [
            "id"=> $this->id,
            "name"=> $this->name,
            "description"=> $this->description,
            "price"=> $this->price,
            "quantity"=> $this->quantityInStock,
            "categories"=> $this->categories,
            "image"=> $this->image,
            "type"=> $this->type,
        ];
    }

}

?>