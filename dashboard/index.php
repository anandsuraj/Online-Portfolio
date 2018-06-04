<?php
// The message
$message = "New Resume Website Visitor";$message = wordwrap($message, 70);mail('surya13493@gmail.com', 'My Subject', $message);header('Location: suraj-anand.herokuapp.com/');
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Materialize - Compiled and minified CSS-->
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css">
      <!-- Font Awesome Icon - CSS-->
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <!-- Custom Styles-->
      <link rel="stylesheet" href="static/css/style.css">
      <title>Suraj Anand | Full Stack Developer</title>
      <!-- Open Graph-->
      <meta property="og:locale" content="en_US">
      <meta property="og:type" content="website">
      <meta property="og:title" content="Suraj Anand | Full Stack Developer">
      <meta property="og:description" content="I try to make things that make a difference.">
      <meta property="og:url" content="http://suraj-anand.herokuapp.com/">
      <meta property="og:site_name" content="Suraj Anand | Full Stack Developer">
      <meta property="article:publisher" content="http://suraj-anand.herokuapp.com/">
      <meta property="og:image" content="Suraj Anand | Full Stack Developer">
      <meta name="twitter:card" content="Suraj Anand | Full Stack Developer">
      <meta name="twitter:site" content="@suraj_anand">
      <meta name="twitter:title" content="Suraj Anand | Full Stack Developer">
      <meta name="twitter:description" content="I try to make things that make a difference.">
      <meta name="twitter:url" content="https://twitter.com/suraj_anand">
      <meta name="author" content="suraj anand">
      <meta name="description" content="I try to make things that make a difference.">
      <link rel="apple-touch-icon" sizes="57x57" href="static/img/favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="static/img/favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="static/img/favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="static/img/favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="static/img/favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="static/img/favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="static/img/favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="static/img/favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="static/img/favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192" href="static/img/favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="static/img/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="static/img/favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="static/img/favicon/favicon-16x16.png">
      <link rel="manifest" href="static/img/favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="static/img/favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <!--if lt IE 9script(src='//html5shim.googlecode.com/svn/trunk/html5.js')
         -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118258744-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-118258744-1');
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <!--Start of Zendesk Chat Script-->
            <script type="text/javascript">
            window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
            _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="https://v2.zopim.com/?3p9ply4ycWCZGB8npOhUB465VYOhRKfB";z.t=+new Date;$.
            type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
            </script>
      <!--End of Zendesk Chat Script-->

      <meta name="robots" content="index, follow">
   </head>
   <body>
      <!-- Navigation Menu-->
      <nav ng-class="hide-on-small-only">
         <ul class="side-nav fixed section table-of-contents">
            <li class="logo">
               <a id="logo-container" aria-label="Navigate to the beginning of the page" href="#intro" class="brand-logo teal-text">
                  <h1>Suraj Anand<span class="brown-text light">Full Stack Developer</span></h1>
               </a>
            </li>
            <li class="bold"><a aria-label="Navigate to the About section" href="#about" class="waves-effect waves-dark teal-text"><i class="mdi-social-person small"></i><span>About</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Experience section" href="#experience" class="waves-effect waves-dark cyan-text"><i class="mdi-action-trending-up small"></i><span>Experience</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Projects section" href="#projects" class="waves-effect waves-dark indigo-text"><i class="mdi-av-web small"></i><span>Projects</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Skills section" href="#skills" class="waves-effect waves-dark purple-text"><i class="mdi-av-equalizer small"></i><span>Skills</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Awards section" href="#awards" class="waves-effect waves-dark red-text"><i class="mdi-action-grade small"></i><span>Awards</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Education section" href="#education" class="waves-effect waves-dark orange-text"><i class="mdi-social-school small"></i><span>Education</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Contact section" href="#contact" class="waves-effect waves-dark brown-text"><i class="mdi-content-mail small"></i><span>Contact</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Resume section" href="suraj-anand-resume.pdf" target="_blank" class="waves-effect waves-dark grey-text text-darken-3"><i class="mdi-action-description small"></i><span>Resume</span></a></li>
         </ul>
      </nav>
      <nav class="hide-on-large only trigger z-depth-1">
         <a aria-label="Toggle visibility of the mobile navbar" href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
         <div class="name-title"><a id="name" aria-label="Navigate to the beginning of the page" href="#main" class="teal-text">Suraj Anand</a><span class="brown-text light">Full Stack Developer</span></div>
      </nav>
      <nav class="hide-on-large only">
         <ul id="slide-out" class="side-nav">
            <li class="bold"><a aria-label="Navigate to the About section" href="#about" class="waves-effect waves-dark teal-text"><i class="mdi-social-person small"></i><span>About</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Experience section" href="#experience" class="waves-effect waves-dark cyan-text"><i class="mdi-action-trending-up small"></i><span>Experience</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Projects section" href="#projects" class="waves-effect waves-dark indigo-text"><i class="mdi-av-web small"></i><span>Projects</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Skills section" href="#skills" class="waves-effect waves-dark purple-text"><i class="mdi-av-equalizer small"></i><span>Skills</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Awards section" href="#awards" class="waves-effect waves-dark red-text"><i class="mdi-action-grade small"></i><span>Awards</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Education section" href="#education" class="waves-effect waves-dark orange-text"><i class="mdi-social-school small"></i><span>Education</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Contact section" href="#contact" class="waves-effect waves-dark brown-text"><i class="mdi-content-mail small"></i><span>Contact</span></a></li>
            <li class="bold"><a aria-label="Navigate to the Resume section" href="Andrew%20Borstein%20-%20Resume%20(12.27.15).pdf" target="_blank" class="waves-effect waves-dark grey-text text-darken-3"><i class="mdi-action-description small"></i><span>Resume</span></a></li>
         </ul>
      </nav>
      <!-- Main Content-->
      <main>
         <section id="intro" class="section scrollspy full-height">
            <div class="container">
               <h2>I try to <span class="teal">make things</span><br>that <span class="underline">make a difference</span>.</h2>
            </div>
         </section>
         <section id="about" class="section scrollspy">
            <h3 class="page-title white-text teal">About</h3>
            <div class="container flow-text">
               <blockquote>
                  <h2>Mission-driven full stack developer with a passion for thoughtful, Creative, Innovative UI design and collaboration.</h2>
               </blockquote>
               <p>I’ve always sought out opportunities and challenges that are meaningful to me. Although my professional path has taken many twists and turns — from to employee at a non-profit organization, to fully independent software developer/UI Designer at a couple of Tech start-ups, I've never stopped engaging my passion to help others and solve problems.</p>
               <p>As a web developer, I enjoy using my obsessive attention to detail, my unequivocal love for making things, and my mission-driven work ethic to literally change the world. That's why I’m excited to make a big impact at a high growth company.</p>
               <p><strong>I try to make things that make a difference</strong>.</p>
            </div>
         </section>
         <section id="experience" class="section scrollspy">
            <h3 class="page-title white-text teal">Experience</h3>
            <div class="container">

            	   <div class="card">
                  <div class="card-content">
                     <div class="row">
                        <div class="col s12 m2"><a href="http://deducation.in" target="_blank"><img alt="Startup Institute logo" src="http://deducation.in/wp-content/uploads/2018/02/Deducation_Bpng-1-1024x1024-e1517738986594.png" class="responsive-img center-block"></a></div>
                        <div class="col s12 m10">
                           <p><span class="card-title"><a href="http://deducation.in" target="_blank" class="teal-text hoverline">Deducation</a></span></p>
                        </div>
                     </div>
                     <div class="role brown-text">UI Designer</div>
                     <p><em class="grey-text">A Web developement Company, Expertise in eCommerce Developement, Web Developement.</em></p>
                     <ul>
                        <li>Leading the company’s Web development efforts</li>
                         <li>Manage the Projects Management Team</li>
                         <li>Developed a couple of eCommerce Portal, Static & Dynamic Websites.</li>

                     </ul>
                  </div>
                  <div class="card-action"><span>Feb 2018 - Present |  Gurgaon, India</span></div>
               </div> 

               <div class="card">
                  <div class="card-content">
                     <div class="row">
                        <div class="col s12 m2"><a href="http://soreva.co.in/" target="_blank"><img alt="WeSpire logo" src="static/img/soreva.png" class="responsive-img center-block"></a></div>
                        <div class="col s12 m10">
                           <p><span class="card-title"><a href="http://soreva.co.in/" target="_blank" class="teal-text hoverline">Soreva Energy</a></span></p>
                        </div>
                     </div>
                     <div class="role brown-text">Full-Stack Software Developer</div>
                     <p><em class="grey-text">Equipping enterprises with interactive tools for digital administration of distributed solar energy generation and storage
                     </h6>
                     <ul>
                        <li>Led the company’s software development efforts</li>
                        <li>Build new apps for solar Real-Time Monitoring, Storage and Analytics</li>
                        
                        <li>Stack: HTML, CSS, JQery, Java Script, PostGreSQL, Web services APIs, Open source Framwork. </li>
                     </ul>
                     <h6>Accomplishments</h6>
                     <ul>
                        <li>Developed an application to monitor Real-time PV Solar plant data, NISE, an autonomous institution of Ministry of New and Renewable (MNRE), Gurgaon India.</li>
                        <li>Designed and developed an application to monitor SRRA(Solar Radiation Resource Assessment) station for analysis of solar and meteorological data, National Institute of Wind Energy (NIWE), NIWE is an autonomous R&D institution under the Ministry of New and Renewable Energy, Government of India.</li>
                        <li>Designed an SEO optimized website for the company, Soreva Energy.</li>
                        <li>Designed an SEO optimized website for Soreva & National Institute of solar energy to show the historical data.</li>
                        <li>Worked on server-side platform, mostly involved in cloud platform Heroku, PHP with JS, JQuery, Bootstrap</li>
                     </ul>
                  </div>
                  <div class="card-action"><span>Dec 2016 - Dec 2017  |  Gurgaon, India</span></div>
               </div>               
               
             

               <div class="card">
                  <div class="card-content">
                     <div class="row">
                        <div class="col s12 m2"><a href="http://www.avencher.com/en/" target="_blank"><img alt="avencher logo" src="static/img/avencher-logo.png" class="responsive-img center-block"></a></div>
                        <div class="col s12 m10">
                           <p><span class="card-title"><a href="http://www.avencher.com/en/" target="_blank" class="teal-text hoverline">Avencher</a></span></p>
                        </div>
                     </div>
                     <div class="role brown-text">UI Designer</div>
                     <p><em class="grey-text">A Web developement Company, Expertise in eCommerce Developement, Web Developement.</em></p>
                     <ul>
                        <li>Developed a couple of Static & Dynamic Websites.</li>
                     </ul>
                  </div>
                  <div class="card-action"><span>Sep 2016 - Dec 2016 |  Noida, India</span></div>
               </div>      
               
            </div>
         </section>
         <section id="projects" class="section scrollspy">
            <h3 class="page-title white-text teal">Projects</h3>
            <div class="container">
               <div class="row">
                  <!-- BlogSpire-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light"><img alt="Screenshot of BlogSpire web app" src="static/img/projects/soreva_mitra-min.png" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">Real-Time Solar PV Monitoring System<i class="mdi-navigation-more-vert right"></i></span>
                           <p>Blogging web app created for the Engineering team at WeSpire.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li><strong>Ruby on Rails</strong> backend</li>
                              <li><strong>Materialize CSS</strong> frontend</li>
                              <li>User <strong>authentication</strong> via Devise</li>
                              <li>Implemented <strong>liking functionality</strong></li>
                              <li><strong>Client-side rendering</strong> via AJAX</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Code Island website" href="#" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a><a aria-label="Visit the GitHub repo for Code Island project" href="#e" target="_blank" data-position="top" data-tooltip="View Source" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-github"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Code Island-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light"><img alt="Soreva MITRA suraj anand " src="static/img/projects/soreva_mitra-min.png" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">Real-Time Solar PV Monitoring System(NISE)<i class="mdi-navigation-more-vert right"></i></span>
                           <p>Designed an Web apps to monitor the Real-Time Solar PV Data, Hosted at National Institute of Solar Energy, Gurgaon.</p>
                        </div> 
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li>Integrated “Next Meeting” via <strong>Meetup API</strong></li>
                              <li>Developed <strong>CSS and JS</strong> responsive menu</li>
                              <li>Created member list via <strong>GitHub API</strong></li>
                              <li>Refreshed branding and layout</li>
                              <li>Refactored all existing code (<strong>Jekyll</strong>)</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Product Screenshots" href="https://drive.google.com/open?id=1NblbFc9l98MUzi5pzJcChUnJMPllldgR" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a>
						   <a aria-label="View the Product MITRA demo video" href="https://youtu.be/3epJ8kLZiLk" target="_blank" data-position="top" data-tooltip="View Demo Video" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-youtube-play"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Saved By the Text-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light"><img alt="" src="static/img/projects/soreva_mitra-min.png" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">Real-Time Weather Monitoring System(NIWE)<i class="mdi-navigation-more-vert right"></i></span>
                           <p>Designed an Web apps to monitor the Real-Time Solar Radiation Resource Assessment Workstation Weather Data, Hosted at National Institute of Wind Energy, Chennai.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li>Built with Ruby on <strong>Rails</strong></li>
                              <li>Integrated <strong>Twilio API</strong></li>
                              <li>Designed in <strong>Bootstrap</strong></li>
                              <li><strong>Javascript</strong> input validation</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Saved By The Test web app" href="http://savedbythetext.herokuapp.com" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped">
						   <i class="fa fa-external-link"></i></a><a aria-label="Visit to know about SRRA station" href="http://niwe.res.in/department_srra.php" target="_blank" data-position="top" data-tooltip="View Source" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a></div>
                        </div>
                     </div>
                  </div>
				  <!-- Portfolio EdifyHealth-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light">
						<img alt="edifyhealth website screenshots design by suraj anand" src="static/img/projects/edifyhealth-min.png" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">EdifyHealth<i class="mdi-navigation-more-vert right"></i></span>
                           <p>A light weight responsive, optimized WordPress designed website, Built for Local and International Client.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
							  <li>Converted HTML Website to WordPress </li>
                              <li>Custom <strong>jQuery</strong> script</li>
                              <li>Hover and click actions</li>
                              <li>Pulls from random word array</li>
                              <li>Hours of fun!</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Portfolio EdifyHealth website" href="http://edifyhealth.in" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a><a aria-label="#" href="#" target="_blank" data-position="top" data-tooltip="View Source" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-github"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Sajid Shahid-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light"><img alt="Sajid Shahid suraj anand" src="static/img/projects/sajidshahid-min.png" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">Sajid Shahid Photography<i class="mdi-navigation-more-vert right"></i></span>
                           <p>Restyled UI, design WordPress theme & Plugins.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li>Restyled UI, design, and branding</li>
                              <li>Reorganized user process and flow</li>
                              <li>Built with <strong>WordPress</strong></li>
                              <li>Original Redesign</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Sajid Shahid website" href="http://sajidshahid.com" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!--  Destiny India Holidays-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light"><img alt="Destiny India Holidays suraj anand " src="static/img/projects/destinyindiaholidays-min.png" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">Destiny India Holidays<i class="mdi-navigation-more-vert right"></i></span>
                           <p>A customized WordPress Website for International Tourist.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li><strong>Customized</strong> themes and plugins</li>
                              <li>Wordpress</li>
                              <li>Fully <strong>responsive</strong> designs</li>
                              <li>SEO Optimized</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Destiny India Holidays website" href="destinyindiaholidays.com" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Mahavira Energy-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light">
						<img alt="Mahavira Energy suraj anand" src="static/img/projects/mahaviraenergy-min.PNG" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">Mahavira Energy<i class="mdi-navigation-more-vert right"></i></span>
                           <p>An eCommerce WordPress Website with Woocommerce features.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li>Customized WordPress Theme & Plugins.</li>
                              <li><strong>Customized</strong> Woocommerce for Shop and Products.</li>
                              <li>Custom <strong>Google Maps API</strong> integration</li>
                              <li>Automatic location/distance calculation</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Mahavira Energy website" href="http://mahaviraenergy.com" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a><a aria-label="#" href="#" target="_blank" data-position="top" data-tooltip="View Source" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-github"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Avencher-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light"><img alt="Avencher suraj anand" src="static/img/projects/avencher-min.PNG" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">Avencher<i class="mdi-navigation-more-vert right"></i></span>
                           <p>Designed a Responsive Website for a Web Agency start-up</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li>Responsive Designed</li>
                              <li>Light Weight</li>
                              <li>SEO Friendly</li>
                              <li>Minified CSS, JS files</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Avencher Website" href="http://www.avencher.com/en/" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped">
						   <i class="fa fa-external-link"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Deducation-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light"><img alt="Deducation suraj anand" src="static/img/projects/deducation-min.PNG" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">Deducation<i class="mdi-navigation-more-vert right"></i></span>
                           <p>An Educational light weight, SEO Optimized WordPres Website.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li>Designed SEO Optimized Website</li>
                              <li>Customized Theme & Plugins.</li>
                              <li><strong>jQuery</strong> Masonry effect</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Deducation Website" href="http://deducation.in/" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a><a aria-label="#" target="_blank" data-position="top" data-tooltip="View Source" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-github"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!-- 2gadvertising-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light">
						<img alt="2gadvertising" src="static/img/projects/2gadvertising-min.PNG" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">2g Advertising<i class="mdi-navigation-more-vert right"></i></span>
                           <p>Designed a Responsive Website for a advertising company.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li>Customized WordPress Theme & Plugins.</li>
                              <li><strong>Customized</strong> Woocommerce for Shop and Products.</li>
                              <li>Custom <strong>Google Maps API</strong> integration</li>
                              <li>Automatic location/distance calculation</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Mahavira Energy website" href="http://2gadvertising.in" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a><a aria-label="" href="#" target="_blank" data-position="top" data-tooltip="View Source" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-github"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Soreva-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light"><img alt="Soreva" src="static/img/projects/soreva-min.PNG" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">Soreva<i class="mdi-navigation-more-vert right"></i></span>
                           <p>A fully Customized HTML, Jquery, Bootstrap Design.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li>Fully customized <strong>HTML</strong>Theme</li>
                              <li>Integrates <strong>Blogs and Gallery</strong></li>
                              <li>Compatible with all devices.</li>
                              <li>Compatible with all latest browser</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit Soreva website" href="http://soreva.co.in" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <!-- LPG Rice LPG Rice-->
                  <div class="col s12 m6 l4">
                     <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light"><img alt="LPG Rice" src="static/img/projects/lpgrice-min.png" class="activator"></div>
                        <div class="card-content">
                           <span class="card-title activator teal-text hoverline">LPG Rice<i class="mdi-navigation-more-vert right"></i></span>
                           <p>A responsive, Beautiful, Informative static HTML Website.</p>
                        </div>
                        <div class="card-reveal">
                           <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span>
                           <ul>
                              <li>Made <strong>Responsive</strong> Design</li>
                              <li>Customized Javascript & JQery</li>
                              <li>Optimized, SEO Friendly.</li>
                              <li>Built with <strong>HTML</strong> <strong>JQery</strong> Bootstrap</li>
                           </ul>
                           <div class="card-action"><a aria-label="Visit LPG Rice website" href="http://www.lpgrice.com" target="_blank" data-position="top" data-tooltip="View Online" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-external-link"></i></a></div>
                        </div>
                     </div>
                  </div>
                  
				  
               </div>
            </div>
         </section>
         <section id="skills" class="section scrollspy">
            <h3 class="page-title white-text teal">Skills</h3>
            <div class="container">
               <div class="card">
                  <div class="card-content">
                     <h4 class="brown-text light">HTML</h4>
                     <div class="row text-center">
                        <div class="col s4 m2"><img alt="" src="static/img/html5.png" class="responsive-img">HTML5</div>
                        <!-- <div class="col s4 m2"><img alt="" src="static/img/haml.png" class="responsive-img">Haml</div> -->
                        <div class="col s4 m2"><img alt="" src="static/img/jade.png" class="responsive-img">Jade</div>
                        <div class="col s4 m2"><img alt="" src="static/img/jekyll.png" class="responsive-img">Jekyll</div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-content">
                     <h4 class="brown-text light">CSS</h4>
                     <div class="row text-center">
                        <div class="col s4 m2"><img alt="" src="static/img/css3.png" class="responsive-img">CSS3</div>
                        <div class="col s4 m2"><img alt="" src="static/img/sass.png" class="responsive-img">SASS</div>
                        <div class="col s4 m2"><img alt="" src="static/img/bootstrap.png" class="responsive-img">Bootstrap</div>
                        <!-- <div class="col s4 m2"><img alt="" src="static/img/foundation.png" class="responsive-img">Foundation</div>
                        <div class="col s4 m2"><img alt="" src="static/img/materialize.png" class="responsive-img">Materialize</div> -->
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-content">
                     <h4 class="brown-text light">Javascript</h4>
                     <div class="row text-center">
                        <!-- <div class="col s4 m2"><img alt="" src="static/img/react.png" class="responsive-img">React</div> -->
                        <div class="col s4 m2"><img alt="" src="static/img/javascript.png" class="responsive-img">Javascript</div>
                        <div class="col s4 m2"><img alt="" src="static/img/jquery.png" class="responsive-img">jQuery</div>
                       <!--  <div class="col s4 m2"><img alt="" src="static/img/angular.png" class="responsive-img">Angular</div>
                        <div class="col s4 m2"><img alt="" src="static/img/nodejs.png" class="responsive-img">Node</div>
                        <div class="col s4 m2"><img alt="" src="static/img/ionic.png" class="responsive-img">Ionic</div> -->
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-content">
                     <h4 class="brown-text light">Back-End</h4>
                     <div class="row text-center">
                        <div class="col s4 m2"><img alt="" src="static/img/php.jpeg" class="responsive-img">PHP</div>
                        <div class="col s4 m2"><img alt="" src="static/img/mysql.png" class="responsive-img">MySQL</div>
                        <div class="col s4 m2"><img alt="" src="static/img/sqlserver.jpg" class="responsive-img">SQL Server</div>
                        <div class="col s4 m2"><img alt="" src="static/img/postgresql.png" class="responsive-img">PostgreSQL</div>                        
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-content">
                     <h4 class="brown-text light">Build Tools</h4>
                     <div class="row text-center">
                        <div class="col s4 m2"><img alt="" src="static/img/git.png" class="responsive-img">Git</div>
                        <div class="col s4 m2"><img alt="" src="static/img/bitbucket.gif" class="responsive-img">Bitbucket</div>                        
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-content">
                     <h4 class="brown-text light">CMS</h4>
                     <div class="row text-center">
                        <div class="col s4 m2"><img alt="" src="static/img/wordpress.png" class="responsive-img">Wordpress</div> 
                        <div class="col s4 m2"><img alt="" src="static/img/woocommerce-logo.png" class="responsive-img">Woocommerce</div>                       
                        <div class="col s4 m2"><img alt="" src="static/img/squarespace.png" class="responsive-img">Squarespace</div>
                        <div class="col s4 m2"><img alt="" src="static/img/Shopify.png" class="responsive-img">Shopify</div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-content">
                     <h4 class="brown-text light">Other</h4>
                     <div class="row text-center">
                        <div class="col s4 m2"><img alt="" src="static/img/github.png" class="responsive-img">Github</div>
                        <div class="col s4 m2"><img alt="" src="static/img/heroku-logo.png" class="responsive-img">Heroku</div>
                        <div class="col s4 m2"><img alt="" src="static/img/linux-logo.jpg" class="responsive-img">Linux</div>                        
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="awards" class="section scrollspy">
            <h3 class="page-title white-text teal">Honors & Awards</h3>
            <div class="container">
               <div class="row">
                  <div class="col s12">
                     <div class="card">
                        <div class="card-content">
                           <p><span class="card-title"><a href="http://www.globalyouth.in/" target="_blank" class="teal-text hoverline">Invited as a delegate</a></span></p>
                           <p class="brown-text">Global Youth Annual Summit | March 2018 </p>

                           <ul>
                              <li>Global Youth is an apolitical, not-for-profit organisation looking to empower youth ambassadors for a global generation.</li>
                              <li>
                              Global Youth looks to bring young minds a worldwide perspective and make the youth active, insightful and vibrant participants in creating a vision for where India stands in a globalised generation. </li>
                              <li>The organisation provides a hub for the youth to connect to the worlds of foreign policy, diplomacy and global affairs to create a young energetic base for the next generation of global thinkers and global leaders.</li>
                           </ul>
                        </div>
                     </div>
                  </div>    
                  <div class="col s12">
                     <div class="card">
                        <div class="card-content">
                           <p><span class="card-title"><a href="https://data.gov.in/" target="_blank" class="teal-text hoverline">Invited as a delegate</a></span></p>
                           <p class="brown-text">Launch of #OpenGovDataHack | Sept 2017 </p>
                           <ul>
                              <li>Open Government Data (OGD) Platform India is at the forefront in promoting innovation in Open Data ecosystem. </li>
                              <li>
                              NIC, in association with IAMAI & StartUp India has organized a Hackathon – “#OpenGovDataHack”, for Students, Entrepreneurs, Innovators, Start-ups, Developers and Community to create unique and innovative service delivery Applications & Info-Graphics to foster innovation.</li>
                           </ul>
                        </div>
                     </div>
                  </div>              
               </div>      
               <div class="row">
                  
                  <div class="col s12">
                     <div class="card">
                        <div class="card-content">
                           <p><span class="card-title"><a href="http://www.renewableenergyindiaexpo.com/" target="_blank" class="teal-text hoverline">Invited as a delegate</a></span></p>
                           <p class="brown-text">Renewable Energy India Expo | Sept 2017</p>
                           <ul>
                              <li>UBM India launched the 11th edition of the Renewable Energy India (REI) Expo, the three days (20th to 22nd September 2017) show at the India Expo Center, Greater Noida. </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
                        
               </div>               
            </div>
         </section>
         <section id="education" class="section scrollspy">
            <h3 class="page-title white-text teal">Education</h3>
            <div class="container">
               <div class="row">
                  <div class="col s12">
                     <div class="card">
                        <div class="card-content">
                           <p><span class="card-title"><a href="https://www.united.ac.in/" class="teal-text hoverline">United Group of Institutions</a></span></p>
                           <p class="brown-text">Bachelor of Technology, Computer Science & Engineering | 2012 - 2016</p>                           
                        </div>
                     </div>
                  </div> 
					<div class="col s12">
					
                     <div class="card">
                        <div class="card-content">
						<p><span class="card-title"><a href="https://www.united.ac.in/" class="teal-text hoverline">Source of Learning</a></span></p>
                           <div class="row text-center">
                        <div class="col s4 m2"><img alt="" src="https://www.udemy.com/staticx/udemy/images/v6/logo-coral.svg" class="responsive-img">Udemy</div>
                       
                     </div>                          
                        </div>
                     </div>
                  </div> 
               </div>
            </div>
         </section>
         <section id="contact" class="section scrollspy full-height">
            <h3 class="page-title white-text teal">Contact</h3>
            <div class="container">
               <p><a aria-label="Email Suraj" href="mailto:surya13493@gmail.com" data-position="top" data-tooltip="Email Suraj" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-envelope"></i><a alt="" href="mailto:surya13493@gmail.com" class="hoverline">surya13493@gmail.com</a></a></p>

               <p><a aria-label="View Suraj on GitHub" href="https://github.com/anandsuraj" target="_blank" data-position="top" data-tooltip="View Suraj on GitHub" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-github"></i><a alt="" href="https://github.com/anandsuraj" class="hoverline">github.com/anandsuraj</a></a></p>

               <p><a aria-label="View Suraj on LinkedIn" href="https://www.linkedin.com/in/surajanandugi/" target="_blank" data-position="top" data-tooltip="View Suraj on LinkedIn" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-linkedin"></i><a alt="" href="https://www.linkedin.com/in/surajanandugi/" class="hoverline">linkedin.com/in/surajanandugi/</a></a></p>

               <p><a aria-label="View Suraj on Google Plus" href="https://plus.google.com/u/0/+SurajAnandcool" target="_blank" data-position="top" data-tooltip="View Suraj on Google Plus" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa fa-google-plus"></i><a alt="" href="https://plus.google.com/u/0/+SurajAnandcool" class="hoverline">Google+/</a></a></p>

            </div>
         </section>
      </main>
      <!-- jQuery-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Materialize - Compiled and minified JavaScript-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>
      <script>
         // Materialize - Initializers
         $(document).ready(function(){
           $('.scrollspy').scrollSpy();
           // Initialize collapse button
           $(".button-collapse").sideNav({
               menuWidth: 190, // Default is 240
               edge: 'left', // Choose the horizontal origin
               closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
             }
           );
         });
      </script>
      <!-- nothing to see here...--><small>
      ___                       ___           ___                    ___                                     ___
      /\  \                     /\__\         /\  \                  /\__\                      ___          /\__\
      \:\  \       ___         /:/ _/_        \:\  \                /:/ _/_       ___          /\  \        /:/ _/_
      \:\  \     /\__\       /:/ /\  \        \:\  \              /:/ /\__\     /\__\         \:\  \      /:/ /\__\
      ___ /::\  \   /:/__/      /:/ /::\  \   ___ /::\  \            /:/ /:/  /    /:/__/          \:\  \    /:/ /:/ _/_
      /\  /:/\:\__\ /::\  \     /:/__\/\:\__\ /\  /:/\:\__\          /:/_/:/  /    /::\  \      ___  \:\__\  /:/_/:/ /\__\
      \:\/:/  \/__/ \/\:\  \__  \:\  \ /:/  / \:\/:/  \/__/          \:\/:/  /     \/\:\  \__  /\  \ |:|  |  \:\/:/ /:/  /
      \::/__/       ~~\:\/\__\  \:\  /:/  /   \::/__/                \::/__/       ~~\:\/\__\ \:\  \|:|  |   \::/_/:/  /
      \:\  \          \::/  /   \:\/:/  /     \:\  \                 \:\  \          \::/  /  \:\__|:|__|    \:\/:/  /
      \:\__\         /:/  /     \::/  /       \:\__\                 \:\__\         /:/  /    \::::/__/      \::/  /
      \/__/         \/__/       \/__/         \/__/                  \/__/         \/__/      ~~~~           \/__/</small>
   </body>
</html>
