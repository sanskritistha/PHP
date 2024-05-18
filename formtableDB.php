<html>
    <head></head>
    <body>
        <?php
        $conn=mysqli_connect('localhost','root','','myDB');
        $sql="select * from myguests";
        $res=mysqli_query($conn,$sql);
        $data=[];
        if(mysqli_num_rows($res)>0){
            while($row= mysqli_fetch_assoc($res)){
                array_unshift($data,$row);
            }
        }
        ?>
        <table border='1'>
            <thead>
                <tr>
                    <th>id</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>email</th>
                    <th>action</th>
                </tr>
           
        <?php
        //$i=1;
        foreach($data as $d){
        ?> 
        <tbody>
            <tr>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['firstname'];?></td> 
                   <!-- database table name -->
                <td><?php echo $d['lastname'];?></td>
                <td><?php echo $d['email'];?></td>
                <td><a href="editform.php?id=<?php echo $d['id']?>">edit</a>
                <!-- ?id editform ko page ma yei rakhnu parxa  yo chanageable ho
                    $d['id] vaneko datbase ko id ho -->
                    <a href="deleteform.php?id=<?php echo $d['id']?>" onclick ="return confirm('are you sure to delete?')">delete
                </td>
                
            </tr>  
        </tbody>
        <?php } ?>      
                </thead>
        </table>
    </html>