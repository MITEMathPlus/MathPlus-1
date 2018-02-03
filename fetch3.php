<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "matplus");
$output = '';
if(isset($_POST["query"]))
{
 $fname = $_POST['query'];
$query = "
  SELECT * FROM data_magazine 
  WHERE file_name LIKE '%".$fname."%'
 ";
 
}
else
{
  
}


$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
  
 ';
 while($row = mysqli_fetch_array($result))
 {
  // function names($x,$y)
  // {
  // $only_name = explode(" ", $x);
  // $only_surname = explode(" ", $y);
  // for($i = 0; $i< sizeof($only_name); $i++)
  //   {

  //     echo "".$only_name[$i]." ";
  //     if($i+1 != sizeof($only_name))
  //       echo "".$only_surname[$i]." | ";
      
  //   else
  //     echo $only_surname[$i];

  //   }
  // }
  // $bubica = implode(" | ", $row[""]);
  // echo $bubica
  $test = array();
  $only_name = explode(" ", $row["author_name"]);
   $only_surname = explode(" ", $row["author_surname"]);
  for($i = 0; $i < sizeof($only_name); $i++)
  {
    $test[$i] = "".$only_name[$i]." ".$only_surname[$i]."";
    
  }
$names = implode(" | ", $test);


  $output .= '
  <div class="row">
            <h1 class="text-justify">'.$row["rubric_title"].'</h1>
            <h3 class="text-justify">Автори: <strong>'.$names.'</strong></h3>
            
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a>'.$row["number_of_magazine"].'</a>
              </li>
              <li class="breadcrumb-item"><a>'.$row["year_of_magazine"].'</a></li>
            </ol>
            <div class="embed-responsive embed-responsive-200by200">
              <iframe height="100%" class="embed-responsive-item" src="pdf/'.$row["file_name"].'" allowfullscreen></iframe>
            </div>
          </div>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
 
