
<!DOCTYPE html>
<html>
<head>
    <title>Food Order</title>
</head>
<body>

    <h2>Simple Food Order</h2>

    <form action="order.php" method="GET">

        Name:
        <input type="text" name="name" required>
        <br><br>

        Food:
        <select name="food">
            <option value="Burger">Burger</option>
            <option value="Pizza">Pizza</option>
            <option value="Fries">Fries</option>
        </select>
        <br><br>

        Quantity:
        <input type="number" name="quantity" min="1" required>
        <br><br>

        <input type="submit" value="Order">

    </form>
    

</body>
</html>

