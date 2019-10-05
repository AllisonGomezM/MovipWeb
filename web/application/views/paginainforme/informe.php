<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Casos resueltos por carrera
    </title>
   <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
     

 
  function drawVisualization() {
  	
 <?     	$j = 0; 
									
				foreach($resultado_alumnos->all as $row){
                    foreach($resultado_rubros as  $row_rubro ){
 	                    if( $row -> rubro== $row_rubro ->id){
                            $a[$j] =  "'".$row -> nombre_alumno ."'";
                            $b[$j] = $row -> where('nombre_alumno',$row -> nombre_alumno)->count();
					        $r[$j] =  "'".$row_rubro -> nombre ."'";
                            $nr[$j] = $row_rubro -> where('nombre',$row_rubro -> nombre)->count();
                            $j++;
	  }}}
			$nj =$j;
  	?>	
    // Create and populate the data table.
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
     
 <?    for ($rowCounter = 0; $rowCounter < $nj; $rowCounter++) {
 
 ?>	
 	
      [<?php echo $r[$rowCounter] ?>, <?php echo $nr[$rowCounter]?>], 
     
  <?       } ?>
        ]);
    

    // Create and draw the visualization.
    new google.visualization.PieChart(document.getElementById('visualization')).
        draw(data, {title:"Alumnos Reincidentes"});
  }

  google.setOnLoadCallback(drawVisualization);

  

  google.setOnLoadCallback(drawVisualization);
</script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="visualization" style="width: 600px; height: 400px;"></div>
  </body>
</html>