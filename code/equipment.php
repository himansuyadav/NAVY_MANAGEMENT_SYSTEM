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
$selectQuery = "SELECT * FROM `equipment`";
$squery = mysqli_query($conn, $selectQuery);
if($_SERVER['REQUEST_METHOD']=='POST'){
   $scode = $_POST['scode'];
   $delq = "DELETE from equipment where equipment_id='$scode'";
   $delquery = mysqli_query($conn, $delq);
   if($delq){
      echo "Deleted successfully";
   }
}
 ?>
   <h2 align="center">equipment</h2>
   <table style="width: 50%" align="center">
      <tr>
         <th>equipment ID</th>
         <th>equipment Name</th>
         <th>warrior id</th>
         <th>Action</th>

      </tr>
      
      <?php
			 while (($result = mysqli_fetch_assoc($squery))) {
			 ?>
      <tr>
      <td align="center"><?php echo $result['equipment_id'];?></td>
         <td align="center"><?php echo $result['equipment_name'];?></td>
         <td align="center"><?php echo $result['warrior_id'];?></td>


         <td align="center"><form action="equipment.php" method="post">
            <input type="text" name="scode" hidden="hidden" value="<?php echo $result['equipment_id'];?>" >
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