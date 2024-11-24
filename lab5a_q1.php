<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Nur Hannah Suraya bt Azhar"; // Update your name here
        $matricNumber = "Your Matric Number"; // Add your matric number here
        $course = "Bachelor of Computer Science (Information Security) with Honours"; // Add your course here
        $yearOfStudy = "Year 3"; // Adjust according to your study year
        $address = "Ara Sendayan, Seremban Negeri Sembilan "; // Add your address here
    ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
    
</body>
</html>
