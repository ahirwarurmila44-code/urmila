<?php
$conn = new mysqli('localhost', 'root', '', 'test', port: '3307');
if (isset($_POST['submit'])) {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {

        $file = $_FILES['file']['tmp_name'];
        $rows = [];

        // ---------- READ CSV ----------
        if (($handle = fopen($file, "r")) !== false) {

            fgetcsv($handle); // Skip column header

            while (($data = fgetcsv($handle)) !== false) {
                $rows[] = $data; // Store CSV rows
            }

            fclose($handle);
        }

        // ---------- SPLIT INTO CHUNKS OF 10 ----------
        $chunks = array_chunk($rows, 10);
        // echo "<pre>" ;print_r($chunks);
        $tables = ["users1", "users2", "users3", "users4", "users5"];
        function insertIntoTable($conn, $tableName, $dataSet)
        {
            // Adjust columns here based on your CSV structure
            $sql = "INSERT INTO $tableName (name, email) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            foreach ($dataSet as $row) {
                $stmt->bind_param("ss", $row[1], $row[2]);
                $stmt->execute();
            }

            $stmt->close();
        }

        // ---------- INSERT INTO ALL 5 TABLES ----------
        for ($i = 0; $i < 5; $i++) {
            insertIntoTable($conn, $tables[$i], $chunks[$i]);
        }

        echo "<h3>Data inserted successfully into 5 tables!</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Form Submit In PHP</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>