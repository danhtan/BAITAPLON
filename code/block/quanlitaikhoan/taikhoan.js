
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#id_user').val() == "")  
  {  
   alert("Mã Không đk để trống ");  
  }  
  else if($('#username').val() == '')  
  {

   alert("username không được để trống ");  
  }  
  else if($('#password').val() == '')
  {  
   alert("password không được để trống ");  
  }
   else if($('#quyentrycap').val() == '')
  {  
   alert("quyền truy cập không được để trống ");  
  }
   
  else  
  {  
   $.ajax({  
    url:"insert_taikhoan.php",  
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
    
    }  ,
    error:function(){
      alert("loi");
    }
   });  
  }  
 });


  // $(document).on('click', '.delete_data', function(){

  // var employee_id = $(this).attr("id");
  // $.ajax({
  //  url:"delete_taikhoan.php",
  //  method:"POST",
  //  data:{employee_id:employee_id},
  //  success:function(data){
  //   if(data==='loi'){
  //     alert("lỗi");
  //   }
  //   else{
  //   location.reload();
  //   }
  //  }

  // });
// alert(employee_id);

//  });




 
});  
