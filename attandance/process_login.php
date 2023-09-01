<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "a";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve input data
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the user exists in the database
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($query);

// if ($result->num_rows == 1) {
    // User exists, mark attendance
    // $user_id = $result->fetch_assoc()['id'];
//     $attendance_date = date("Y-m-d H:i:s"); // Current date and time

//     $insert_query = "INSERT INTO attendance (user_id, attendance_date) VALUES ('$user_id', '$attendance_date')";
//     if ($conn->query($insert_query) === TRUE) {
//         // Attendance marked successfully
//         echo "<script>alert('Attendance marked successfully');</script>";
//     } else {
//         echo "Error: " . $insert_query . "<br>" . $conn->error;
//     }
// } else {
//     echo "<script>alert('Invalid email or password');</script>";
// }


date_default_timezone_set('Asia/Kolkata');

$current_time = date("H:i"); // Current time in 24-hour format

if ($result->num_rows == 1) {
    // User exists, mark attendance
    $user_id = $result->fetch_assoc()['id'];
    $attendance_date = date("Y-m-d H:i"); // Current date and time

    // Check if the current time falls within the specified time slot
    if ($current_time >= "08:00" && $current_time <= "08:10") {
        $subject = "1st Hour"; // Change this based on the subject
        $insert_query = "INSERT INTO attendance (user_id, attendance_date, subject) VALUES ('$user_id', '$attendance_date', '$subject')";
            if ($conn->query($insert_query) === TRUE) {
        // Attendance marked successfully
                echo "<script>alert('Attendance marked successfully for $subject');</script>";
    }
    }
    
    elseif ($current_time > "8:10" && $current_time < "9:00") {
        $subject = "1st Hour"; // Change this based on the subject
        echo "<script>alert('you are late! your attendance for $subject is not marked!!');</script>";
    }

    elseif ($current_time >= "09:00" && $current_time <= "09:10") {
        $subject = "2nd Hour"; // Change this based on the subject
        $insert_query = "INSERT INTO attendance (user_id, attendance_date, subject) VALUES ('$user_id', '$attendance_date', '$subject')";
            if ($conn->query($insert_query) === TRUE) {
        // Attendance marked successfully
                echo "<script>alert('Attendance marked successfully for $subject');</script>";
    }
    }

    elseif ($current_time > "09:10" && $current_time < "10:00") {
        $subject = "2nd Hour"; // Change this based on the subject
        echo "<script>alert('you are late! your attendance for $subject is not marked!!');</script>";
    }

    elseif ($current_time >= "10:00" && $current_time <= "10:10") {
        $subject = "3rd Hour"; // Change this based on the subject
        $insert_query = "INSERT INTO attendance (user_id, attendance_date, subject) VALUES ('$user_id', '$attendance_date', '$subject')";
            if ($conn->query($insert_query) === TRUE) {
        // Attendance marked successfully
                echo "<script>alert('Attendance marked successfully for $subject');</script>";
    }
    }
    elseif ($current_time > "10:10" && $current_time < "11:00") {
        $subject = "3rd Hour"; // Change this based on the subject
        echo "<script>alert('you are late! your attendance for $subject is not marked!!');</script>";
    //     $insert_query = "INSERT INTO attendance (user_id, attendance_date, subject) VALUES ('$user_id', '$attendance_date', '$subject')";
    //         if ($conn->query($insert_query) === TRUE) {
    //     // Attendance marked successfully
    //             echo "<script>alert('Attendance marked successfully for $subject');</script>";
    // }       else {
    //             echo "Error: " . $insert_query . "<br>" . $conn->error;
    //             echo "<script>alert('you are late for $subject hour.');</script>";
    // }
    }

    elseif ($current_time >= "11:00" && $current_time <= "11:10"){
        $subject = "4th Hour"; // Change this based on the subject
        $insert_query = "INSERT INTO attendance (user_id, attendance_date, subject) VALUES ('$user_id', '$attendance_date', '$subject')";
            if ($conn->query($insert_query) === TRUE) {
        // Attendance marked successfully
                echo "<script>alert('Attendance marked successfully for $subject');</script>";
    }
    }
    elseif ($current_time > "11:10" && $current_time < "12:00"){
        $subject = "4th Hour"; // Change this based on the subject
        echo "<script>alert('you are late! your attendance for $subject is not marked!!');</script>";
    }
    elseif ($current_time >= "12:00" && $current_time <= "12:10"){
        $subject = "5th Hour"; // Change this based on the subject
        $insert_query = "INSERT INTO attendance (user_id, attendance_date, subject) VALUES ('$user_id', '$attendance_date', '$subject')";
            if ($conn->query($insert_query) === TRUE) {
        // Attendance marked successfully
                echo "<script>alert('Attendance marked successfully for $subject');</script>";
    }
        
    }
    elseif ($current_time > "12:10" && $current_time < "13:00"){
        $subject = "5th Hour"; // Change this based on the subject
        echo "<script>alert('you are late! your attendance for $subject is not marked!!');</script>";
    }

    elseif ($current_time >= "13:00" && $current_time <= "13:10"){
        $subject = "6th Hour"; // Change this based on the subject
        $insert_query = "INSERT INTO attendance (user_id, attendance_date, subject) VALUES ('$user_id', '$attendance_date', '$subject')";
            if ($conn->query($insert_query) === TRUE) {
        // Attendance marked successfully
                echo "<script>alert('Attendance marked successfully for $subject');</script>";
    }
    }
    elseif ($current_time > "13:10" && $current_time < "14:00"){
        $subject = "6th Hour"; // Change this based on the subject
        echo "<script>alert('you are late! your attendance for $subject is not marked!!');</script>";
    }

    elseif ($current_time >= "19:00" && $current_time <= "19:03"){
        $subject = "7th Hour"; // Change this based on the subject
        $insert_query = "INSERT INTO attendance (user_id, attendance_date, subject) VALUES ('$user_id', '$attendance_date', '$subject')";
            if ($conn->query($insert_query) === TRUE) {
        // Attendance marked successfully
                echo "<script>alert('Attendance marked successfully for $subject');</script>";
    }
    }
    elseif ($current_time >= "19:04" && $current_time < "20:00"){
        $subject = "7th Hour"; // Change this based on the subject
        echo "<script>alert('you are late! your attendance for $subject is not marked!!');</script>";
    }

 
    
    // Add more time slots and subjects as needed

    // Insert attendance record with subject information
    // $insert_query = "INSERT INTO attendance (user_id, attendance_date, subject) VALUES ('$user_id', '$attendance_date', '$subject')";
    // if ($conn->query($insert_query) === TRUE) {
    //     // Attendance marked successfully
    //     echo "<script>alert('Attendance marked successfully for $subject');</script>";
    // } else {
    //     echo "Error: " . $insert_query . "<br>" . $conn->error;
    // }
} else {
    echo "<script>alert('Invalid email or password');</script>";
}


// Close database connection
$conn->close();
?>
