<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>feeedback result</title>
<link rel="stylesheet" href="feedbackresultstyle.css" type="text/css" />
<style type="text/css">
		body{
			font-family:"Calibri";
			background: url(resultbackground.jpg) repeat  center fixed;
			background-position: fixed;
		}
                </style>
</head>
<body>
     <div id="back">
      <? phpsetcookie("already_given", 0, time() + 3600);
      setcookie("feedback_button_checked", 1, time() + 3600);?>
     <h2><u><a href="feedback.php">Back To Feedback</a></u></h2>
     </div>
    <div id="op">
    <h1>Feedback Results</h1>
    </div>
     <?php
        $con = mysqli_connect("localhost", "root", "", "mess");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        ?>


    <div id="wrapper">
<ul class="acc" id="acc">
	<li>
		<h3>Sunday</h3>
		<div class="acc-section">
			<div class="acc-content">
				<ul class="acc" id="nested">
					<li>
						<h3>Breakfast</h3>
						<div class="acc-section">
							<div class="acc-content">
							 <?php
                            $r1 = "SELECT * FROM feedback WHERE fid='1'";    //here r1 is the query send for selecting sunday's breakfast
                             $res1 = mysqli_query($con, $r1) or die("Query Failed(18): " . mysqli_error($con));
                            $row1 = mysqli_fetch_array($res1);                //array containing info about counter and rating
                            $counter1 = $row1["count"];						//maintains no. of students who have given the feedback
                            $q1 = $row1["ques1"];								//contains rating for quality and hygiene
                            $q2 = $row1["ques2"];								//contains rating for nutrition
                            $q3 = $row1["ques3"];									//contains rating for taste
                            echo "<p><h2>Feedback Counter : ".$counter1."</h2></p>" ;
                            echo "<p><h2>Quality & hygiene : ".rateit($q1)."</h2></p>" ;     //rateit() convert numeral to its string equivalent of rating
                            echo "<p><h2>Nutrition : ".rateit($q2)."</h2></p>" ;
                            echo "<p><h2>Taste : ".rateit($q3)."</h2></p>" ;
                            ?>	
							</div>
						</div>
					</li>
					<li>
						<h3>Lunch</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r2 = "SELECT * FROM feedback WHERE fid='2'";          //here r1 is the query send for selecting sunday's lunch
                            $res2 = mysqli_query($con, $r2) or die("Query Failed(18): " . mysqli_error($con));
                            $row2 = mysqli_fetch_array($res2);							//array containing info about counter and rating
                            $counter2 = $row2["count"];
                            $q4 = $row2["ques1"];									//contains rating for quality and hygiene
                            $q5 = $row2["ques2"];									//contains rating for nutrition
                            $q6 = $row2["ques3"];										//contains rating for taste
                            echo "<p><h2>Feedback Counter :".$counter2."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q4)."</h2></p>" ;	//rateit() convert numeral to its string equivalent of rating
                            echo "<p><h2>Nutrition :".rateit($q5)."</h2></p>" ;
                            echo "<p><h2>Taste :".rateit($q6)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Snacks</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php $r3 = "SELECT * FROM feedback WHERE fid='3'";
                            $res3 = mysqli_query($con, $r3) or die("Query Failed(18): " . mysqli_error($con));
                            $row3 = mysqli_fetch_array($res3);
                            $counter3 = $row3["count"];
                            $q7 = $row3["ques1"];
                            $q8 = $row3["ques2"];
                            $q9 = $row3["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter3."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q7)."</h2></p>";
                            echo "<p><h2>Nutrition :</h2></p>".rateit($q8) ;
                            echo "<p><h2>Taste :".rateit($q9)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
                                    <li>
						<h3>Dinner</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r4 = "SELECT * FROM feedback WHERE fid='4'";
                            $res4 = mysqli_query($con, $r4) or die("Query Failed(18): " . mysqli_error($con));
                            $row4 = mysqli_fetch_array($res4);
                            $counter4 = $row4["count"];
                            $q10 = $row4["ques1"];
                            $q11 = $row4["ques2"];
                            $q12 = $row4["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter4."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q10)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q11)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q12)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</li>
    
    <li>
    <h3>Monday</h3>
		<div class="acc-section">
			<div class="acc-content">
				<ul class="acc" id="nested1">
					<li>
						<h3>Breakfast</h3>
						<div class="acc-section">
							<div class="acc-content">
							<?php
                            $r5 = "SELECT * FROM feedback WHERE fid='5'";
                            $res5 = mysqli_query($con, $r5) or die("Query Failed(18): " . mysqli_error($con));
                            $row5 = mysqli_fetch_array($res5);
                            $counter5 = $row5["count"];
                            $q13 = $row5["ques1"];
                            $q14 = $row5["ques2"];
                            $q15 = $row5["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter5."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q13)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q14)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q15)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Lunch</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r6 = "SELECT * FROM feedback WHERE fid='6'";
                            $res6 = mysqli_query($con, $r6) or die("Query Failed(18): " . mysqli_error($con));
                            $row6 = mysqli_fetch_array($res6);
                            $counter6 = $row6["count"];
                            $q16 = $row6["ques1"];
                            $q17 = $row6["ques2"];
                            $q18= $row6["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter6."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q16)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q17)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q18)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Snacks</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r7 = "SELECT * FROM feedback WHERE fid='7'";
                            $res7 = mysqli_query($con, $r7) or die("Query Failed(18): " . mysqli_error($con));
                            $row7 = mysqli_fetch_array($res7);
                            $counter7 = $row7["count"];
                            $q19 = $row7["ques1"];
                            $q20 = $row7["ques2"];
                            $q21 = $row7["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter7."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q19)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q20)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q21)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
                                    <li>
						<h3>Dinner</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r8 = "SELECT * FROM feedback WHERE fid='8'";
                            $res8 = mysqli_query($con, $r8) or die("Query Failed(18): " . mysqli_error($con));
                            $row8 = mysqli_fetch_array($res8);
                            $counter8 = $row8["count"];
                            $q22 = $row8["ques1"];
                            $q23 = $row8["ques2"];
                            $q24 = $row8["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter8."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q22)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q23)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q24)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</li>
    
    
    <li>
    <h3>Tuesday</h3>
		<div class="acc-section">
			<div class="acc-content">
				<ul class="acc" id="nested2">
					<li>
						<h3>Breakfast</h3>
						<div class="acc-section">
							<div class="acc-content">
							<?php
                            $r9 = "SELECT * FROM feedback WHERE fid='9'";
                            $res9 = mysqli_query($con, $r9) or die("Query Failed(18): " . mysqli_error($con));
                            $row9 = mysqli_fetch_array($res9);
                            $counter9 = $row9["count"];
                            $q25 = $row9["ques1"];
                            $q26 = $row9["ques2"];
                           $q27 = $row9["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter9."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q25)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q26)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q27)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Lunch</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r10 = "SELECT * FROM feedback WHERE fid='10'";
                            $res10 = mysqli_query($con, $r10) or die("Query Failed(18): " . mysqli_error($con));
                            $row10 = mysqli_fetch_array($res10);
                            $counter10 = $row10["count"];
                            $q28 = $row10["ques1"];
                            $q29 = $row10["ques2"];
                            $q30= $row10["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter10."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q28)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q29)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q30)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Snacks</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r11 = "SELECT * FROM feedback WHERE fid='11'";
                            $res11 = mysqli_query($con, $r11) or die("Query Failed(18): " . mysqli_error($con));
                            $row11 = mysqli_fetch_array($res11);
                            $counter11 = $row11["count"];
                            $q31 = $row11["ques1"];
                            $q32 = $row11["ques2"];
                            $q33 = $row11["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter11."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q31)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q32)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q33)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
                                    <li>
						<h3>Dinner</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r12 = "SELECT * FROM feedback WHERE fid='12'";
                            $res12 = mysqli_query($con, $r12) or die("Query Failed(18): " . mysqli_error($con));
                            $row12 = mysqli_fetch_array($res12);
                            $counter12 = $row12["count"];
                            $q34 = $row12["ques1"];
                            $q35 = $row12["ques2"];
                            $q36 = $row12["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter12."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q34)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q35)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q36)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</li>
    
    <li>
    <h3>Wednesday</h3>
		<div class="acc-section">
			<div class="acc-content">
				<ul class="acc" id="nested3">
					<li>
						<h3>Breakfast</h3>
						<div class="acc-section">
							<div class="acc-content">
							<?php
                            $r13 = "SELECT * FROM feedback WHERE fid='13'";
                            $res13 = mysqli_query($con, $r13) or die("Query Failed(18): " . mysqli_error($con));
                            $row13 = mysqli_fetch_array($res13);
                            $counter13 = $row13["count"];
                            $q37 = $row13["ques1"];
                            $q38 = $row13["ques2"];
                           $q39 = $row13["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter13."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q37)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q38)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q39)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Lunch</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r14 = "SELECT * FROM feedback WHERE fid='14'";
                            $res14 = mysqli_query($con, $r14) or die("Query Failed(18): " . mysqli_error($con));
                            $row14 = mysqli_fetch_array($res14);
                            $counter14 = $row14["count"];
                            $q40 = $row14["ques1"];
                            $q41 = $row14["ques2"];
                            $q42= $row14["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter14."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q40)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q41)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q42)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Snacks</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r15 = "SELECT * FROM feedback WHERE fid='15'";
                            $res15 = mysqli_query($con, $r15) or die("Query Failed(18): " . mysqli_error($con));
                            $row15 = mysqli_fetch_array($res15);
                            $counter15 = $row15["count"];
                            $q43 = $row15["ques1"];
                            $q44 = $row15["ques2"];
                            $q45 = $row15["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter15."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q43)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q44)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q45)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
                                    <li>
						<h3>Dinner</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r16 = "SELECT * FROM feedback WHERE fid='16'";
                            $res16 = mysqli_query($con, $r16) or die("Query Failed(18): " . mysqli_error($con));
                            $row16 = mysqli_fetch_array($res16);
                            $counter16 = $row16["count"];
                            $q46 = $row16["ques1"];
                            $q47 = $row16["ques2"];
                            $q48 = $row16["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter16."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q46)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q47)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q48)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</li>
    
    
    
    
    
    <li>
    <h3>Thursday</h3>
		<div class="acc-section">
			<div class="acc-content">
				<ul class="acc" id="nested4">
					<li>
						<h3>Breakfast</h3>
						<div class="acc-section">
							<div class="acc-content">
							<?php
                            $r17 = "SELECT * FROM feedback WHERE fid='17'";
                            $res17 = mysqli_query($con, $r17) or die("Query Failed(18): " . mysqli_error($con));
                            $row17 = mysqli_fetch_array($res17);
                            $counter17 = $row17["count"];
                            $q49 = $row17["ques1"];
                            $q50 = $row17["ques2"];
                           $q51= $row17["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter17."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q49)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q50)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q51)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Lunch</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r18 = "SELECT * FROM feedback WHERE fid='18'";
                            $res18 = mysqli_query($con, $r18) or die("Query Failed(18): " . mysqli_error($con));
                            $row18 = mysqli_fetch_array($res18);
                            $counter18 = $row18["count"];
                            $q52 = $row18["ques1"];
                            $q53 = $row18["ques2"];
                            $q54= $row18["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter18."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q52)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q53)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q54)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Snacks</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r19 = "SELECT * FROM feedback WHERE fid='19'";
                            $res19 = mysqli_query($con, $r19) or die("Query Failed(18): " . mysqli_error($con));
                            $row19 = mysqli_fetch_array($res19);
                            $counter19 = $row19["count"];
                            $q55 = $row19["ques1"];
                            $q56 = $row19["ques2"];
                            $q57 = $row19["ques3"];
                           echo "<p><h2>Feedback Counter :".$counter19."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q55)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q56)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q57)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
                                    <li>
						<h3>Dinner</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r20 = "SELECT * FROM feedback WHERE fid='20'";
                            $res20 = mysqli_query($con, $r20) or die("Query Failed(18): " . mysqli_error($con));
                            $row20 = mysqli_fetch_array($res20);
                            $counter20 = $row20["count"];
                            $q58 = $row20["ques1"];
                            $q59 = $row20["ques2"];
                            $q60 = $row20["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter20."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q58)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q59)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q60)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</li>
    
    <li>
    <h3>Friday</h3>
		<div class="acc-section">
			<div class="acc-content">
				<ul class="acc" id="nested5">
					<li>
						<h3>Breakfast</h3>
						<div class="acc-section">
							<div class="acc-content">
							<?php
                            $r21 = "SELECT * FROM feedback WHERE fid='21'";
                            $res21 = mysqli_query($con, $r21) or die("Query Failed(18): " . mysqli_error($con));
                            $row21 = mysqli_fetch_array($res21);
                            $counter21 = $row21["count"];
                            $q61= $row21["ques1"];
                            $q62 = $row21["ques2"];
                           $q63= $row21["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter21."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q61)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q62)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q63)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Lunch</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r22 = "SELECT * FROM feedback WHERE fid='22'";
                            $res22 = mysqli_query($con, $r22) or die("Query Failed(18): " . mysqli_error($con));
                            $row22 = mysqli_fetch_array($res22);
                            $counter22 = $row22["count"];
                            $q64 = $row22["ques1"];
                            $q65 = $row22["ques2"];
                            $q66= $row22["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter22."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q64)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q65)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q66)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Snacks</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r23 = "SELECT * FROM feedback WHERE fid='23'";
                            $res23 = mysqli_query($con, $r23) or die("Query Failed(18): " . mysqli_error($con));
                            $row23 = mysqli_fetch_array($res23);
                            $counter23 = $row23["count"];
                            $q67 = $row23["ques1"];
                            $q68 = $row23["ques2"];
                            $q69 = $row23["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter23."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q67)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q68)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q69)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
                                    <li>
						<h3>Dinner</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r24 = "SELECT * FROM feedback WHERE fid='24'";
                            $res24 = mysqli_query($con, $r24) or die("Query Failed(18): " . mysqli_error($con));
                            $row24 = mysqli_fetch_array($res24);
                            $counter24 = $row24["count"];
                            $q70 = $row24["ques1"];
                            $q71 = $row24["ques2"];
                            $q72 = $row24["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter24."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q70)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q71)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q72)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</li>
    
    
     <li>
    <h3>Saturday</h3>
		<div class="acc-section">
			<div class="acc-content">
				<ul class="acc" id="nested6">
					<li>
						<h3>Breakfast</h3>
						<div class="acc-section">
							<div class="acc-content">
							<?php
                            $r25 = "SELECT * FROM feedback WHERE fid='25'";
                            $res25 = mysqli_query($con, $r25) or die("Query Failed(18): " . mysqli_error($con));
                            $row25 = mysqli_fetch_array($res25);
                            $counter25 = $row25["count"];
                            $q73= $row25["ques1"];
                            $q74 = $row25["ques2"];
                           $q75= $row25["ques3"];
                           echo "<p><h2>Feedback Counter :".$counter25."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q73)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q74)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q75)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Lunch</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r26 = "SELECT * FROM feedback WHERE fid='26'";
                            $res26 = mysqli_query($con, $r26) or die("Query Failed(18): " . mysqli_error($con));
                            $row26 = mysqli_fetch_array($res26);
                            $counter26 = $row26["count"];
                            $q76 = $row26["ques1"];
                            $q77 = $row26["ques2"];
                            $q78= $row26["ques3"];
                            echo "<p><h2>Feedback Counter :".$counter26."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q76)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q77)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q78)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
					<li>
						<h3>Snacks</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r27= "SELECT * FROM feedback WHERE fid='27'";
                            $res27 = mysqli_query($con, $r27) or die("Query Failed(18): " . mysqli_error($con));
                            $row27 = mysqli_fetch_array($res27);
                            $counter27 = $row27["count"];
                            $q79 = $row27["ques1"];
                            $q80 = $row27["ques2"];
                            $q81 = $row27["ques3"];
                             echo "<p><h2>Feedback Counter :".$counter27."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q79)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q80)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q81)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
                                    <li>
						<h3>Dinner</h3>
						<div class="acc-section">
							<div class="acc-content">
								<?php
                            $r28 = "SELECT * FROM feedback WHERE fid='28'";
                            $res28 = mysqli_query($con, $r28) or die("Query Failed(18): " . mysqli_error($con));
                            $row28 = mysqli_fetch_array($res28);
                            $counter28 = $row28["count"];
                            $q82 = $row28["ques1"];
                            $q83 = $row28["ques2"];
                            $q84 = $row28["ques3"];
                             echo "<p><h2>Feedback Counter :".$counter28."</h2></p>";
                            echo "<p><h2>Quality & hygiene :".rateit($q82)."</h2></p>" ;
                            echo "<p><h2>Nutrition :".rateit($q83)."</h2></p>";
                            echo "<p><h2>Taste :".rateit($q84)."</h2></p>" ;
                            ?>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</li>
