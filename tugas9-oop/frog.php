<?php
class frog extends animal
{
  // Properties
  public $name;
  public $legs;
  public $cold_blooded;
  public $jump;

  // Methods
  function __construct($name, $legs, $cold_blooded, $jump)
  {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_blooded = $cold_blooded;
    $this->jump = $jump;
  }

  function get_name()
  {
    return $this->name;
  }
  function get_legs()
  {
    return $this->legs;
  }
  function get_cold_blooded()
  {
    return $this->cold_blooded;
  }
  function get_jump()
  {
    return $this->jump;
  }
}
$frog = new frog("buduk", "4", " no", "hop hop hop");
echo "Nama : " . $frog->get_name();
echo "<br>legs : " . $frog->get_legs();
echo "<br>Cold blooded :" . $frog->get_cold_blooded();
echo "<br>Jump : " . $frog->get_jump();
