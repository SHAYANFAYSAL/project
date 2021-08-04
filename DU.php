<!DOCTYPE html>
<html>
    <head>
	    <title>
		    DU Admission
        </title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="DU.css">
    </head>
	<body>
	
    <?php
        session_start();
        if(!isset($_SESSION['UserLoginId']))
        {
            header("location: user_login.php");
        }

    ?>
	
	
	
	
	    <header>
	        <div class="logo"><a href="#"><img src="Admission.jpg"></a></div>
			<div class="name">Admission Test BD</div>
		    <div class="navbar">
		
		        
			
		        <div class="dropdown_container"><a href="user_home.php">Home</a></div>
			
			    <div class="dropdown_container">
			        <a href="#">General</a>
			    	<div class="dropdown_content">
				        <a href="CU.php">CU</a>
					    <a href="DU.php">DU</a>
					    <a href="KU.php">KU</a>
					    <a href="RU.php">RU</a>
				    </div>
			    </div>
			
			    <div class="dropdown_container">
			        <a href="#">Agricultural</a>
			    	<div class="dropdown_content">
				        <a href="Agri.php">All Agri</a>
			    	</div>
			    </div>
			
			    <div class="dropdown_container">
			        <a href="#">Engineering</a>
				    <div class="dropdown_content">
				        <a href="BUET.php">BUET</a>
					    <a href="CUET.php">CUET</a>
					    <a href="KUET.php">KUET</a>
					    <a href="RUET.php">RUET</a>
				    </div>
			    </div>
			
			    <div class="dropdown_container">
			        <a href="#">Sci. & Tech.</a>
				    <div class="dropdown_content">
				        <a href="HSTU.php">HSTU</a>
					    <a href="JUST.php">JUST</a>
					    <a href="SUST.php">SUST</a>
				    </div>
			    </div>
		    </div>
		</header>
	
	    </br>

        <div class="logout_div">
            <a href="user_logout.php" class="logout_btn">Logout</a>
        </div>
		</br>
	
	    <h1 id="h-style">Dhaka University</h1>
		</br>
		<div class="photo"><img src="DU.png"/></div>
		</br></br></br>
		<section>
		<div class="middle">
		<div class="middle-left">
		<h3>KA Unit</h3>
		<a href="DU_ka.php" target="_blank">Admission Test Circular</br></a>
		<h3>KHA Unit</h3>
		<a href="DU_kha.php" target="_blank">Admission Test Circular</br></a>
		<h3>GA Unit</h3>
		<a href="DU_ga.php" target="_blank">Admission Test Circular</br></a>
		<h3>GHA Unit</h3>
		<a href="DU_gha.php" target="_blank">Admission Test Circular</br></a>
		<h3>CHA Unit</h3>
		<a href="DU_cha.php" target="_blank">Admission Test Circular</br></a>
		<h3>IBA Unit</h3>
		<a href="DU_iba.php" target="_blank">Admission Test Circular</br></a>
		<h3>Apply Procedure</h3>
		<a href="https://adma394c127769905e430433c93686fab3a.eis.du.ac.bd/bn/408b7c8ad06e4d9954fa2d948a01f508" target="_blank">Click here to know how to apply</br></a>
		<h3>Seat Plan</h3>
		<p>
        Type DU &lt;space&gt; Unit Name &lt;space&gt; Roll No and send </br>
		it to 16321 from GP, Banglalink, Robi, Airtel and Teletalk.
		</p>
		<h3>Result</h3>
		<a href="https://adma394c127769905e430433c93686fab3a.eis.du.ac.bd/bn/b45de047fde9788cadae3cfe8e88dcc2" target="_blank">Click here to view result</br></a>
		<h3>Official Website</h3>
		<a href="https://adma394c127769905e430433c93686fab3a.eis.du.ac.bd/bn/408b7c8ad06e4d9954fa2d948a01f508" target="_blank">Click here to go to official website</br></a>
		
		</div>
		
		
		
		<div class="map">
		    </br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14609.802264016247!2d90.38726797958375!3d23.73130705357887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e9a09d3565%3A0x5cfe6b47f59cb10b!2sDhaka%20University%20Campus%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1619953327686!5m2!1sen!2sbd" width="600" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>		</div>
		</div>
		</section>
		</br></br></br></br>
		
		
		
		
		
		
		
		
		
		
		
		
		
		<section>
		    <div class="footer">
		        <div class="about">
				    <h2>About me</h2>
				    <p>
    				    I am a student of</br>
	    			    Rajshahi University</br>
		    		    of Engineering & </br>
			    	    technology. I am </br>
				        studing CSE.
				    </p>
			    </div>
				<div class="links">
				    </br></br></br>
				    <div class="button">
					    <a href="https://www.facebook.com/" target="_blank">
					        <div class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						    <span>Facebook</span>
						</a>
					</div>
					
					<div class="button">
					    <a href="https://twitter.com/" target="_blank">
					        <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						    <span>Twitter</span>
						</a>
					</div>
					
				    <div class="button">
					    <a href="https://www.instagram.com/" target="_blank">
					        <div class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						    <span>Instragram</span>
						</a>
					</div>
					
					<div class="button">
					    <a href="https://github.com/" target="_blank">
					        <div class="icon"><i class="fa fa-github" aria-hidden="true"></i></div>
						    <span>Github</span>
						</a>
					</div>
					
					<div class="button">
					    <a href="https://www.youtube.com/" target="_blank">
					        <div class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
						    <span>Youtube</span>
						</a>
					</div>
					
			    </div>
    		    <div class="footer_bottom">
	    		    &copy;All rights reserved to S.M.Faysal Alam
		    	</div>
		    </div>
		
		</section>
		
		
	</body>
</html>