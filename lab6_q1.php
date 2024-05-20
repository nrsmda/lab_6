<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 6 Q1</title>
</head>
<body>
 <?php 
 $name = "Nor Samida binti Abdullah";
 $no_matrics = "Di220083";
 $course = "Information Technology (BIT)";
 $Years_of_study = "Year 2 semester 1";
 $Address = " Kampung Lubok Setol, 17200 Rantau Panjang, Kelantan";
 ?>
 <table>
 <tr>
 <td>Name :</td>
 <td><?php echo "$name"; ?></td> 
 </tr>

 <tr>
 <td>No matrics :</td>
 <td><?php echo "$no_matrics"; ?></td> 
 </tr>

 <tr>
 <td>Course :</td>
 <td><?php echo "$course"; ?></td> 
 </tr>

 <tr>
 <td>Year of Study :</td>
 <td><?php echo "$Years_of_study"; ?></td> 
 </tr>

 <tr>
 <td>Address :</td>
 <td><?php echo "$Address"; ?></td> 
 </tr>

 </table>
 
</body>
</html>