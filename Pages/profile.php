<?php
include("../Includes/profile_handler.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="../global/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="profile-container">
        <h2>User Profile</h2>

        <!-- Profile Picture -->
        <div class="profile-picture">
            <?php
            // Display default picture based on gender
            if ($gender == 'Male') {
                echo "<img src='../Images/male_icon.png' alt='Profile Picture' />";
            } else if ($gender == 'Female') {
                echo "<img src='../Images/female_icon.png' alt='Profile Picture' />";
            } 
            ?>
        </div>

        <!-- User Information -->
        <div class="user-info">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($userName); ?></p>
            <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
            <p><strong>Favorite Club:</strong> <?php echo htmlspecialchars($fav_team); ?></p>

            <p><strong>Interest Teams:</strong>
                <?php
                if (!empty($teams)) {
                    echo implode(', ', $teams);
                } else {
                    echo "No interests yet.";
                }
                ?>
            </p>
        </div>

    </div>

    <div>
        <?php include "../Includes/Footer.php"; ?>
    </div>

</body>

</html>