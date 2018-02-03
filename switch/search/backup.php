
<section style="margin-left: 18%;" class="job-browse section">
        <div class="container">
          <div class="row form-group col-sm-8">
    
     <h3>Търсене:</h3>
     
     <input name="search_text" id="search_text"  class="form-control" />
     
    
    <h3>По:</h3>
      <select name="search_by" class="form-control" id="search_by">
     
        <option value="author_name">Име</option>
        <option value="author_surname">Фамилия</option>
        <option value="year_of_magazine">Година на списанието</option>
        <option value="number_of_magazine">Брой на списанието</option>
        <option value="rubric">Рубрика</option>
        <option value="keyword">Клчова дума</option>
      </select>
   </div>

          <div class="row">
            <div class="">
              <div id="result"></div>
            </div>
          </div>


              <!-- Start Pagination -->
              <!-- <a href="#" class="btn btn-common" ><i class="ti-angle-left"></i>Покажи всички</a></li> -->
              <!-- End Pagination -->
            </div>
          </div>
          
        </div>
      </section>
      <script>
$(document).ready(function(){

 load_data();
 

 function load_data(query)
 {
  $.ajax({
   url:"fetch2.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 
 $('#search_text').keyup(function(){
  var search = $(this).val()+"&"+$('#search_by').val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
  
 });
 
 
$('#search_by').change(function(){
  var search = $('#search_text').val()+"&"+$(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
  
 });


});
</script>