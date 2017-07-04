<?php  
require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";
 // $query = "SELECT questions,  FROM response GROUP BY questions"; 
$qnum = $_GET['id'];

$i = $qnum;
           

           $q= mysqli_query($con, "SELECT questions FROM questions WHERE ID= ". $i); 
           $ques= mysqli_fetch_array($q);

           $question = $ques['questions'];


 $query = "SELECT answers, count(*) as number FROM response where Q_ID=".$i." GROUP BY answers";  

 $result = mysqli_query($con, $query); 
 
 $qnum = 0;
 ?>  
 <!DOCTYPE html>  

 <html>  


      <head> 

           <title>SURVEY-RESPONSE</title>  
            

           <script  type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           

           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['answers', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["answers"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {
                      title: '<?php echo $ques['questions']?>',

                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           

      </script>     
            
      </head> 
      
      <body>  
           <br /><br />  
           <div style="width:900px;">  
    

                <h3 align="center">Responses</h3>  
                <br/>  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>



  