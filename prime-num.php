<?php
$count = 0;
$number = 2;

while ($count < 25 ){
$divCount=0;
  for ( $i=1;$i<=$number;$i++ ){
  if (($number % $i)==0){
  $divCount++;
  }
}
  if ($divCount < 3)
{
  echo $number," <br> ";
$count=$count++;
}
$number=$number++;
}
?>








