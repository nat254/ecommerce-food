<?php
require_once('connect.php');

function getFood()
{
  $sql="SELECT * FROM uploadimage";
  $data=getData($sql);
  return $data;
}



?>