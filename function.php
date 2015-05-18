<?php
/*Functions for calculating merit point and aggregate */


/** @var TYPE_NAME $history_relatedSubject */

   $history_relatedSubject=array("education","economics","sanskrit","psychology","political science","philosophy","sociology");
  
   $philosophy_relatedSubject=array("education","economics","sanskrit","psychology","political science","history","sociology");

   $political_science_relatedSubject=array("economics","history","philosophy","sociology");


/**
 * @param $sub_list
 * @return bool
 */
function checkPassMark($sub_list){
    $count=0;
    foreach( $sub_list as $value)
    {
        if($value>=30)
           $count ++ ;
    }
    if ($count >=5)
        return true;
    else
        return false;
}








/**
 * @param $hons_minor
 * @return array
 */
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


/**
 * @param $num1
 * @param $num2
 * @param $num3
 * @param $num4
 * @param $lan1
 * @param $lan2
 * @return mixed
 */
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

/**
 * @param $lan1
 * @param $lan2
 * @param $num1_th_fm
 * @param $num1_obm_th
 * @param $num2_th_fm
 * @param $num2_obm_th
 * @param $num3_th_fm
 * @param $num3_obm_th
 * @param $num4_th_fm
 * @param $num4_obm_th
 * @return mixed
 */
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

/**
 * @param $hons
 * @param $science_hons
 * @param $sub_list
 * @param $aggr
 * @param $merit
 * @return int
 */
function merit_science($hons,$science_hons,$sub_list,$aggr,$merit)
{

if ((array_key_exists($hons,$sub_list))||$hons=="botany"||$hons=="zoology"||$hons=="geography(arts)"||$hons=="geography(science)") {  // echo "Inside if";

    if ($hons == "botany" || $hons == "zoology") {
        $hmarks = $sub_list["biological science"];
        if ($hmarks >= 50||$aggr>=225) {
            $mp = ($aggr * .1) + $hmarks;
        }
        else
        {
            $mp = 0;
        }
    }
    else if ($hons == "geography(arts)" || $hons == "geography(science)") {
        $hmarks = $sub_list["geography"];

        if ($hmarks >= 50||$aggr>=225) {
            $mp = ($aggr * .1) + $hmarks;
        } else {
            $mp = 0;
        }
    }

    else{ 
     $hmarks=$sub_list[$hons];
     //echo $hmarks;
        if($hmarks>=50||$aggr>=225) {
            $mp = ($aggr * .1) + $hmarks;
        }
        else{
            $mp=0;
        }
     }

     
  }
 
return $mp=0;

}


/**
 * @param $hons
 * @param $arts_hons
 * @param $aggr_arts
 * @param $only_sub_list
 * @param $lang1_om
 * @param $lang2_om
 * @param $merit
 * @param $stream
 * @param $sub_list
 * @param $arts
 * @param $history_relatedSubject
 * @param $philosophy_relatedSubject
 * @param $political_science_relatedSubject
 * @return mixed
 */
function merit_arts($hons,$arts_hons,$aggr_arts,$only_sub_list,$lang1_om,$lang2_om,$merit,$stream,$sub_list,$arts,$history_relatedSubject, $philosophy_relatedSubject ,$political_science_relatedSubject)
{
$related=array();
  //Case 1 arts subject and subject is present in hs subject list 
 //echo "<br>Arts hons<br>";
	   if (array_key_exists($hons,$sub_list))
			  {  //echo "hear"; 
				 $hmarks=$sub_list[$hons];//get Marks of hs subject
				 //echo "< br >".$hmarks;
                  if($hons=="english"){
                      if($hmarks>=50){
                          $mp = ($aggr_arts * .1) + $hmarks;
                      }
                      else{
                          $mp=0;
                      }
                      return $mp;
                  }
                  if ($hmarks >= 50||$aggr_arts>=225) {
                      $mp = ($aggr_arts * .1) + $hmarks;
                  } else {
                      $mp = 0;
                  }
			   return $mp;
			   //$aggr=$aggr_arts;
		     }
			  
        else if($hons=="history")
           { //echo "History hons<br>";
	   
					 if($stream === "science" || $stream ==="commerce") //if stream is science or arts
					{ //echo "Inside science/commerCe stream cheking ";

					   $hmarks=max($lang1_om,$lang2_om);
						//echo "In SCIENCE /COMMERCE $hmarks".$hmarks;
                        if ($hmarks >= 50||$aggr_arts>=225) {
                            $mp = ($aggr_arts * .1) + $hmarks;
                        } else {
                            $mp = 0;
                        }
					  // $aggr=$aggr_arts;   
				       return $mp;
				       	  
					 }
					else 
					{
					   // echo "Inside else for if stream is arts if history hons</br>";
					 foreach($only_sub_list as $n)
						 {
							if( in_array($n,$history_relatedSubject) )
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
						// $mp=($aggr_arts*.1)+$max;
						// $aggr=$aggr_arts;
                        $hmarks=$max;

                        if ($hmarks >= 50||$aggr_arts>=225) {
                            $mp = ($aggr_arts * .1) + $hmarks;
                        } else {
                            $mp = 0;
                        }




						 array_push($merit,$mp);
						 return $mp;
					 }  
	   
             }
			 
		else if($hons=="philosophy")
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
							if( in_array($n,$philosophy_relatedSubject) )
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
                        $hmarks=$max;

                        if ($hmarks >= 50||$aggr_arts>=225) {
                            $mp = ($aggr_arts * .1) + $hmarks;
                        } else {
                            $mp = 0;
                        }
						 array_push($merit,$mp);
						 return $mp;
					 }  
	   
             }
			 
		else if($hons=="political science")
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
							if( in_array($n,$political_science_relatedSubject) )
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
                        $hmarks=$max;

                        if ($hmarks >= 50||$aggr_arts>=225) {
                            $mp = ($aggr_arts * .1) + $hmarks;
                        } else {
                            $mp = 0;
                        }
						 return $mp;
					 }  
	   
             }
			 
			
			 
   
        else
        { 
		

		
		            
		        $mp=0;
            return $mp;
	       

	   } 
     


}


