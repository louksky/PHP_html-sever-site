<?php
	//signgup
	$servername = "localhost";
	$username = "user";
	$password = "password";
	$dbname = "louk&oshri";

		// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 


	$sql = "INSERT INTO user (email,name,fname,password)
				VALUES ('"++"', '"++"', '"++"', '"++"')";

	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} 	else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<?php
	//signgup
	$servername = "https://sg2nlsmysqladm1.secureserver.net/dgrid55/1";
	$username = "studDB19a";
	$password = "stud19DB1!";
	$dbname = "studDB19a";

		// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 


	$sql = "INSERT INTO tb_user_222 (Name,Address,Phone,Email,Password,admin)
				VALUES ('"++"', '"++"', '"++"', '"++"')";

	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} 	else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<?php
//load products
	$servername = "localhost";
	$username = "user";
	$password = "password";
	$dbname = "louk&oshri";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from product ";
$result = $conn->query($sql);
$i = 0;
if ($result->num_rows > 0) {
   
	//let user in 
    while($row = $result->fetch_assoc()) {
	   i++;
    }
} else {
	//let regular page in no user 
    echo "0 results";
}
$conn->close();
?>

<?php
//load products
	$servername = "localhost";
	$username = "user";
	$password = "password";
	$dbname = "louk&oshri";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from product ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row  product.name product.description product.imagepath product.instractions product.rate
    while($row = $result->fetch_assoc()) {
	    echo "<div class="mealbox"><img src=". $row["imagepath"]." alt=". $row["name"].">  <div class="text-block"> 
            <h4>". $row["name"]."</h4>

          </div></div> "
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>