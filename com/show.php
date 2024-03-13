<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'kasper'; // Replace with your actual database name
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect to MySQL server: ' . mysqli_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Database Data Display</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top:100px">
        <h2>Data from Database</h2>
        <table class="table table-bordered">
            <thead style="text-align:center;">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT mname, memail, mmessage FROM themessage"; // Replace 'user' with your actual table name
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr style='text-align:center;'>";
                    echo "<td>" . $row['mname'] . "</td>";
                    echo "<td>" . $row['memail'] . "</td>";
                    echo "<td>" . $row['mmessage'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>