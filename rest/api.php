<?php 
header("Content-Type:application/json");
if (isset($_GET['ID']) && $_GET['ID']!="") {
include('connection.php');
$ID = $_GET['ID'];
//printf("Valid: %s ",$ID);
$result = mysqli_query(
	$conn,
	"SELECT * FROM `qr_table_database` WHERE ID=$ID");

if (mysqli_num_rows($result)>0) {
	// echo "Fetch sucess";
	$row = mysqli_fetch_array($result);

	$name = $row['Name'];
	$picture = $row['Picture'];
	$price = $row['Price'];
	$country = $row['Country'];
	$name_company = $row['Name_company'];
	$phone = $row['Phone'];
	$place = $row['Place'];
	$code = $row['Code'];
	$description = $row['Description'];
	response($name,$picture,$price,$country,$name_company,$phone,$place,$code,$description);
	mysqli_close($conn);
	
}
	 else {
		response(NULL, NULL, 200,"No Record Found");
	}
	} else {
		response(NULL, NULL, 400,"Invalid Request");
	}

	function  response($name,$picture,$price,$country,$name_company,$phone,$place,$code,$description)
	{
		 $response['Name'] = $name;
		 $response['Picture'] = $picture;
		 $response['Price'] = $price;
		 $response['Country'] = $country;
		 $response['Name_company'] = $name_company;
		 $response['Phone'] = $phone;
		 $response['Place'] = $place;
		 $response['Code'] = $code;
		 $response['Description'] = $description;

		 $json_response = json_encode($response,JSON_UNESCAPED_UNICODE );
		 echo $json_response;
	}


 ?>