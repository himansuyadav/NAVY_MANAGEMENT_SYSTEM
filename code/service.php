<!DOCTYPE html>
<html>
   <style>
      table, th, td {
         border:1px solid black;
      }
   </style>
<body>
<?php
include 'connection.php'; 
$selectQuery = "SELECT * FROM `service`";
$squery = mysqli_query($conn, $selectQuery);
if($_SERVER['REQUEST_METHOD']=='POST'){
   $scode = $_POST['scode'];
   $delq = "DELETE from service where service_id='$scode'";
   $delquery = mysqli_query($conn, $delq);
   if($delq){
      echo "Deleted successfully";
   }
}
 ?>
   <h2 align="center">service</h2>
   <table style="width: 50%" align="center">
      <tr>
         <th>Service ID</th>
         <th>Service Name</th>
         <th>Year of Joining</th>
         <th>Rank</th>
         <th>Action</th>

      </tr>
      
      <?php
			 while (($result = mysqli_fetch_assoc($squery))) {
			 ?>
      <tr>
      <td align="center"><?php echo $result['service_id'];?></td>
         <td align="center"><?php echo $result['service_name'];?></td>
         <td align="center"><?php echo $result['year_of_joining'];?></td>
         <td align="center"><?php echo $result['rank'];?></td>

         <td align="center"><form action="equipment.php" method="post">
            <input type="text" name="scode" hidden="hidden" value="<?php echo $result['service_id'];?>" >
            <input type="submit" value="DELETE">
         </form>
      </td>

      </tr>
      <?php
          }
         
			 ?>
   </table>
</body>
</html>