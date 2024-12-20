<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Maker</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Resume Maker</h1>
        <form action="generate.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="experience">Experience:</label>
            <textarea id="experience" name="experience" rows="4" required></textarea>

            <label for="education">Education:</label>
            <textarea id="education" name="education" rows="4" required></textarea>

            <label for="template">Choose a Template:</label>
            <select id="template" name="template">
                <option value="template1">Template 1</option>
                <option value="template2">Template 2</option>
                <option value="template3">Template 3</option>
                
            </select>

            <button type="submit">Generate Resume</button>
        </form>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
