<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
     tr:nth-child(even)
      {
        background-color:#ECE5CE;
      } 

    caption{
        border: 1px solid red;
    }
    
    table {
        border-collapse: collapse;
        border: 2px solid black;
       
    }
         
    td {
        border: 1px solid #FF568F;
    }
        
    
    </style>
</head>
<body>
<table>
    <tr>
        <td> Title </td>
        <td> Price </td>
        <td> Available </td>
    </tr>
    <tr>
        <td> CSS Demystified </td>
        <td> $29 </td>
        <td> 16 </td>
    </tr>
    <tr>
        <td> Mastering JavaScript </td>
        <td> $35 </td>
        <td> 10 </td>
    </tr>
    <tr>
        <td> HTML5: An Introduction </td>
        <td> $15 </td>
        <td> 6 </td>
    </tr>
    <tr>
       <td> February </td>
       <td> 49 </td>
       <td> 37 </td>
       <td rowspan="2"> 43 </td>
    </tr>
</table>



<br>
<br>
<br>
<table>
<caption>
        Temperature Distribution In Jan – Apr 2015 (<sup>o</sup>F)
</caption>
<tr>
    <td> Month </td>
    <td> High </td>
    <td> Low </td>
    <td> Average </td>
</tr>
<tr>
    <td> January </td>
    <td> 48 </td>
    <td> 36 </td>
    <td> 40 </td>
</tr>
<tr>
    <td> February </td>
    <td> 49 </td>
    <td> 37 </td>
    <td rowspan="2"> 43 </td>
</tr>
<tr>
    <td> March </td>
    <td> 52 </td>
    <td> 39 </td>
    
 
</tr>
<tr>
    <td> April </td>
    <td> 58 </td>
    <td> 43 </td>
    <td> 47 </td>
</tr>
</table>

</body>
</html>