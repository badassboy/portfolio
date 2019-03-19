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

<style type="text/css">
    *{
             box-sizing: border-box;
        }

        body{
          padding: 0;
          margin: 0;
        font-family: 'Raleway', sans-serif;

        }





            /*page*/
            .page{
              height: 300px;
              background-color: #ffffff;
              text-align: center;
              float: none;
                  margin: 0 auto;
            font-family: 'Raleway', sans-serif;
                  

            }

            

            .welcome h1{
              color: #00b33c;
              margin-left: 15px;
            font-family: 'Raleway', sans-serif;


            }

            .pro{
                       margin-left: 10px;
                       margin-top: -5px;
                       font-size: 17px;
            font-family: 'Raleway', sans-serif;


            }
            /*page*/


            /*project explaination*/
            .whole{

              background-color: #ffffff;
              height: 630px;
              
            }

            .project_doing{
              
              height: 630px;
              border: 2px solid #e6e6e6;
              border-radius: 5px;
              background-color: #ffffff;
              margin-left: 7%;
            }

            .project_logo {
              background-color:#f2f2f2;
              width: 20%;
              height: 150px;
              float: left;
              margin-left: 3%;
              margin-bottom: 2%;
              border-radius:5%;
              border: 1px solid #0d0d0d;
            }



            .project_description {
              background-color: #ffffff;
              width: 70%;
              height: 150px;
              float: left;
              margin-bottom: 2%;
              margin-left: 3%;
            }

            .project_doing h2{
              margin-left: 15px;
                   color:  #0d0d0d;
          font-family: 'Raleway', sans-serif;




            }

            .title{
              color:#99ff33;
                    margin-left: 10px;
                    margin-top: 3px;
                    font-size: 20PX;
            font-family: 'Raleway', sans-serif;



            }

            .details{
              font-size: 17px;
            font-family: 'Raleway', sans-serif;



            }
            /*project explaination*/

            /*footer*/
            .footer-distributed{
              background-color:#ffffff;
              box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
              box-sizing: border-box;
              width: 100%;
              text-align: left;
              /*font: normal 16px sans-serif;*/
                   font-size: 16px;
          font-family: 'Raleway', sans-serif;



              padding: 45px 50px;
              
              height: 110px;
              border-top: 1px solid #8c8c8c;
              border-bottom:   1px solid #8c8c8c;
              margin-top: 3px;


            }

            .footer-distributed .footer-left p{
              color:  #8f9296;
              font-size: 14px;
              margin-top: -7px;
            }
            /* Footer links */

            .footer-distributed p.footer-links{
              font-size:18px;
              font-weight: bold;
              color: #333333;
              margin: 0 0 10px;
              padding: 0;
            }

            .footer-distributed p.footer-links a{
              display:inline-block;
              line-height: 1.8;
              text-decoration: none;
              color:  inherit;
              margin-top: -20px;
            }

            .footer-distributed .footer-right{
              float: right;
              margin-top: 6px;
              max-width: 180px;
            }

            .footer-distributed .footer-right a{
              display: inline-block;
              width: 35px;
              height: 35px;
              background-color:  #33383b;
              border-radius: 2px;

              font-size: 20px;
              color: #ffffff;
              text-align: center;
              line-height: 35px;

              margin-left: 3px;
              margin-top: -10px;
            }

            /*footer*/

            
</style>

<!-- <link rel="stylesheet" type="text/css" href="project.css"> -->
<link rel="stylesheet" type="text/css" href="footer.css">
<html>
<body>


        <!-- header -->
    <div class="container-fluid header">
      <?php  include('header.php'); ?>
    </div>
    <!-- header -->


      <!--project-->
             <div class="container page">
              
              <div class=" jumbotron">
                <h1>PROJECTS</h1><br>
                <p class="pro">Welcome to the project </p>
              </div>

             </div>

      <!--project-->
          



          <!--project explaination-->

                     <div class="container whole">

                      <div class="project_doing">
                        <h2>Latest Project</h2><br>
                        <hr>

                        <div class="project_logo"></div>
                        <div class="project_description">
                            <p class="title"><?php echo $project_title;?></p>
                            <p class="details"><?php echo $answer; ?></p>
                        </div>

                        
                        <div class="project_logo"></div>
                        <div class="project_description">
                            <p class="title"><?php echo $project_title;?></p>
                            <p class="details"><?php echo $answer; ?></p>
                          
                        </div>
                        <hr>

                        <div class="project_logo"></div>
                        <div class="project_description">
                          <p class="title"><?php echo $project_title;?></p>
                          <p class="details"><?php echo $answer; ?></p>
                          
                        </div>


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