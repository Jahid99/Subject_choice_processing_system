<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Final Result According to Merit Position</h2> <hr>

            <?php 

       

            $cste = array();
            $ice = array();
            $acce = array();
            $eee = array();
            $software_engineering = array();
            $m=0;

            $ok='total';

            $query = "SELECT * from tbl_departments";
          $departments = $db->select($query);
          if($departments){

            while ($result = $departments->fetch_assoc()) {

              $m++;

              if($m==1){
                $cste_seat_total = $result['seats'];
              }

              if($m==2){
                $ice_seat_total = $result['seats'];
              }

              if($m==3){
                $acce_seat_total = $result['seats'];
              }

              if($m==4){
                $eee_seat_total = $result['seats'];
              }

              if($m==5){
                $software_engineering_seat_total = $result['seats'];
              }
              

            }

}

            
         
            $cnt = 0;

            // echo sizeof($cste);exit;

          

          $query = "SELECT * from tbl_candidates ORDER BY position";
          $tbl_candidates = $db->select($query);
          if($tbl_candidates){ ?>

           <?php 
                      while ($result = $tbl_candidates->fetch_assoc()) { 

                       $choice = unserialize($result['choice']);

                       $cnt++;

                       // if($cnt==15){
                       //  break;
                       // }

                       $s=0;

                       $roll = $result['roll'];


                       



                     
  // unset($departments[2]);
  // $departments = array_values($departments);
  // echo "<pre>";
  // print_r($departments);
  // exit;

  for($k=0;$k<5;$k++){

    for($j=0;$j<500;$j++){


$departments=array("cste","ice","eee","acce","software_engineering");




      if($choice[0]==$departments[$k] && $s==0){
        if(sizeof(${$departments[$k]})<${$departments[$k].'_seat_total'}){
                    array_push(${$departments[$k]},$roll);$s++;
                }

                $hm = $departments;
                unset($hm[$k]);
                shuffle($hm);
                $hm = array_values($hm);
                $length=5;
                $flag = 1;
                $ok = 0;
                while($length>$flag){
                  
                  for($p=0;$p<$length-1;$p++){
                    if($choice[$flag]==$hm[$ok+$p] && $s==0){
                        if(sizeof(${$choice[$flag]})<${$choice[$flag].'_seat_total'}){                    
                          array_push(${$choice[$flag]},$roll);$s++;
                           }
                         }
                  }

                         $flag++;
                         

                }

            




      }








    }

  }
                       




                       




                      




                       

          } } ?>

          <?php  

          // echo "<pre>";

          // print_r($cste);
          // print_r($ice);
          // print_r($acce);
          // print_r($eee);
          // print_r($software_engineering);

           ?>



           <h2>Students who got CSTE</h2>


           <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                    <th>ROLL.</th>
                    <th>Name.</th>
                    <th>E-mail.</th>
                    <th>Merit Position.</th>
                   
                    
                  </tr>
                </thead>
                <tbody>


                   
                        <?php 

                          foreach ($cste as $value) { ?>
                           <tr class="odd gradeX">

                           <td><?php echo $value; ?></td>

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { ?>
             <td><?php echo $result['name']; ?></td>
             <td><?php echo $result['email']; ?></td>
             <td><?php echo $result['position']; ?></td>
          <?php }
        }

                            ?>

                         



                           </tr>
                            
                        <?php  }

                         ?>
                         
                          
                       
                  </tbody>
              </table>





               <h2>Students who got ICE</h2>


           <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                    <th>ROLL.</th>
                    <th>Name.</th>
                    <th>E-mail.</th>
                    <th>Merit Position.</th>
                   
                    
                  </tr>
                </thead>
                <tbody>


                   
                        <?php 

                          foreach ($ice as $value) { ?>
                           <tr class="odd gradeX">

                           <td><?php echo $value; ?></td>

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { ?>
             <td><?php echo $result['name']; ?></td>
             <td><?php echo $result['email']; ?></td>
             <td><?php echo $result['position']; ?></td>
          <?php }
        }

                            ?>

                         



                           </tr>
                            
                        <?php  }

                         ?>
                         
                          
                       
                  </tbody>
              </table>




               <h2>Students who got ACCE</h2>


           <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                    <th>ROLL.</th>
                    <th>Name.</th>
                    <th>E-mail.</th>
                    <th>Merit Position.</th>
                   
                    
                  </tr>
                </thead>
                <tbody>


                   
                        <?php 

                          foreach ($acce as $value) { ?>
                           <tr class="odd gradeX">

                           <td><?php echo $value; ?></td>

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { ?>
             <td><?php echo $result['name']; ?></td>
             <td><?php echo $result['email']; ?></td>
             <td><?php echo $result['position']; ?></td>
          <?php }
        }

                            ?>

                         



                           </tr>
                            
                        <?php  }

                         ?>
                         
                          
                       
                  </tbody>
              </table>





               <h2>Students who got EEE</h2>


           <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                    <th>ROLL.</th>
                    <th>Name.</th>
                    <th>E-mail.</th>
                    <th>Merit Position.</th>
                   
                    
                  </tr>
                </thead>
                <tbody>


                   
                        <?php 

                          foreach ($eee as $value) { ?>
                           <tr class="odd gradeX">

                           <td><?php echo $value; ?></td>

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { ?>
             <td><?php echo $result['name']; ?></td>
             <td><?php echo $result['email']; ?></td>
             <td><?php echo $result['position']; ?></td>
          <?php }
        }

                            ?>

                         



                           </tr>
                            
                        <?php  }

                         ?>
                         
                          
                       
                  </tbody>
              </table>




               <h2>Students who got Software Engineering</h2>


           <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                    <th>ROLL.</th>
                    <th>Name.</th>
                    <th>E-mail.</th>
                    <th>Merit Position.</th>
                   
                    
                  </tr>
                </thead>
                <tbody>


                   
                        <?php 

                          foreach ($software_engineering as $value) { ?>
                           <tr class="odd gradeX">

                           <td><?php echo $value; ?></td>

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { ?>
             <td><?php echo $result['name']; ?></td>
             <td><?php echo $result['email']; ?></td>
             <td><?php echo $result['position']; ?></td>
          <?php }
        }

                            ?>

                         



                           </tr>
                            
                        <?php  }

                         ?>
                         
                          
                       
                  </tbody>
              </table>

<a href="sendresultviaemail.php" class="btn btn-info" role="button">Send result via Email</a>
<a href="#" class="btn btn-info" role="button">Send result via SMS</a>

              
      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>