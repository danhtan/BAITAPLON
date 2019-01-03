
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
   alert("Name is required");  
  }  
  else if($('#address').val() == '')  
  {

   alert("Address is required");  
  }  
  else if($('#designation').val() == '')
  {  
   alert("Designation is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"insert_sach.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    success:function(data){  
    // $('#insert_form')[0].reset();
     if(data==='lol'){
      alert("Loi");
     }  
     else{
        $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data);
     alert("Thêm Thành Công ");
     location.reload();
     }
    
    }  
   });  
  }  
 });

 $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select_sach.php",
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
   url:"update_data.php",
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




  $(document).on('click', '.delete_data', function(){

  var employee_id = $(this).attr("id");
  $.ajax({
   url:"delete_data.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    if(data==='loi'){
      alert("lỗi");
    }
    else{
      alert("Xóa Thành Công ");
    location.reload();
    }

   }
  });


 });

 
});  
