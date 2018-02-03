
<style type="text/css">
  input{
    color:black;
  }
</style>
<section style="margin-left: 18%;" class="job-browse section">
        <div class="container">
          <div class="row form-group col-sm-8">
     <h3 class="col-sm-6">Име:</h3><div class="col-sm-2"></div><h3 class="col-sm-6">Фамилия:</h3>
     <input class="col-sm-6"  id="search_name"  class="form-control" />
     <input class="col-sm-6" name="search_text" id="search_surname"  class="form-control" />

      <h3 class="col-md-1">Година:</h3><div class="col-sm-2"></div><h3 class="col-sm-1">Брой:</h3><div class="col-sm-2"></div>
      <h3 class="col-sm-6">Ключова дума:</h3>
     <input class="col-sm-3" name="search_text" id="search_year"  class="form-control" />
     <input class="col-sm-3" name="search_text" id="search_broi"  class="form-control" />
     <input class="col-sm-6" name="search_text" id="search_keyword"  class="form-control" />
    <h3 class="col-sm-6">Рубрика:</h3>
      <select name="search_rubric" class="form-control" id="search_rubric">
     <option value="">Избери...</option>
        <option value="М+ ЗАДАЧИ">М+ ЗАДАЧИ</option>
        <option value="М+ РЕШЕНИЯ">М+ РЕШЕНИЯ</option>
        <option value="М+ СЕМИНАР">М+ СЕМИНАР</option>
        <option value="М+ ХРОНИКА">М+ ХРОНИКА</option>
        <option value="ВЪВЕДЕНИЕ">ВЪВЕДЕНИЕ</option>
        <option value="ЦЯЛО СПИСАНИЕ">ЦЯЛО СПИСАНИЕ</option>
        <option value="М+ КОНКУРСИ">М+ КОНКУРСИ</option>
        <option value="М+ СЪСТЕЗАНИЯ И СЪСТЕЗАТЕЛИ">М+ СЪСТЕЗАНИЯ И СЪСТЕЗАТЕЛИ</option>
        <option value="М+ ЗНАМЕНИТОСТИ">М+ ЗНАМЕНИТОСТИ</option>
        <option value="М+ ПОДГОТОВКА">М+ ПОДГОТОВКА</option>
        <option value="М+ ЗА НАЙ-МАЛКИТЕ">М+ ЗА НАЙ-МАЛКИТЕ</option>
        <option value="М+ ДЕСЕТ ЗАДАЧИ ЗА...">М+ ДЕСЕТ ЗАДАЧИ ЗА...</option>
        <option value="MITE">MITE</option>
        <option value="М+ ЕДНА ЗАДАЧА МНОГО РЕШЕНИЯ">М+ ЕДНА ЗАДАЧА МНОГО РЕШЕНИЯ</option>

      </select>
        
   </div>

          <div class="row">
            <div class="">
              
              
            </div>
          </div>


              <!-- Start Pagination -->
              <!-- <a href="#" class="btn btn-common" ><i class="ti-angle-left"></i>Покажи всички</a></li> -->
              <!-- End Pagination -->
              <div id="result"></div>
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

 $('#search_name').keyup(function(){
  var search = [$('#search_name').val(),$('#search_surname').val(),$('#search_year').val(),$('#search_broi').val(),$('#search_rubric').val()];
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }

 });


$('#search_surname').keyup(function(){
  var search = [$('#search_name').val(),$('#search_surname').val(),$('#search_year').val(),$('#search_broi').val(),$('#search_rubric').val()];
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }

 });

$('#search_year').keyup(function(){
  var search = [$('#search_name').val(),$('#search_surname').val(),$('#search_year').val(),$('#search_broi').val(),$('#search_rubric').val()];
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }

 });

$('#search_broi').keyup(function(){
  var search = [$('#search_name').val(),$('#search_surname').val(),$('#search_year').val(),$('#search_broi').val(),$('#search_rubric').val()];
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }

 });
$('#search_rubric').change(function(){
  var search = [$('#search_name').val(),$('#search_surname').val(),$('#search_year').val(),$('#search_broi').val(),$('#search_rubric').val()];
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }

 });
$('#search_keyword').keyup(function(){
  var search = [$('#search_name').val(),$('#search_surname').val(),$('#search_year').val(),$('#search_broi').val(),$('#search_rubric').val()];
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
