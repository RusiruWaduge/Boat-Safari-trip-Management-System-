<?php
$conn = new mysqli('localhost', 'root', '', 'boat_app');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array(); // Create an array to store the data
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            'FeedbackID' => $row['Feedback_ID'],
            'Comment' => $row['Comment']
        );
    }

    // Convert the data to JSON for easy transfer
    $jsonData = json_encode($data);
    echo $jsonData;
} else {
    echo "No data found.";
}

$conn->close();
?>
