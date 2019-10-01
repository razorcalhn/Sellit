    <?php
    $username = filter_input(INPUT_POST, 'name');

    $email = filter_input(INPUT_POST,'email');
    $phone = filter_input(INPUT_POST,'phone');
    $city = filter_input(INPUT_POST,'city');
    $password = filter_input(INPUT_POST,'password');

    if (!empty($username)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "project";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO users (name, email,phone,city,password)
values ('$username','$email','$phone','$city','$password')";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "Field should not be empty";
    die();
    }
    
    ?> 
    