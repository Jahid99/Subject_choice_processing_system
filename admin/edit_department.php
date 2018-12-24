<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Edit Department</h2><hr>


            <?php 

                $deptid = $_GET['deptid'];

                $query = "SELECT * from tbl_departments WHERE id=$deptid";
          $departments = $db->select($query);
          if($departments){

            while ($result = $departments->fetch_assoc()) {

                $name = $result['name'];
                $seats = $result['seats'];
                $unit = $result['unit'];

            }

          }

             ?>


             <?php 

                   if ($_SERVER['REQUEST_METHOD']=='POST') {
               
                $name =  $fm->validation($_POST['name']);
                $seats =  $fm->validation($_POST['seats']);
                $unit =  $fm->validation($_POST['unit']);
                $name =  mysqli_real_escape_string($db->link,$name);
                $seats =  mysqli_real_escape_string($db->link,$seats);
                $unit =  mysqli_real_escape_string($db->link,$unit);

                $query = "UPDATE tbl_departments
                SET
                name = '$name',
                seats = '$seats',
                unit = '$unit'
                WHERE id = '$deptid'";

                $updated_row = $db->update($query);
                if ($updated_row) {
                     Session::set("message","Department updated succesully !!!");
            Session::set("color","success");
            echo "<script>window.location='index.php'</script>";  
            exit();
                   
                }


            }

              ?>

            

                 <form action="" method="post">
                        <table class="form">                    
                            <tr>
                                <td>
                                    <label class="form-group">Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter Department Name..."   class="medium" required/><br>
                                </td>
                            </tr>

                             <tr>
                                <td>
                                    <label class="form-group">Number of Seats:</label>
                                </td>
                                <td>
                                    <input type="number" name="seats" value="<?php echo $seats; ?>" class="form-control" placeholder="Enter the Number of Seats..."  class="medium" required/><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="form-group">Unit:</label>
                                </td>
                                <td>
                                     <select class="form-control" name="unit" id="unit" required>
      <option value="">Select Unit</option>
       <?php 
                                        $query = "SELECT * FROM tbl_units";
                                        $category = $db->select($query);
                                        if($category){
                                            while($result = $category->fetch_assoc()){
                                        ?>


                                    <option
                                    <?php 
                                    if ($unit == $result['slug']) { ?>
                                       
                                    selected = "selected"

                                     <?php } ?> value="<?php echo $result['slug']; ?>"><?php echo $result['name']; ?></option>

                                    <?php } } ?>
  
  </select>

  <br>

                                </td>
                            </tr>
                             
                            
                             <tr>
                                <td>
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-default" name="submit" Value="Submit" />
                                </td>
                            </tr>
                        </table>
                    </form>
      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>