
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
    url:"insert_phieumuon.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    // beforeSend:function(){  
    //  $('#insert').val("Inserting");  
    // },  
    success:function(data){  
      if(data=="loi"){
        alert("Thẻ Bạn Đã Hết Hạn , hãy Gia Hạn cho Thẻ của bạn");
      }
      else{
         $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data); 
     //$('#abc').load("dssach.php") ;
     alert("Thêm Thành Công ");
     location.reload();

      }
   
    }  
   });  
  }  
 });



 $('#insert_form_muon').on("submit", function(event){  
  event.preventDefault();  
  if($('#mapm').val() == "")  
  {  
   alert("mã không đk để Trống ");  
  }  
  else if($('#masach').val() == '')  
  {

   alert("Mã Sách K=không đk để trống ");  
  }  
  else if($('#ngaymuon').val() == '')
  {  
   alert("Ngày Mượn Không đk để trống ");  
  }
   
  else  
  {  
   $.ajax({  
    url:"insert_chitietphieumuon.php",  
    method:"POST",  
    data:$('#insert_form_muon').serialize(),    
    success:function(data){  
      if(data==='loi'){
        alert("lỗi");
      }
      else if(data==='loi update'){
        alert("lỗi update");
      }
      else{
        alert('muon thanh công');
        $("#table_ctpm").html(data);

       $('#insert_form_muon')[0].reset();  
    // $('#add_data_Modal').modal('hide');  
    // $('#employee_table').html(data); 
        // $('#add_data_Modal').modal('hide');  
     
     //location.reload();
      };
 
    }  
   });  
  }  
 });

 $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select_ctpm.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

  $(document).on('click', '.muonsach', function(){

  var employee_id = $(this).attr("id");
  $.ajax({
   url:"bang_muonsach.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){

    $('#employee_detail_muonsach').html(data);
    $('#dataModal_muonsach').modal('show');
   }
  });

 });


  $(document).on('click', '.update_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"update_phieumuon.php",
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
   url:"delete_phieumuon.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    alert("Xóa Thành Công");
    location.reload();
   }
  });
 });

   $(document).on('click', '.delete_data_ctpm', function(){
 
  var employee_id = $(this).attr("id");
  var employee_name = $(this).attr("name");
  $.ajax({
   url:"delete_chitietphieumuon.php",
   method:"POST",
   data:{employee_id:employee_id , employee_name:employee_name},
   success:function(data){
    if(data==='loi'){
      alert("lỗi");
    }
    else{
       location.reload();
     // $("#phieumuon").reload();
    }
   
   },
   error:function(){
    alert("loi");
   }
  });
  // alert( employee_id);
  // alert( employee_name);
 
 });

 
});  
