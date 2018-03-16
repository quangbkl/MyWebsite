<?php  
  include 'database.php';

 $key_token = "LTHH";
 $connect = mysqli_connect($server, $username, $password, $database);  
 $output = '';  
 $sql = "SELECT * FROM time_table";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th>Tiết</th>  
                     <th>Thứ 2</th>  
                     <th>Thứ 3</th>  
                     <th>Thứ 4</th>  
                     <th>Thứ 5</th>  
                     <th>Thứ 6</th>  
                     <th>Thứ 7</th> 
                     <th>Action</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td class="ct" data-id1="'.$row["tiet"].'" contenteditable>'.$row["tiet"].'</td>  
                     <td class="ct2" data-id2="'.$row["tiet"].'" contenteditable>'.$row["t2"].'</td>  
                     <td class="ct3" data-id3="'.$row["tiet"].'" contenteditable>'.$row["t3"].'</td>  
                     <td class="ct4" data-id4="'.$row["tiet"].'" contenteditable>'.$row["t4"].'</td>  
                     <td class="ct5" data-id5="'.$row["tiet"].'" contenteditable>'.$row["t5"].'</td>  
                     <td class="ct6" data-id6="'.$row["tiet"].'" contenteditable>'.$row["t6"].'</td>  
                     <td class="ct7" data-id7="'.$row["tiet"].'" contenteditable>'.$row["t7"].'</td>  
                     <td><button type="button" name="delete_btn" data-id8="'.$row["tiet"].'" class="btn btn-xs btn-danger btn_delete admin">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr class="admin">  
                <td id="ct" contenteditable></td>  
                <td id="ct2" contenteditable></td>  
                <td id="ct3" contenteditable></td>  
                <td id="ct4" contenteditable></td>  
                <td id="ct5" contenteditable></td>  
                <td id="ct6" contenteditable></td>  
                <td id="ct7" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr class="admin">  
                <td id="ct" contenteditable></td>  
                <td id="ct2" contenteditable></td>  
                <td id="ct3" contenteditable></td>  
                <td id="ct4" contenteditable></td>  
                <td id="ct5" contenteditable></td>  
                <td id="ct6" contenteditable></td>  
                <td id="ct7" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  ';  
 }  
 $output .= '</table>  
      </div>';  

if ($_POST['key'] != $key_token) {
  $output .= ' <script>
   $(".admin").hide();
 </script>';
}
 echo $output;  
 ?>