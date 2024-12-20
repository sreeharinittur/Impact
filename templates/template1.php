<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - <?php echo $name; ?></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="resume">
        <h1><?php echo $name; ?></h1>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone: <?php echo $phone; ?></p>
        <p>Address: <?php echo $address; ?></p>

        <h2>Experience</h2>
        <p><?php echo nl2br($experience); ?></p>

        <h2>Education</h2>
        <p><?php echo nl2br($education); ?></p>
    </div>
</body>
</html>
