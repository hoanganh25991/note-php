<?php
header("Content-type: text/plain");
class DynamicGetterSetter {

    private $name = "Martin Jansen";
    private $starbucksdrink = "Caramel Cappuccino Swirl";

    function __call($method, $arguments) {
        $prefix = strtolower(substr($method, 0, 3));
        $property = strtolower(substr($method, 3));

        if (empty($prefix) || empty($property)) {
            return;
        }

        if ($prefix == "get" && isset($this->$property)) {
            return $this->$property;
        }

        if ($prefix == "set") {
            $this->$property = $arguments[0];
        }
    }
}

$class = new DynamicGetterSetter;

echo "Name: " . $class->getName() . "\n";
echo "Favourite Starbucks flavour: " . $class->getStarbucksDrink() . "\n\n";

$class->setName("John Doe");
$class->setStarbucksDrink("Classic Coffee");

echo "Name: " . $class->getName() . "\n";
echo "Favourite Starbucks flavour: " . $class->getStarbucksDrink() . "\n\n";
?>