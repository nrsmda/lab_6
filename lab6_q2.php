<?php
$students = array(
    array("Name" => "Alice", "Program" => "BIP", "Age" => 21),
    array("Name" => "Bob", "Program" => "BIS", "Age" => 20),
    array("Name" => "Raju", "Program" => "BIT", "Age" => 22)
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach($students as $student): ?>
            <tr>
                <td><?php echo $student["Name"]; ?></td>
                <td><?php echo $student["Program"]; ?></td>
                <td><?php echo $student["Age"]; ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>