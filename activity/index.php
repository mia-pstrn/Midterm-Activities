<!DOCTYPE html>
<html>
<head>
    <title>PHP Concepts Demo</title>
</head>
<body>
    <h1>PHP Concepts Demonstration</h1>
 
    <?php
    
    define("PI", 3.14159);
    echo "<h2>1. Constant Example</h2>";
    echo "The value of PI is: " . PI . "<br><br>";
 
    echo "<h2>2. Math Functions</h2>";
    $num = -25;
    echo "Absolute value of $num: " . abs($num) . "<br>";
    echo "Square root of 16: " . sqrt(16) . "<br>";
    echo "2 raised to the power of 5: " . pow(2, 5) . "<br>";
    echo "Random number (1–100): " . rand(1, 100) . "<br><br>";
 
    echo "<h2>3. Loops Example</h2>";
    echo "Numbers from 1 to 5 using a for loop:<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo $i . " ";
    }
 
    echo "<br><br>While loop example (counting down from 5):<br>";
    $count = 5;
    while ($count > 0) {
        echo $count . " ";
        $count--;
    }
 
    echo "<br><br><h2>4. PHP Superglobals</h2>";
    echo "Server name: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "Current file: " . $_SERVER['PHP_SELF'] . "<br>";
    echo "Request method: " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
 
    ?>
 
    <h2>5. Sample Form Handling</h2>
    <form method="POST" action="">
        <label>Enter your name:</label>
        <input type="text" name="username" required>
        <br><br>
        <label>Enter your favorite number:</label>
        <input type="number" name="favnum" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
 
    <?php
    if (isset($_POST['submit'])) {

        $name = $_POST['username'];
        $fav = $_POST['favnum'];
 
        echo "<h3>Form Result:</h3>";
        echo "Hello, <b>$name</b>!<br>";
        echo "Your favorite number is <b>$fav</b>.<br>";
 
        echo "Square of your number: " . pow($fav, 2) . "<br>";
    }
    ?>
 
</body>
</html>