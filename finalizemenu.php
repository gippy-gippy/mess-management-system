<html>
<head>
	<link href="site.css" rel="stylesheet">
	<title>Finalize Menu</title>
        <style type="text/css">
            body{
                font-family:"Calibri";
                background-repeat:no-repeat center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
            }
        </style>
        <script type="text/javascript">
            function validator(){
                for(var i=1; i<=112; i+=16){
                    var j=i+1;var k=i+2;var l=i+3;var m=i+4;var n=i+5;var o=i+6;var p=i+7;var q=i+8;var r=i+9;var s=i+10;var t=i+11;var u=i+12;var v=i+13;var w=i+14;var x=i+15;
                    
                    if((document.getElementById(i).checked =="")&&(document.getElementById(j).checked =="")&&(document.getElementById(k).checked =="")&&(document.getElementById(l).checked =="")){
                        alert("please check all the radio buttons");   
                        return false;
                    }
                    if((document.getElementById(m).checked =="")&&(document.getElementById(n).checked =="")&&(document.getElementById(o).checked =="")&&(document.getElementById(p).checked =="")&&(document.getElementById(q).checked =="")){
                        alert("please check all the radio buttons");
                        return false;
                    }
                    if((document.getElementById(r).checked =="")&&(document.getElementById(s).checked =="")){
                        alert("please check all the radio buttons");
                        return false;
                    }
                    if((document.getElementById(t).checked =="")&&(document.getElementById(u).checked =="")&&(document.getElementById(v).checked =="")&&(document.getElementById(w).checked =="")&&(document.getElementById(x).checked =="")){
                        alert("please check all the radio buttons");
                        return false;
                    }
                    
                }
                return true;
            }
        </script>
</head>
<body>
	<div id="min">
	<h1>Voting Results</h1>
	<br/>
	<?php 
		$con = mysqli_connect('localhost','root','','mess');

		if(!$con){
		      echo "Failed to connect: ".mysqli_connect_error();
		}

		$id = 1;
	?>
	<form method="post" onsubmit="return validator();" action="confirmmenu.php">
	<h2>Monday</h2>
	<table width="1250" class="ex_table">
		<tr>
			<td><h3>Breakfast</h3></td>
			<td><h3>Lunch</h3></td>
			<td><h3>Snacks</h3></td>
			<td><h3>Dinner</h3></td>
		</tr>
		<tr>
			<td>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			</td>

			<td>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="monl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			</td>

			<td>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="mons" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="mons" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="mons" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="mons" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			</td>

			<td>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			<?php include 'finalizeheader.php'; ?>
            <?php if($row['items'] != " "){?>
			<input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
			<?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
            elseif($row['items'] == " "){ ?>
            <input type="radio" name="mond" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
            <?php
            }
            ?>

            <br>
			</td>
		</tr>
	</table>


        <h2>Tuesday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tueb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tueb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tueb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tueb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tueb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tueb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>

                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tueb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tueb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tuel" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tues" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tues" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tues" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tues" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="tued" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>
                </tr>
        </table>


        <h2>Wednesday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
                        
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="weds" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="weds" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="weds" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="weds" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="wedd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>
                </tr>
        </table>    


        <h2>Thursday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thub" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thub" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thub" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thub" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thub" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thub" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
                        
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thub" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thub" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thul" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thus" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thus" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thus" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thus" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="thud" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>
                </tr>
        </table>     
 

        <h2>Friday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="frib" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="frib" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="frib" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="frib" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="frib" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="frib" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
                        
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="frib" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="frib" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="fril" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="fris" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="fris" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="fris" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="fris" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="frid" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>
                </tr>
        </table>


        <h2>Saturday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
                        
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sats" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sats" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sats" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sats" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="satd" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>
                </tr>
        </table>


        <h2>Sunday</h2>
        <table width="1250" class="ex_table">
                <tr>
                        <td><h3>Breakfast</h3></td>
                        <td><h3>Lunch</h3></td>
                        <td><h3>Snacks</h3></td>
                        <td><h3>Dinner</h3></td>
                </tr>
                <tr>
                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sunb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sunb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sunb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sunb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sunb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."    ".$row['no_of_votes']." votes\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sunb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
                        
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sunb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sunb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sunl" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="suns" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="suns" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="suns" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="suns" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>

                        <td>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sund" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sund" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="monb" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sund" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sund" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sund" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sund" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        <?php include 'finalizeheader.php'; ?>
                        <?php if($row['items'] != " "){?>
                        <input type="radio" name="sund" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id']; ?>" />
                        <?php echo $row['items']."\t(".$row['no_of_votes']." votes)\n"; }
                        elseif($row['items'] == " "){ ?>
                        <input type="radio" name="sund" value="<?php echo $row['items']; ?>" id = "<?php echo $row['id'];?>" style="display:none" />
                        <?php
                        }
                        ?>
            
                        <br>
                        </td>
                </tr>
        </table>
	<?php mysqli_close($con); ?>
	<input type = "submit" value ="Submit" />
	</form>
	</div>
</body>
<html>