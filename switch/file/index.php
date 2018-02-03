 <section class="job-browse section">
        <div class="container">
          <div class="row" style="margin-bottom:20px;">
            <style>
            input::-webkit-calendar-picker-indicator {
                display: none;
              }
            </style>
            <!-- <script>
              function getParameterByName(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            }
            function search_text()
            {
              var x = getParameterByName("m");
              console.log(x);
              document.getElementById("file").innerHTML = '';
            }
            </script> -->
           <?php
          $file_file = $_GET['file'];
          echo '<input type="text" hidden value="'.$file_file.'" id="search_text">';
          ?>


            
          </div>
          <style>

          .embed-responsive-200by200 {
              padding-bottom: 90%;
            }
          </style>
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
   url:"fetch3.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 
 
  

  var search = $('#search_text').val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
  
 
  

  
 
 







});
</script>
      