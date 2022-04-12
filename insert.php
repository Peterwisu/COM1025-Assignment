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



//Detail of guest

$firstname = $_POST['fname'];
$lastname  = $_POST['lname'];

/* Validation for an input value of Gender from user that should not be empty or null**/
if(empty($_POST['gender'])){
 echo "Gender is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 die();
}else{
$Gender    = $_POST['gender'];
}

$email = $_POST['email'];
$phone = $_POST['phone'];
$guest_ID =$_POST['guestID'];
$DOB  =$_POST['DOB'];


/* Validation for an input value of Guest Type from user that should not be empty or null**/
if(empty($_POST['Guest_type'])){
  echo "Guest Type is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
 }else{
  $Guest_Type    = $_POST['Guest_type'];
 }


//Detail of Visitors
$Stu_ID_From_Visitor =$_POST['Stu_IDfromVistor'];

//Detial of Department
$Acad_Department =$_POST['Acad_Department'];
$Acad_Type =$_POST['Acad_Type'];

//Detail of Student
$Stu_ID =$_POST['Stu_ID'];
$Stu_Course =$_POST['Stu_Course'];
$Stu_Type = $_POST['Stu_Type'];

//Detail of Staff
$Staff_ID =$_POST['Staff_ID'];
$Staff_Title =$_POST['Staff_Title'];
$Staff_Position =$_POST['Staff_Position'];
$Staff_Salary =$_POST['Staff_Salary'];

//Detail of Accomodation
$Acc_ID =$_POST['Acc_ID'];

//Detail of Payment
$Payment_Type =$_POST['Payment_Type'];
  

$Payment_TransferNo =$_POST['Payment_TransferNo'];

$Payment_CreditCard =$_POST['Payment_CreditCard'];

$Payment_Date =$_POST['Payment_Date'];

//Detail of Book Duration
$Book_Start =$_POST['Start'];
$Book_End =$_POST['End'];


/* Validation for an input value from user that should not be empty or null**/

if(empty($firstname)){
  echo "First Name is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif(empty($lastname)){
  echo "Last Name is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif(empty($email)){
  echo "Email is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif(empty($phone)){
  echo "Phone is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif(empty($guest_ID)){
  echo "Guest ID is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif(empty($DOB)){
  echo "Date of birth is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Guest_Type=="Visitor"&&empty($Stu_ID_From_Visitor)){
  echo "Student ID of a student you visiting  is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Guest_Type=="Academic"&&empty($Acad_Department)){
  echo "Academic  Department is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Guest_Type=="Academic"&&$Acad_Type=="Student"&&(empty($Stu_ID))){
  echo "Student ID is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Guest_Type=="Academic"&&$Acad_Type=="Student"&&(empty($Stu_Course))){
  echo "Student Course is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Guest_Type=="Staff"&&$Acad_Type=="Staff"&&(empty($Staff_ID))){
  echo "Staff ID is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Guest_Type=="Academic"&&$Acad_Type=="Staff"&&(empty($Staff_Title))){
  echo "Staff Title is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Guest_Type=="Academic"&&$Acad_Type=="Staff"&&(empty($Staff_Position))){
  echo "Staff Position is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Guest_Type=="Academic"&&$Acad_Type=="Staff"&&(empty($Staff_Salary))){
  echo "Salary is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif(empty($Book_Start)||empty($Book_End)){
  echo " Start Date and  End Date is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Payment_Type=="UK-Bank-Transfer"&&empty($Payment_TransferNo)){
  echo " Payment Transfer Number is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Payment_Type=="E-PAYMENTr"&&empty($Payment_CreditCard)){
  echo " Payment Credit Card is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}elseif($Payment_Type=="FaceToFace"&&empty($Payment_Date)){
  echo " Payment Date is required".' <br> All required fieild must be fill<br> Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
  die();
}else




/**SQL Query to retrive data from database for validation  */

