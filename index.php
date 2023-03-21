<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <html>
<head>
    <title>Multiplication Table Generator</title>
</head>
<body>
    <h1>Multiplication Table Generator</h1>

    <form method="post">
        <label for="number">Select a number:</label>
        <input type="number" name="num" id="num">
            
        </select>
        <br><br>
        <input type="submit" value="Generate">
    </form>

    <?php
    // Check if form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the selected number
        $number = $_POST['num'];

        // Display the multiplication table
        echo "<h2>Multiplication Table for $number</h2>";
        echo "<table>";
        for ($i = 1; $i <= 12; $i++) {
            $result = $number * $i;
            echo "<tr><td>$number x $i</td><td>=</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>

</body>
</html>