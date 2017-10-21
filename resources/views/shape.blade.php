<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <!-- Responsive Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- IE Compatibility Meta -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Page Title -->
      <title>{{ isset($title) ? $title . ' | ' : 'Rémi Guillard - PortFolio' }}</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="">

      <!-- Bootstrap Stylesheet -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
      <!-- Google font -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
      
      <!-- Main Stylesheet -->
      <link rel="stylesheet" href="{{ asset('css/current.css') }}">
      <link rel="stylesheet" href="{{ asset('css/color-1.css') }}">


      <!-- Google Font -->
   </head>
   <body>

      <!-- Page Holder -->
      <div class="page-holder">

        <!-- ======================================= 
        ==Start  Nav section==  
        =======================================-->
        <nav class="navbar main-navigation navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Moya</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="js-scroll-trigger active" href="#home" >Home</a></li>
                <li><a class="js-scroll-trigger" href="#about" >About</a></li>
                <li><a class="js-scroll-trigger" href="#services">Services</a></li>
                <li><a class="js-scroll-trigger" href="#skills" >Skills</a></li>
                <li><a class="js-scroll-trigger" href="#portfolio" >Portfolio</a></li>
                <li><a class="js-scroll-trigger" href="#testimonial" >testimonials</a></li>
                <li><a class="js-scroll-trigger" href="#contact" >contact</a></li>
              </ul>
              
            </div>
          </div>
        </nav>
        <!-- ======================================= 
        ==End Nav section==  
        =======================================-->


        <!-- ======================================= 
        ==Start header-1 section==  
        =======================================-->
        <div id="home" class="header-2 demo-2">
        <!--<div class="moving-bg"></div>-->
          <div class="container">
            
            <div class="header-2-content">
              <div class="col-md-7 col-sm-12">
                <h1 class="has-line-center">Rémi Guillard</h1>
                <h3 class="mb-20">Je suis <span class="element"></span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum adipisci eum, repellendus soluta. Molestias, dolore, neque totam quisquam, inventore officiis magni provident ducimus quos unde eaque veritatis. Magni, nihil, sequi!nderit quod quisquam.</p>
                <div class="hire-me-btn">
					<a href="#" class="more-btn mt-18"> Hire Me</a>
				</div>
              </div>
            </div>
              
          </div>
        </div>
        </div>
        <!-- ======================================= 
        ==End header-1 section==  
        =======================================-->


		<!-- ======================================= 
        ==Start About-me section==  
        =======================================-->
        <section class="about-me" id="about">
        	<div class="left-crown">
        		<h2 class="has-square"> About Me</h2>
        	</div>
        	<div class="next-section">
        		<a class="js-scroll-trigger next-section-link" href="#services"><i class="fa fa-long-arrow-left"></i> My Services</a>
        	</div>
        	<div class="container">
        		<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
	        		<div class="col-md-4 col-xs-12">
	        			<div class="profile">
	        				<img src="{{ asset('images/profile.png') }}" class="center-block" alt="profile-img">
	        			</div>
	        			<a href="#" target="cv" style="width:100%">
							<div class="download-resume">
								<i class="fa fa-cloud-download" aria-hidden="true"></i>
								<span class="text-download">DOWNLOAD RESUME</span>
							</div>
						</a>
	        			
	        		</div>
	        		<div class="col-md-8 col-xs-12">
						<h2>ABOUT ME <span class="colored">JOHN DOE</span></h2>
						<h3>web developer & web designer</h3>
						<p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elnecess itatibus aperiam voluptas rem nam, dolorem dolores reiciend obcaecati quas iusto beatae ab asperiores explicabo laudan illum, voluptatem corrupti blanditiis fugit enim. Necess itatibu aperiam voluptas rem nam</p>
						<div class="col-sm-6 info-container">
							<ul class="info list-unstyled">
								<li>
									<span>Age: </span>26
								</li>
								<li>
									<span>Address: </span>6235, London, Earth
								</li>
								<li>
									<span>Email: </span>robertsmith@domain.com
								</li>
							</ul>
						</div>
						<div class="col-sm-6">
							<ul class="info list-unstyled">
								<li>
									<span>Phone: </span>+938 456 789 012
								</li>
								<li>
									<span>Website: </span> www.robertsmith.com
								</li>
								<li>
									<span>Nationality: </span>American
								</li>
							</ul>
						</div>
						<div class="hire-me-btn">
							<a href="#" class="more-btn mt-18"> Hire Me</a>
						</div>
						<ul class="list-unstyled social-links">
							<li class="li-social-links">
								<a href="#" data-tootik="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
							</li>
						</ul>

					</div>
        		</div>
        	</div>
        </section>
		<!-- ======================================= 
        ==End About-me section==  
        =======================================-->

        
        
        <!-- ======================================= 
        ==Start services-1 section==  
        =======================================-->
        <section id="services" class="services gray-bg text-center">
        	<div class="left-crown">
        		<h2 class="has-square">My Services</h2>
        	</div>
        	<div class="next-section">
        		<a href="#skills" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i> My Skills</a>
        	</div>
          <div class="container">
          	<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
	             <div class="service-one-container">
	                <!--Service Box-->
	                <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                   <div class="inner-box">
	                      <div class="icon-box"><span class="flaticon-shield"></span></div>
	                        <h3><a href="#">FINANCIAL PLANNING</a></h3>
	                        <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
	                    </div>
	                </div>
	             </div>

	             <!--Service Box-->
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><span class="flaticon-support"></span></div>
	                     <h3><a href="#">TECHNICAL SUPPORT</a></h3>
	                     <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
	                 </div>
	             </div>               

	             <!--Service Box-->
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><span class="flaticon-avatar"></span></div>
	                     <h3><a href="#">INVESTMENT ADVISOR</a></h3>
	                     <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
	                 </div>
	             </div>
	             
	             <!--Service Box-->
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><span class="flaticon-business-2"></span></div>
	                     <h3><a href="#">MARKETING BASE</a></h3>
	                     <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
	                 </div>
	             </div>
	             
	             <!--Service Box-->
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><span class="flaticon-stats"></span></div>
	                     <h3><a href="#">WEALTH MANAGEMENT</a></h3>
	                     <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
	                 </div>
	             </div>
	             
	             <!--Service Box-->
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><span class="flaticon-briefcase"></span></div>
	                     <h3><a href="#">CONSULTING SERVICES</a></h3>
	                     <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
	                 </div>
	             </div>
             </div>
          </div>
        </section>
        <!-- ======================================= 
        ==End services-1 section==  
        =======================================-->


        <!-- ======================================= 
        ==Start skills section==  
        =======================================-->
        <section class="skills" id="skills">
        	<div class="left-crown">
        		<h2 class="has-square"> My Skills</h2>
        	</div>
        	<div class="next-section">
        		<a href="#facts" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i> My Fun Facts</a>
        	</div>
        	<div class="container">
        		<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
	        		
	        		<div class="col-md-6 col-xs-12">
						<h3 class="has-line">Personal skills</h3>
						<div class="mb-50"></div>
	        			<div class="skill">
		                   <!-- skill title -->
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Creativity</li>
		                      <li class="strength">75%</li>
		                   </ul>
		                   <!-- skill strength -->
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
	                	</div>

		                <div class="skill">
		                   <!-- skill title -->
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Innovation</li>
		                      <li class="strength">80%</li>
		                   </ul>
		                   <!-- skill strength -->
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>

		                <div class="skill">
		                   <!-- skill title -->
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Simplicity</li>
		                      <li class="strength">95%</li>
		                   </ul>
		                   <!-- skill strength -->
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>

		                <div class="skill">
		                   <!-- skill title -->
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Clean and Modern</li>
		                      <li class="strength">90%</li>
		                   </ul>
		                   <!-- skill strength -->
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>
		                
					</div>

					<div class="col-md-6 col-xs-12">
						<h3 class="has-line">soft skills</h3>
						<div class="mb-50"></div>
	        			<div class="skill">
		                   <!-- skill title -->
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Web Design</li>
		                      <li class="strength">90%</li>
		                   </ul>
		                   <!-- skill strength -->
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
	                	</div>

		                <div class="skill">
		                   <!-- skill title -->
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Marketing</li>
		                      <li class="strength">87%</li>
		                   </ul>
		                   <!-- skill strength -->
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>

		                <div class="skill">
		                   <!-- skill title -->
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">HTML / CSS</li>
		                      <li class="strength">99%</li>
		                   </ul>
		                   <!-- skill strength -->
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>

		                <div class="skill">
		                   <!-- skill title -->
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Wordpress</li>
		                      <li class="strength">84%</li>
		                   </ul>
		                   <!-- skill strength -->
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>
		                
					</div>

        		</div>
        	</div>
        </section>
		<!-- ======================================= 
        ==End skills section==  
        =======================================-->


        <!-- ======================================= 
        ==Start facts section==  
        =======================================-->
        <section class="facts gray-bg" id="facts">
        	<div class="left-crown">
        		<h2 class="has-square">Fun Facts</h2>
        	</div>
        	<div class="next-section">
        		<a href="#portfolio" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i>Portfolio</a>
        	</div>
			
			<div class="container">
			 	<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="fact-box count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="inner">
					   <div class="icon-box"><span class="flaticon-business"></span></div>
					      <div class="content">
					          <div class="count-outer">
					              <span class="count-text counter">27</span>
					          </div>
					          <div class="counter-title">YEARS OF EXPERIENCE</div>
					      </div>
					  </div>
					</div>

					<div class="fact-box count-box col-lg-3 col-md-3 col-sm-6 col-xs-12 fact-box-xs">
					  <div class="inner">
					   <div class="icon-box"><span class="flaticon-shape"></span></div>
					      <div class="content">
					          <div class="count-outer">
					              <span class="count-text counter">341</span>
					          </div>
					          <div class="counter-title">DEVELOPERS</div>
					      </div>
					  </div>
					</div>

					<div class="fact-box count-box col-lg-3 col-md-3 col-sm-6 col-xs-12 fact-box-sm">
					  <div class="inner">
					   <div class="icon-box"><span class="flaticon-archives"></span></div>
					      <div class="content">
					          <div class="count-outer">
					              <span class="count-text counter">232</span>
					          </div>
					          <div class="counter-title">DOWNLOADS</div>
					      </div>
					  </div>
					</div>

					<div class="fact-box count-box col-lg-3 col-md-3 col-sm-6 col-xs-12 fact-box-sm">
					  <div class="inner">
					   <div class="icon-box"><span class="flaticon-medal"></span></div>
					      <div class="content">
					          <div class="count-outer">
					              <span class="count-text counter">940</span>
					          </div>
					          <div class="counter-title">HAPPY CLIENTS</div>
					      </div>
					  </div>
					</div>
				</div>
			</div>
        </section>
        <!-- ======================================= 
        ==End facts section==  
        =======================================-->


        <!-- ======================================= 
        ==Start portfolio section==  
        =======================================-->
	  	<!--
        <section class="portfolio" id="portfolio">
        	<div class="left-crown">
        		<h2 class="has-square">Portfolio</h2>
        	</div>
        	<div class="next-section">
        		<a href="#features" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i> My Features</a>
        	</div>
           <div class="container text-center">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="gallery">
					 <!-- gallery navigation
					 <nav class="gallery-nav">
					    <ul class="list-unstyled list-inline">
					       <li><button class="filter-button active" data-filter="all">All</button></li>
					       <li><button class="filter-button" data-filter="apps">Apps</button></li>
					       <li><button class="filter-button" data-filter="business-cards">Business Cards</button></li>
					       <li><button class="filter-button" data-filter="landing-pages">Landing pages</button></li>
					       <li><button class="filter-button" data-filter="wordpress-themes">Wordpress Themes</button></li>
					    </ul>
					 </nav>

					 <!-- gallery items
					 <div id="Container" class="row">
					    <!-- Item in apps category
					    <div class="mix col-sm-4 col-xs-12 filter apps" data-my-order="1">
					       <a href="#" target="blank" title="App">
					          <div class="item">
					             <img src="" alt="App">
					             <div class="info">
					                <div class="content">
					                   <h4>Item Name</h4>
					                   <p>Some cool words describe what is this and how is working</p>
					                </div>
					             </div>
					          </div>
					       </a>
					    </div><!-- end item

					    <!-- Item in business cards category
					    <div class="mix col-sm-4 col-xs-12 filter business-cards" data-my-order="2">
					       <a href="#" target="blank" title="Business Card">
					          <div class="item">
					             <img src="" alt="Business Card">
					             <div class="info">
					                <div class="content">
					                   <h4>Item Name</h4>
					                   <p>Some cool words describe what is this and how is working</p>
					                </div>
					             </div>
					          </div>
					       </a>
					    </div><!-- end item

					    <!-- Item in landing pages category
					    <div class="mix col-sm-4 col-xs-12 filter landing-pages" data-my-order="3">
					       <a href="#" target="blank" title="Landing Page">
					          <div class="item">
					             <img src="" alt="Landing Page">
					             <div class="info">
					                <div class="content">
					                   <h4>Item Name</h4>
					                   <p>Some cool words describe what is this and how is working</p>
					                </div>
					             </div>
					          </div>
					       </a>
					    </div><!-- end item -->

					    <!-- Item in wordpress themes category
					    <div class="mix col-sm-4 col-xs-12 filter wordpress-themes" data-my-order="4">
					       <a href="#" target="blank" title="Wordpress">
					          <div class="item">
					             <img src="" alt="Wordpress">
					             <div class="info">
					                <div class="content">
					                   <h4>Item Name</h4>
					                   <p>Some cool words describe what is this and how is working</p>
					                </div>
					             </div>
					          </div>
					       </a>
					    </div><!-- end item -->

					    <!-- Item in business cards category
					    <div class="mix col-sm-4 col-xs-12 filter business-cards" data-my-order="5">
					       <a href="#" target="blank" title="Business Card">
					          <div class="item">
					             <img src="" alt="Business Card">
					             <div class="info">
					                <div class="content">
					                   <h4>Item Name</h4>
					                   <p>Some cool words describe what is this and how is working</p>
					                </div>
					             </div>
					          </div>
					       </a>
					    </div><!-- end item -->

					    <!-- Item in apps category
					    <div class="mix col-sm-4 col-xs-12 filter apps" data-my-order="6">
					       <a href="#" target="blank" title="App">
					          <div class="item">
					             <img src="" alt="App">
					             <div class="info">
					                <div class="content">
					                   <h4>Item Name</h4>
					                   <p>Some cool words describe what is this and how is working</p>
					                </div>
					             </div>
					          </div>
					       </a>
					    </div><!-- end item

					 </div>
					</div>
				</div>
           </div>
        </section><!-- end Portfolio-->
        <!-- ======================================= 
        ==End portfolio section==  
        =======================================-->


		<!-- ======================================= 
        ==Start features section==  
        =======================================-->
        <section class="features gray-bg" id="features">
        	<div class="left-crown">
        		<h2 class="has-square">My Features</h2>
        	</div>
        	<div class="next-section">
        		<a href="#" class="next-section-link"><i class="fa fa-long-arrow-left"></i>Testimonials</a>
        	</div>
			<div class="container text-left">

				<div class="col-sm-10 col-sm-offset-1">
				     <!--Service Box-->
				  <div class="service-box-one col-md-3 col-sm-6 col-xs-12">
				    <div class="inner-box">
				      <strong>01</strong>
				      <h3><a href="#">Clients Satisfaction</a></h3>
				      <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
				    </div>
				  </div>

				   <!--Service Box-->
				  <div class="service-box-one col-md-3 col-sm-6 col-xs-12">
				    <div class="inner-box">
				      <strong>02</strong>
				      <h3><a href="#">Impress Site Visitor</a></h3>
				      <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
				    </div>
				  </div>              

				  <!--Service Box-->
				  <div class="service-box-one col-md-3 col-sm-6 col-xs-12">
				    <div class="inner-box">
				      <strong>03</strong>
				      <h3><a href="#">Fast Project Deliver</a></h3>
				      <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
				    </div>
				  </div>
				   
				  <!--Service Box-->
				  <div class="service-box-one col-md-3 col-sm-6 col-xs-12">
				    <div class="inner-box">
				      <strong>04</strong>
				      <h3><a href="#">Customer Support</a></h3>
				      <div class="text">Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</div>
				    </div>
				  </div>
				</div>
          </div>
        </section>
         <!-- ======================================= 
        ==End features section==  
        =======================================-->


        <!-- ======================================= 
        ==Start testimonials section==  
        =======================================-->
        <section class="testimonials" id="testimonial">
        	<div class="left-crown">
        		<h2 class="has-square">Testimonials</h2>
        	</div>
        	<div class="next-section">
        		<a href="#interest" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i> My Interests</a>
        	</div>
			
            <div class="container text-center">
             <div class="carousel-outer col-sm-10 col-sm-offset-1">
                   
                <div class="testimonials-style-two" id="testimonial-slider">

                   <!--testimonial Item-->
                   <div class="item col-md-4 col-sm-6 col-xs-12">
                      <div class="testimonial-item has-shadow">
                         <div class="inner-box">
                            <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('images/testimonials/author-thumb-1.jpg') }}" alt="image"></figure>
                            <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative strategy collaborative foster further the overall value proposition. </div>
                            <div class="info">Thomas Barkley - <span class="designation">Founder</span></div>
                            <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                         </div>
                      </div>
                   </div>

                   <!--testimonial Item-->
                   <div class="item item-box-xs col-sm-6 col-xs-12">
                      <div class="testimonial-item has-shadow">
                         <div class="inner-box">
                            <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('images/testimonials/author-thumb-2.jpg') }}" alt="image"></figure>
                            <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative strategy collaborative foster further the overall value proposition. </div>
                            <div class="info">Thomas Barkley - <span class="designation">Founder</span></div>
                            <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                         </div>
                      </div>
                   </div>

                   <!--testimonial Item-->
                   <div class="item item-box-sm col-sm-6 col-xs-12">
                      <div class="testimonial-item has-shadow">
                         <div class="inner-box">
                            <figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('images/testimonials/author-thumb-3.jpg') }}" alt="image"></figure>
                            <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative strategy collaborative foster further the overall value proposition. </div>
                            <div class="info">Thomas Barkley - <span class="designation">Founder</span></div>
                            <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                         </div>
                      </div>
                   </div>

                </div>
             </div>
          </div>               
        </section>
        <!-- ======================================= 
        ==End testimonials section==  
        =======================================-->
        

        <!-- ======================================= 
        ==Start interests section==  
        =======================================-->
		<section class="interest gray-bg" id="interest">
			<div class="left-crown">
        		<h2 class="has-square">intrest</h2>
        	</div>
        	<div class="next-section">
        		<a href="#contact" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i> Contact Me</a>
        	</div>
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1">	
					<div class="interest-box section-box-margin row">
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="item">
							   <i class="fa fa-gamepad fa-3x"></i>
							   <h3>Gaming</h3>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="item">
							   <i class="fa fa-book fa-3x"></i>
							   <h3>Reading</h3>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="item">
							   <i class="fa fa-music fa-3x"></i>
							   <h3>Music</h3>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="item">
							   <i class="fa fa-film fa-3x"></i>
							   <h3>Movies</h3>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="item">
							   <i class="fa fa-shopping-cart fa-3x"></i>
							   <h3>Shopping</h3>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="item">
							   <i class="fa fa-bicycle fa-3x"></i>
							   <h3>Bicycling</h3>
							</div>
						</div>
				        
				     </div>

				</div>
			</div>
		</section>


        <!-- ======================================= 
        ==Start contact section==  
        =======================================-->
        <section class="contact" id="contact">
        	<div class="left-crown">
        		<h2 class="has-square">Contact Me</h2>
        	</div>
        	<div class="next-section">
        		<a href="#footer" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i> Footer</a>
        	</div>
			<div class="container text-center">
			 <div class="contact-form">
			    <form method='post'><input type='hidden' name='form-name' value='form 1' />
			    	<div class="col-md-6 col-sm-12">
			    		<input type="text" placeholder="Your Name">
			    	</div>
			    	<div class="col-md-6 col-sm-12">
			    		<input type="text" placeholder="Your Email">
			    	</div>
			    	<div class="col-sm-12">
			        	<input type="text" placeholder="Subject">
			        	<textarea placeholder="message" cols="30" rows="10"></textarea>
			        </div>
			        
			        <div class="submit-btn"><input type="submit" class="more-btn" value="Contact Now"></div>
			    </form>
			 </div>
			</div>
        </section>
        <!-- ======================================= 
        ==End contact section==  
        =======================================-->


        <!-- ======================================= 
        ==Start footer section==  
        =======================================-->
        <footer class="main-footer text-center" id="footer">
         
         <!--Footer Bottom-->
          <div class="footer-bottom">
             <div class="container">
             	<div class="col-md-6 col-sm-12">
                	<div class="copyright-text">Copyright © 2017. All Rights Reserved By <a href="https://themeforest.net/user/lightlabs/portfolio">LightLabs</a></div>
                </div>
                <div class="col-md-6 col-sm-12">
                	<ul class="social-links">
                      <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                   </ul>
                </div>
             </div>
          </div>
        </footer>
        <!-- ======================================= 
        ==End footer section==  
        =======================================-->
      </div>
      <!-- End Page Holder -->


      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.js') }}"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
      <script src="{{ asset('js/slick.js') }}"></script>
      <script src="{{ asset('js/typed.js') }}"></script>
      <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
   </body>
</html>
