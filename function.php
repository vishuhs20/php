<table border="2">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>mobile</th>
            <th>date</th>
            <th>work time</th>
    </tr>
<?php
include("output.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $result=mysqli_query($mysqli,"INSERT into record values('','$name','$email','$mobile','$date','$time')");
    
    
}


$result=mysqli_query($mysqli,"SELECT* from record ORDER by id DESC");
    while($res=mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>'.$res['name'].'</td>';
        echo '<td>'.$res['email'].'</td>';
        echo '<td>'.$res['mobile'].'</td>';
        echo '<td>'.$res['date'].'</td>';
        echo '<td>'.$res['work time'].'</td>';
        echo '</tr>';
        
    
    }

    ?>
    </table>