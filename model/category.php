<?php

    class Category {

        private $id;
        private $name;
        private $image;

        public function __construct(
            $id, $name, $image
        ) 
        {

            $this -> setId($id);
            $this -> setName($name);
            $this -> setIcon($image);
        }

        public function getId() 
        {
            return $this -> id;
        }
        public function setId($id)
        {
            $this -> id = $id;
        }

        public function getName() 
        {
            return $this -> name;
        }

        public function setName($name) 
        {
            $this -> name = $name;
        }

        public function getIcon() 
        {
            return $this -> image;
        }
        public function setIcon($image) 
        {
            $this -> icon = $image;
        }
    }