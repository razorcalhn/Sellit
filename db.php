<?php
    $con=mysqli_connect('localhost','root','','project');
    if($con)
    {
        echo "Connection succesful";
    }
    else
    {
        echo "Not Connected";
    }

?>