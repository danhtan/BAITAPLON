  
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#name').val() == "")  
  {  
   alert("Tên Tác Giả Không được để trống");  
  }  
  else if($('#tacgia').val() == '')  
  {

   alert("Mã Tác Giả Không được trống ");  
  }  
  else if($('#namsinh').val() == '')
  {  
   alert("Năm sinh Không được trống");  
  }
   else if($('#quequan').val() == '')
  {  
   alert("Quê quán Không được trống");  
  }
   
    else if($('#sdt').val() == '')
  {  
   alert("SDT Không được trống");  
  }
   
   
  else  
  {  
   $.ajax({  
    url:"insert_tacgia.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    // beforeSend:function(){  
    //  $('#insert').val("Inserting");  
    // },  
    success:function(data){  
    // $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data); 
     //$('#abc').load("dssach.php") ;
     location.reload();
    }  
   });  
  }  
 });

 $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select_tacgia.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });


  $(document).on('click', '.update_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"update_tacgia.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail_sua').html(data);
    $('#dataModal_sua').modal('show');
   }
  });
 });




  $(document).on('click', '.delete_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"delete_tacgia.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    location.reload();
   }
  });
 });

 
});  

