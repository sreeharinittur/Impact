<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - <?php echo $name; ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .resume {
            border-left: 5px solid #333;
            padding-left: 20px;
        }
        h1 {
            font-size: 28px;
            color: #333;
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
        <h1><?php echo $name; ?></h1>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>

        <h2>Experience</h2>
        <p><?php echo nl2br($experience); ?></p>

        <h2>Education</h2>
        <p><?php echo nl2br($education); ?></p>
    </div>
</body>
</html>
