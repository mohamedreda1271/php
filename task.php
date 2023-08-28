<?php
class Product {
    public $id;
    public $name;
    public $price;
    public static $numberOfProducts = 0;
    
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        self::$numberOfProducts++;
    }
    
    public function calculateTotalPrice($quantity) {
        return $this->price * $quantity;
    }
    
    public function displayInfo() {
        echo "Product ID: " . $this->id . "<br>";
        echo "Product Name: " . $this->name . "<br>";
        echo "Product Price: $" . $this->price . "<br>";
    }
}

// Creating product objects
$product1 = new Product(1, "Phone", 500);
$product2 = new Product(2, "Laptop", 1000);
$product3 = new Product(3, "Headphones", 50);
$product4 = new Product(4, "Keyboard", 80);
$product5 = new Product(5, "Mouse", 20);

// Calculating total price
$quantity = 2;
$totalPrice = $product1->calculateTotalPrice($quantity);
echo "Total Price: $" . $totalPrice . "<br>";

// Displaying product info
$product2->displayInfo();

// Getting number of products
echo "Number of Products: " . Product::$numberOfProducts;
echo "<br>###########################################<br>";
function is_anagram($string_1, $string_2)
{
    if (count_chars($string_1) == count_chars($string_2))
        return 'yes';
    else
        return 'no';    
}
print_r(is_anagram('program', 'grampro')."<br>");
print_r(is_anagram('card', 'cart')."<br>");
echo "<br>###########################################<br>";
function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return true; 
    }
    else{
        return false;
    }
} 
echo Palindrome("EYE");
echo "<br>###########################################<br>";





























?>
