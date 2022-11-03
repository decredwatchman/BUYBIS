<?php 

$servername = "localhost";
$username = "root";
$db="app_db";
$password = "";
$allowed_queries = ["SELECT"];
$dev = true;
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  exit;
}

function run_query(string $query){
    global $conn;
    $query = $conn->escape_string($query);
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
    // output data of each row
    $res = [];
    while($row = $result->fetch_assoc()) {
        array_push($res,json_encode($row));
    }

    } else {
        if($result){
            return 1;
        }
    }
$conn->close();
    return 0;
}

function popup(string $message){
    global $dev;
    if($dev){echo "
        <script> alert('".$message."')</script>
    ";}
}


?>


