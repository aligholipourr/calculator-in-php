<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="#" class="mainbox" method="post">
        <label for="input">num1:</label>
        <input type="text" class="box" name="num1">
        <label for="">num2:</label>
        <input type="text"   class="box"  name="num2">
            <div  class="mine" >
            <div>
                <label for="">+</label>
                <input type="radio" name="one" value="+">
            </div>
                
        <div>
 <label for="">-</label>
                <input type="radio"  name="one" value="-">

        </div>  
        <div>
<label for="">*</label>
                <input type="radio" name="one" value="*">
        </div>
                
        <div>
<label for="">/</label>
                <input type="radio" name="one" value="/">
        </div>
            </div>
            <button   name="submit">=</button>
            <?php
            if (isset($_POST['submit'])){ 
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $one=$_POST['one'];
                $link=mysqli_connect('localhost','root','','two');
                $query="insert into users(num1,num2,one) values('$num1','$num2','$one')";
                mysqli_query($link,$query);
            switch ($one) {
    case '+':
        echo "<script>alert($num1+$num2)</script>";
        break;
    case '-':
        $result=$num1 - $num2;
echo " <span>$result</span>" ; 
       break;
       case '*':
        $result= $num1*$num2;
        echo "<span>Result:$result</span>" ; 
        break;
        case '/':
            $result=$num1/$num2;
            echo "<span>$result</span>" ; 
            break;
        }
    }
?>
    </form>
</body>
</html>
