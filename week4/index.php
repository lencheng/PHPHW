<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>資管營活動報名表</title>
    </head>
    <body>
        <h1>報名成功!!!</h1>
        <?php
        $username=$_GET["username"];
        echo "名字：".$username."<br />";
        
        $gender=$_GET["gender"];
        if ($gender == male) {
            echo "性別：男生<br />";
        } else {
            echo "性別：女生<br />";
        }
        
        $birthday=$_GET["birthday"];
        echo "生日：".$birthday."<br />";
        
        $number=$_GET["id"];
        echo "身分證字號：".$number."<br />";
        
        $address=$_GET["address"];
        echo "地址：".$address."<br />";
        
        $cellphone=$_GET["cellphone"];
        echo "手機：".$cellphone."<br />";
        
        $mail=$_GET["mail"];
        echo "Email：".$mail."<br />";
        ?>
    </body>
</html>
