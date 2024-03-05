<?php 
include("connection.php");


// display num of rows
$query = "SELECT * FROM `logininfo`";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

echo "Total rows: " .$total . "<br>";



if($total != 0)
{
    ?>
    <table border ="2">
        <tr>
            <th>Sno</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Joining time</th>
        </tr>
    
    <?php
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
            <td>".$result["sno"]."</td>
            <td>".$result["firstName"]."</td>
            <td>".$result["lastName"]."</td>
            <td>".$result["email"]."</td>
            <td>".$result["dt"]."</td>
        </tr>";
    }
} else {
    echo "No records found!";
}
?>
</table>

<!-- while($result = mysqli_fetch_assoc($data)){
        echo $result["firstName"] . "<br>";
    } -->