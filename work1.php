<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        document.write("i am script");
    </script>
</head>
<body>
    <h1>hello PHP</h1>
    <?php
    print("this is a php line by print");
    echo"<br>this is a php line by echo";
    $num1=10;
    $num2=20;
    $sum=$num1+$num2;
    echo"<br>sum of ".$num1." and ".$num2." is ".$sum;
    ?>
     <table border="1">
    <tr>
        <th>S.no.</th>
        <th>Name</th>
        <th>Class</th>
        <th>Contact no.</th>
        <th>Address</th>
    </tr>
    <?php
    for($i=1;$i<=10;$i++)
    {
        echo"<tr>";
        echo"<td>".$i."</td>
        <td>Abhinav</td>
        <td>BCA</td>
        <td>9838670778</td>
        <td>Luckow</td>";
    }
    ?>
    </table>

    
    
</body>
</html>