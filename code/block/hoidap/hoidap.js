
   $(document).ready(function(){

       $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });


   $(document).on('click', '.traloi', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"traloi.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){

    $('#employee_detail_sua').html(data);
    $('#dataModal_sua').modal('show');
   },
  
   error: function(){
    alert('error!');
  }
  });


});


  $(document).on('click', '.chitiet', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"chitietcauhoi.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   },
   error:function(){
    alert("lỗi");
   }
  });
  

 });


  $(document).on('click', '.delete_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"delete_cauhoi.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    if(data==='loi'){
      alert("lỗi");
    }
    else{
 location.reload();
    }
   
   }
  });
 });







  });


