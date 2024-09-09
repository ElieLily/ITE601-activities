<?php
	// Define a class called "Person"
class Car {
  // Declare two properties: name and age
  private $color;
  private $make;
  private $model;

  // Define a constructor function __construct()
  function __construct($color, $make, $model) {
    // Set the name property to the value passed in $name
    $this->color = $color;
    // Set the age property to the value passed in $age
    $this->make = $make;
    $this->model = $model;
  }

  // Define a method to display the person's information
  function displayInfo() {
    // Use echo to print out the person's name and age
    echo "Color: " . $this->color . ", Make: " . $this->make, "Model: " .$this->model;
  }
}

// Create a new instance of the Person class, passing in "John" and 30 as arguments
$Car = new Car("Blue", 3200, "Ferrari");

// Call the displayInfo method to print out the person's information
$Car->displayInfo();
?>