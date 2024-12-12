<?php
//include config file
require 'config.php';

//get values
$cid=$_POST["id"];
$statu_s=$_POST["status"];

//chcek values
if(empty($cid)||empty($statu_s))
{
    echo "All required";
}
else{
    //sql query for update database
    $modify = "UPDATE payments SET status = '$statu_s' where id=$cid";

    if ($con->query($modify)) {
        echo "<script>
        alert('Updated.');
        window.location.href = 'adminhome.php'; 
    </script>";
    
    } else {
        echo "<script>
    alert('Not Update!');
    window.location.href = 'paymentstatus.php'; 
</script>";

    }
}


 

     

    
    
?>

