<?php
$password = "Smart123"; // CHANGE THIS TO YOUR PRIVATE PASSWORD

if (!isset($_POST['pass']) || $_POST['pass'] !== $password) {
    echo '<form method="POST" style="text-align:center;margin-top:100px;">
          <h2>Admin Login</h2>
          <input type="password" name="pass">
          <button type="submit">View Bookings</button>
          </form>';
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Bookings</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f4f4f4; }
        .job { background: white; padding: 15px; margin-bottom: 10px; border-left: 5px solid gold; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        b { color: #333; }
    </style>
</head>
<body>
    <h1>New Jobs to Do</h1>
    <?php
    if (file_exists("bookings.txt")) {
        $lines = file("bookings.txt");
        foreach(array_reverse($lines) as $line) {
            $data = explode(" | ", $line);
            echo "<div class='job'>";
            echo "<b>Date:</b> $data[0] <br>";
            echo "<b>Customer:</b> $data[1] <br>";
            echo "<b>Phone:</b> $data[2] <br>";
            echo "<b>Job:</b> $data[3] <br>";
            echo "<b>Note:</b> $data[4]";
            echo "</div>";
        }
    } else {
        echo "No bookings found.";
    }
    ?>
</body>
</html>