$query_Check_Email = "SELECT Guest_Email FROM Email ";
$query_Check_Phone = "SELECT Guest_Phone FROM Phone ";
$query_Check_ID    = "SELECT Guest_ID    FROM Guest ";
$email_available= $conn->query($query_Check_Email);
$phone_available= $conn->query($query_Check_Phone);
$ID_available   =    $conn->query($query_Check_ID);


/**Validation to check whether Email,Phone and User ID is not already exist in Databases and available to used  */
if($email_available->num_rows>0){
  $available=TRUE;
   while($row = $email_available->fetch_assoc()){

        if($row["Guest_Email"]==$email){
          $available=FALSE;
        }

      }
      if($available==FALSE){
        echo "This Email $email already been used <br>";
        echo "Your Register Failed<br>";
        echo 'Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
        die();
      }elseif($available==TRUE){
        echo "This email is available to used <br>";
      }
}


if($phone_available->num_rows>0){
  $available=TRUE;
   while($row = $phone_available->fetch_assoc()){

        if($row["Guest_Phone"]==$phone){
          $available=FALSE;
        }

      }
      if($available==FALSE){
        echo "This Phone number $phone already been used <br>";
        echo "Your Register Failed<br>";
        echo 'Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
        die();
      }elseif($available==TRUE){
        echo "This phone is available to used <br>";
      }
}


if($ID_available->num_rows>0){
  $available=TRUE;
   while($row = $ID_available->fetch_assoc()){

        if($row["Guest_ID"]=="GUEST$guest_ID"){
          $available=FALSE;
        }

      }
      if($available==FALSE){
        echo "This User ID  $guest_ID already been used <br>";
        echo "Your Register Failed<br>";
        echo 'Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
 
        die();
      }elseif($available==TRUE){
        echo "This User ID is available to used <br>";
      }
}



/**Validation for a Booking Date  */
//Start and End Date cant be same
//Start Date cannot be After End Date

if($Book_End<$Book_Start){

    echo "Start date cannot be after End Date <br>";
    echo "Your Register Failed<br>";
    echo 'Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
    die();

}elseif($Book_End==$Book_Start){

    echo "Start date of accommodation cannot be the same day as End date <br>";
    echo "Your Register Failed<br>";
    echo 'Try to fill a form again   <a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a> ';
    die();

}










//Insert SQL query for each tables 

$insertguest ="INSERT INTO Guest
(Guest_ID,Guest_Fname, Guest_Lname, Guest_Gender, Guest_DOB,Guest_Age,Guest_Type)
VALUES ( 'GUEST$guest_ID' ,'$firstname', '$lastname' , '$Gender', '$DOB' ,Datediff(curdate(),'$DOB')/365,'$Guest_Type' )";

$insertemail="INSERT INTO email (Guest_ID,Guest_Email) VALUES ('GUEST$guest_ID','$email')";

$insertphone="INSERT INTO phone (Guest_ID,Guest_Phone) VALUES ('GUEST$guest_ID','$phone')";

$insertVisitor ="INSERT INTO Visitor (Guest_ID,Stu_ID) VALUES ('GUEST$guest_ID','$Stu_ID_From_Visitor')";

$insertAcademic ="INSERT INTO Academic (Guest_ID,Acad_Department,Acad_Type) VALUES ('GUEST$guest_ID','$Acad_Department','$Acad_Type')";

$insertStaff ="INSERT INTO Staff  (Guest_ID,Staff_ID ,Staff_Title,Staff_Position,Staff_Salary) VALUES ('GUEST$guest_ID','$Staff_ID','$Staff_Title','$Staff_Position','$Staff_Salary')";

$insertStudent="INSERT INTO Student (Guest_ID,Stu_ID ,Stu_Course,Stu_Type) VALUES ('GUEST$guest_ID','$Stu_ID','$Stu_Course','$Stu_Type')";

$insertBooking="INSERT INTO Booking (Guest_ID, Acc_ID , Payment_ID , Book_Start , Book_End ,Book_Duration) VALUES ('GUEST$guest_ID','$Acc_ID','PAY$guest_ID','$Book_Start','$Book_End',(Book_End-Book_Start))";

