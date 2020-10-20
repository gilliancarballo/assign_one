<head>
    <h2>Calculator</h2>
<form action="" method="post">
   Input first number: <br><br><input type="type" name="num1" value=""><br><br>
   Input second number: <br><br><input type="type" name="num2" value=""><br><br>
    <input type="submit" name="a" value=" + " >
    <input type="submit" name="m" value=" * " >
    <input type="submit" name="d" value=" / " >
    <input type="submit" name="s" value=" - " >

</form>
</head>
<?php

if (isset ($_POST['a']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $add = $num1+$num2;
    echo "Addition is ".$add;
}
if (isset ($_POST['m']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $mul = $num1*$num2;
    echo "Multiplication is ".$mul;
}

if (isset ($_POST['d']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $div = $num1/$num2;
    echo "Division is ".$div;
}

if (isset ($_POST['s']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sub = $num1-$num2;
    echo "Subtraction is ".$sub;
}
?>