<?php

class Product {

    public $name;
    public $type;
    protected $price;
    public $category;
    private $desc;
    
    public function __construct($name, $price = 50, $category, $desc)
    {
        $this->name = $name;
        $this->setPrice($price);
        $this->category = $category;
        $this->desc = $desc;
    }

    public function _toString() {
        return "Produto: {$this->name}, Categoria: {$this->category} \n";
    }

    public function setPrice($price) {
        if($price <= 0) {
            throw new Exception('O preço deve ser maior do que zero.');
        };
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price . "\n";
    }

    public function getDesc() {
        return $this->desc . "\n";
    }

};

$my_class = new Product('Camiseta Adidas', 100, 'treino', 'camiseta: branca, tam: M');
echo $my_class->_toString();

echo $my_class->setPrice( 150);
echo $my_class->getPrice();
echo $my_class->getDesc();