$insertPayment="INSERT INTO Payment (Payment_ID,Payment_Price,Payment_Type ) VALUES ('PAY$guest_ID',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY$guest_ID'))),'$Payment_Type')";

$insertUK_Bank_Transfer="INSERT INTO UK_Bank_Transfer (Payment_ID,Payment_TransferNo) VALUES ('PAY$guest_ID','$Payment_TransferNo')";

$insertE_Payment="INSERT INTO E_Payment (Payment_ID,Payment_CreditCard) VALUES ('PAY$guest_ID','$Payment_CreditCard')";

$insertFaceToFace="INSERT INTO FaceToFace (Payment_ID,Payment_Date) VALUES ('PAY$guest_ID','$Payment_Date')";



/** Insert a data into a database using query()  and if data is sucessfully insert print detail out*/

if($Guest_Type=="Visitor"&&$Payment_Type=="UK-Bank-Transfer"){

  if($conn->query($insertguest)==TRUE&&$conn->query($insertemail)==TRUE&&$conn->query($insertphone)==TRUE&&$conn->query($insertVisitor)==TRUE&&$conn->query($insertBooking)==TRUE&&$conn->query($insertPayment)==TRUE&&$conn->query($insertUK_Bank_Transfer)==TRUE){
   
    echo "Your Booking is Success <br>";
    echo "<table border =\"1\" style=\"width:70%\">
    <tr><td colspan= 2 ><h2>Details<h2></td> </tr>
    <tr> <td> First name:</td> <td> $firstname </td></tr>
    <tr> <td> Last name:</td>  <td> $lastname</td></tr>
    <tr> <td> User ID:</td> <td>$guest_ID </td></tr>
    <tr> <td> Date Of Birth:</td> <td>$DOB </td></tr>
    <tr> <td> Gender :</td> <td>$Gender </td></tr>
    <tr> <td colspan=\"2\"><h4>Accommodation</h4></td></tr>
    <tr> <td> Accommodation ID :</td><td>$Acc_ID</td></tr>
    <tr> <td> Start from: </td><td>$Book_Start</td></tr>
    <tr> <td> End at: </td><td>$Book_End</td></tr>
    <tr> <td colspan=\"2\"> <h4> Payment </h4></td></tr>
    <tr> <td> Payment Type: </td><td> $Payment_Type </td></tr>

    </table>";
    echo '<a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a>' ;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}elseif($Guest_Type=="Visitor"&&$Payment_Type=="E-PAYMENT"){

  if($conn->query($insertguest)==TRUE&&$conn->query($insertemail)==TRUE&&$conn->query($insertphone)==TRUE&&$conn->query($insertVisitor)==TRUE&&$conn->query($insertBooking)==TRUE&&$conn->query($insertPayment)==TRUE&&$conn->query($insertE_Payment)==TRUE){
   
    echo "Your Booking is Success <br>";
    echo "<table border =\"1\" style=\"width:70%\">
    <tr><td colspan= 2 ><h2>Details<h2></td> </tr>
    <tr> <td> First name:</td> <td> $firstname </td></tr>
    <tr> <td> Last name:</td>  <td> $lastname</td></tr>
    <tr> <td> User ID:</td> <td>$guest_ID </td></tr>
    <tr> <td> Date Of Birth:</td> <td>$DOB </td></tr>
    <tr> <td> Gender :</td> <td>$Gender </td></tr>
    <tr> <td colspan=\"2\"><h4>Accommodation</h4></td></tr>
    <tr> <td> Accommodation ID :</td><td>$Acc_ID</td></tr>
    <tr> <td> Start from: </td><td>$Book_Start</td></tr>
    <tr> <td> End at: </td><td>$Book_End</td></tr>
    <tr> <td colspan=\"2\"> <h4> Payment </h4></td></tr>
    <tr> <td> Payment Type: </td><td> $Payment_Type </td></tr>

    </table>";
    echo '<a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a>' ;
 

     
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}elseif($Guest_Type=="Visitor"&&$Payment_Type=="FaceToFace"){

  if($conn->query($insertguest)==TRUE&&$conn->query($insertemail)==TRUE&&$conn->query($insertphone)==TRUE&&$conn->query($insertVisitor)==TRUE&&$conn->query($insertBooking)==TRUE&&$conn->query($insertPayment)==TRUE&&$conn->query($insertFaceToFace)==TRUE){
   
    echo "Your Booking is Success <br>";
    echo "<table border =\"1\" style=\"width:70%\">
    <tr><td colspan= 2 ><h2>Details<h2></td> </tr>
    <tr> <td> First name:</td> <td> $firstname </td></tr>
    <tr> <td> Last name:</td>  <td> $lastname</td></tr>
    <tr> <td> User ID:</td> <td>$guest_ID </td></tr>
    <tr> <td> Date Of Birth:</td> <td>$DOB </td></tr>
    <tr> <td> Gender :</td> <td>$Gender </td></tr>
    <tr> <td colspan=\"2\"><h4>Accommodation</h4></td></tr>
    <tr> <td> Accommodation ID :</td><td>$Acc_ID</td></tr>
    <tr> <td> Start from: </td><td>$Book_Start</td></tr>
    <tr> <td> End at: </td><td>$Book_End</td></tr>
    <tr> <td colspan=\"2\"> <h4> Payment </h4></td></tr>
    <tr> <td> Payment Type: </td><td> $Payment_Type </td></tr>

    </table>";
    echo '<a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a>' ;
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}elseif($Acad_Type=="Staff"&&$Payment_Type=="UK-Bank-Transfer"){

    if($conn->query($insertguest)==TRUE&&$conn->query($insertemail)==TRUE&&$conn->query($insertphone)==TRUE&&$conn->query($insertAcademic)==TRUE&&$conn->query($insertStaff)==TRUE&&$conn->query($insertBooking)==TRUE&&$conn->query($insertPayment)==TRUE&&$conn->query($insertUK_Bank_Transfer)==TRUE){

      echo "Your Booking is Success <br>";
      echo "<table border =\"1\" style=\"width:70%\">
      <tr><td colspan= 2 ><h2>Details<h2></td> </tr>
      <tr> <td> First name:</td> <td> $firstname </td></tr>
      <tr> <td> Last name:</td>  <td> $lastname</td></tr>
      <tr> <td> User ID:</td> <td>$guest_ID </td></tr>
      <tr> <td> Date Of Birth:</td> <td>$DOB </td></tr>
      <tr> <td> Gender :</td> <td>$Gender </td></tr>
      <tr> <td colspan=\"2\"><h4>Accommodation</h4></td></tr>
      <tr> <td> Accommodation ID :</td><td>$Acc_ID</td></tr>
      <tr> <td> Start from: </td><td>$Book_Start</td></tr>
      <tr> <td> End at: </td><td>$Book_End</td></tr>
      <tr> <td colspan=\"2\"> <h4> Payment </h4></td></tr>
      <tr> <td> Payment Type: </td><td> $Payment_Type </td></tr>
  
      </table>";
      echo '<a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a>' ;
 
    } else {

     echo "Error: " . $sql . "<br>" . $conn->error;

      }

 }elseif($Acad_Type=="Staff"&&$Payment_Type=="E-PAYMENT"){
  
    if($conn->query($insertguest)==TRUE&&$conn->query($insertemail)==TRUE&&$conn->query($insertphone)==TRUE&&$conn->query($insertAcademic)==TRUE&&$conn->query($insertStaff)==TRUE&&$conn->query($insertBooking)==TRUE&&$conn->query($insertPayment)==TRUE&&$conn->query($insertE_Payment)==TRUE){
      
    echo "Your Booking is Success <br>";
    echo "<table border =\"1\" style=\"width:70%\">
    <tr><td colspan= 2 ><h2>Details<h2></td> </tr>
    <tr> <td> First name:</td> <td> $firstname </td></tr>
    <tr> <td> Last name:</td>  <td> $lastname</td></tr>
    <tr> <td> User ID:</td> <td>$guest_ID </td></tr>
    <tr> <td> Date Of Birth:</td> <td>$DOB </td></tr>
    <tr> <td> Gender :</td> <td>$Gender </td></tr>
    <tr> <td colspan=\"2\"><h4>Accommodation</h4></td></tr>
    <tr> <td> Accommodation ID :</td><td>$Acc_ID</td></tr>
    <tr> <td> Start from: </td><td>$Book_Start</td></tr>
    <tr> <td> End at: </td><td>$Book_End</td></tr>
    <tr> <td colspan=\"2\"> <h4> Payment </h4></td></tr>
    <tr> <td> Payment Type: </td><td> $Payment_Type </td></tr>

    </table>";
    echo '<a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a>' ;
 
    } else {

     echo "Error: " . $sql . "<br>" . $conn->error;

      }

 }elseif($Acad_Type=="Staff"&&$Payment_Type=="FaceToFace"){
  
    if($conn->query($insertguest)==TRUE&&$conn->query($insertemail)==TRUE&&$conn->query($insertphone)==TRUE&&$conn->query($insertAcademic)==TRUE&&$conn->query($insertStaff)==TRUE&&$conn->query($insertBooking)==TRUE&&$conn->query($insertPayment)==TRUE&&$conn->query($insertFaceToFace)==TRUE){
    
    echo "Your Booking is Success <br>";
    echo "<table border =\"1\" style=\"width:70%\">
    <tr><td colspan= 2 ><h2>Details<h2></td> </tr>
    <tr> <td> First name:</td> <td> $firstname </td></tr>
    <tr> <td> Last name:</td>  <td> $lastname</td></tr>
    <tr> <td> User ID:</td> <td>$guest_ID </td></tr>
    <tr> <td> Date Of Birth:</td> <td>$DOB </td></tr>
    <tr> <td> Gender :</td> <td>$Gender </td></tr>
    <tr> <td colspan=\"2\"><h4>Accommodation</h4></td></tr>
    <tr> <td> Accommodation ID :</td><td>$Acc_ID</td></tr>
    <tr> <td> Start from: </td><td>$Book_Start</td></tr>
    <tr> <td> End at: </td><td>$Book_End</td></tr>
    <tr> <td colspan=\"2\"> <h4> Payment </h4></td></tr>
    <tr> <td> Payment Type: </td><td> $Payment_Type </td></tr>

    </table>";
    echo '<a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a>' ;
 

 } else {

  echo "Error: " . $sql . "<br>" . $conn->error;
   }

}elseif($Acad_Type=="Student"&&$Payment_Type=="UK-Bank-Transfer"){

    if($conn->query($insertguest)==TRUE&&$conn->query($insertemail)==TRUE&&$conn->query($insertphone)==TRUE&&$conn->query($insertAcademic)==TRUE&&$conn->query($insertStudent)==TRUE&&$conn->query($insertBooking)==TRUE&&$conn->query($insertPayment)==TRUE&$conn->query($insertUK_Bank_Transfer)==TRUE){
       
    echo "Your Booking is Success <br>";
    echo "<table border =\"1\" style=\"width:70%\">
    <tr><td colspan= 2 ><h2>Details<h2></td> </tr>
    <tr> <td> First name:</td> <td> $firstname </td></tr>
    <tr> <td> Last name:</td>  <td> $lastname</td></tr>
    <tr> <td> User ID:</td> <td>$guest_ID </td></tr>
    <tr> <td> Date Of Birth:</td> <td>$DOB </td></tr>
    <tr> <td> Gender :</td> <td>$Gender </td></tr>
    <tr> <td colspan=\"2\"><h4>Accommodation</h4></td></tr>
    <tr> <td> Accommodation ID :</td><td>$Acc_ID</td></tr>
    <tr> <td> Start from: </td><td>$Book_Start</td></tr>
    <tr> <td> End at: </td><td>$Book_End</td></tr>
    <tr> <td colspan=\"2\"> <h4> Payment </h4></td></tr>
    <tr> <td> Payment Type: </td><td> $Payment_Type </td></tr>

    </table>";
    echo '<a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a>' ;
 

    } else {

      echo "Error: " . $sql . "<br>" . $conn->error;
   }

 }elseif($Acad_Type=="Student"&&$Payment_Type=="E-PAYMENT"){

  if($conn->query($insertguest)==TRUE&&$conn->query($insertemail)==TRUE&&$conn->query($insertphone)==TRUE&&$conn->query($insertAcademic)==TRUE&&$conn->query($insertStudent)==TRUE&&$conn->query($insertBooking)==TRUE&&$conn->query($insertPayment)==TRUE&&$conn->query($insertE_Payment)==TRUE){
     
    echo "Your Booking is Success <br>";
    echo "<table border =\"1\" style=\"width:70%\">
    <tr><td colspan= 2 ><h2>Details<h2></td> </tr>
    <tr> <td> First name:</td> <td> $firstname </td></tr>
    <tr> <td> Last name:</td>  <td> $lastname</td></tr>
    <tr> <td> User ID:</td> <td>$guest_ID </td></tr>
    <tr> <td> Date Of Birth:</td> <td>$DOB </td></tr>
    <tr> <td> Gender :</td> <td>$Gender </td></tr>
    <tr> <td colspan=\"2\"><h4>Accommodation</h4></td></tr>
    <tr> <td> Accommodation ID :</td><td>$Acc_ID</td></tr>
    <tr> <td> Start from: </td><td>$Book_Start</td></tr>
    <tr> <td> End at: </td><td>$Book_End</td></tr>
    <tr> <td colspan=\"2\"> <h4> Payment </h4></td></tr>
    <tr> <td> Payment Type: </td><td> $Payment_Type </td></tr>

    </table>";
    echo '<a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a>' ;
 
  } else {

    echo "Error: " . $sql . "<br>" . $conn->error;
 }

}elseif($Acad_Type=="Student"&&$Payment_Type=="FaceToFace"){

  if($conn->query($insertguest)==TRUE&&$conn->query($insertemail)==TRUE&&$conn->query($insertphone)==TRUE&&$conn->query($insertAcademic)==TRUE&&$conn->query($insertStudent)==TRUE&&$conn->query($insertBooking)==TRUE&&$conn->query($insertPayment)==TRUE&&$conn->query($insertFaceToFace)==TRUE){
     
    echo "Your Booking is Success <br>";
    echo "<table border =\"1\" style=\"width:70%\">
    <tr><td colspan= 2 ><h2>Details<h2></td> </tr>
    <tr> <td> First name:</td> <td> $firstname </td></tr>
    <tr> <td> Last name:</td>  <td> $lastname</td></tr>
    <tr> <td> User ID:</td> <td>$guest_ID </td></tr>
    <tr> <td> Date Of Birth:</td> <td>$DOB </td></tr>
    <tr> <td> Gender :</td> <td>$Gender </td></tr>
    <tr> <td colspan=\"2\"><h4>Accommodation</h4></td></tr>
    <tr> <td> Accommodation ID :</td><td>$Acc_ID</td></tr>
    <tr> <td> Start from: </td><td>$Book_Start</td></tr>
    <tr> <td> End at: </td><td>$Book_End</td></tr>
    <tr> <td colspan=\"2\"> <h4> Payment </h4></td></tr>
    <tr> <td> Payment Type: </td><td> $Payment_Type </td></tr>

    </table>";
    echo '<a href="http://localhost:8080/web.html">Click Here to go back to Register Form</a>' ;
 

  } else {

    echo "Error: " . $sql . "<br>" . $conn->error;

 }
}



//close connection
$conn->close();
?>
