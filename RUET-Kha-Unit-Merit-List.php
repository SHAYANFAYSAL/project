<!DOCTYPE html>
<html>
    <head>
	    <title>
		    RUET Kha Unit Merit List
        </title>
    </head>
	<body>
        <?php
            include 'connection.php';

            $sql="SELECT pdf FROM RUET WHERE ID=6";
            $query=mysqli_query($con,$sql);
            while ($info=mysqli_fetch_array($query))
            {
        ?>
        <embed type="application/pdf" src="RUET/<?php echo $info['pdf']; ?>" style="width:100%; height:1000px"></embed>
        <?php
            }
        ?>
    </body>
</html>