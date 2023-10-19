<?php
$fullName = $_POST ['Full Name'];
$email = $_POST ['Email address'];
$contacts = $_POST ['Contact details'];

if (!empty($fullName) || !empty($email) || !empty ($contacts)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "password";
    $dbname = "Ordered";

    $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connection Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    
    } else{
        $SELECT = "SELECT email from Ordered Where email =? Limit 1";
        $INSERT = "INSERT into Ordered (fullName, email, contacts) values (?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->ececute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){
            $stmt->close();

            $stmt = $conn->($INSERT);
            $stmt->bind_param("ssssii", $fullName, $email, $contacts);
            $stmt->execute();
            
            echo "New record inserted!";
        } else {
            "Email already exists!"
        }
        $stmt->close();
        $conn->close();
    }

} else{
    echo " Fields cannot be empty"
    die();
}
?>