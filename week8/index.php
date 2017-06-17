<!DOCTYPE html>

<html>
    <head>
        <title>蘋果購物車</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            session_start();
            if(isset($_POST["cellphone"])) {
                $_SESSION["quantity"]=$_POST["quantity"];
                $id=$_POST["cellphone"];
                $_SESSION["id"]=$id;
                switch($id) {
                    case "i1";
                    $_SESSION["name"]="iPhone7plus";
                    $_SESSION["price"]=28900;
                    break;
                
                    case "i2";
                    $_SESSION["name"]="iPhone7";
                    $_SESSION["price"]=24500;
                    break;
                    
                    case "i3";
                    $_SESSION["name"]="iPadPro";
                    $_SESSION["price"]=20900;
                    break;
                    case "i4";
                    $_SESSION["name"]="MacBookPro";
                    $_SESSION["price"]=41900;
                    break;
                    
                    case "i5";
                    $_SESSION["name"]="MacBookAir";
                    $_SESSION["price"]=31900;
                    break;
                    }
            header("Location: savecart.php");
            }
        ?>
    <form method="post">
    選擇商品：
    <select name="cellphone">
        <option value="i1" select="true">iPhone7plus</option>
        <option value="i2" >iPhone7</option>
        <option value="i3" >iPadPro</option>
        <option value="i4" >MacBookPro</option>
        <option value="i5" >MacBookAir</option>
    </select>

    數量:<input type="number" name="quantity"  value="0">
    <input type="submit" value="放入購物車">
    <br />
    <a href="shoppingcart.php">檢視購物車</a>
    </form>
    </body>
</html>