</ul>
        </div>
    
    
    <?php
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
    ?>

<script type="text/javascript" src="feedbackscript.js"></script>

<script type="text/javascript">

var parentAccordion=new TINY.accordion.slider("parentAccordion");
parentAccordion.init("acc","h3",1,-1);

var nestedAccordion=new TINY.accordion.slider("nestedAccordion");
nestedAccordion.init("nested","h3",1,-1,"acc-selected");

var nestedAccordion1=new TINY.accordion.slider("nestedAccordion1");
nestedAccordion1.init("nested1","h3",1,-1,"acc-selected");

var nestedAccordion2=new TINY.accordion.slider("nestedAccordion2");
nestedAccordion2.init("nested2","h3",1,-1,"acc-selected");

var nestedAccordion3=new TINY.accordion.slider("nestedAccordion3");
nestedAccordion3.init("nested3","h3",1,-1,"acc-selected");

var nestedAccordion4=new TINY.accordion.slider("nestedAccordion4");
nestedAccordion4.init("nested4","h3",1,-1,"acc-selected");

var nestedAccordion5=new TINY.accordion.slider("nestedAccordion5");
nestedAccordion5.init("nested5","h3",1,-1,"acc-selected");

var nestedAccordion6=new TINY.accordion.slider("nestedAccordion6");
nestedAccordion6.init("nested6","h3",1,-1,"acc-selected");
</script>

</body>
</html>