<?php


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Performance Appraisal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/radio.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="themes/css-stars.css" />

		
	</head>
	
<style>


</style>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html"> <span>AHEIEPMSAS</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="managerHome.php">Home</a></li>
					<li><a href="index.html">Sign Out</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
						<header class="align-center">
								<h1>Performance Evaluation <div id="one"></div></h1>
							</header>
						<div >
							<div>
					     <div><h4>Evaluation Period:</h4> <span id ="two"></span></div></br>
						 <div><h5>Criteria 1:</h5></div><span id ="three"></span></br>
						   <div> <h5>Objective:</h5></div><div id ="four"></div>
							<div class="6u 12u$(xsmall)">
							    Employee Comment:
							<textarea name='commentOne' id='commentOne' readonly></textarea>
							</div>
							<div style="height:10px"></div>
							<div class="6u 12u$(xsmall)">
							    Manager Comment:
							<textarea name='commentThree' id='commentThree' readonly></textarea>
							</div>
							
							</br></br>
						 <div><h5>Criteria 2:</h5></div><span id ="six"></span></br>
						   <div> <h5>Objective:</h5></div><div id ="seven"></div>
							<div class="6u 12u$(xsmall)">
							Employee Comment:
							<textarea name='commentTwo' id='commentTwo' readonly></textarea>
						</div>
						<div style="height:10px"></div>
						<div class="6u 12u$(xsmall)">
						    Manager Comment:
							<textarea name='commentFour' id='commentFour'readonly></textarea>
							</div>
							</br></br>
						 <div><h5>Criteria 3:</h5></div><span id ="eight"></span></br>
						   <div> <h5>Objective:</h5></div><div id ="nine"></div>
							<div class="6u 12u$(xsmall)">
							Employee Comment:
							<textarea name='commenteight' id='commenteight' readonly></textarea>
						     
						
						</div>
						<div style="height:10px"></div>
						<div class="6u 12u$(xsmall)">
						    Manager Comment:
							<textarea name='commentnine' id='commentnine' readonly></textarea>
							</div>
							
								</br></br>
						 <div><h5>Criteria 4:</h5></div><span id ="ten"></span></br>
						   <div> <h5>Objective:</h5></div><div id ="eleven"></div>
							<div class="6u 12u$(xsmall)">
							Employee Comment:
							<textarea name='commentTen' id='commentTen' readonly></textarea>
						     
						
						</div>
							<div style="height:10px"></div>
						<div class="6u 12u$(xsmall)">
						    Manager Comment:
							<textarea name='commentEvelven' id='commentEleven'readonly></textarea>
							</div>
							
								</br></br>
								
								 <div><h5>Criteria 5:</h5></div><span id ="twelve"></span></br>
						   <div> <h5>Objective:</h5></div><div id ="thirteen"></div>
							<div class="6u 12u$(xsmall)">
							Employee Comment:
							<textarea name='comment12' id='comment12' readonly></textarea>
						     
						
						</div>
							<div style="height:10px"></div>
						<div class="6u 12u$(xsmall)">
						    Manager Comment:
							<textarea name='comment13' id='comment13'readonly></textarea>
							</div>
							
								</br></br>
						</br>
						
					    <select id="example-css" name="rating" autocomplete="off">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
							<div style="height:20px"></div>
						<button id="confirm" class="button fit" style="width:250px; background:green">Return</button>
						</div>
                        <div id ="rating">
	   

</div>
						
					</section>
					
			</div>
					

			</div>
		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="js/test/jquery-1.11.2.min.js"></script>
	    	<script src="js/test/jquery.barrating.min.js"></script>
	    	<script src="js/test/examples.js"></script>
				
				
