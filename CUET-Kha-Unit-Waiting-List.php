<!DOCTYPE html>
<html>
    <head>
	    <title>
		    CUET Kha Unit Waiting List
        </title>
    </head>
	<body>
        <?php
            include 'connection.php';

            $sql="SELECT pdf FROM CUET WHERE ID=9";
            $query=mysqli_query($con,$sql);
            while ($info=mysqli_fetch_array($query))
            {
        ?>
        <embed type="application/pdf" src="CUET/<?php echo $info['pdf']; ?>" style="width:100%; height:1000px"></embed>
        <?php
            }
        ?>
    </body>
</html>