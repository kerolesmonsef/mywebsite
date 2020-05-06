
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css\main.css">
	<link rel="stylesheet" type="text/css" href="css\font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://brick.a.ssl.fastly.net/Roboto:400"/>
	<link rel="stylesheet" type="text/css" href="css\animate.min.css">
	<link rel="stylesheet" type="text/css" href="css\Css.css">
	<link rel="shortcut icon" type="image/png" href="image/logo.png"/>
	<link rel="stylesheet" type="text/css" href="css\hover-min.css">
	<link rel="stylesheet" href="https://brick.a.ssl.fastly.net/Roboto:400"/>
	<title>
		Kero site
	</title>
</head>

<body>

		<?php 
		if (isset($_POST['contact_me'])) {
			$from=$_POST['email'];
			$to='kokomonsef33@yahoo.com';
			$message=$_POST['message'];
			$name=$_POST['name'];
			$secret_key='6Lf3aIkUAAAAANqkFDI_SnGdllw9126611A-cONB';
			$responseKey=$_POST['g-recaptcha-response'];
			$userip=$_SERVER['REMOTE_ADDR'];
			$url='https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$responseKey.'&.remoteip='.$userip;

			$response=file_get_contents($url);
			$response=json_decode($response);
			if ($response->success) {
				$fullmessage='message from your website NAME = {'.$name.'} . Email{{  '.$from.' }} and it contain {{ '.$message.' }}';
				mail($to,'question from a website', $fullmessage,'Header'); 
				mail($from,'answer', 'Thanks for visiting my website and for feedback. i will replay to your message soon...','Header'); 

				echo('<div class="alert alert-success" style="position: fixed; ">
					<button type="button"  class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
			  			Message has been Sent <strong>Successefully</strong> 
				</div>');
			}else{
				echo('<div class="alert alert-danger" style="position: fixed; ">
					<button type="button"  class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
			  			<strong>Error</strong> While Sending the message . you should select I am not ropote
				</div>');
			}

			
			//die($name);
			//die('lk');
		}

		 ?>
	<section class="loadding-screen">
		<div class="loader">Loading...</div>
	</section>
		<div class="navpar col-md-12">
			<div class="container">
				<a href="index.php"><h2>Fo<span>cal</span></h2></a>
				<ul>
					<li><a onclick="movesmizing('#slider',550,this)" class="active" href="#">home</a></li>
					<li><a onclick="movesmizing('#aboutme',55,this)" href="#">About Me</a></li>
					<li><a onclick="movesmizing('#skilles',this)"  href="#">My Skilles</a></li>
					<li><a href="#">lomenazs</a></li>
					<li><a href="#">Center</a></li>
					<li><a onclick="movesmizing('.the_work',250,this)" href="#">Portfolios</a></li>
					<li><a onclick="movesmizing('#contact_me',20,this)" href="#">Contact Me</a></li>
				</ul>
			</div>
		</div>



		
		<div class="slider" id="slider"> 
			<div class="container">
				<div class="im" style="color: #2ECCEA;">
					<h2>web Designer ~ Developer</h2>
					<!-- <button class="hvr-wobble-top wow  bounceInDown">Learn More</button> -->
			    </div>
			</div>
		</div>
		
		<!-- <div class="feat">
			<div class="container">
				<div class="min bounceInDown wow col-xs-12 col-md-4" data-wow-duration="1s" data-wow-offset="100">
					<h2 class="flash">Values</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

				<div class="min bounceInDown wow col-xs-12 col-md-4" data-wow-duration="2s" data-wow-offset="100">
					<h2>Goals</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

				<div class="min bounceInDown wow col-xs-12 col-md-4" data-wow-duration="3s" data-wow-offset="100">
					<h2>Hobbies</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div> -->


			<div class="clearfloat"></div>


		<div class="aboutme" id="aboutme">
			<div class="cont">
				<div class="col-sm-4 hvr-sink wow bounceInLeft" data-wow-offset="100" data-wow-duration="1s">
					<img style="width: 100%; margin-top: 20px;" src="image/koko.jpg" >
				</div>

				<div class="info col-sm-8">
					<div class="upper wow bounceInRight" data-wow-offset="100" data-wow-duration="1s">
						<h2 class="hvr-bounce-in">About Me</h2>
						<p style="text-transform: capitalize;">
							My Name Is Keroles Monsef And I Am
							A technically Back End web developer,
							I started in web development since 2015, 
							I have some talent in problem-solving ,
							it makes me find the solution of the problem as fast as you imagine, 
							I have experience of working in leading global internet technology 
							companies and of completing challenging client projects. As now I 
							am looking for a suitable position.
						</p>
					</div> 
					<div class="lower">
						<div class="col-sm-12 hvr-wobble-to-bottom-right">
							<div class="mins col-sm-6  wow fadeIn hvr-wobble-to-bottom-right" data-wow-offset="100" data-wow-delat="1s">
								<div class="ph"><i class="fa fa-soccer-ball-o fa-2x hvr-wobble-to-bottom-right"></i></div>
								<div class="par hvr-wobble-to-bottom-right">
									<h3 class="hvr-wobble-to-bottom-right">Wep Design</h3>
									<p>with height responsive web design experients and technologys</p>
								</div>
							</div>
							<div class="mins col-sm-6 hvr-wobble-to-top-right wow fadeInDown" data-wow-offset="100" data-wow-delat="1.1s">
								<div class="ph"><i class="fa fa-android fa-2x hvr-wobble-to-bottom-right"></i></div>
								<div class="par hvr-wobble-to-bottom-right">
									<h3>Android Develop</h3>
									<p>with 4 months experience in Android Field</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 hvr-wobble-to-bottom-right">
							<div class="mins col-sm-6 hvr-buzz-out wow fadeInUp" data-wow-offset="100" data-wow-delat="1.2s">
								<div class="ph"><i class="fa fa-sitemap fa-2x hvr-wobble-to-bottom-right"></i></div>
								<div class="par hvr-wobble-to-bottom-right">
									<h3>DataBase</h3>
									<p>i have a good skill with Sql | MySql | Oracle</p>
								</div>
							</div>
							<div class="mins col-sm-6 hvr-wobble-vertical wow fadeInLeft" data-wow-offset="100" data-wow-delat="1.3s">
								<div class="ph"><i class="fa fa-space-shuttle fa-2x hvr-wobble-to-bottom-right"></i></div>
								<div class="par hvr-wobble-to-bottom-right">
									<h3>Game Design & Develop</h3>
									<p>( unity technology | C# )</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 hvr-wobble-to-bottom-right">
							<div class="mins col-sm-6 hvr-wobble-vertical wow fadeInRight" data-wow-offset="100" data-wow-delat="1.4s">
								<div class="ph" ><i class="fa fa-question fa-3x hvr-wobble-to-bottom-right"></i></div>
								<div class="par hvr-wobble-to-bottom-right">
									<h3>Problem Solving</h3>
									<p>With hieght experience with problem-solving that define the problem and solve it .</p>
								</div>
							</div>
							<div class="mins col-sm-6 hvr-buzz-out wow fadeInUp wow fadeInDown" data-wow-offset="100" data-wow-delat="1.5s">
								<div class="ph"><i class="fa fa-wpforms fa-2x hvr-wobble-to-bottom-right"></i></div>
								<div class="par hvr-wobble-to-bottom-right">
									<h3>Windows Form Application</h3>
									<p>have an experience with develop and design Form Apps for Windows</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfloat"></div>

		<div class="my_skilles" id="skilles">
			<div class="container">
				<h2 class="text-center">My Skills</h2>

					
					<div class="tech col-sm-12 col-md-6">
						<h3>Laravel</h3>
						<div><div class="deg" style="width: 90%;"><p>90%</p></div></div>
					</div>

					<div class="tech col-sm-12 col-md-6">
						<h3>Wordpress</h3>
						<div><div class="deg" style="width: 60%;"><p>60%</p></div></div>
					</div>

					<div class="tech col-sm-12 col-md-6">
						<h3>PHP</h3>
						<div><div class="deg" style="width: 95%;"><p>95%</p></div></div>
					</div>

					<div class="tech col-sm-12 col-md-6">
						<h3>Mysql</h3>
						<div><div class="deg" style="width: 80%;"><p>80%</p></div></div>
					</div>

					<div class="tech col-sm-12 col-md-6">
						<h3>Git</h3>
						<div><div class="deg" style="width: 90%;"><p>90%</p></div></div>
					</div>
	
					<div class="tech col-sm-12 col-md-6">
						<h3>SQL</h3>
						<div><div class="deg" style="width: 50%;"><p>50%</p></div></div>
					</div>
					
					<div class="tech col-sm-12 col-md-6">
						<h3>Mongo Database</h3>
						<div><div class="deg" style="width: 60%;"><p>60%</p></div></div>
					</div>
	
					<div class="tech col-sm-12 col-md-6">
						<h3>Oracle</h3>
						<div><div class="deg" style="width: 40%;"><p>40%</p></div></div>
					</div>
	
					<div class="tech col-sm-12 col-md-6">
						<h3>Javascript</h3>
						<div><div class="deg" style="width: 80%;"><p>80%</p></div></div>
					</div>

					<div class="tech col-sm-12 col-md-6">
						<h3>JQuery</h3>
						<div><div class="deg" style="width: 90%;"><p>90%</p></div></div>
					</div>

					<div class="tech col-sm-12 col-md-6">
						<h3>Ajax</h3>
						<div><div class="deg" style="width: 95%;"><p>95%</p></div></div>
					</div>

					<div class="tech col-sm-12 col-md-6">
						<h3>Html5</h3>
						<div><div class="deg" style="width: 90%;"><p>90%</p></div></div>
					</div>

					<div class="tech col-sm-12 col-md-6">
						<h3>Css</h3>
						<div><div class="deg" style="width: 70%;"><p>70%</p></div></div>
					</div>

					<div class="tech col-sm-12 col-md-6">
						<h3>Bootstrap 3</h3>
						<div><div class="deg" style="width: 80%;"><p>80%</p></div></div>
					</div>
	

					<div class="tech col-sm-12 col-md-6">
						<h3>Gaming Developming (Unity3d)</h3>
						<div><div class="deg" style="width: 80%;"><p>80%</p></div></div>
					</div>
					
					<div class="tech col-sm-12 col-md-6">
						<h3>C# Form Application</h3>
						<div><div class="deg" style="width: 95%;"><p>95%</p></div></div>
					</div>
		    </div>
		</div>
		<div class="clearfloat"></div>

		<div class="resume">
			<div class="cont">
				<h2>Resume</h2>
				<p>Dwonload and see my web development resume . it is the same as this website :)</p>
					<button class="hvr-wobble-top" onclick="location.href ='keroles-monsef.pdf'"  download="keroles-monsef">DOWNLOAD RESUME</button>
			</div>
		</div>


		<div class="my_education">
			<div class="cont">
				<div class="one"> <h2>MY EDUCATION</h2></div>
				<div class="divl">
					<p>
						if you looking at my education. you will see that i am completely acceptable at any organization,
						at any company, at any work and at any field, i build my skills and make them grow bit by bit with 
						help with this education 
					</p>
				</div>
				<div class="divl"> 
					<h2>Secondary School</h2>
					<p>2013-2015</p>
					<button>3 YEAR</button>
					<hr>
					<p>
						<h4>El Alskarial(Mallawi-Elmenia)</h4>
						<p>
							i got 3 year in Alskarial High school,those 3 years increase my ability in English 
							and Math and some otehr science made me qualified to faculity of computers and information
						</p>
					</p>
					<br><br>
					<h3> Bachelor Degree FCI</h3>
					<p>2015-2019 <br>faculty of computers and information in menya univirsty </p>
					<button>4 YEAR</button>
					<HR>
					<p>
						a Four Years in faculty of computers and informations With trainings and Projects and computer science 
					</p>
				</div>
		    </div>
		</div>

		<!-- <div class="cont">
			<div class="clearfloat" >
				<hr class="hr">
			</div>
		</div> -->


<!-- 		<div class="exper">

			<div class="cont">
				<div class="one"> <h2>WORK EXPERIENCE</h2></div>
				<div class="divl">
					<p>thsi is paragraph thsi is paragrap hthsi is paragraph thsi is paragraph thsi is paragraph thsi is paragrap hthsi is paragrapht hsi is paragraph thsi is paragraph thsi is paragra phthsi is parag raph</p>
					<p>thsi is paragraph thsi is paragrap hthsi is paragraph thsi is paragraph thsi is paragraph thsi is paragrap hthsi is paragrapht hsi is par
					</p>
				</div>
				<div class="divl"> 
					<h2>Grapg Design Deploma </h2>
					<p>2008 2009 2010</p>
					<button>2 YEAR</button>
					<hr>
					<p>thsi is paragraph thsi is paragrap hthsi is paragraph thsi is paragraph thsi is paragraph thsi is paragrap hthsi is paragrapht hsi is paragraph thsi is paragraph thsi is paragra phthsi is parag raph</p>
					<br><br>
					<h3> CIT DEPLOMA</h3>
					<p> menia univirsty 2030 /2017 joun</p>
					<button>5 YEAR</button>
					<HR>
					<p>thsi is paragraph thsi is paragrap hthsi is paragraph thsi is paragraph thsi is paragraph thsi is paragrap hthsi is paragrapht hsi is paragraph thsi is p</p>
				</div>
		    </div>
		</div> -->
		

		<div class="cont">
			<div class="clearfloat" ><hr></div>
		</div>

<!-- 		<div class="testmonia">
			<div class="cont">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<h4>KEROLES MONSEF</h4>
				<div class="points">
					<div class="cir"></div>
					<div class="solid"></div>
					<div class="cir"></div>
					<div class="cir"></div>
				</div>
			</div>
		</div> -->

		<div class="portofolio">
			<div class="cont">
				<h2>PORTFOLIOS</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<h4 class="text-left">choose the topic to Filter PORTFOLIOS</h4>
				 <ul class="languages text-left">
	                <li data-filter="all" class="active">All</li>
	                <li data-filter=".php" >PHP Development</li>
	                <li data-filter=".design" >Web Design</li>
	                <li data-filter=".laravel" >Laravel</li>	                
	                <li data-filter=".wordpress" >WordPress</li>	                
	                <li data-filter=".html5" >HTML5</li>
	                <li data-filter=".mysql" >MYSQL</li>
	                <li data-filter=".SQL" >SQL</li>
	                <li data-filter=".mongoDB" >Mongo Database</li>
	                <li data-filter=".c-s" >c#</li>
	                <li data-filter=".unity" >Unity Game Development</li>
	                <li data-filter=".javascript" >JavaScript</li><br>
	                <li data-filter=".Jquery" >Jquery</li>
	                <li data-filter=".Ajax" >Ajax</li>
            	</ul>
            	<div style="clear: both;"></div>
				<div class="the_work" id="the_work">
					<div class="containe">
						<div class="row">
							<div class="iii text-center mix laravel php javascript Jquery mongoDB html5 design Ajax">
								<img src="image/facebook_image.png">
								<div class="iii-content text-center">
									<h3 style="color: white">FaceBook 2</h3>
									<p style="color: white;font-weight: bold;">
										It is the same as FaceBook website. add comments 
										remove comments ,follow other users , remove the follow, search users,show user comments,the same as facebook,
										see follows new posts
										with MONGO DataBase  
									 </p>
										<a target="_blank" href="portofolio_show.php?project_name=FaceBook" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							<div class="iii text-center mix  php html5 design wordpress mysql">
								<img src="image/wordpress.png">
								<div class="iii-content text-center">
									<h3 style="color: white">Wordpress</h3>
									<p style="color: white;font-weight: bold;">
										this site is build with wordpress it contain {add post with categories and tags | add comment on the post and on the comment | create account | and login}
									 </p>
										<a target="_blank" href="portofolio_show.php?project_name=wordpress" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							<div class="iii text-center mix php javascript Jquery html5 mysql">
								<img src="image/ecommerce-website.png">
								<div class="iii-content text-center">
									<h3 style="color: white">Ecommerce</h3>
									<p style="color: white;font-weight: bold;">Ecommerce Project. that contain admin and users in the web site . 
									 give the full controle to the admin to add , adit and remove a members. in the website  </p>
										<a target="_blank" href="portofolio_show.php?project_name=ecommerce" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							<div class="iii mix design javascript Jquery html5"><img src="image/Webp.net-resizeimage.png">
								<div class="iii-content text-center">
									<h3 style="color: white">Helios-Design</h3>
									<p style="color: white">Helois Project . is a simple copy of real project . copy images and design without copy the original code. it gives me the ability that see any desing . and automaticly give you the code of it.</p>
										<a target="_blank" href="portofolio_show.php?project_name=helios" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							
							<div class="iii mix html5 design"><img src="image/fitness.png">
								<div class="iii-content text-center">
									<h3 style="color: white">Fitness-Design</h3>
									<p style="color: white">Fitness Project from the initial projects.it is design project about how to git ride of fit and youga .... ect . is a simple copy of real project . copy images and design without copy the original code. it gives me the ability that see any desing . and automaticly give you the code of it.</p>
										<a target="_blank" href="portofolio_show.php?project_name=fitness" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							<div class="iii mix c-s"><img src="image/student-election-logo.png">
								<div class="iii-content text-center">
									<h3 style="color: white">Student_Election_(C#)</h3>
									<p style="color: white; font-weight: bold;">it help student to vote each other and cover the problem of school Election  . use C#-form And Excel as The database . I use the excel insted of tables in Sql or Mysql. a fully complete project depending on Excell Sheets in saving data , students and votes</p>
										<a target="_blank" href="portofolio_show.php?project_name=Election" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							<div class="iii mix c-s SQL"><img src="image/school-present.jpg">
								<div class="iii-content text-center">
									<h4 style="color: white">absence and Presence_(C#)</h4>
									<p style="color: white; font-weight: bold;">it help teacher. to save students in class . give him the opportunity to know who is came school today and who don't . it contain delete ,update,insert and Search about student. it also help with known how many times student came and when</p>
										<a target="_blank" href="portofolio_show.php?project_name=present" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							<div class="iii mix mysql html5 php"><img src="image/todo.jpg">
								<div class="iii-content text-center">
									<h4 style="color: white">TODO_LIST website</h4>
									<p style="color: white; font-weight: bold;">
										in this website you can sign-up and login to the website . it can help you to add todo-list in your own table . just to remember to do it
										. it also give the the full controll to the lise (update,delete and insert)
									</p>
										<a target="_blank" href="portofolio_show.php?project_name=todo" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							<div class="iii mix html5 design javascript"><img src="image/studio.jpg">
								<div class="iii-content text-center">
									<h4 style="color: white">Studio Design Project</h4>
									<p style="color: white; font-weight: bold;">
										Studio is a simple Design project. i took the read design and make a similar like it . it give me 
										the ability to see any design and make the similar .
									</p>
										<a target="_blank" href="portofolio_show.php?project_name=studio" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							<div class="iii mix html5 php mysql"><img src="image/exam.jpg">
								<div class="iii-content text-center">
									<h4 style="color: white">Exam Project</h4>
									<p style="color: white; font-weight: bold; margin-bottom: 20px;">
										This Project show you a questions of some exam saved in the DB and the choises of the those questions . you can ansewr or skip or leave the question 
										. and the color will set based on your decision . red for leave orange for skip green for answer .
										i made something like laravel API (Pagenation) As you can see 
									</p>
										<a target="_blank" style="" href="portofolio_show.php?project_name=exam" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
							<div class="iii mix php mysql html design Ajax javascript"><img src="image/mega_exam.png">
								<div class="iii-content text-center">
									<h4 style="color: white">Mega Exam</h4>
									<p style="color: white; font-weight: bold; margin-bottom: 20px;">
										in this project you can create a simple Competition (Contest) . it contain some of questions . and some answers for each quesion . you can also delete and update this contest by adding 
										new quesion or remove question . you can challenge your friends by creating a contest for thim
									</p>
										<a target="_blank" style="" href="portofolio_show.php?project_name=mega_exam" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>

							<div class="iii mix unity c-s"><img src="image/Poss-battle.jpg">
								<div class="iii-content text-center">
									<h4 style="color: white">Unity Poss Battle</h4>
									<p style="color: white; font-weight: bold; margin-bottom: 20px;">
										the most semple Game Ever .
										you can fire magic Orb to the enemy .
										the enemy shoot you Too . try to kill him before killing you :) 	
									</p>
										<a target="_blank" style="" href="portofolio_show.php?project_name=poss_battle" class="btn btn-info hvr-buzz-out" name="portofolio_button">Show More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="contact_me" id="contact_me">
			<div class="cont">
				<div class="info">
					<h2>CONTACT ME</h2>
					<p>
						You can contact contact me via email or phone Number <br>
						Send your feedback On email or you can call me 
						email are vailable all time 
					 </p>
					<br>
					<span>Egypt</span><br>
					<span>El Minya</span><br>
					<span>Mallawi</span><br>
					<br>
				<span class="big">Email : </span> <span>   kerolesmonsef@gmail.com</span><br><br>
				<span class="big">Phone : </span> <span>   +201283984098</span><br>
				</div>
				<div class="form" >
					<form class="login100-form validate-form" method="post" autocomplete="off">
						<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
							<input style="color: white;" class="input100 pass-valid" type="email" name="email" autocomplete="off">
							<span class="focus-input100" data-placeholder="Email"></span>
						</div>
						<br>
						<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Name" >
							<input style="color: white;" class="input100 name-valid" type="text" name="name" autocomplete="off">
							<span class="focus-input100" data-placeholder="Username"></span>
						</div>	

						<br>
						<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Message">
							<textarea style="color: white;" class="input100 textarea-valid" name="message" autocomplete="off"></textarea>
							<span class="focus-input100" data-placeholder="Message"></span>
						</div>
						<br>
						<br>
						<div class="g-recaptcha" data-sitekey="6Lf3aIkUAAAAAF9mGEwOsUG1C4K6TUkggEalUhYQ"></div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn" name="contact_me">
								CONTACT ME
							</button>
						</div>

					</form>

				</div>

			</div>
		</div>
		<div class="end">
			<p>copywright &copy; Keroles 2019</p>
			<ul class="photo">
				<li><i class="fa fa-facebook-square fa-2x"></i></li>
				<li><i class="fa fa-twitter-square fa-2x"></i></li>
				<li><i class="fa fa-youtube fa-2x"></i></li>
				<li><i class="fa fa-google-plus-square fa-2x"></i></li>
			</uk>
		</div>

</body>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script type="text/javascript" src="js/java.js"></script>
<script type="text/javascript" src="js/input_validation.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>


<script>
	new WOW().init();
	$(window).on('load', function() {
    	$('.loadding-screen').fadeOut(2000, function() {
    		$('body').css('overflow', 'auto');
    		$(this).remove();
    	});
	});


	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover();
	var containerEl = document.querySelector('.the_work');
            var mixer = mixitup(containerEl, {
                animation: {
                    animateResizeContainer: false // required to prevent column algorithm bug
                }
            });
</script>
</html>