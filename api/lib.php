<?php 

$servername = "localhost";
$username = "root";
$db="app_db";
$password = "";
$allowed_queries = ["SELECT"];
$dev = true;
// Create connection
$conn = new mysqli($servername, $username, $password,$db );



// Check connection
if ($conn->connect_error) {
  echo"Connection Wahala";
    exit;

}



function run_query(string $query){
        try{
        global $conn;
        //$query = $conn->escape_string($query);
        $result = $conn->query($query);

        if (str_starts_with($query,"SELECT") ) {
            if(!$result){
                return 0;
            }
            if($result->num_rows == 0){
                return 0;
            }
            // output data of each row
            $res = [];
            while($row = $result->fetch_assoc()) {
            // array_push($res,json_encode($row));
                array_push($res,$row);
            }
            return $res;

        } else {
            if($result  === TRUE){
                return 1;
            }else{
                return 0;

            }
        }
    }catch(mysqli_sql_exception $e){
        return 0;
    }
    
    
}

function run_query_single(string $query){
    try{
    global $conn;
    //$query = $conn->escape_string($query);
    $result = $conn->query($query);

    if (str_starts_with($query,"SELECT") ) {
        if(!$result){
            return 0;
        }
        if($result->num_rows == 0){
            return 0;
        }
        // output data of each row
        $res = [];
        while($row = $result->fetch_assoc()) {
        // array_push($res,json_encode($row));
            return $row;
        }
        return $res;

    } else {
        if($result  === TRUE){
            return 1;
        }else{
            return 0;

        }
    }
}catch(mysqli_sql_exception $e){
    return 0;
}


}

function popup(string $message){
    global $dev;
    if($dev){echo "
        <script> alert('".$message."')</script>
    ";}
}


?>


