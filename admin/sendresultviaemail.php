<?php include 'inc/header.php'; ?>
<?php error_reporting(0); ?>
    <div class="container">
      <div class="row">
        
        <h2>Result Sent Successfully</h2>

            <?php 

       $all_departments=array("CSTE","ICE","EEE","ACCE","Software Engineering");

            $cste = array();
            $ice = array();
            $acce = array();
            $eee = array();
            $software_engineering = array();
            $m=0;

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

                       $i=0;

                       $roll = $result['roll'];


                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                          if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                          
                          if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                      }
                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                          if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                          
                         
                      }
                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                          if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }                                  
                         
                      }

                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                          if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                        if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                                                         
                         
                      }

                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }

                        if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                        if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                          if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }                                                                 
                      }

                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }

                        if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                        
                          if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                        if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }                                                               
                      }

                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }

                         if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 

                        if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }                         
                                                                                     
                      }

                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                         if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  

                         if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 

                                               
                                                                                     
                      }

                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                         if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
              
                                                                                     
                      }

                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                       
              
                                                                                     
                      }

                       



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                         if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                      }

                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                        if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                                                                                
                      }



                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                          if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  

                          if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                       
                        
                                                                                
                      }





                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                           if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                                                  
                      }





                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                           if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                           if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                           if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                        
                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                         
                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }
                         
                           if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                                                  
                      }




                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                        

                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 

                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }

                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }

                                                  
                      }




                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 

                        

                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }

                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                                                  
                      }




                       if($choice[0]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){
                            array_push($cste,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 


                           if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }



                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 



                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                    
                          array_push($ice,$roll);$i++;
                           }
                         }


                                                  
                      }













                                if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                          if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                          
                          if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                      }
                       



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                          if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                          
                         
                      }
                       



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }                                  
                         
                      }

                       



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                        if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                                                         
                         
                      }

                       



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                        if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                        if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                          if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }                                                                 
                      }

                       



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                        if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                        
                          if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                        if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }                                                               
                      }

                       



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                         if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 

                        if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }                         
                                                                                     
                      }

                       



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  

                         if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 

                                               
                                                                                     
                      }

                       



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
              
                                                                                     
                      }

                       



                       if($choice[0]=='ice' && $i==0){
                       if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                       
              
                                                                                     
                      }

                       



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                      }

                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                          if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                        if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                                                                                
                      }



                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  

                          if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                       
                        
                                                                                
                      }





                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                           if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                                                  
                      }





                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                           if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                           if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                           if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                        
                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         
                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         
                           if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                                                  
                      }




                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                        

                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 

                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                                                  
                      }




                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 

                        

                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                                                  
                      }




                       if($choice[0]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){
                            array_push($ice,$roll);$i++;
                          }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 


                           if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }



                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 



                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }


                                                  
                      }



                                  if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                          if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                          
                          if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                      }
                       



                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                         if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                          if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                          
                         
                      }
                       



                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                         if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }                                  
                         
                      }

                       



                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                        if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                                                         
                         
                      }

                       



                       if($choice[0]=='eee' && $i==0){
                       if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                        if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                        if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                          if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }                                                                 
                      }

                       



                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                        if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                        
                          if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                        if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }                                                               
                      }

                       



                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                         if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 

                        if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }                         
                                                                                     
                      }

                       



                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  

                         if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 

                                               
                                                                                     
                      }

                       



                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
              
                                                                                     
                      }

                       



                       if($choice[0]=='eee' && $i==0){
                       if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                       
              
                                                                                     
                      }

                       



                       if($choice[0]=='eee' && $i==0){
                       if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                      }

                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                        if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                                                                                
                      }



                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  

                          if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                       
                        
                                                                                
                      }





                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                           if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                                                  
                      }





                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                           if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                           if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                           if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                        
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         
                           if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                                                  
                      }




                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                        

                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 

                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                                                  
                      }




                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 

                        

                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }

                                                  
                      }




                       if($choice[0]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 


                           if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }



                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 



                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }


                                                  
                      }






                                if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                          if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                          
                          if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                      }
                       



                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                         if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                          if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                          
                         
                      }
                       



                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                         if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }                                  
                         
                      }

                       



                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                        if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                                                         
                         
                      }

                       



                       if($choice[0]=='acce'  && $i==0){
                       if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                        if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                        if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                          if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }                                                                 
                      }

                       



                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                        if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }
                        
                          if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                        if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }                                                               
                      }

                       



                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 

                        if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }                         
                                                                                     
                      }

                       



                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  

                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 

                                               
                                                                                     
                      }

                       



                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
              
                                                                                     
                      }

                       



                       if($choice[0]=='acce'  && $i==0){
                       if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                       
              
                                                                                     
                      }

                       



                       if($choice[0]=='acce'  && $i==0){
                       if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                      }

                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                        if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                                                                                
                      }



                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  

                          if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                       
                        
                                                                                
                      }





                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                           if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                                                  
                      }





                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                           if($choice[4]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                           if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                           if($choice[2]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 
                        
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                           if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         
                           if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                                                  
                      }




                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 

                        

                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 

                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                           if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                                                  
                      }




                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 

                        

                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                           if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                                                  
                      }




                       if($choice[0]=='acce'  && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }


                           if($choice[1]=='software_engineering' && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                        } 


                           if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }



                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 



                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }


                                                  
                      }


                                if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                          if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                          
                          if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                      }
                       



                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                         if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                          if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                          
                         
                      }
                       



                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                         if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }                                  
                         
                      }

                       



                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                        if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                                                         
                         
                      }

                       



                       if($choice[0]=='software_engineering'  && $i==0){
                       if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                        if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                        if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }
                          if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }                                                                 
                      }

                       



                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                        if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }
                        
                          if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }  
                        if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }                                                               
                      }

                       



                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                         if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 

                        if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }                         
                                                                                     
                      }

                       



                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                          if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  

                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 

                                               
                                                                                     
                      }

                       



                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
              
                                                                                     
                      }

                       



                       if($choice[0]=='software_engineering'  && $i==0){
                       if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                         if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        } 
                          if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                       
              
                                                                                     
                      }

                       



                       if($choice[0]=='software_engineering'  && $i==0){
                       if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                      }

                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                          if($choice[1]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  

                          if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                        if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                                                                                
                      }



                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                          if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  

                          if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                       
                        
                                                                                
                      }





                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                           if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                          if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                                                  
                      }





                       if($choice[0]=='software_engineering'  && $i==0){
                       if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                           if($choice[4]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                           if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 
                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        }  
                          
                                                  
                      }





                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }
                           if($choice[1]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                           if($choice[2]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 
                        
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         } 
                          
                                                  
                      }





                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }


                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         
                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                           if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }


                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 

                         if($choice[2]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }
                         
                           if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                         if($choice[4]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                                                  
                      }




                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }


                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 

                        

                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 

                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                           if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }
                                                  
                      }




                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }


                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 
                        
                           if($choice[3]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                                                  
                      }




                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }


                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 



                         if($choice[2]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 

                        

                         if($choice[3]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }

                           if($choice[4]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }

                                                  
                      }




                       if($choice[0]=='software_engineering'  && $i==0){
                        if(sizeof($software_engineering)<$software_engineering_seat_total){                
                          array_push($software_engineering,$roll);$i++;
                           }


                           if($choice[1]=='acce' && $i==0){
                        if(sizeof($acce)<$acce_seat_total){                
                          array_push($acce,$roll);$i++;
                           }
                        } 


                           if($choice[2]=='eee' && $i==0){
                        if(sizeof($eee)<$eee_seat_total){                
                          array_push($eee,$roll);$i++;
                           }
                        }



                         if($choice[3]=='ice' && $i==0){
                        if(sizeof($ice)<$ice_seat_total){                
                          array_push($ice,$roll);$i++;
                           }
                        } 



                         if($choice[4]=='cste' && $i==0){
                        if(sizeof($cste)<$cste_seat_total){                    
                          array_push($cste,$roll);$i++;
                           }
                         }


                                                  
                      }





                       // if($choice[0]=='cste' && $i==0){
                       //  if(sizeof($cste)<$cste_seat_total){
                       //      array_push($cste,$roll);$i++;
                       //    }
                       //    if($choice[1]=='acce' && $i==0){
                       //  if(sizeof($acce)<$acce_seat_total){                    
                       //    array_push($acce,$roll);$i++;
                       //     }
                       //   }
                       //   if($choice[2]=='ice' && $i==0){
                       //  if(sizeof($ice)<$ice_seat_total){                
                       //    array_push($ice,$roll);$i++;
                       //     }
                       //  }
                       //  }






                       // if($choice[0]=='ice' && $i==0){
                       //  if(sizeof($ice)<$ice_seat_total){
                       //      array_push($ice,$roll);$i++;
                       //    }
                       //    if($choice[1]=='cste' && $i==0){
                       //  if(sizeof($cste)<$cste_seat_total){                    
                       //    array_push($cste,$roll);$i++;
                       //     }
                       //   }
                       //   if($choice[2]=='acce' && $i==0){
                       //  if(sizeof($acce)<$acce_seat_total){                
                       //    array_push($acce,$roll);$i++;
                       //     }
                       //  }
                       //  }




                       // if($choice[0]=='ice' && $i==0){
                       //  if(sizeof($ice)<$ice_seat_total){
                       //      array_push($ice,$roll);$i++;$i++;
                       //    }
                       //    if($choice[1]=='acce' && $i==0){
                       //  if(sizeof($acce)<$acce_seat_total){                    
                       //    array_push($acce,$roll);$i++;
                       //     }
                       //   }
                       //   if($choice[2]=='cste' && $i==0){
                       //  if(sizeof($cste)<$cste_seat_total){                
                       //    array_push($cste,$roll);$i++;
                       //     }
                       //  }
                       //  }  




                       // if($choice[0]=='acce' && $i==0){
                       //  if(sizeof($acce)<$acce_seat_total){
                       //      array_push($acce,$roll);$i++;
                       //    }
                       //    if($choice[1]=='ice' && $i==0){
                       //  if(sizeof($ice)<$ice_seat_total){                    
                       //    array_push($ice,$roll);$i++;
                       //     }
                       //   }
                       //    if($choice[2]=='cste' && $i==0){
                       //  if(sizeof($cste)<$cste_seat_total){                
                       //    array_push($cste,$roll);$i++;
                       //     }
                       //  }
                       //  } 




                       // if($choice[0]=='acce' && $i==0){
                       //  if(sizeof($acce)<$acce_seat_total){
                       //      array_push($acce,$roll);$i++;
                       //    }
                       //    if($choice[1]=='cste' && $i==0){
                       //  if(sizeof($cste)<$cste_seat_total){                    
                       //    array_push($cste,$roll);$i++;
                       //     }
                       //   }
                       //   if($choice[2]=='ice' && $i==0){
                       //  if(sizeof($ice)<$ice_seat_total){                
                       //    array_push($ice,$roll);$i++;
                       //     }
                       //  }
                       //  }  




                       

          } } ?>

          <?php  

          // echo "<pre>";

          // print_r($cste);
          // print_r($ice);
          // print_r($acce);
          // print_r($eee);
          // print_r($software_engineering);

           ?>






           <?php 

                          foreach ($cste as $value) { ?>
                           

                           

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { 

               $name = $result['name']; 
               $email = $result['email'];
               $position = $result['position'];


               $from = "admin@gmail.com";
                $to = "$email";
                $headers = "From: $from\n";
                $headers .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $subject = "Your result";
                $message = "You got ".$all_departments[0];

                $sendmail = mail($to, $subject, $message,$headers);
               


          }
        }

                            ?>

                            
                        <?php  }

                         ?>





           <?php 

                          foreach ($ice as $value) { ?>
                           

                           

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { 

               $name = $result['name']; 
               $email = $result['email'];
               $position = $result['position'];


              $from = "admin@gmail.com";
                $to = "$email";
                $headers = "From: $from\n";
                $headers .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $subject = "Your result";
                $message = "You got ".$all_departments[1];

                $sendmail = mail($to, $subject, $message,$headers);
               


          }
        }

                            ?>

                            
                        <?php  }

                         ?>


           <?php 

                          foreach ($acce as $value) { ?>
                           

                           

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { 

               $name = $result['name']; 
               $email = $result['email'];
               $position = $result['position'];


              $from = "admin@gmail.com";
                $to = "$email";
                $headers = "From: $from\n";
                $headers .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $subject = "Your result";
                $message = "You got ".$all_departments[2];

                $sendmail = mail($to, $subject, $message,$headers);
               


          }
        }

                            ?>

                            
                        <?php  }

                         ?>


           <?php 

                          foreach ($eee as $value) { ?>
                           

                           

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { 

               $name = $result['name']; 
               $email = $result['email'];
               $position = $result['position'];


             $from = "admin@gmail.com";
                $to = "$email";
                $headers = "From: $from\n";
                $headers .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $subject = "Your result";
                $message = "You got ".$all_departments[3];

                $sendmail = mail($to, $subject, $message,$headers);
               


          }
        }

                            ?>

                            
                        <?php  }

                         ?>


           <?php 

                          foreach ($software_engineering as $value) { ?>
                           

                           

                           <?php 
                              $query = "SELECT * from tbl_candidates WHERE roll=$value";
          $candidates = $db->select($query);
          if($candidates){

            while ($result = $candidates->fetch_assoc()) { 

               $name = $result['name']; 
               $email = $result['email'];
               $position = $result['position'];


               $from = "admin@gmail.com";
                $to = "$email";
                $headers = "From: $from\n";
                $headers .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $subject = "Your result";
                $message = "You got ".$all_departments[4];

                $sendmail = mail($to, $subject, $message,$headers);
               


          }
        }

                            ?>

                            
                        <?php  }

                         ?>



              
      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>