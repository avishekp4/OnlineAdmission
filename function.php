<?php
/*Functions for calculating merit point and aggregate */



function hons2minor($hons_minor)  //check foe empty subject
{$side_sub=array();
foreach($hons_minor as $value)
   {
     if(!empty($value)){
	 array_push($side_sub,$value);
      }
   }
return $side_sub;
 }


function highmarks($sub_list,$only_sub_list)       //Return maximum number obtained among 4 subject

{
$max=0;
foreach($only_sub_list as $value)
  {
          if($sub_list[$value]>$max)
          {
		    $max=$sub_list[$value];
		  
		  }		  
  } 
return $max;  

}



function aggr($num1,$num2,$num3,$num4,$lan1,$lan2)
{
   if(!empty($lan1)){
   $min=min($num1,$num2,$num3,$num4);
 
   $best_of_3=$num1+$num2+$num3+$num4-$min;
  
   $aggr=$lan2+$lan1+$best_of_3;
  return $aggr;
 }
 else
 {
  $min=min($num1,$num2,$num3,$num4);
 
   $best_of_3=$num1+$num2+$num3+$num4;
  
   $aggr=$lan2+$best_of_3;
  return $aggr;
  }
}	

function aggr_toarts($lan1,$lan2,$num1_th_fm,$num1_obm_th,$num2_th_fm,$num2_obm_th,$num3_th_fm,$num3_obm_th,$num4_th_fm,$num4_obm_th)
{   //echo "inside arts aggr";
	if($num1_th_fm<100)
	 {
		$num1 = ($num1_obm_th*100)/$num1_th_fm;
		//echo "<br>".$num1."<br>";
     }
     else
    {
		$num1 = $num1_obm_th;     
//echo "<br>".$num1."<br>";
 
		}
	
	if($num2_th_fm<100)
	 {
		$num2 = ($num2_obm_th*100)/$num2_th_fm;
//echo "<br>".$num2."<br>";
  
 }
     else
    {
		$num2 = $num2_obm_th;     
	//echo "<br>".$num2."<br>";
 
	}
	
	if($num3_th_fm<100)
	 {
		$num3 = ($num3_obm_th*100)/$num3_th_fm;
    // echo "<br>".$num3."<br>";
 
	 }
     else
    {
		$num3 = $num3_obm_th;     
	//echo "<br>".$num3."<br>";
 
	}
	
	if($num4_th_fm<100)
	 {
		$num4 = ($num4_obm_th*100)/$num4_th_fm;
    // echo "<br>".$num4."<br>";
 
	 }
     else
    {
		$num4 = $num4_obm_th;     
	//	echo "<br>".$num4."<br>";
 
	}
	
	
   if(empty($lan1)){
	
	//$min=min($num1,$num2,$num3,$num4);//echo $min;
	$best_of_3=$num1+$num2+$num3+$num4;//echo $best_of_3;
   // $div=$best_of_3/4;
    $aggr=$lan2+$best_of_3;
	//echo "Lan1 Missing".$aggr."<br>";
    return $aggr;
	}
else{

   $min=min($num1,$num2,$num3,$num4);//echo $min;
	$best_of_3=($num1+$num2+$num3+$num4)-$min;//echo $best_of_3;
   // $div=$best_of_3/4;
    $aggr=$lan2+$lan1+$best_of_3;
	//echo "Lan".$aggr."<br>";
    return $aggr;
}
}

function merit_science($hons,$science_hons,$sub_list,$aggr,$merit)
{

if ((array_key_exists($hons,$sub_list))||$hons=="botany"||$hons=="zoology"||$hons=="geography(arts)"||$hons=="geography(science)")
  {  // echo "Inside if";
    if($hons=="botany"||$hons=="zoology")
    {
      $hmarks=$sub_list["biological science"];
      $mp=($aggr*.1)+$hmarks;
     }
	 else if($hons=="geography(arts)"||$hons=="geography(science)")
	 {
	  $hmarks=$sub_list["geography"];
      $mp=($aggr*.1)+$hmarks;
	 }
    else{ 
     $hmarks=$sub_list[$hons];
     //echo $hmarks;
     $mp=($aggr*.1)+$hmarks;
     }
     array_push($merit,$mp);  
     
  }
 
return $mp;

}


