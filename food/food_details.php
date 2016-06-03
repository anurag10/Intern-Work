<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="food.css" />
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="food.js"></script>
	<title>Food Requirement</title>
</head>
<body>

<!-- To display Date -->
<div>
	<div id="title">
	<h2>Please Fill Details</h2>
	<?php
	echo "<h3>Fill details for ".date("d-m-Y-l")."</h3>" ; 
	?>

	<!-- <h4 id="date"></h4> -->
	</div>
    <br />
	<!--script type="text/javascript">
		document.getElementById('date').innerHTML = Date() ;
	</script-->

    <div id="form">
	     	 
		<form action="food.php" method="post">
		     <select id="employees" name="employees">
			  <option value="" disabled="disabled" selected="selected">Select your name</option>
			  <option value="e1">Employee 1</option>
			  <option value="e2">Employee 2</option>
			  <option value="e3">Employee 3</option>
			  <option value="e4">Employee 4</option>
     		 </select> 
			 <br />
			 <br />
			 
			 <select id="foodType" name="foodType">
     		  <option value="" disabled="disabled" selected="selected">Food Type</option> 
			  <option value="lunch">Lunch</option>
			  <option value="dinner">Dinner</option>
			 </select>
			 <br /><br />

			 <select id="havingFood" name="havingFood">
     		  <option value="" disabled="disabled" selected="selected">Having Food Today??</option> 
			  <option value="yes">Yes</option>
			  <option value="no">No</option>
			 </select> 
             <br />
             <br />
           <div class="if_yes">
           	
             <h3>Now Fill Food Details i.e. How Much Would You Eat??</h3>
		  
		  <label>Chapati:</label><br />	 
          <input class="food_detail chapati" type="number" name="chapati"><br /><br />

          <label>Rice:</label><br />	 
          <input class="food_detail rice" type="number" name="rice" placeholder="How many bowls??"><br /><br />

          <!--label>Sabji</label>	 
          <input class=" food_detail sabji" type="number" name="sabji" placeholder="How many bowls??" -->

          <label>Dal:</label><br />	 
          <input class="food_detail dal" type="number" name="dal" placeholder="How many bowls??"><br /><br />

           </div>
          <button name="submit" type="submit">Submit</button>
		</form>
	</div>
</div>


</body>
</html>