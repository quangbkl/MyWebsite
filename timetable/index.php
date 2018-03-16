<html>  
      <head>  
           <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles/font-awesome/css/font-awesome.min.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	<meta content="../images/braning.png" itemprop="image">
	<title>Đoàn Văn Quang</title>
	<meta name="description" content="Trang phục vụ công việc, lưu trữ, học tập của Đoàn Văn Quang. Trang tạo ra phục vụ mục đích cá nhân."/>
	<meta property="og:locale" content="vi_VN" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Đoàn Văn Quang" />
	<meta property="og:image" content="https://doanvanquang.com/images/logo.jpg" />
	<meta property="og:description" content="Trang của Đoàn Văn Quang. Trang lưu trữ, phục vụ học tập, giải trí." />
	<meta property="og:site_name" content="Đoàn Văn Quang" />
      </head>  
      <body>  
           <div class="container">  
                <div class="table-responsive">  
                     <h3 align="center">Thời khóa biểu online</h3><br /> 
                     <span>Nhập key lấy quyền admin: </span>
                     <input type="text" id="key" class="">
                     <button id="btn_key" class="btn btn-default">Get Admin</button>
                     <div id="live_data"></div>                 
                </div>  
           </div>  
      </body>  
 </html>  
 <script> 
 $(document).ready(function(){ 
      $(document).on('click', '#btn_key', function(){  
           fetch_data(); 
      });  

      function fetch_data()  
      {  
           var key_token = $('#key').val(); 
           $.ajax({  
                url:"select.php",  
                method:"POST", 
                data:{key: key_token},  
                dataType:"text",
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var tiet = $('#ct').text();  
           var t2 = $('#ct2').text();
           var t3 = $('#ct3').text();
           var t4 = $('#ct4').text();
           var t5 = $('#ct5').text();
           var t6 = $('#ct6').text();
           var t7 = $('#ct7').text();   
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{tiet:tiet, t2:t2, t3:t3, t4:t4, t5:t5, t6:t6, t7:t7},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                } 
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
        var key_token = $('#key').val();
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{key: key_token, id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){
                  if (data != "") {
                    alert(data);
                  }
                }
           });  
      }  
      $(document).on('blur', '.ct', function(){  
           var id = $(this).data("id1");  
           var text_name = $(this).text();  
           edit_data(id, text_name, "tiet");  
      });  
      $(document).on('blur', '.ct2', function(){  
           var id = $(this).data("id2");  
           var text_name = $(this).text();  
           edit_data(id, text_name, "t2");  
      });
      $(document).on('blur', '.ct3', function(){  
           var id = $(this).data("id3");  
           var text_name = $(this).text();  
           edit_data(id, text_name, "t3");  
      });  
      $(document).on('blur', '.ct4', function(){  
           var id = $(this).data("id4");  
           var text_name = $(this).text();  
           edit_data(id, text_name, "t4");  
      });
      $(document).on('blur', '.ct5', function(){  
           var id = $(this).data("id5");  
           var text_name = $(this).text();  
           edit_data(id, text_name, "t5");  
      });  
      $(document).on('blur', '.ct6', function(){  
           var id = $(this).data("id6");  
           var text_name = $(this).text();  
           edit_data(id, text_name, "t6");  
      });
      $(document).on('blur', '.ct7', function(){  
           var id = $(this).data("id7");  
           var text_name = $(this).text();  
           edit_data(id, text_name, "t7");  
      });  
       
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id8");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>	