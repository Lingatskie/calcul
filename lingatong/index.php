<?php
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

if (isset($_POST['num'])) {
    $num = $_POST['input'] . $_POST['num'];
} else {
    $num = "";
}

if (isset($_POST['op'])) {
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
    $num = "";
}

if (isset($_POST['equal'])) {
    $num = $_POST['input'];
    switch ($_COOKIE['op']) {
        case "+":
            $result = $_COOKIE['num'] + $num;
            break;
        case "-":
            $result = $_COOKIE['num'] - $num;
            break;
        case "*":
            $result = $_COOKIE['num'] * $num;
            break;
        case "/":
            $result = $_COOKIE['num'] / $num;
            break;
    }
    $num = $result;
}

if (isset($_POST['clear'])) {
    $num = ""; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body{
            background-color: rgb(182, 178, 178);
        }
        .calc{
            margin: auto;
            background-color: #808080;
            border:2px solid whitesmoke;
            width: 28%;
            height: 550px;
            border-radius: 20px;
            box-shadow: 10px 10px ;
        }
        .value{
            font-size:2rem;
        }
        .maininput{
            background-color: black;
            border: 1px solid gray;
            height: 125px;
            width: 98.2%;
            font-size: 70px;
            text-align:right;
            color: whitesmoke;
            font-weight: 00;
        }
        .numbtn{
            padding: 30px 35px;
            border-radius: 10px;
            font-weight: 500;
            font-size: large;
            background-color: gray;
        }
        .numbtn:hover{
            background-color: rgb(142, 139, 139);
            color: whitesmoke;
        }
        .calbtn{
            padding: 30px 35px;
            border-radius: 10px;
            font-weight: 500;
            color:black;
            font-size: large;
            background-color: #49a109;
        }
        .calbtn:hover{
            background-color: rgb(242, 161, 12);
            color: whitesmoke;
        }
        .c{
            padding: 30px 35px;
            border-radius: 10px;
            font-weight: 500;
            font-size: large;
            background-color: red;
        }
        .c:hover{
            background-color: rgb(237, 45, 45);
            color: whitesmoke;
        }
        .equal{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: green;
        }
        .equal:hover{
            background-color: rgb(12, 130, 12);
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo @$num?>"><br><br>
            <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="+"><br>
            <input type="submit" class="numbtn" name="num" value="4">
            <input type="submit" class="numbtn" name="num" value="5">
            <input type="submit" class="numbtn" name="num" value="6">
            <input type="submit" class="calbtn" name="op" value="-"><br>
            <input type="submit" class="numbtn" name="num" value="1">
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="calbtn" name="op" value="*"><br>
            <input type="submit" class="c" name="clear" value="C">
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="equal" name="equal" value="=">
            <input type="submit" class="calbtn" name="op" value="/">
            
        </form>
    </div>
</body>
</html>