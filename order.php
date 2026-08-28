
<!DOCTYPE html>
<html>
<head>
    <title>Order Result</title>
</head>
<body>

    <h2>Order Information</h2>

    <?php

    $name = $_GET['name'];
    $food = $_GET['food'];
    $quantity = $_GET['quantity'];

    if ($food == "Burger") {
        $price = 50;
    } elseif ($food == "Pizza") {
        $price = 100;
    } else {
        $price = 40;
    }

    $total = $price * $quantity;

    // echo "Name: " . $name . "<br>";
    // echo "Food: " . $food . "<br>";
    // echo "Quantity: " . $quantity . "<br>";
    // echo "Total Price: ₱" . $total;

    ?>

</body>
</html>
