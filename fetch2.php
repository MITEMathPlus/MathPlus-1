<?php
//fetch.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "matplus");
$output = '';

if(isset($_POST["query"]))
{
  $data = $_POST['query'];
  $query = "SELECT * FROM `data_magazine`
  WHERE author_name LIKE '%".$data[0]."%'
  AND author_surname LIKE '%".$data[1]."%'
  AND year_of_magazine LIKE '%".substr($data[2],2,4)."%'
  AND number_of_magazine LIKE '%".$data[3]."%'
  AND rubric LIKE '%".$data[4]."%'";

}
else
{
 $query = "
  SELECT * FROM data_magazine ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
  
 ';
 while($row = mysqli_fetch_array($result))
 {
  $test = array();
  $only_name = explode(" ", $row["author_name"]);
   $only_surname = explode(" ", $row["author_surname"]);
  for($i = 0; $i < sizeof($only_name)-1; $i++)
  {
    $test[$i] = "".$only_name[$i]." ".$only_surname[$i]."";
    
  }
$names = implode(" | ", $test);
  $output .= '
  <div style="color:black;" class="col-sm-8 m-y-20 slide-row">
            <div id="carousel-1" class="carousel slide slide-carousel" data-ride="carousel">


              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                    <img src="http://matematika-plus.eu/2017-3-4/2017-3-4.png" alt="Image">
                </div>
              </div>
            </div>
            <div class="slide-content">
                <h4>Автори: '.$names.' </h4>
                <p>Заглавие: '.$row["rubric_title"].'
                </p>
                <p>Рубрика: '.$row["rubric"].'
                </p>
                <p>Година: '.$row["year_of_magazine"].'
                </p>
                <p>Брой: '.$row["number_of_magazine"].'
                </p>
            </div>
            <div class="slide-footer">
                <span class="pull-right buttons">
                    <a href=".?p=file&file='.substr($row["file_name"], 0, 25).'"><button class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Прочети</button></a>
                </span>
            </div>
        </div>
   
    
  ';
 }
 echo $output;
}
else
{
  echo '<h4>За съжеление не откриваме информация за вашето търсене!</h4>';

}

?>
 
