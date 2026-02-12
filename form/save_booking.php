<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    $time = date("d-M-Y H:i");

    // Format: Time | Name | Phone | Service | Message
    $entry = "$time | $name | $phone | $service | $message" . PHP_EOL;

    // Save to a file called bookings.txt
    file_put_contents("bookings.txt", $entry, FILE_APPEND);

    // Show a success message to the customer
    echo "<h2>Booking Received!</h2><p>Thank you, $name. We will call you shortly.</p>";
    echo "<a href='index.html'>Return to Website</a>";
}
?>