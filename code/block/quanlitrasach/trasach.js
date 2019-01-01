 
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#mapt').val() == "")  
  {  
   alert("Mã Phiếu Trả K đk để trống");  
  }  
  else if($('#mapm').val() == '')  
  {

   alert("Mã Phiếu mượn không đk để trống");  
  }  
  else if($('#ngaytra').val() == '')
  {  
   alert("Ngày Trả không đk để trống");  
  }
    else if($('#trangthai').val() == '')
  {  
   alert("Trạng thái không đk để trống");  
  }
   
   
  else  
  {  
   $.ajax({  
    url:"insert_phieutra.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    // beforeSend:function(){  
    //  $('#insert').val("Inserting");  
    // },  
    success:function(data){  
      if(data==='loi'){
        alert("lỗi")
      }
      else{
    $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data); 
     //$('#abc').load("dssach.php") ;
     location.reload();
      }

    }  
   });  
  }  
 });





  $(document).on('click', '.update_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"update_phieutra.php",
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
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"delete_phieutra.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    if(data==='loi'){
      alert("loi");
    }
    else{
    location.reload();
    }

   }
  });
 });

 

 
});  