function merit_arts($hons,$arts_hons,$aggr_arts,$only_sub_list,$lang1_om,$lang2_om,$merit,$stream,$sub_list,$arts)
{
$related=array();
  //Case 1 arts subject and subject is present in hs subject list 
 //echo "<br>Arts hons<br>";
	   if (array_key_exists($hons,$sub_list))
			  {  //echo "hear"; 
				 $hmarks=$sub_list[$hons];//get Marks of hs subject
				 //echo "< br >".$hmarks;
				 $mp=($aggr_arts *.1)+$hmarks;
				 
				 //echo "hons found in subject list honersMArks-".$hmarks." and aggre grate-".$aggr_Toarts;
				 array_push($merit,$mp);  
				 //$aggr=$aggr_arts;
			 // $aggr=$aggr_arts;
			   return $mp;
			   //$aggr=$aggr_arts;
		     }
			  
        else if($hons=="history"||$hons=="political science"||$hons=="philosophy")
           { //echo "History hons<br>";
	   
					 if($stream === "science" || $stream ==="commerce") //if stream is science or arts
					{ //echo "Inside science/commerCe stream cheking ";

					   $hmarks=max($lang1_om,$lang2_om);
						//echo "In SCIENCE /COMMERCE $hmarks".$hmarks;
					   $mp=($aggr_arts*.1)+$hmarks;
					   array_push($merit,$mp); 
					  // $aggr=$aggr_arts;   
				       return $mp;
				       	  
					 }
					else 
					{
					   // echo "Inside else for if stream is arts if history hons</br>";
					 foreach($only_sub_list as $n)
						 {
							if( in_array($n,$arts) )
						  { 
						   array_push($related, $n);
						  } 
						 
						 }
						 //$no_of_related=count($related);
						   #  print_r($related);
						 $max=0;
						 foreach ($related  as $value) 
						 {
							 #echo $sub_list[$value];
							 # code...
							   if($sub_list[$value] > $max)
								  { 
									$max= $sub_list[$value];
									//$high=$value;
								  }  
						 }
						#echo $max;
						 //  $aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);     
						 $mp=($aggr_arts*.1)+$max;
						// $aggr=$aggr_arts;
						 array_push($merit,$mp);
						 return $mp;
					 }  
	   
             }
   
        else
        { 
		
                 if($stream === "science" || $stream ==="commerce") //if stream is science or arts
					{ //echo "Inside science/commerCe stream cheking ";

					   $hmarks=max($lang1_om,$lang2_om);
						//echo "In SCIENCE /COMMERCE $hmarks".$hmarks;
					   $mp=($aggr_arts*.1)+$hmarks;
					   array_push($merit,$mp); 
					  // $aggr=$aggr_arts;   
				       return $mp;	
				         
					 }		
		
		            
		         else 
					{
					   // echo "Inside else for if stream is arts if history hons</br>";
					 foreach($only_sub_list as $n)
						 {
							if( in_array($n,$arts) )
						  { 
						   array_push($related, $n);
						  } 
						 
						 }
						 //$no_of_related=count($related);
						   #  print_r($related);
						 $max=0;
						 foreach ($related  as $value) 
						 {
							 #echo $sub_list[$value];
							 # code...
							   if($sub_list[$value] > $max)
								  { 
									$max= $sub_list[$value];
									$high=$value;
								  }  
						 }
						#echo $max;
						 //  $aggr=aggr($sub1_total_om,$sub2_total_om,$sub3_total_om,$sub4_total_om,$lang1_om,$lang2_om);     
						 $mp=($aggr_arts*.1)+$max;
						 array_push($merit,$mp);
						// $aggr=$aggr_arts;
						return $mp;
					 }  
	       
		/*				
		// echo "inside last else of arts"; 
	      $hmarks=max($lang1_om,$lang2_om);
	      $mp=($aggr_Toarts*.1)+$hmarks;
	  // echo "hons not found in subject list honersMArks-".$hmarks." and aggregrate-".$aggr_Toarts;
	      array_push($merit,$mp);
	      //$aggr=$aggr_Toarts;
	      return $mp;
	   
	   */
	   } 
     


}



function merit_commerce($hons,$com_hons,$aggr,$sub_list,$max_marks,$merit)

{	
         if (array_key_exists($hons,$sub_list))
			  {  //echo "hear"; 
				 $hmarks=$sub_list[$hons];//get Marks of hs subject
				 //echo "< br >".$hmarks;
				 $mp=($aggr *.1)+$hmarks;
				 
				 //echo "hons found in subject list honersMArks-".$hmarks." and aggre grate-".$aggr_Toarts;
				 array_push($merit,$mp);  
				 //$aggr=$aggr_arts;
			  
			   return $mp;
		     }



    if($hons=="economics"||$hons=="economics(science)"||$hons=="economics(arts)")
	  {
	  
	  
	   if (array_key_exists("economics",$sub_list))
			  {  //echo "hear"; 
				 $hmarks=$sub_list["economics"];//get Marks of hs subject
				 //echo "< br >".$hmarks;
				 $mp=($aggr *.1)+$hmarks;
				 
				 //echo "hons found in subject list honersMArks-".$hmarks." and aggre grate-".$aggr_Toarts;
				 array_push($merit,$mp);  
				 //$aggr=$aggr_arts;
			  
			   return $mp;
		     }
	  
	  
	  
	   else  if (array_key_exists("mathematics",$sub_list))
			  {  //echo "hear"; 
				 $hmarks=$sub_list["mathematics"];//get Marks of hs subject
				 //echo "< br >".$hmarks;
				 $mp=($aggr *.1)+$hmarks;
				 
				 //echo "hons found in subject list honersMArks-".$hmarks." and aggre grate-".$aggr_Toarts;
				 array_push($merit,$mp);  
				 //$aggr=$aggr_arts;
			  
			   return $mp;
		     }
		else {
		    
		     $mp=$max_marks+(.1*$aggr);
		     array_push($merit,$mp);
		     return $mp;
		     }	 
	
	  }
   if($hons=='accountancy')
     {
        if($stream == "science" )
		 {
			 $hmarks=$sub_list["mathematics"];
			 $mp=($aggr*.1)+ $hsmarks;
			 array_push($merit,$mp);
		  }
		 else 
		 {
			  $hmarks=$sub_list["accountancy"];
			  $mp=($aggr*.1)+ $hsmarks;
			  array_push($merit,$mp);
			  
	     }   
     }
    
}


?>