/**
 * @param $hons
 * @param $com_hons
 * @param $aggr
 * @param $sub_list
 * @param $max_marks
 * @param $merit
 * @param $stream
 * @return int
 */
function merit_commerce($hons,$com_hons,$aggr,$sub_list,$max_marks,$merit,$stream)

{	
         if (array_key_exists($hons,$sub_list))
			  {  //echo "hear"; 
				 $hmarks=$sub_list[$hons];//get Marks of hs subject
                  if($hmarks >= 50||$aggr>=225) {
                      //echo "< br >".$hmarks;
                      $mp = ($aggr * .1) + $hmarks;
                  }
				 //echo "hons found in subject list honersMArks-".$hmarks." and aggre grate-".$aggr_Toarts;
				 //array_push($merit,$mp);
				 //$aggr=$aggr_arts;
                 else{
                     $mp=0;
                 }
			  
			   return $mp;
		     }



         if($hons=="economics"||$hons=="economics(science)"||$hons=="economics(arts)")
	       {
	  
	  
	       if (array_key_exists("economics",$sub_list))
			  {  //echo "hear"; 
				 $hmarks=$sub_list["economics"];//get Marks of hs subject
				 //echo "< br >".$hmarks;
				// $mp=($aggr *.1)+$hmarks;
				 
				 //echo "hons found in subject list honersMArks-".$hmarks." and aggre grate-".$aggr_Toarts;
				 //array_push($merit,$mp);
				 //$aggr=$aggr_arts;

                  if($hmarks >= 50||$aggr>=225) {
                      //echo "< br >".$hmarks;
                      $mp = ($aggr * .1) + $hmarks;
                  }
                  //echo "hons found in subject list honersMArks-".$hmarks." and aggre grate-".$aggr_Toarts;
                  //array_push($merit,$mp);
                  //$aggr=$aggr_arts;
                  else{
                      $mp=0;
                  }
                  return $mp;
		     }
	  
	  
	  
	        else  if (array_key_exists("mathematics",$sub_list))
			  {  //echo "hear"; 
				 $hmarks=$sub_list["mathematics"];//get Marks of hs subject
				 //echo "< br >".$hmarks;
                  if($hmarks >= 30||$aggr>225) {
                      //echo "< br >".$hmarks;
                      $mp = ($aggr * .1) + $hmarks;
                  }
                  //echo "hons found in subject list honersMArks-".$hmarks." and aggre grate-".$aggr_Toarts;
                  //array_push($merit,$mp);
                  //$aggr=$aggr_arts;
                  else{
                      $mp=0;
                  }
			  
			   return $mp;
		     }
		    else {

		     $hmarks=$max_marks;
                if($hmarks >= 30&&$aggr>=225) {   //Problem Need Clarity

                    $mp = ($aggr * .1) + $hmarks;
                }

                else{
                    $mp=0;
                   }
		     return $mp;
		     }	 
	
	    }
	  
   if($hons=='accountancy')
     { 
        if($stream ==="science" )
		  {//echo "hear"; 
			 $hmarks=$sub_list["mathematics"];
              if($hmarks >= 30 && $aggr>=225) {

                  $mp = ($aggr * .1) + $hmarks;
              }

              else{
                  $mp=0;
              }
			 return $mp;
		  }
		 else 
		 {
			  $hmarks=$sub_list["accountancy"];
             if($hmarks >= 50||$aggr>=225) {

                 $mp = ($aggr * .1) + $hmarks;
             }

             else{
                 $mp=0;
             }

			  return $mp;
			  
	     }   
     }

   return $mp=0;
}


?>
