<!DOCTYPE html>
<html>
    <head>
	    <title>
		    JUST Admission Test B Unit Result
        </title>
    </head>
	<body>
        <?php
            include 'connection.php';

            $sql="SELECT pdf FROM just WHERE ID=4";
            $query=mysqli_query($con,$sql);
            while ($info=mysqli_fetch_array($query))
            {
        ?>
        <embed type="application/pdf" src="JUST/<?php echo $info['pdf']; ?>" style="width:100%; height:1000px"></embed>
        <?php
            }
        ?>
    </body>
</html>