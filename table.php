<?php 
    require_once "class/connect.php";
  
    if ($conn ->connect_error) die ('ERROR!! Connection failed:'.$conn->connect_error()) ;
           else {
            $query = "SELECT id_juego,
                        nombre,
                        anio,
                        empresa
                    FROM t_juegos";

           $result = mysqli_query($conn,$query);
                   //echo 'CONNECTED!';
                   $conn -> close(); 
          }
         
?>  

<table class="table table-bordered table-striped" id="mTable">
    <thead>
     <tr class="bg-danger text-white">
        <td > Title </td>
        <td> Launch </td>
        <td> Company </td>
        <td>Modify</td>
        <td>Delete</td> 
     </tr>
        
    </thead>
    <tbody>
    <?php
        
        while($show=mysqli_fetch_row($result)){
    ?>
    <tr >
        <td><?php echo $show[1]?></td>
        <td><?php echo $show[2]?></td>
        <td><?php echo $show[3]?></td>
        <td class="text-center"><a href="#" alt="Edit" class="mdi mdi-clipboard-edit-outline h4"></a></td>
        <td class="text-center"><a href="#" alt="Delete" class="mdi mdi-delete  h4"></a></td>
    </tr>
    <?php 
         } 
        
         ?>

    </tbody>
    
</table>
<script type="text/javascript">
       $(document).ready(function(){
           $("#mTable").DataTable();
       });
</script>