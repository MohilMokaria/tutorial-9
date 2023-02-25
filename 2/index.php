<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 9 | 2</title>
    <style>
        label{
            font-size: 2rem;
            margin: 40px;
        }
        .box{
            padding: 10px;
            margin: 40px;
        }
        .but{
            font-size: 1rem;
            padding: 5px 20px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Ternary Operator</h1>
        <form method="post">
            <label for="num">First Number :</label>
            <input class="box" type="number" name="num1" id="num1" required>
            <br>
            <label for="num">Second Number :</label>
            <input class="box" type="number" name="num2" id="num2" required>
            <br>
            <input class="but" type="submit" value="Find Greater">
        </form>
        <?php
            if($_POST){
                $a = $_POST["num1"];
                $b = $_POST["num2"];

                ($a > $b)?($max = $a):($max = $b);

                echo "$max is Greater";
            }
        ?>
    </center>
</body>
</html>