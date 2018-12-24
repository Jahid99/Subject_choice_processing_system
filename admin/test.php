<?php 

	$cste=array("cste","ice","eee","acce","software_engineering");

	//$cste = array("teer","beer","fear");

	$store = array();

	for($nice=0;$nice<100;$nice++){

		shuffle($cste);
		
		
		$cste_str = implode(' ', $cste);
		



		if (!in_array($cste_str, $store))
		  {
		  array_push($store,$cste_str);
		  }

		

	}
echo "<pre>";
	
print_r($store);


	exit;

	for($k=0;$k<5;$k++){

		for($j=0;$j<50;$j++){


			if($choice[0]==$departments[$k] && $i==0){
				if(sizeof($departments[$k])<${$departments[$k].'_seat_total'}){
                    array_push($departments[$k],$roll);$i++;
                }
                unset($departments[$k]);
                shuffle($departments);
                $departments = array_values($departments);
                $length=5;
                $flag = 1;
                while($length>$flag){

                	if($choice[$flag]=='ice' && $i==0){
                        if(sizeof($choice[$flag])<${$choice[$flag].'_seat_total'}){                    
                          array_push($choice[$flag],$roll);$i++;
                           }
                         }
                         $flag++;

                }



			}



		}

	}


 ?>