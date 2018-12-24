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