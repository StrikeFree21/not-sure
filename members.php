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
    <title>Members</title>
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
        <h2>Members</h2>

        <div class="member">
            <img src="images/etor.png" alt="Member1">
            <p><strong>Name:</strong> John Davinder Etor</p>
            <p><strong>Address:</strong> Mariveles</p>
            <p><strong>Other Information:</strong> Loves listening to various genres of music, drawing, and playing video games.</p>
            <p><strong>Project Role:</strong> Developer</p>
        </div>
        <div class="member">
            <img src="images/izon.jpg" alt="Member2">
            <p><strong>Name:</strong> Lenard Izon</p>
            <p><strong>Address:</strong> Orion</p>
            <p><strong>Other Information:</strong> Loves manhwa, light novels, and manga.</p>
            <p><strong>Project Role:</strong> Quality Assurance Tester/Co-developer</p>
        </div>
        <div class="member">
            <img src="images/isidro.PNG" alt="Member3">
            <p><strong>Name:</strong> Abby Gayle Isidro</p>
            <p><strong>Address:</strong> Limay</p>
            <p><strong>Other Information:</strong> Has a passion for reading and writing.</p>
            <p><strong>Project Role:</strong> Documenter</p>
        </div>
        <div class="member">
            <img src="images/laxa.jpg" alt="Member4">
            <p><strong>Name:</strong> Jayzelyn Rodriguez Laxa</p>
            <p><strong>Address:</strong> Abucay</p>
            <p><strong>Other Information:</strong> Has driving skills.</p>
            <p><strong>Project Role:</strong> Project Manager/Co-developer</p>
        </div>
    </div>
</body>
</html>