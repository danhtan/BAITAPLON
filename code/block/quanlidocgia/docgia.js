

$(document).ready(function(){

 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  
   if($('#madg').val() == "")  
  {  
   alert("Mã không đk để trống");  
  }  
 
  else if($('#name').val() == '')
  {  
   alert("Tên k đk để trống");  
  }
  else if($('#diachi').val() == '')  
  {

   alert("Địa Chỉ Không đk để trống");  
  }  
  else if($('#ngaysinh').val() == '')
  {  
   alert("Ngày sinh k đk để trống");  
  }
  else if($('#gioitinh').val() == '')
  {  
   alert("Giới Tính Không đk trống");  
  }
  else if($('#sdt').val() == '')  
  {
   alert("sdt khong dk để trống");  
  }  
  else if($('#hinh').val() == '')
  {  
   alert("hinh k đk để trống ");  
  }
 
  else if($('#gmail').val() == '')
  {  
   alert("gmail k đk để trống ");  
  }
  else  
  {  
   $.ajax({  
    url:"insert_docgia.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    success:function(data){  

    $('#insert_form')[0].reset();  
    $('#noidung').html(data); 
     $('#add_data_Modal').modal('hide');  
    
    
     //$('#abc').load("dssach.php") ;

     location.reload();
       alert("Thêm Thành Công ");
    } 
   
   
   });  


  }  
 });


 $(document).on('click', '.delete_data', function(){

  var employee_id = $(this).attr("id");
  $.ajax({
   url:"delete_docgia.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){ 
    if(data==="loi"){
      alert('Lỗi');

    }
    else{
   alert("Xóa Thành Công ");
    location.reload();

    }
 
   }
  });

 
 });


  $(document).on('click', '.update_data', function(){
 
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"update_docgia.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail_sua').html(data);
    $('#dataModal_sua').modal('show');
   },
  
  });

 });

 $(document).on('click', '.view_data', function(){

  var employee_id = $(this).attr("id");

  $.ajax({
   url:"select _docgia.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });


 });


 $(document).on('click', '.timkiem', function(){

  var employee_id=$('#sot').val();

  $.ajax({
   url:"timkiem_docgia.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#ketqua').html(data);
   }
  });



 });

  $(document).on('click', '.gia_han', function(){

  var employee_id=$(this).attr("id");

  $.ajax({
   url:"gia_han.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail_giahan').html(data);
    $('#dataModal_giahan').modal('show');
   }
  });



 });


 
});  
