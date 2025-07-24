<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    $data = "Name: $name\nEmail: $email\nFeedback: $feedback\n---------------------\n";
    file_put_contents("feedback.txt", $data, FILE_APPEND);

    echo "<h2>Thank you for your feedback, $name!</h2>";
    echo "<a href='index.php'>Go back</a>";
}
?>


