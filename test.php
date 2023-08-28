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
        echo "<tr>";
        echo "<td>" . $this->id . "</td>";
        echo "<td>" . $this->name . "</td>";
        echo "<td>$" . $this->price . "</td>";
        echo "</tr>";
    }
}

// Creating product objects
$product1 = new Product(1, "Phone", 500);
$product2 = new Product(2, "Laptop", 1000);
$product3 = new Product(3, "Headphones", 50);
$product4 = new Product(4, "Keyboard", 80);
$product5 = new Product(5, "Mouse", 20);

// Create HTML table with borders, padding, and margin
echo "<table border radius =1; style='border-collapse: collapse; border: 1px solid black; padding: 10px; margin: 5px;'>"; 
echo "<tr><th style='border: 1px solid black; padding: 5px;'>ID</th><th style='border: 1px solid black; padding: 5px;'>Name</th><th style='border: 1px solid black;
 padding: 5px;'>Price</th></tr>
 <tfoot><tr><th colspan=2; style='border: 1px solid black; padding: 10px;'>Number of Products:</th>
 <th  style='border: 1px solid black; padding: 5px;'> ".   Product::$numberOfProducts .  "</th></tr></tfoot>";
$product1->displayInfo();
$product2->displayInfo();
$product3->displayInfo();
$product4->displayInfo();
$product5->displayInfo();
echo "</table>";

?>