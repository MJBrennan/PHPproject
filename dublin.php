<!DOCTYPE html>
<html>
<head>
     <title>Cloud Computing</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 </head>
	 <body>
	 
	 
	 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Info Seeker</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li> <a href = "dublin.php">Dublin</a></li>
            <li><a href="index.php">London</a></li>
            <li><a href="newyork.php">New York</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
	
	<br>
	
	</br>
	 
	 
	 
	 <section id="Section-1">
	<div class="container">
    <!-- Example row of columns -->

	
	
	
	
	   <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
			  
			   <div class="bs-example">
			   <center>
                <img src="images/dublin.jpg" class="img-rounded" width="800" height="200">
		       </center>
            </div>
            </div>
          </div>
        </div>

        <!-- Headings -->



        <!-- Blockquotes -->

      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
			<center>
              <h1 id="type"> Dublin Information</h1>
			  </center>
            </div>
          </div>
        </div>

        <!-- Headings -->

        <div class="row">
          <div class="col-lg-6">

            <h2>Current Weather</h2>
			<br></br>
            <div class="bs-example">

			<?php

require_once('jweather.class.php');

new jweather('EIXX0014','c','img/',false);

?>
			
			
            </div>

          </div>
          <div class="col-lg-6">

            <h2>Latest News</h2>
		<img src="images/news.jpg" class="img-circle" width="100" height="100">
		<br></br>
            <div class="bs-example">

<?php


 function getFeed($url){
 
       $x = simplexml_load_file($url);
	   
	   echo "<ul>";
	   
	   
       foreach($x->channel->item as $entry){
	   
	   
	   
	   
	   echo "<li><a href='$entry->link' title= '$entry->title'>" . $entry->title . "</a></li>";
	   }
            echo  "</ul>";
	}


echo getFeed("http://www.rte.ie/news/rss/news.xml");	

?>


            </div>
            
          </div>
        </div>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
	
<footer>
        <div class="row">
          <div class="col-lg-12">
            
            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
             
           
              <a href="mailto:mike7149@gmai1.com?subject=Web App">Email</a>
             
            </ul>
            
            <p>Technologies used PHP and HTML5 with Twitter Bootstrap </p>

          </div>
        </div>
        
      </footer>

	 
	 

	 
	 
	 
	 
	 <script src="http://code.jquery.com/jquery.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	 
	 </body>
	 
	 
	 </html>