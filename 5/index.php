<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Tutorial 9 | 5</title>
</head>
<body>
    <center>
        <h1>Vowels</h1>
        <form method="post">
            <label for="num">Enter a String : </label>
            <input class="box" type="text" name="str" id="str" required>
            <br>
            <input class="but" type="submit" value="Count">
        </form>
        <?php
            if($_POST){
                $str = $_POST["str"];
                $str = strtolower($str);
                $len = strlen($str);
                $c = 0;

                for($i=0; $i<$len; $i++){
                    if($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u'){
                        $c++;
                    }
                }

                echo "There are $c vovels";
            }
        ?>
    </center>
</body>
</html>