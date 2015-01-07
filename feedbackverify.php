<html>
    <head>
        <title>results of feedback</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
        </style>
    </head>
    <body>
        <?php
        $p = 0;
        $v = $_COOKIE['user'];
        $count = 0;

        $date = date('Y-m-d');
        date_default_timezone_set("Asia/Calcutta");
        $jd = cal_to_jd(CAL_GREGORIAN, date("m"), date("d") - 1, date("Y")) . "";
        $day = strtolower(jddayofweek($jd, 1) . "");

        $p = date('Y-m-d');
        $current = date_create($p);
        date_sub($current, date_interval_create_from_date_string('7 days'));
        $date1 = date_format($current, 'Y-m-d');

        $con = mysqli_connect("localhost", "root", "", "mess");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        if (isset($_POST['ses']) && isset($_REQUEST['quality']) && isset($_REQUEST['nutrition']) && isset($_REQUEST['taste'])) {
            $feedcheck = mysqli_query($con, "SELECT * FROM feedbackcheck ORDER BY date");
            $j=date_create($date1);
            while ($rw = mysqli_fetch_array($feedcheck)) {
                $date2 = date_create($rw['date']);
                if (date_format($j, 'Y-m-d') > date_format($date2, 'Y-m-d')) {
                   
                    if ($id == 0) {
                        $ql = "UPDATE feedback SET ques1=0,ques2=0,ques3=0,count=0 WHERE day='sunday'";
                        mysqli_query($con, $ql);
                    } elseif ($id == 1) {
                        $ql = "UPDATE feedback SET ques1=0,ques2=0,ques3=0,count=0 WHERE day='monday'";
                        mysqli_query($con, $ql);
                    } elseif ($id == 2) {
                        $ql = "UPDATE feedback SET ques1=0,ques2=0,ques3=0,count=0 WHERE day='tuesday'";
                        mysqli_query($con, $ql);
                    } elseif ($id == 3) {
                        $ql = "UPDATE feedback SET ques1=0,ques2=0,ques3=0,count=0 WHERE day='wednesday'";
                        mysqli_query($con, $ql);
                    } elseif ($id == 4) {
                        $ql = "UPDATE feedback SET ques1=0,ques2=0,ques3=0,count=0 WHERE day='thursday'";
                        mysqli_query($con, $ql);
                    } elseif ($id == 5) {
                        $ql = "UPDATE feedback SET ques1=0,ques2=0,ques3=0,count=0 WHERE day='friday'";
                        mysqli_query($con, $ql);
                    } elseif ($id == 6) {
                        $ql = "UPDATE feedback SET ques1=0,ques2=0,ques3=0,count=0 WHERE day='saturday'";
                        mysqli_query($con, $ql);
                    }
                }
            }
           
           
            $t = getfid($day, $_POST['ses']);
            $qy = "SELECT * FROM feedbackcheck WHERE username='$v' AND id='$t'";
            $res = mysqli_query($con, $qy) or die("Query Failed(18): " . mysqli_error($con));
            if (mysqli_num_rows($res) == 0) {
                mysqli_query($con, "INSERT INTO  `mess`.`feedbackcheck` (`num` ,`date` ,`id` ,`username`) VALUES (NULL ,'2014-4-17', '$t',  '$v')");
                $c1 = average($_REQUEST['quality']);
                $c2 = average($_REQUEST['nutrition']);
                $c3 = average($_REQUEST['taste']);
                $tt = $_REQUEST['ses'];
                $query = "SELECT * FROM feedback WHERE day='$day' AND ses='$tt'";
                $result = mysqli_query($con, $query) or die("Query Failed(18): " . mysqli_error($con));
                if ($result != null) {
                    $row = mysqli_fetch_array($result);
                    $counter = $row["count"];
                    $q1 = $row["ques1"];
                    $q2 = $row["ques2"];
                    $q3 = $row["ques3"];
                    $num = $counter + 1;
                    $val1 = ($q1 * $counter + $c1) / $num;
                    $val2 = ($q2 * $counter + $c2) / $num;
                    $val3 = ($q3 * $counter + $c3) / $num;
                    $sql = "UPDATE feedback SET ques1=$val1,ques2=$val2,ques3=$val3,count=$num WHERE day='$day' AND ses='$_POST[ses]'";
                    mysqli_query($con, $sql);
                    if (!mysqli_query($con, $sql)) {
                        die('Error: ' . mysqsli_error($con));
                    }
                    mysqli_free_result($result);
                    setcookie("already_given", 0, time() + 3600);
                    setcookie("feedback_button_checked", 1, time() + 3600);
                    header("location:feedbackresult.php");
                }
            } else {
                setcookie("already_given", 1, time() + 3600);
                header("location:feedback.php");
            }
        } else {
            setcookie("feedback_button_checked", 0, time() + 3600);
            header("location:feedback.php");
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
            if ($rate >= 0 && $rate <= 1) {
                $c = "Bad";
            } elseif ($rate > 1 && $rate <= 2) {
                $c = "Below Average";
            } elseif ($rate > 2 && $rate <= 3) {
                $c = "Average";
            } elseif ($rate > 3 && $rate <= 4) {
                $c = "Good";
            } elseif ($rate > 4 && $rate <= 5) {
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
