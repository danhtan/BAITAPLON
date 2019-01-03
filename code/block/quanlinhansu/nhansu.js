

$(document).ready(function(){

 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  
   if($('#manv').val() == "")  
  {  
   alert("Mã không đk để trống");  
  }  
  else if($('#nguoidung').val() == '')  
  {

   alert("MÃ người dùng k được trống");  
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
   else if($('#chucvu').val() == '')  
  {

   alert("Chức vụ khong dk để trống");  
  }  
  else if($('#gmail').val() == '')
  {  
   alert("gmail k đk để trống ");  
  }
  else  
  {  
   $.ajax({  
    url:"insert_nhansu.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    success:function(data){  
    // $('#insert_form')[0].reset(); 
    if(data==='loi') {
      alert("lỗi");
    }
    else{
            alert("Thêm Thành Công ");
       $('#noidung').html(data); 
     $('#add_data_Modal').modal('hide');  
    
    
     //$('#abc').load("dssach.php") ;

     location.reload();

    }
   
    } 
   
   });  
  }  
 });


  $(document).on('click', '.delete_data', function(){
  //$('#dataModal').modal();
  // var employee_id = $(this).attr("id");
  // $.ajax({
  //  url:"delete_nhansu.php",
  //  method:"POST",
  //  data:{employee_id:employee_id},
  //  success:function(data){
  //   location.reload();
  //  }
  // });
  alert("ok");
 });

  $(document).on('click', '.update_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"update_nhansu.php",
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
   url:"select_nhansu.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });

 });


 
});  
