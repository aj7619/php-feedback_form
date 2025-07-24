<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>Submit Your Feedback</h2>
    <form action="submit.php" method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Feedback:</label><br>
        <textarea name="feedback" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


