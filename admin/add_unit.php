<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Add a Unit</h2><hr>

             <?php 

                if ($_SERVER['REQUEST_METHOD']=='POST') {
               
                $name =  $fm->validation($_POST['name']);
                $name =  mysqli_real_escape_string($db->link,$name);

                $slug = $name;
                


                $query = "INSERT INTO   tbl_units(name,slug) VALUES ('$name','$slug')";
                $dept_insert = $db->insert($query);
                if($dept_insert){
                  Session::set("message","Unit added succesully !!!");
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
                                    <input type="text" name="name" class="form-control" placeholder="Enter Unit Name..."   class="medium" required/><br>
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