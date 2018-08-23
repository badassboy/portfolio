<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include("database.php");

$statement = $pdo->prepare("SELECT * FROM projects");
$statement->execute();
while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
  $answer = $result['project'];
  $project_title = $result['project_title'];
}



?>

<link rel="stylesheet" type="text/css" href="project.css">
<html>
<body>


        <!-- header -->
		<div class="container-fluid header">
			<?php  include('header.php');  ?>
		</div>
		<!-- header -->


			<!--project-->
             <div class="page">
             	
             	<div class="welcome">
             		<h1>PROJECTS</h1><br>
             		<p class="pro">Welcome to the project project.</p>
             	</div>

             </div>

			<!--project-->
					



					<!--project explaination-->

                     <div class="whole">
                     	<div class="project_doing">
                     		<h2>Latest Project</h2><br>
                     		<p class="title"><?php echo $project_title;?></p>
                     		<p class="details"><?php echo $answer; ?></p>

                     	</div>
                     </div>

					<!--project explaination-->

					<!--footer-->
                      
                       <div class="container-fluid footer">
               
                      <?php include("footer.php");?>
          
                      </div>
          
                      </div>

					<!--footer-->

					





</body>
</html>