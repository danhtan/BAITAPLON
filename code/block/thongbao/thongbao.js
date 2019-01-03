
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#matb').val() == "")  
  {  
   alert("MÃ Không được để trống ");  
  }  
  else if($('#tieude').val() == '')  
  {

   alert("Tiêu Đề không được để trống");  
  }  
  else if($('#noidung').val() == '')
  {  
   alert("Nội Dung không được để trống ");  
  }
   
  else  
  {  
   $.ajax({  
    url:"insert_thongbao.php",  
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
   url:"select_thongbao.php",
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
   url:"update_thongbao.php",
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
   url:"delete_thongbao.php",
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
