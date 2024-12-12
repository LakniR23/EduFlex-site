<?php

require 'config.php';  // link to connection file

//get values from form
$studfname=$_POST["first_name"];
$studlname=$_POST["last_name"];
$studemail=$_POST["email"];
$studc_code=$_POST["country_code"];
$studcontact=$_POST["contact"];
$studnewpsw=$_POST["new_password"];
$studcountry=$_POST["country"];
$studbirth=$_POST["birth"];
$studgender=$_POST["gender"];


//sql query for insert data into database
$sql= "Insert into registertion values ('','$studfname' , '$studlname' , '$studemail' , '$studc_code' , '$studcontact' , '$studnewpsw' , '$studcountry' , '$studbirth' ,  '$studgender')";

if($con->query($sql))
{
    echo "<script>
    alert('You have successfully registered!');
    window.location.href = 'login.php'; 
</script>";

}
else{
    echo "<script>
    var userResponse = alert('Registration Unsuccesfull!');
    if (userResponse) {
        window.location.href = 'registrationDB.php'; 
   
</script>";
}

$con->close();

?>