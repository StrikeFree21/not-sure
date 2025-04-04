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
    <title>Project Description</title>
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
        <h2>Online Registration and Management System for Circumcision and AI Aftercare with SMS Notification</h2>

        <h3>General Description</h3>
        <p>
            In today's digital era, technology has become an essential tool in improving administrative service delivery in the health sector. Circumcision, performed for medical, cultural, or religious reasons, still relies on manual registration and aftercare management in many healthcare facilities. This often results in inefficiencies, delays, inaccurate patient records, and inadequate monitoring of post-operative care.
        </p>
        <p>
            Our system enables patients (or guardians) to register online for circumcision appointments, eliminating the inconvenience of manual scheduling. Additionally, it features an AI-powered aftercare assistant that provides real-time guidance on wound care, symptom monitoring, and recovery tips. The system also sends SMS notifications for appointment reminders, medication intake, and follow-up consultations, ensuring proper post-procedure care.
        </p>

        <h3>Proposed Users</h3>
        <ul>
            <li>Healthcare Providers</li>
            <li>Patients and Guardians</li>
            <li>Health Administrators</li>
            <li>Government and Health Organizations</li>
            <li>IT and Healthcare Innovators</li>
        </ul>

        <h3>General Features</h3>
        <ul>
            <li>Online Registration & Scheduling</li>
            <li>AI Aftercare Assistance</li>
            <li>Automated SMS Notifications</li>
        </ul>
    </div>
</body>
</html>