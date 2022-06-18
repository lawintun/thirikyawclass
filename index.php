<?php
class currentDt{
  public $hr;
  public $yr;


function set_hr($hr){
  $this->hr = $hr;
 }

function get_hr(){
  return $this->hr;
}

function set_yr($yr){
  $this->yr = $yr; } 




function get_yr(){
  return $this->yr;
} 

}
$current = new currentDT();

function checkhr($hour){

  if ($hour > 10 && $hour < 17 ){ 
    $greet = "Good afternoon";
    return $greet;
}
  else if ($hour > 17 && $hour < 20){
    
    return "Good evening" ;
}
  else if($hour > 19 && $hour <24){

    return "Good night";
}
  else if($hour > 1 && $hour <10){
    return "Good morning";
} 
}

function checkyr($year){

if ($year % 400 == 0 ){
  return "Did you know that ".$year."is a leap year?";
}
else {
  return "Did you know that ".$year." is not a leap year?";
 } 
} 
$current->set_hr(checkhr(date("H")));
$current->set_yr(checkyr(date("Y")));
echo "<b><h1>".$current->get_hr()."<b></h1>";
echo "<br><h>".$current->get_yr()."</h>";

 
?>
