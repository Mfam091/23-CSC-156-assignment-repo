<?php
include "database.php";
if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    $statement = $conn->prepare("DELETE FROM student_record WHERE id=?");
    $statement->bind_param("i", $id);

    if ($statement->execute()) {
        $message = "Record Deleted Successfully <br>";
        $status = "success";
    } else {
        $message = "Error: " . $statement->error;
        $status = "error";
    }

    $statement->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 450px;
            background: white;
        }
        .box:hover{
            background:#cde3;
        }

        .success {
            border: 6px solid #453757;
            color: #e81316;
            background:#cde3;#d4edda
        }

        .error {
            border: 6px solid red;
            color: #721c24;
            background: ;
        }

        h2 {
            margin-bottom: 15px;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 18px;
            text-decoration: none;
            background:#453757;
            color: white;
            border-radius: 6px;
            transition: 0.3s;
        }

        a:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="box <?php echo $status; ?>">
        <h2><?php echo $message; ?></h2>
        <a href='view.php'>Go back</a>
    </div>
</body>

</html>