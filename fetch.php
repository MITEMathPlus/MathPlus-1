<?php
//fetch.php

$connect = mysqli_connect("localhost", "root", "", "matplus");
$output = '';
if(isset($_POST["query"]))
{
  $search =  explode('&',$_POST["query"]);

 if($search[1] == 'keyword'){
$query = "
  SELECT * FROM authors 
  WHERE author_name LIKE '%".$search[0]."%' 
  OR author_surname LIKE '%".$search[0]."%' 
  

 ";
 }
 else
 {
 $query = "
  SELECT * FROM authors 
  WHERE ".$search[1]." LIKE '%".$search[0]."%' 
  

 ";
}
}


else
{
 $query = "
  SELECT * FROM authors ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);

if( mysqli_num_rows($result)> 0)
{
 $output .= '

    <datalist id="json-datalist">
                       <option value="Име Фамилия">                      
                      
 ';
 while($row = mysqli_fetch_array($result))
 {
  $searching_name = explode(" ", $row["author_name"]);
  $searching_surname = explode(" ", $row["author_surname"]);
  $name = 0;
  $check = "";
  $buba = array();
  $surname = 0;

 
  for($i = 0; $i < sizeof($searching_name); $i++)
  {

    
      $name = $searching_name[$i];
      $surname = $searching_surname[$i];

    
    

  }
  $output .= '
  
                       <option value="'.$name.' '.$surname.'">
                        
                      
   
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
 
