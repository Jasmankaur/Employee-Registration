<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $bio = $_POST["bio"];
    $department = $_POST["department"];

    if(empty($name)){
        echo '<script>alert("Please enter the name of employee..");</script>';
    }else if(empty($email)){
        echo '<script>alert("Please enter the email id..");</script>';
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email address format.");</script>';
    }
    else if(empty($password)){
        echo '<script>alert("Please enter the password..");</script>';
    }
    else if(empty($department)){
        echo '<script>alert("Please enter the email id..");</script>';
    }else{
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "employee_registration";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else{
        $sql = "insert into employees (full_name, email_id,password,department,description) VALUES ('$name', '$email', '$password','$department','$bio')";
         if ($conn->query($sql) === TRUE) {
             echo '<script>alert("Employee has been inserted successfully...");</script>';
             header("Location: showlist.php");
            exit();
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
    
       
         $conn->close();
}      
         
    }
?>