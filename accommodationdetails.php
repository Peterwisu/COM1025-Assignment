<html>
    <header>
        <title>
            Accommodation Details
        </title>
        <style>
            
            h1 {
            font-family: 'Raleway', sans-serif;
            font-weight: lighter;
            font-size: 30px;
            color:seashell;
            text-align: center;
            height: 50px;
            width: 100%;
            background-color: #2b4170;
            border-radius: 25px;
            border: 1px solid #2b4170;
            
            } 
            table {
                    font-family: 'Raleway', sans-serif;
                    font-weight: lighter;
                    
                    font-size: 35px; 
                    text-align: center
                }
            .center {
                    margin-left: auto;
                     margin-right: auto;
                }
            td {
                font-family: 'Courier New', monospace;
            }
            th{
                font-family: 'Courier New', monospace;
            }
        </style>

    </header>
    <body>
        
        <h1 style="text-align:center">University of Surrey Accommodations Details </h1>
        <p style="text-align:center"><a  style="color: red;" href="http://localhost:8080/web.html">*****Click Here to go back to Register Form*****</a> </p>
        <?php

$severname ="localhost";
$username = "root";
$password ="";
$dbname ="University_Accommodation";

//Create connection to MYSQL
$conn = new mysqli($severname,$username ,$password ,$dbname);
//Check that the connection is success or not if not call function die() to exit
if($conn->connect_error){
    die("Connect failed:".$conn->connect_error);
}

/**Query for retriving data from database to show in a web page */
$queryAcc ="SELECT * from accommodation";
$queryBand ="SELECT * from Band";

//retrive data using query()
$accommodation = $conn->query($queryAcc);
$band =$conn->query($queryBand);


//if row in tables accommodation in database is not zero(0)
if($accommodation->num_rows>0){

    echo '<table class="center" id="table" border=1 style="width:90%"><tr><th colspan="6">List of Accommodation :</th> </tr><tr><th>Accommodation ID</th><th>Accommodation Name</th><th> Band</th><th> CarPark</th><th>Postcode</th><th>Inside Campus</th></tr>';
    while($row = $accommodation->fetch_assoc()){
        echo "<tr><td>".$row["Acc_ID"]."</td><td>".$row["Acc_Name"]."</td><td>".$row["Acc_Band"]."</td><td>".$row["Acc_CarPark"]."</td><td>".$row["Acc_Postcode"]."</td><td>".$row["Acc_Incampus"]."</td></tr><br>";
    }
    echo "</table>";
}else{
    echo" 0 results";
}
//if row in tables band in database is not zero(0)
if($band->num_rows>0){

    echo '<table class="center" border=1 style="width:90%"><tr><th colspan="7">Band Details:</th> </tr><tr><th>Band</th><th>Band Name</th><th>Price £(per week)</th><th> Room Share</th><th>Kitchen Share</th><th>Toilet Share</th><th>Room Space (m²) </th></tr>';
    while($row = $band->fetch_assoc()){
        echo "<tr><td>".$row["Band_ID"]."</td><td>".$row["Band_Name"]."</td><td>".$row["Band_Price"]."</td><td>".$row["Band_RoomShare"]."</td><td>".$row["Band_KitchenShare"]."</td><td>".$row["Band_ToiletShare"]."</td><td>".$row["Band_RoomSpace"]."</td></tr><br>";
    }
    echo "</table>";
}else{
    echo" 0 results";
}

//Free result
$accommodation -> free_result();
$band -> free_result();


//close connection
$conn->close();
?>


<p style="text-align:center">
<a  style="color: red;" href="http://localhost:8080/web.html">*****Click Here to go back to Register Form*****</a>
 </p>
    </body>
</html>