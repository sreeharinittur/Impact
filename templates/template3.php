<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - <?php echo $name; ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .resume {
            display: flex;
        }
        .sidebar {
            width: 30%;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }
        .content {
            width: 70%;
            padding: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 20px;
            margin-top: 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="resume">
        <div class="sidebar">
            <h1><?php echo $name; ?></h1>
            <p><strong>Email:</strong><br> <?php echo $email; ?></p>
            <p><strong>Phone:</strong><br> <?php echo $phone; ?></p>
            <p><strong>Address:</strong><br> <?php echo $address; ?></p>
        </div>
        <div class="content">
            <h2>Experience</h2>
            <p><?php echo nl2br($experience); ?></p>

            <h2>Education</h2>
            <p><?php echo nl2br($education); ?></p>
        </div>
    </div>
</body>
</html>
