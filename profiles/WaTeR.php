<?php 
 require 'db.php';
<<<<<<< HEAD
  $result = $conn->query("Select * from secret_word LIMIT 1");
   $result = $result->fetch(PDO::FETCH_OBJ);
   $secret_word = $result->secret_word;



=======
     $result = $conn->query("Select * from secret_word LIMIT 1");
   $result = $result->fetch(PDO::FETCH_OBJ);
   $secret_word = $result->secret_word;
>>>>>>> 7d6d1bb4d1ba8c90933a130490cf66835465927d
$query1 = "SELECT * FROM interns_data_ WHERE username='WaTeR'";;

$stmt = $conn->query($query1);

$stmt->execute();







<<<<<<< HEAD
=======

>>>>>>> 7d6d1bb4d1ba8c90933a130490cf66835465927d
      
?>

<!DOCTYPE html>
<html>
<head>
	<title>HNG INternship Task 3</title>
	<style type="text/css">
		*{
	padding: 0px;
	margin:0px auto;
	max-width: 100%;
	font-size: 100%;
}

.head{
	margin-top: 30px;
	padding: 20px;
	max-width: 90%;
	background: #5ED490;
	color: #002610;

}

.head h1{
	font-size: 40pt;
	text-align: center;
}
.compliment{
	padding: 20px;
	background: #0B4A26;
	max-width: 90%;
	font-size: 20pt;
	color: #FDFDF8;
	text-align: center;
}
.content{
	margin-top:  5px;
	padding: 20px;
	background:#6FCF97;
	max-width: 90%;
	
<<<<<<< HEAD
	color: #FDFDF8;height: 150px;
=======
	color: #FDFDF8;
>>>>>>> 7d6d1bb4d1ba8c90933a130490cf66835465927d
	text-align: center;
}
.content .header{
	color: #4D0909;
	font-size: 30pt;
	text-align: left;
	
	
}
<<<<<<< HEAD

=======
.content .phead{
	width: 90%;
	background: green;
	padding: 10px;
	color: #4D0909;
	font-size: 20pt;
	text-align: left;
}
.content .sub{
	color: #4D0909;
	font-size: 20pt;
	text-align: left;
	padding-left: 35px;	
}
>>>>>>> 7d6d1bb4d1ba8c90933a130490cf66835465927d


	</style>
}
<<<<<<< HEAD
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

=======
>>>>>>> 7d6d1bb4d1ba8c90933a130490cf66835465927d
</head>
<body>

<div class="head">
	<h1>Hi,</h1>
	<h1>I am WATER from AndroidNGR, EKITI</h1>
</div>

<div class="compliment">
	<p> a member of the HNG Internship 4.0 </p>
</div>

<div class="content">
<<<<<<< HEAD
<div class="col-lg-3">
	</div>
		<?php while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>


<div class="col-lg-6">
          <img class="img-circle" src="<?php echo $data['image_filename']; ?>" alt="Generic placeholder image" width="200" height="200">
          <h2 style="color: #000;"><?php echo $data['username']; ?>
          	<br/><small><?php echo $data['name']; ?></small></h2>

          <p class="text-primary">FULL-STACK DEVELOPER | GRAPHICS DESIGNER | LEARNER</p>
          <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
</div>

	
	<?php } ?>
<div class="col-lg-3">
	</div>

</div>
<!-- /.row -->
</body>
</html> 
=======
	<div class="compliment">
	<p> MY PROFILE </p>

</div>
<p> <br/></p>
	<div style="float: left; width: 40%;">
		<?php while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
		<p class="phead">Profle Name:</p>
		<p class="sub"><?php echo $data['name']; ?></p>
		<hr>
		<p class="phead">Profle Name:</p>
		<p class="sub"><?php echo $data['username']; ?></p>

	</div>

	<div style="float: left;width: 50%;">
<img src="<?php echo $data['image_filename']; ?>"  width="300" height="300" alt="<?php echo $data['image_filename']; ?>"/>
	</div>
	<?php } ?>
<br/><br/>

<div style="clear: both;">
		
		</div>

</body>
</html> 
>>>>>>> 7d6d1bb4d1ba8c90933a130490cf66835465927d