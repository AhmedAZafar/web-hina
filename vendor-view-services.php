




   <?php
    include("includes/config.php");
    $conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
    if ($conn->connect_error) {
    trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
    }
        $sql="SELECT * FROM services";
    $rs=mysqli_query($conn,$sql);
    if ($rs==false) 
    {
      trigger_error('Wrong sql'.$sql.$conn->error);
    }
    else
    {
      $num=1;
      while ($row=mysqli_fetch_assoc($rs)) 
      {
        $id=$row['id'];
       $im=$row['image'];
        $n=$row['name'];
        $com=$row['company'];
        $cos=$row['cost'];
        $av=$row['availability'];
        $ct=$row['category'];

        ?>
       

         <tr>
        <td><?php echo $num++; ?></td>
         <td>
          <?php  
                        if($im!="")
                        {
                        ?>
                        <img src="graphicss/<?php echo $im; ?>" width="100px" >
                        <?php
                        }
                        else
                        {
                        echo "Image not Added.</div>";
                        }
                        ?>
            </td>

       <td><?php echo $n; ?></td>
         <td><?php echo $com; ?></td>
          <td><?php echo $cos; ?></td>
           <td><?php echo $av; ?></td>
        <td><?php echo $ct; ?></td>


        <td>
          <a href="vendor-update-services.php?id=<?php echo $id; ?>" class="button-update">UPDATE</a>
          <a href="vendor-delete-services.php?id=<?php echo $id; ?>&image=<?php echo $im; ?>" class="button-delete">DELETE</a>
        </td>
      </tr>










        <?php
      }
        }
        ?>

 