<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Edit Unit</h2><hr>


            <?php 

                $unitid = $_GET['unitid'];

                $query = "SELECT * from tbl_units WHERE id=$unitid";
          $departments = $db->select($query);
          if($departments){

            while ($result = $departments->fetch_assoc()) {

                $name = $result['name'];
               

            }

          }

             ?>


             <?php 

                   if ($_SERVER['REQUEST_METHOD']=='POST') {
               
                $name =  $fm->validation($_POST['name']);
                $name =  mysqli_real_escape_string($db->link,$name);

                $query = "UPDATE tbl_units
                SET
                name = '$name'
                WHERE id = '$unitid'";

                $updated_row = $db->update($query);
                if ($updated_row) {
                     Session::set("message","Unit updated succesully !!!");
            Session::set("color","success");
            echo "<script>window.location='units.php'</script>";  
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
                                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter Unit Name..."   class="medium" required/><br>
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