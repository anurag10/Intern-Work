<?php
//echo "Checking Connection..."  ; 
$connection = mysql_connect("localhost", "root", "secret"); // Establishing Connection with Server
//echo "Step 1 Done..."  ;
$db = mysql_select_db("food_data", $connection); // Selecting Database from Server
//echo "Step 2 Done..."  ;
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
//echo "Step 3 Done..."  ;
$name = $_POST['employees'];
$foodType = $_POST['foodType'];
$havingFood = $_POST['havingFood'];
$chapati = $_POST['chapati'];
$rice = $_POST['rice'];
$dal = $_POST['dal'] ;
//$count = 1 ;
$todayDate = date('') ;

//echo "Step 4 Done..."  ;
if($name !=''){
//Insert Query of SQL
$query = mysql_query("insert into food_user(name, food_type, having_food, chapati , rice , dal) values ('$name', '$foodType', '$havingFood', '$chapati' , '$rice' , '$dal')");
echo "<br/><br/><span>Data Inserted successfully...!!</span><br>";

$riceCount = mysql_query("select sum(chapati), sum(rice), sum(dal) from food_user ");

$countArray = mysql_fetch_row($riceCount) ;
echo "Chapati count is ".$countArray[0]."<br />" ;
echo "Rice Bowl count is ".$countArray[1]."<br />" ;
echo "Dal Bowl count is ".$countArray[2]."<br />" ;
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}


//error_reporting default value & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED
mysql_close($connection); // Closing Connection with Server
?>