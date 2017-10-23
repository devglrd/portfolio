@extends('.layouts.main')

@section('content')
      <!-- Page Holder -->
      <div class="page-holder">
        <nav class="navbar main-navigation navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="js-scroll-trigger active" href="#home" >Accueil</a></li>
                <li><a class="js-scroll-trigger" href="#about" >A propos de moi</a></li>
                <li><a class="js-scroll-trigger" href="#services">Mes services</a></li>
                <li><a class="js-scroll-trigger" href="#skills" >Competences</a></li>
                <li><a class="js-scroll-trigger" href="#facts" >Faits réel</a></li>
                <li><a class="js-scroll-trigger" href="#tarifs" >Tarifs</a></li>
                <li><a class="js-scroll-trigger" href="#contact" >Contacter</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="home" class="header-2 demo-2">
          <div class="container">
            
            <div class="header-2-content" style="position: relative">
              <div class="col-md-7 col-sm-12">
                <h1 class="has-line-center">Rémi Guillard</h1>
                <h3 class="mb-20">Je suis <span class="element"></span></h3>
				  <p>J'ai caché des informations à mon <strong>sujet</strong> un peu partout sur le site. A vous de les <strong>découvrir</strong>.</p>
				  <div class="next-section-first">
					  <a class="js-scroll-trigger next-section-link" href="#about"><i class="fa fa-long-arrow-left"></i></a>
				  </div>
				  <svg xmlns="http://www.w3.org/2000/svg" id="style_svg" onmouseover="rotate()" onmouseout="rotateOut()" viewBox="0 0 179.41 179.17" class="style_svg" data-toggle="tooltip" data-placement="top" title="Bravo tu m'as trouvé ! Je vais te livré un secret. J'ai effectué ma premiere requetes SQL a l'age de 11 ans.">
					  <defs>
						  <style>.cls-1{fill:none;stroke:#170c3e;stroke-miterlimit:10;}</style>
					  </defs>
					  <g id="Calque_2" data-name="Calque 2">
						  <g id="Calque_2-2" data-name="Calque 2">
							  <path class="cls-1" d="M77.9,5.82A25.08,25.08,0,0,1,88.11.72C93.79-.42,99.46,3.18,100.6,4.31s20.23,20,20.23,20l54.65,55.41s3.78,5.67,3.4,10a21,21,0,0,1-5.86,13c-3.78,3.78-74.5,73.56-74.5,73.56a82.3,82.3,0,0,1-8.89,2.27c-2.08.19-9.83-3.21-13-6.05s-74.31-76-74.31-76a33,33,0,0,1-1.7-7C0,85.43,3.4,80,4.72,78.44S77.9,5.82,77.9,5.82Z"/>
						  </g>
					  </g>
				  </svg>
              </div>
            </div>
              
          </div>
        </div>
        </div>
        <section class="about-me" id="about">
        	<div class="left-crown" data-toggle="tooltip" data-placement="bottom" title="Encore un ? Une citation que j'apprecie particulierement : ' A nul sacrifice, nulle victoire. '">
        		<h2 class="has-square"> A propos de moi</h2>
        	</div>
        	<div class="next-section">
        		<a class="js-scroll-trigger next-section-link" href="#services"><i class="fa fa-long-arrow-left"></i> Mes services</a>
        	</div>
        	<div class="container">
        		<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
	        		<div class="col-md-4 col-xs-12">
	        			<div class="profile">
	        				<img src="http://via.placeholder.com/499x738" class="center-block" alt="profile-img">
	        			</div>
	        			<a href="#" target="cv" style="width:100%">
							<div class="download-resume">
								<i class="fa fa-cloud-download" aria-hidden="true"></i>
								<span class="text-download">Mon CV</span>
							</div>
						</a>
	        			
	        		</div>
	        		<div class="col-md-8 col-xs-12">
						<h2><span class="colored">Rémi Guillard</span></h2>
						<h3>Developpeur Web / Mobile</h3>
						<p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elnecess itatibus aperiam voluptas rem nam, dolorem dolores reiciend obcaecati quas iusto beatae ab asperiores explicabo laudan illum, voluptatem corrupti blanditiis fugit enim. Necess itatibu aperiam voluptas rem nam</p>
						<div class="col-sm-6 info-container">
							<ul class="info list-unstyled">
								<li>
									<span>Age: </span>19
								</li>
								<li>
									<span>Address: </span>9 rue de Pontoise
								</li>
								<li>
									<span>Email: </span>glrd.remi@gmail.com
								</li>
							</ul>
						</div>
						<div class="col-sm-6">
							<ul class="info list-unstyled">
								<li>
									<span>Téléphone: </span>06 47 28 43 11
								</li>
								<li>
									<span>Nationalité : </span>Française
								</li>
								<li>
									<span> </span>
								</li>
							</ul>
						</div>
						<div class="hire-me-btn">
							<a href="#contact" class="js-scroll-trigger more-btn mt-18"> Me contacter</a>
						</div>
						<ul class="list-unstyled social-links">
							<li class="li-social-links">
								<a href="#" data-tootik="Github"><i class="fa fa-github" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="li-social-links">
								<a href="#" data-tootik="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
						</ul>

					</div>
        		</div>
        	</div>
        </section>
        <section id="services" class="services gray-bg text-center">
        	<div class="left-crown">
        		<h2 class="has-square">Mes services</h2>
        	</div>
        	<div class="next-section" data-toggle="tooltip" data-placement="right" title="Le plus important pour moi dans un projet, c'est la possibilité de création.">
        		<a href="#skills" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i> Mes compétences</a>
        	</div>
          <div class="container">
          	<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
	             <div class="service-one-container">
	                <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                   <div class="inner-box">
	                      <div class="icon-box"><i class="material-icons">code</i></div>
	                        <h3><a href="#">Développement Web</a></h3>
	                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate ducimus impedit, nam odit possimus temporibus</div>
	                    </div>
	                </div>
	             </div>
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><i class="material-icons">build</i></div>
	                     <h3><a href="#">Support Technique</a></h3>
	                     <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate ducimus impedit, nam odit possimus temporibus.</div>
	                 </div>
	             </div>
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><i class="material-icons">assignment</i></div>
	                     <h3><a href="#">Audit SEO</a></h3>
	                     <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate ducimus impedit, nam odit possimus temporibus.</div>
	                 </div>
	             </div>
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><i class="material-icons">search</i></div>
	                     <h3><a href="#">Code Review</a></h3>
	                     <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate ducimus impedit, nam odit possimus temporibus.</div>
	                 </div>
	             </div>
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><i class="material-icons">storage</i></div>
	                     <h3><a href="#">Gestion de base de données</a></h3>
	                     <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate ducimus impedit, nam odit possimus temporibus.</div>
	                 </div>
	             </div>
	             <div class="service-box-one col-md-4 col-sm-6 col-xs-12">
	                <div class="inner-box">
	                   <div class="icon-box"><i class="material-icons">supervisor_account</i></div>
	                     <h3><a href="#">Accompagnement dans le développement de vos projets</a></h3>
	                     <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate ducimus impedit, nam odit possimus temporibus.</div>
	                 </div>
	             </div>
             </div>
          </div>
        </section>
        <section class="skills" id="skills">
        	<div class="left-crown">
        		<h2 class="has-square"> Mes competences</h2>
        	</div>
        	<div class="next-section">
        		<a href="#facts" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i> Fait réels</a>
        	</div>
        	<div class="container">
        		<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
	        		<div class="col-md-6 col-xs-12">
						<h3 class="has-line">Hard Skills</h3>
						<div class="mb-50"></div>
	        			<div class="skill">
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">HTML / CSS</li>
		                      <li class="strength">99%</li>
		                   </ul>
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
	                	</div>
		                <div class="skill">
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">PHP</li>
		                      <li class="strength">93%</li>
		                   </ul>
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>
		                <div class="skill" data-toggle="tooltip" data-placement="bottom" title="Je suis aussi un très grand chanteur a mes heures perdu, sous la douche.">
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Swift (IOS) </li>
		                      <li class="strength">84%</li>
		                   </ul>
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>

		                <div class="skill">
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">JavaScript</li>
		                      <li class="strength">65%</li>
		                   </ul>
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>
					</div>
					<div class="col-md-6 col-xs-12">
						<h3 class="has-line">Soft skills</h3>
						<div class="mb-50"></div>
	        			<div class="skill">
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Force de proposition</li>
		                      <li class="strength">86%</li>
		                   </ul>
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>
		                <div class="skill">
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Design Web</li>
		                      <li class="strength">47%</li>
		                   </ul>
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>
		                <div class="skill">
		                   <ul class="list-unstyled list-inline clearfix">
		                      <li class="title">Commercial</li>
		                      <li class="strength">37%</li>
		                   </ul>
		                   <div class="skill-progress">
		                      <div class="progress-bar has-gradient" style="width: 0"></div>
		                   </div>
		                </div>
					</div>
        		</div>
        	</div>
        </section>
        <section class="facts gray-bg" id="facts">
        	<div class="left-crown">
        		<h2 class="has-square">Fait réels</h2>
        	</div>
        	<div class="next-section">
        		<a href="#portfolio" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i>Mes tarifs</a>
        	</div>
			<div class="container">
			 	<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="fact-box count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="inner">
					   <div class="icon-box"><span class="flaticon-business"></span></div>
					      <div class="content">
					          <div class="count-outer">
					              <span class="count-text counter">143</span>
					          </div>
					          <div class="counter-title">années d'expérience</div>
					      </div>
					  </div>
					</div>
					<div class="fact-box count-box col-lg-3 col-md-3 col-sm-6 col-xs-12 fact-box-xs">
					  <div class="inner">
					   <div class="icon-box"><span class="flaticon-shape"></span></div>
					      <div class="content">
					          <div class="count-outer">
					              <span class="count-text counter">532</span>
					          </div>
					          <div class="counter-title">langage de programmation maitrisés</div>
					      </div>
					  </div>
					</div>
					<div class="fact-box count-box col-lg-3 col-md-3 col-sm-6 col-xs-12 fact-box-sm">
					  <div class="inner">
					   <div class="icon-box"><span class="flaticon-archives"></span></div>
					      <div class="content">
					          <div class="count-outer">
					              <span class="count-text counter">9</span> mds
					          </div>
					          <div class="counter-title">lignes de code écrites</div>
					      </div>
					  </div>
					</div>
					<div class="fact-box count-box col-lg-3 col-md-3 col-sm-6 col-xs-12 fact-box-sm" data-toggle="tooltip" data-placement="bottom" title="">
					  <div class="inner">
					   <div class="icon-box"><span class="flaticon-medal"></span></div>
					      <div class="content">
					          <div class="count-outer">
					              <span class="count-text counter">1864</span>
					          </div>
					          <div class="counter-title">clients satisfaits</div>
					      </div>
					  </div>
					</div>
				</div>
			</div>
        </section>
        <section class="teams" id="tarifs" style="height: 55vh">
        	<div class="left-crown">
        		<h2 class="has-square">Mes tarifs</h2>
        	</div>
        	<div class="next-section">
        		<a href="#interest" class="next-section-link js-scroll-trigger"><i class="fa fa-long-arrow-left"></i> Un projet pour moi</a>
        	</div>
            <div class="container text-center">
             <div class="carousel-outer col-sm-10 col-sm-offset-1">
                <div class="testimonials-style-two" id="testimonial-slider">
                   <div class="item col-md-4 col-sm-6 col-xs-12">
                      <div class="testimonial-item has-shadow">
                         <div class="inner-box" style="display: none;">
                            <figure class="author-thumb img-circle"><img class="img-circle" src="" alt="image"></figure>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cupiditate dolorem est eum facilis </div>
                            <div class="info">Clément Jenny - <span class="designation">Developpeur Front-End</span></div>
                            <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                         </div>
                      </div>
                   </div>
                   <div class="item item-box-xs col-sm-6 col-xs-12">
                      <div class="testimonial-item has-shadow">
                         <div class="inner-box" style="display: none;">
                            <figure class="author-thumb img-circle"><img class="img-circle" src="" alt="image"></figure>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus delectus eum molestias, necessitatibus </div>
                            <div class="info">Jean Saunie - <span class="designation">Developpeur Back-End</span></div>
                            <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>               
        </section>
		  <section class="features gray-bg" id="features">
			  <div class="left-crown">
				  <h2 class="has-square">Un projet pour moi</h2>
			  </div>
			  <div class="next-section">
				  <a href="#contact" class="next-section-link"><i class="fa fa-long-arrow-left"></i>Me contacter</a>
			  </div>
			  <div class="container text-left">
				  <div class="col-sm-10 col-sm-offset-1">
					  <div class="service-box-one col-md-3 col-sm-6 col-xs-12">
						  <div class="inner-box">
							  <strong>01</strong>
							  <h3><a href="#">Comprehension de l'idée</a></h3>
							  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci alias, dolore, eaque </div>
						  </div>
					  </div>
					  <div class="service-box-one col-md-3 col-sm-6 col-xs-12">
						  <div class="inner-box">
							  <strong>02</strong>
							  <h3><a href="#">Developpement de votre idée</a></h3>
							  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci alias, dolore, eaque </div>
						  </div>
					  </div>
					  <div class="service-box-one col-md-3 col-sm-6 col-xs-12">
						  <div class="inner-box">
							  <strong>03</strong>
							  <h3><a href="#">Mise en ligne</a></h3>
							  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci alias, dolore, eaque </div>
						  </div>
					  </div>
					  <div class="service-box-one col-md-3 col-sm-6 col-xs-12">
						  <div class="inner-box">
							  <strong>04</strong>
							  <h3><a href="#">Satisfaction du client</a></h3>
							  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci alias, dolore, eaque </div>
						  </div>
					  </div>
				  </div>
			  </div>
		  </section>
		<section class="contact" id="contact">
			<div class="left-crown" data-toggle="tooltip" data-placement="right" title="Disponible pour tout type de missions.">
				<h2 class="has-square">Me contacter</h2>
			</div>
			<div class="next-section">
			</div>
			<div class="container text-center">
			 <div class="contact-form">
				<form method='post'><input type='hidden' name='form-name' value='form 1' />
					<div class="col-md-6 col-sm-12">
						<input type="text" placeholder="Votre nom">
					</div>
					<div class="col-md-6 col-sm-12">
						<input type="text" placeholder="Votre e-mail">
					</div>
					<div class="col-sm-12">
						<input type="text" placeholder="Parlez moi de votre projet">
						<textarea placeholder="Message" cols="30" rows="10"></textarea>
					</div>
					<div class="submit-btn"><input type="submit" class="more-btn" value="Prendre contact avec moi !"></div>
				</form>
			 </div>
			</div>
		</section>
        <footer class="main-footer text-center" id="footer">
          <div class="footer-bottom">
             <div class="container">
             	<div class="col-md-6 col-sm-12">
                	<div class="copyright-text">Copyright © 2017. Rémi Guillard</div>
                </div>
                <div class="col-md-6 col-sm-12">
                	<ul class="social-links">
                      <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-github"></span></a></li>
                   </ul>
                </div>
             </div>
          </div>
        </footer>
      </div>

  @endsection

