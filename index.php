<?php

//---Get Heroku ClearDB connection information

//$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//$cleardb_server = $cleardb_url["host"];
//$cleardb_username = $cleardb_url["user"];
//$cleardb_password = $cleardb_url["pass"];
//$cleardb_db = substr($cleardb_url["path"],1);

//$active_group = 'default';
//$query_builder = TRUE;

 //--- Connect to DB

//$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="styles/brand.css">
        <title>Endale Nuramo: WEB250 Introduction</title>
</head>
<body>
	<div data-include="components/brand_header.html"></div>

        <h2>Endale Nuramo - WEB250 Database Driven Websites</h2>           

<main>
	<figure>
               <figcaption>
               <img src="images/me.PNG"  alt="My profile" 
                                      height="422" width="329"/> 
		                                Spring Break<br>
               </figcaption>
        </figure>
        <ul>
               <li><strong>Personal Background:</strong> I live in Charlotte, NC and this is my final semester at CPCC.</li>
               <li><strong>Professional Background:</strong> I am unemployed and looking for a job. </li>
                <li><strong>Academic Background:</strong> I am enrolled at Central Piedmont Community College in 2017 with Database Development and Business Intelligence.</li>
               <li><strong>Primary Computer Platform:</strong> Windows.</li>
               <li><strong>Courses I'm taking, and Why:</strong>  
                       <ul>
                       	<li><strong class="web-250">WEB-250:</strong></a> I am taking this course as a substitution for CTI-289 and to learn how to develop dynamic webpages. <a class="contract-link" href="contract.html">Link to WEB-250 contract.</a>  
			</li>
                       </ul>
               <li><strong>Something to Remember Me By:</strong>  I am not sure for now.</li>
	       <li><strong>I'd Also Like to Share:</strong> I like to play soccer and ground tennis.</li>
        </ul>
</main>
<footer>
	<div data-include="components/brand_footer.html"></div>
        <script src="scripts/htmlinclude.js"></script>     
</footer>
</body>
</html>
