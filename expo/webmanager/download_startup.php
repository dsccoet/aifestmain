<?php  
include_once("conn.php");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM startup;";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">    
      <tr> 
              <th>ID</th>
              <th>Startup Name</th>
              <th>Website</th>
              <th>Address</th>

              <th>First Name</th> 
              <th>Last Name</th>
              <th>email</th> 
              <th>mobile</th>

              <th>Project_Name</th> 
              <th>Project_Description</th>
              <th>Video Link</th>
              <th>Category of project</th>
              <th>Project Status</th>
              <th>Accomodation</th>
              <th>Date of Registration</th> 
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {    
   $output .= '
    <tr>  
      <td>'.$row["id"].'</td> 
      <td>'.$row["startup_name"].'</td> 
      <td>'.$row["website"].'</td> 
      <td>'.$row["address"].'</td> 

      <td>'.$row["first_name"].'</td> 
      <td>'.$row["last_name"].'</td> 
      <td>'.$row["email"].'</td>  
      <td>'.$row["mobile"].'</td>

       

      <td>'.$row["project_name"].'</td>  
      <td>'.$row["project_desc"].'</td>
      <td>'.$row["video_link"].'</td>
      <td>'.$row["category_project"].'</td>
      <td>'.$row["project_status"].'</td>
      <td>'.$row["accommodation"].'</td>
      <td>'.$row["date_tab"].'</td>

    </tr>
    
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