<script>
var yearx="one";
var critone="one";
var critwo ="two";
var crithree ="two";
var critfour ="two";
var critfive ="two";
var aid="0";
    	var empid=sessionStorage.getItem("xid"); //get session data
    	var uid=sessionStorage.getItem("uid");
    		var rate=sessionStorage.getItem("rate");
    		
    $('#example-css').val(rate); //set rating
    //	alert(uid);
	$.ajax({
				type:"post",
				url:"login.php",
				data: 
				{  
				   'action' :'getappraisal',  //get appraisal details
				   'id' : empid,
				},
				cache:false,
				success: function (html) 
				{
			        //alert(html);
					 var jsonData = JSON.parse(html);
						for(x in jsonData)
            			{
            			//	if(jsonData[x].userName==queryString)
            				{
            						
            						yearx=jsonData[x].year;
            					
            						document.getElementById("one").innerHTML=yearx;
            						document.getElementById("two").innerHTML=jsonData[x].evaluationPeriod;
            						critone =jsonData[x].criteria_one;
            						critwo = jsonData[x].criteria_two;
            						crithree =jsonData[x].criteria_three;
            						critfour = jsonData[x].criteria_four;
            						critfive =jsonData[x].criteria_five;
            					
            						
            					    aid = jsonData[x].id;
            					
            				}
            			}
            			
            			// to get 1st criteria details
            			
            			$.ajax({
				type:"post",
				url:"login.php",
				data: 
				{  
				   'action' :'criteria_detail',
				   'criteria_one' : critone, //get criteria details
				},
				cache:false,
				success: function (html) 
				{
				  //  alert(html);
					 var jsonData = JSON.parse(html);
						for(x in jsonData)
            			{
            			//	if(jsonData[x].userName==queryString)
            				{
            						
            					
            			
            						document.getElementById("three").innerHTML=jsonData[x].name;
            						document.getElementById("four").innerHTML=jsonData[x].objective;
            				
            				
            				}
            			}
            			
            			//criteria 2
            			$.ajax({
				type:"post",
				url:"login.php",
				data: 
				{  
				   'action' :'criteria_detail',
				   'criteria_one' : critwo,   //get criteria details
				},
				cache:false,
				success: function (html) 
				{
				  //  alert(html);
					 var jsonData = JSON.parse(html);
						for(x in jsonData)
            			{
            			//	if(jsonData[x].userName==queryString)
            				{
            						
            					
            			
            						document.getElementById("six").innerHTML=jsonData[x].name;
            						document.getElementById("seven").innerHTML=jsonData[x].objective;
            				
            				
            				}
            			}
            			
            				// comment details
            				$.ajax({
				type:"post",
				url:"login.php",
				data: 
				{  
				   'action' :'empEvaluation',   //get employee comments
				   'aid' : aid,
				},
				cache:false,
				success: function (html) 
				{
				   // alert(html);
					 var jsonData = JSON.parse(html);
						for(x in jsonData)
            			{
            			//	if(jsonData[x].userName==queryString)
            				{
            						
            			
            						document.getElementById("commentOne").innerHTML=jsonData[x].criteriaOne_comment;
            						document.getElementById("commentTwo").innerHTML=jsonData[x].criteriaTwo_comment;
            							document.getElementById("commenteight").innerHTML=jsonData[x].criteriaThree_comment;
            						document.getElementById("commentTen").innerHTML=jsonData[x].criteriaFour_comment;
            							document.getElementById("comment12").innerHTML=jsonData[x].criteriaFive_comment;
            						
            				
            						
            				
            				}
            			}
            				$.ajax({
				type:"post",
				url:"login.php",
				data: 
				{  
				   'action' :'criteria_detail',
				  'criteria_one' : crithree, //get criteria details
				},
				cache:false,
				success: function (html) 
				{
				   // alert(html);
					 var jsonData = JSON.parse(html);
						for(x in jsonData)
            			{
            			//	if(jsonData[x].userName==queryString)
            				{
            						
            			
            						document.getElementById("eight").innerHTML=jsonData[x].name;
            						document.getElementById("nine").innerHTML=jsonData[x].objective;
            				
            						
            				
            				}
            			}
            				$.ajax({
				type:"post",
				url:"login.php",
				data: 
				{  
				   'action' :'criteria_detail',
				  'criteria_one' : critfour, //get criteria details
				},
				cache:false,
				success: function (html) 
				{
				   // alert(html);
					 var jsonData = JSON.parse(html);
						for(x in jsonData)
            			{
            			//	if(jsonData[x].userName==queryString)
            				{
            						
            			
            						document.getElementById("ten").innerHTML=jsonData[x].name;
            						document.getElementById("eleven").innerHTML=jsonData[x].objective;
            				
            						
            				
            				}
            			}
            				$.ajax({
				type:"post",
				url:"login.php",
				data: 
				{  
				   'action' :'criteria_detail',
				  'criteria_one' : critfive, //get criteria details
				},
				cache:false,
				success: function (html) 
				{
				   // alert(html);
					 var jsonData = JSON.parse(html);
						for(x in jsonData)
            			{
            			//	if(jsonData[x].userName==queryString)
            				{
            						
            			
            						document.getElementById("twelve").innerHTML=jsonData[x].name;
            						document.getElementById("thirteen").innerHTML=jsonData[x].objective;
            				
            						
            				
            				}
            			}
            				//start of manager comment
            			$.ajax({
				type:"post",
				url:"login.php",
				data: 
				{  
				   'action' :'managerEval',
				   'aid' : aid,   //get manager comments
				   
				},
				cache:false,
				success: function (html) 
				{
				    //alert(html);
					 var jsonData = JSON.parse(html);
						for(x in jsonData)
            			{
            			//	if(jsonData[x].userName==queryString)
            				{
            						
            			
            						document.getElementById("commentThree").innerHTML=jsonData[x].criteriaOne_comment;
            						document.getElementById("commentFour").innerHTML=jsonData[x].criteriaTwo_comment;
            						document.getElementById("commentnine").innerHTML=jsonData[x].criteriaThree_comment;
            						document.getElementById("commentEleven").innerHTML=jsonData[x].criteriaFour_comment;
            						document.getElementById("comment13").innerHTML=jsonData[x].criteriaFive_comment;
            						
            				
            						
            				
            				}
            			}
            		
				}
			});
            	
            			
				}
			});
				}
			});
				}
			});
				}
			});
            			
            				// end of comment details
				}
			});
            			
            								
            			// end of criteria 2 details	
            				}
            			
			});
            			// end of criteria 1 details
			
				}
	});
			
			
document.getElementById("confirm").onclick=function(){
	     window.location.href = "checkAppraisalReport.php";
	   
}
	
	</script>

	</body>

</html>