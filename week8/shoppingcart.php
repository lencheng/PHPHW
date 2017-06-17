<!DOCTYPE html>

<html>
    <head>
        <title>蘋果購物車</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <a href="index.php">購物去</a>
        <?php
            echo "<table border=1>";
            echo "<tr>";
            echo "<td>刪除</td>";
            echo "<td>編號</td>";
            echo "<td>商品</td>";
            echo "<td>價格</td>";
            echo "<td>數量</td>";
            echo "</tr>";
                
            $date = strtotime("+7 days", time());
            $total = 0;
                
            while (list($arr, $value) = each($_COOKIE)) {
                if (isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])) {
	echo "<tr bgcolor='" . $color . "'><td>";
	echo "<a href='delete.php?Id=".$arr."'>";
	echo "刪除</a></td>";
	$price = 0;
	$quantity = 0;
	while (list($name, $value)=each($_COOKIE[$arr])) {
                        echo "<td>" . $value . "</td>";
                        if ($name == "price") {
                            $price = $value;
                        } else if ($name == "quantity") {
                            $quantity = $value;
                        }
	}
	$total += $price * $quantity;
                }
                echo "</tr>";
            }
            echo "總金額 = NT$".$total."元</td></tr></table>";
        ?>
    </body>
</html>
