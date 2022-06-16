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
}
$current = new currentDT();
$current->set_hr(date("H"));
echo $current->get_hr();

 
?>
