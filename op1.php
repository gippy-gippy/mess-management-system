<html>
    <head>
        <title>results of feedbackcheck</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>

            



        </style>
    </head>
    <body>
        <?php 
                date_default_timezone_set("Asia/Calcutta");
                $jd=cal_to_jd(CAL_GREGORIAN,date("m"),date("d")-1,date("Y"))."";
                $t = strtolower(jddayofweek($jd,1)."");
            
        $p = 0;
        $con = mysqli_connect("localhost", "root", "", "mess");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $v = $_COOKIE['user'];
        if (isset($_POST['ses'])) {
            $t = getfid($t, $_POST['ses']);
            $qy = "SELECT * FROM feedbackcheck WHERE username='$v' AND id='$t'";
            $res = mysqli_query($con, $qy) or die("Query Failed(18): " . mysqli_error($con));
            if (mysqli_num_rows($res) == 0) {
                mysqli_query($con, "INSERT INTO  `mess`.`feedbackcheck` (`num` ,`id` ,`username`) VALUES (NULL ,'$t',  '$v')");
                if (isset($_REQUEST['quality']) && isset($_REQUEST['nutrition']) && isset($_REQUEST['taste'])) {
                    $c1 = average($_REQUEST['quality']);
                    $c2 = average($_REQUEST['nutrition']);
                    $c3 = average($_REQUEST['taste']);
                    
                    $rr = $_REQUEST['day'];
                    $tt = $_REQUEST['ses'];
                    $query = "SELECT * FROM feedback WHERE day='$rr' AND ses='$tt'";
                    $result = mysqli_query($con, $query) or die("Query Failed(18): " . mysqli_error($con));
                    if ($result == null) {
                        echo 'No data is retrieved from database';
                    } else {
                        $row_cnt = mysqli_num_rows($result);
                        $row = mysqli_fetch_array($result);
                        $counter = $row["count"];
                        $q1 = $row["ques1"];
                        $q2 = $row["ques2"];
                        $q3 = $row["ques3"];
                        $num = $counter + 1;
                        $val1 = ($q1 * $counter + $c1) / $num;
                        $val2 = ($q2 * $counter + $c2) / $num;
                        $val3 = ($q3 * $counter + $c3) / $num;
                        $sql = "UPDATE feedback SET ques1=$val1,ques2=$val2,ques3=$val3,count=$num WHERE day='$_POST[day]' AND ses='$_POST[ses]'";
                        mysqli_query($con, $sql);
                        if (!mysqli_query($con, $sql)) {
                            die('Error: ' . mysqli_error($con));
                        }
                        ?>
                        <h1>The results are </h1>
                        <?php
                        echo "<font color='red'>Your response has been added</br></font>";
                        
                        echo "Rating of food in terms of quality and hygine=" . rateit($val1) . "</br>";
                        echo "rating of food in terms of nutrition=" . rateit($val2) . "</br>";
                        echo "rating of food in terms of taste =" . rateit($val3) . "</br>";
                    }
                    if ($result != null) {
                        mysqli_free_result($result);
                    }
                } else {
                    ?>
                    <script>
                        alert("You have not checked one of the question");
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    alert('you have already given the response for the given day and time');
                </script>
                <?php
            }
        }
 else {
     ?>
                <script>
                    alert('You have not checked either day or time');
                </script>
                <?php
 }
        mysqli_close($con);

        function average($rate) {
            $c = 0;
            switch ($rate) {
                case 'bad':$c = 1;
                    break;
                case 'below average':$c = 2;
                    break;
                case 'average':$c = 3;
                    break;
                case 'good':$c = 4;
                    break;
                case 'very good':$c = 5;
                    break;
            }
            return $c;
        }

        function rateit($rate) {
            $c = NULL;
            if ($rate >=0 && $rate <= 1) {
                $c = "Bad";
            } elseif ($rate > 1 && $rate <= 2) {
                $c = "Below Average";
            } elseif ($rate > 2 && $rate <= 3) {
                $c = "Average";
            } elseif ($rate > 3 && $rate <= 4) {
                $c = "Good";
            }
            elseif ($rate > 4 && $rate <= 5) {
                $c = "Very Good";
            }
            return $c;
        }

        function getfid($day, $time) {
            $c = 0;
            $d = 0;
            switch ($day) {
                case 'sunday':$c = 0;
                    break;
                case 'monday':$c = 1;
                    break;
                case 'tuesday':$c = 2;
                    break;
                case 'wednesday':$c = 3;
                    break;
                case 'thursday':$c = 4;
                    break;
                case 'friday':$c = 5;
                    break;
                case 'saturday':$c = 6;
                    break;
            }

            switch ($time) {
                case 'breakfast':$d = 1;
                    break;
                case 'lunch':$d = 2;
                    break;
                case 'snacks':$d = 3;
                    break;
                case 'dinner':$d = 4;
                    break;
            }
            return $c * 4 + $d;
        }
        ?>

    </body>
</html>
