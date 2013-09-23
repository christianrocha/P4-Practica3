<html>
    <head>
	<title>Practica 3</title>
	<link rel="stylesheet" href="Estilozebra.CSS"/>  
	</head>
    <body>
	    <center>
	    <h1>Practica 3</h1>
		<h2>Tabla Zebra</h2>		
        <?php 
            echo "<table>";
			$n=1;
            for($fila = 1; $fila <= 10; $fila++){
			    if ($fila % 2 == 0){
                    echo "<tr bgcolor = red>";
				}
                for($col = 1; $col <= 10; $col++){
                    echo "<td>",$n, "</td>";
				    $n = $n + 1;
				}
                    echo "</tr>";
            }
                echo "</table>"; 
        ?>  
        </center>		
    </body>
</html>