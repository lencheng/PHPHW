<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Week5hw</title>
    </head>
    <body>
        <?php
        date_default_timezone_set('Asia/Taipei');
        
        $m = date('m');
        
        if ($m == 1) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months01.jpg">';
        } else if ($m == 2) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months02.jpg">';
        } else if ($m == 3) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months03.jpg">';
        } else if ($m == 4) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months04.jpg">';
        } else if ($m == 5) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months05.jpg">';
        } else if ($m == 6) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months06.jpg">';
        } else if ($m == 7) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months07.jpg">';
        } else if ($m == 8) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months08.jpg">';
        } else if ($m == 9) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months09.jpg">';
        } else if ($m == 10) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months10.jpg">';
        } else if ($m == 11) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months11.jpg">';
        } else if ($m == 12) {
            echo '<img src="http://www.escuelaenlanube.com/wp-content/uploads/2013/05/months12.jpg">';
        } 
        
        echo "<br />現在時間：".date('Y/m/d H:i:s')."<br />";
        echo "世界末日：2017/12/31 23:59:59<br ?>";
        
        $now = strtotime(date('Y/m/d H:i:s'));
        $end = strtotime('2017/12/31 23:59:59');
        $countdown = $end - $now;
        $day = floor($countdown/60/60/24);
        $hr = $countdown/60/60%24;
        $min = $countdown/60%60;
        $sec = $countdown%60;
        
        echo "距離世界末日剩下：".$day."天".$hr."小時".$min."分".$sec."秒";
        ?>
    </body>
</html>
