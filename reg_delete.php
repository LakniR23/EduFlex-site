<?php

require 'config.php';  // include connection file

$studemail = $_POST["email"];

 // Proceed with update query
 $sql = "DELETE from registertion WHERE email='$studemail'";

if($con->query($sql))
{
    echo "<script>
    var userResponse = confirm('Record deleted successfully! Do you want to redirect to the home page?');

    if(userResponse) {
        window.location.href = 'adminhome.php';
    }
 </script>";

}
else{
    echo "<script>
        var userResponse = alert('Not deleted!');
        
     </script>";
;
}


?>