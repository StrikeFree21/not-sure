<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: error.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Page</title>
</head>
<body>
    <div class="toolbar">
        <div>
            <a href="admin.php">Admin Page</a>
            <a href="project_description.php">Project Description</a>
            <a href="members.php">Members</a>
        </div>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <h1>Admin Page</h1>
        <h2>Online Registration and Management System for Circumcision and AI Aftercare with SMS Notification</h2>
        
        <p><b>Group 7</b></p>
        <p>We are a group of 4 that will develop this system called <b>Online Registration and Management System for Circumcision and AI Aftercare with SMS Notification</b>.</p>

        <h3>General Information of the Project</h3>
        <p>
            Our project aims to eliminate the manual registration system by capturing patient information and solving appointment requests. Furthermore, the system utilizes AI technology to assist in aftercare instruction guidance, providing real-time suggestions based on the patient's recovery progress. 
        </p>
        <p>
            Alongside this, an SMS notification service will be implemented to issue reminders, aftercare instructions, and follow-up alerts to improve post-surgical care and communication.
        </p>
    </div>
</body>
</html>