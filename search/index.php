<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--***************-->
    <!--Open Graph Tags-->
    <!--***************-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://uthsc.edu/">
    <meta property="og:title" content="xxxx">
    <meta property="og:description" content="xxxx">
    <meta property="og:image" content="https://uthsc.edu/xxxx">
    <!--****************-->
    <!--/Open Graph Tags-->
    <!--****************-->

    <title>Search - UTHSC</title>

    <link rel="stylesheet" href="../-resources/2015/css/uthsc.css">
    <link rel="stylesheet" href="../-resources/2015/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:400italic,700italic,300,700,300italic,400">
    <link rel="shortcut icon" href="/images/favicon.ico?v=083012-1411" />
</head>

   <body>


   <a href="#main-content" class="show-on-focus">Skip to content</a>

   <!--******************-->
   <!--Off canvas wrapper-->
   <!--******************-->
   <div id="uthsc-off-canvas-wrapper" class="uthsc-off-canvas-wrapper">

       <!--*****************-->
       <!--UTHSC site nav-->
       <!--*****************-->
       <nav class="uthsc-site-nav hide-for-print" aria-label="UTHSC site menu" role="navigation">
           <div class="uthsc-site-nav-left">
               <ul class="menu">
                   <li><a href="/students/">Students</a></li>
                   <li><a href="/faculty/">Faculty &amp; Staff</a></li>
                   <li><a href="/alumni/">Alumni</a></li>
                   <li><a href="/visitors/">Visitors</a></li>
                   <li><a href="/clinicalcare/">Patients</a></li>
               </ul>
           </div>

           <div class="uthsc-site-nav-right">
               <ul class="dropdown menu" data-dropdown-menu="data-dropdown-menu">
                   <li class="has-submenu">
                       <a href="#">Our Mission</a>
                       <ul class="submenu menu vertical" data-submenu="data-submenu">
                           <li>
                               <a href="/education/">
                                   <span class="fa fa-graduation-cap"></span>
                                   Academics
                               </a>
                           </li>
                           <li>
                               <a href="research/">
                                   <span class="fa fa-flask"></span>
                                   Research
                               </a>
                           </li>
                           <li>
                               <a href="/clinicalcare/">
                                   <span class="fa fa-medkit"></span>
                                   Clinical Care
                               </a>
                           </li>
                           <li>
                               <a href="/publicservice/">
                                   <span class="fa fa-globe"></span>
                                   Public Service
                               </a>
                           </li>
                           <li>
                               <a href="/aboututhsc/utmission.php">
                                   Mission Statement
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="has-submenu">
                       <a href="#">Resources</a>
                       <ul class="submenu menu vertical" data-submenu>
                           <li><a href="/banner/info/">Banner</a></li>
                           <li><a href="https://courses.uthsc.edu/">Blackboard</a></li>
                           <li><a href="http://events.uthsc.edu/">Calendar</a></li>
                           <li><a href="/hr/employment/">Career Opportunities</a></li>
                           <li><a href="/ilogin/">iLogin</a></li>
                           <li><a href="/map/">Maps</a></li>
                           <li><a href="https://utap.tennessee.edu/">MyUT</a></li>
                           <li><a href="https://news.uthsc.edu/">News</a></li>
                           <li><a href="/email/">Webmail</a></li>
                       </ul>
                   </li>
                   <li><a href="/give/"><span class="fa fa-gift"></span> Make a Gift</a></li>
                   <li><a href="/admissions/visit-uthsc.php"><span class="fa fa-road"></span> Take a Tour</a></li>
                   <li>
                       <div class="show-for-large">
                           <!--Search form-->
                           <form class="input-group" aria-label="Search the UTHSC site"
                                 action="../search/" method="get" style="margin-bottom:0;">
                               <input type="search" aria-label="Search the UTHSC site" role="search" name="q"
                                      placeholder="search" style="margin-right:0;">
                               <input type="hidden" name="cof" value="FORID:11" />
                               <input type="hidden" name="ie" value="UTF-8" />
                               <input type="hidden" name="col" value="uthsc" />
                               <div class="input-group-button">
                                   <button type="submit" class="button" aria-label="Submit search form">
                                       <span class="fa fa-search"></span>
                                   </button>
                               </div>
                           </form>
                           <!--/Search form-->
                       </div>
                   </li>
               </ul>
           </div>
       </nav>
       <!--******************-->
       <!--/UTHSC site nav-->
       <!--******************-->


       <!--******-->
       <!--Banner-->
       <!--******-->
       <header aria-label="UTHSC Logo" role="banner" class="uthsc-banner hide-for-print"
               style="border-bottom: 1px solid #00835f;">
           <div class="row">
               <div class="medium-10 large-8 small-centered columns">
                   <a href="/">
                       <img src="../-resources/2015/images/uthsc-logo-white-text.svg" alt="UTHSC logo" class="uthsc-logo"/>
                   </a>
               </div>
           </div>

           <div class="row">
               <div class="columns small-collapse hide-for-large">
                   <!--Search form-->
                   <form class="input-group" aria-label="Search the UTHSC site"
                         action="../search/" method="get" style="margin-bottom:0;">
                       <input type="search" aria-label="Search the UTHSC site" role="search" name="q"
                              placeholder="<?php echo $_GET['q'] ?  $_GET['q'] : 'Search &hellip;'?>" style="margin-right:0;">
                       <input type="hidden" name="cof" value="FORID:11" />
                       <input type="hidden" name="ie" value="UTF-8" />
                       <input type="hidden" name="col" value="uthsc" />
                       <div class="input-group-button">
                           <button type="submit" class="button" aria-label="Submit search form">
                               <span class="fa fa-search"></span>
                           </button>
                       </div>
                   </form>
                   <!--/Search form-->
               </div>
           </div>
       </header>
       <!--*******-->
       <!--/Banner-->
       <!--*******-->


       <!--**********************-->
       <!--Emergency Notification-->
       <!--**********************-->
       <!--<div class="row expanded hide-for-print">-->
       <!--<div class="columns callout alert large-12" style="margin-bottom:0; padding:0;" data-closable>-->
       <!--<div class="row">-->
       <!--<h2>Emergency Notification!</h2>-->
       <!--<p>This section will be used for emergency notifications.</p>-->

       <!--<button class="close-button" aria-label="Dismiss alert" type="button" data-close>-->
       <!--<span aria-hidden="true">&times;</span>-->
       <!--</button>-->
       <!--</div>-->
       <!--</div>-->
       <!--</div>-->
       <!--***********************-->
       <!--/Emergency Notification-->
       <!--***********************-->


       <!--*****************-->
       <!--UTHSC Section Nav-->
       <!--*****************-->
       <div data-equalizer="heading-links">
           <nav id="uthsc-section-navigation" data-equalizer="nested-links" aria-label="Current section menu"
                role="navigation" class="hide-for-print">
               <ul class="row collapse" data-equalizer="heading-links">

                   <li class="uthsc-navigation-column small-2 columns">
                       <a href="/education/" data-equalizer-watch="heading-links"><span class="fa fa-graduation-cap"></span> Academics</a>
                   </li>

                   <li class="uthsc-navigation-column small-2 columns">
                       <a href="research/" data-equalizer-watch="heading-links"><span class="fa fa-flask"></span> Research</a>
                   </li>

                   <li class="uthsc-navigation-column small-2 columns">
                       <a href="/clinicalcare/" data-equalizer-watch="heading-links"><span class="fa fa-medkit"></span>Clinical Care</a>
                   </li>

                   <li class="uthsc-navigation-column small-2 columns">
                       <a href="/publicservice/" data-equalizer-watch="heading-links"><span class="fa fa-globe"></span>Public Service</a>
                   </li>

                   <li class="uthsc-navigation-column small-2 columns">
                       <a href="/aboututhsc/" data-equalizer-watch="heading-links"><span class="fa fa-file-text-o"></span>About UTHSC</a>
                   </li>

                   <li class="uthsc-navigation-column small-2 columns">
                       <a href="http://uthscalumni.com/" data-equalizer-watch="heading-links"><span class="fa fa-users"></span>Alumni &amp; Friends</a>
                   </li>

                   <li class="uthsc-navigation-column small-2 columns"></li>
               </ul>
           </nav>
           <div class="uthsc-section-nav-placeholder show-for-large" data-equalizer-watch="heading-links"></div>
       </div>
       <!--******************-->
       <!--/UTHSC Section Nav-->
       <!--******************-->


       <!--*******-->
       <!--Content-->
       <!--*******-->
       <div class="main-content" id="main-content" aria-label="Page content" role="main">

           <div class="row">
               <div class="columns">
                   <h1>UTHSC Search</h1>

                   <!--Search form-->
                   <form class="row uthsc-people-search uthsc-row-space show-for-large" aria-label="Search the UTHSC site"
                         action="../search/" method="get">
                       <div class="columns callout">
                           <div class="input-group">
                               <input class="input-group-field" type="text" placeholder="Search &hellip;" value="<?php echo $_GET['q'] ?  $_GET['q'] : ''?>" type="search"
                                      aria-label="Search the UTHSC site" role="search" name="q"/>
                               <input type="hidden" name="cof" value="FORID:11"/>
                               <input type="hidden" name="ie" value="UTF-8"/>
                               <input type="hidden" name="col" value="uthsc"/>
                               <div class="input-group-button">
                                   <button type="submit" class="button" aria-label="Submit search form">
                                       <span class="fa fa-search"></span>
                                   </button>
                               </div>
                           </div>
                       </div>
                   </form>
                   <!--/Search form-->

                   <div class="row">



                       <div class="columns large-6">
                           <h2>Campus Search Results</h2>

                           <div class="tabs" data-tabs id="example-tabs">
                               <div class="tabs-title is-active"><a href="#panel1" aria-selected="true">Campus</a></div>
                               <div class="tabs-title"><a href="#panel2">System</a></div>
                           </div>

                           <div class="tabs-content" data-tabs-content="example-tabs">
                               <div class="tabs-panel is-active" id="panel1">

                                   <!--*********************-->
                                   <!--Campus Search Results-->
                                   <!--*********************-->
                                   <script>
                                       (function() {
                                           var cx = '016646383533466001202:yuqszdu02uw';
                                           var gcse = document.createElement('script');
                                           gcse.type = 'text/javascript';
                                           gcse.async = true;
                                           gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                           var s = document.getElementsByTagName('script')[0];
                                           s.parentNode.insertBefore(gcse, s);
                                       })();
                                   </script>
                                   <gcse:search></gcse:search>
                                   <!--**********************-->
                                   <!--/Campus Search Results-->
                                   <!--**********************-->

                               </div>
                               <div class="tabs-panel" id="panel2">

                                   <!--*********************-->
                                   <!--System Search Results-->
                                   <!--*********************-->
                                   <script>
                                       (function() {
                                           var cx = '016646383533466001202:yuqszdu02uw';
                                           var gcse = document.createElement('script');
                                           gcse.type = 'text/javascript';
                                           gcse.async = true;
                                           gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                           var s = document.getElementsByTagName('script')[0];
                                           s.parentNode.insertBefore(gcse, s);
                                       })();
                                   </script>
                                   <gcse:search></gcse:search>
                                   <!--*********************-->
                                   <!--System Search Results-->
                                   <!--*********************-->

                               </div>
                           </div>
                       </div>

                       <div class="columns large-6">
                           <h2>People Search</h2>
                           <div class="callout">

                               <table>
                                   <thead>
                                   <tr>
                                       <th width="200">Name</th>
                                       <th>NetID</th>
                                       <th width="150">Phone</th>
                                       <th width="150">Department/College</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <tr>
                                       <td>Spake, George P</td>
                                       <td>gspake1</td>
                                       <td>(901) 448-1888</td>
                                       <td>ITS Web Services</td>
                                   </tr>
                                   <tr>
                                       <td>Content Goes Here</td>
                                       <td>gspake1</td>
                                       <td>Content Goes Here</td>
                                       <td>Content Goes Here</td>
                                   </tr>
                                   <tr>
                                       <td>Content Goes Here</td>
                                       <td>gspake1</td>
                                       <td>Content Goes Here</td>
                                       <td>Content Goes Here</td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                   <!--******-->
                   <!--System-->
                   <!--******-->


               </div>
           </div>

       </div>

           <!--******-->
           <!--Footer-->
           <!--******-->

           <!--**************-->
           <!--Last Published-->
           <!--**************-->
           <div class="uthsc-last-published text-center">
               <p><small>Last Published: June 7, 2016</small></p>
           </div>
           <!--***************-->
           <!--/Last Published-->
           <!--***************-->


           <!--*************-->
           <!--Global Footer-->
           <!--*************-->
           <?php include('../uthsc-global-footer.php') ?>
           <!--**************-->
           <!--/Global Footer-->
           <!--**************-->

           <!--*******-->
           <!--/Footer-->
           <!--*******-->


           <!--************************************-->
           <!--Mobile navigation bottom spacing fix-->
           <!--************************************-->
           <div class="mobile-nav-bottom-spacing-fix hide-for-large"></div>

           <!--Safari bottom nav fix-->
           <div class="safari-bottom-nav-fix"></div>
           <!--Safari bottom nav fix-->
           <!--*************************************-->
           <!--/Mobile navigation bottom spacing fix-->
           <!--*************************************-->

       </div>
       <!--*******************-->
       <!--/Off canvas wrapper-->
       <!--*******************-->


       <!--********************-->
       <!--Left off canvas menu-->
       <!--********************-->
       <nav id="uthsc-off-canvas-menu--slide-left" class="uthsc-off-canvas-menu uthsc-off-canvas-menu--slide-left hide-for-print"
            aria-hidden="true">

           <div class="off-canvas-search">
               <!--Search form-->
               <form class="input-group" aria-label="Search the UTHSC site"
                     action="search/" method="get" style="margin-bottom:0;">
                   <input type="search" aria-label="Search the UTHSC site" role="search" name="q"
                          placeholder="search" style="margin-right:0;">
                   <input type="hidden" name="cof" value="FORID:11" />
                   <input type="hidden" name="ie" value="UTF-8" />
                   <input type="hidden" name="col" value="uthsc" />
                   <div class="input-group-button">
                       <button type="submit" class="button" aria-label="Submit search form">
                           <span class="fa fa-search"></span>
                       </button>
                   </div>
               </form>
               <!--/Search form-->
           </div>

           <!--  Close menu button-->
           <button class="uthsc-off-canvas-menu__close">
               <span class="fa fa-chevron-left"></span>&emsp; Close Menu
           </button>
           <!--/ Close menu button-->

           <ul>
               <li><a href="/education/" class="link-heading">Academics</a></li>
               <li><a href="research/" class="link-heading">Research</a></li>
               <li><a href="/clinicalcare/" class="link-heading">Clinical Care</a></li>
               <li><a href="/publicservice/" class="link-heading">Public Service</a></li>
               <li><a href="/aboututhsc/" class="link-heading">About UTHSC</a></li>
               <li><a href="http://uthscalumni.com/" class="link-heading">Alumni &amp; Friends</a></li>
           </ul>

           <!--Safari bottom nav fix-->
           <div class="safari-bottom-nav-fix"></div>
           <!--Safari bottom nav fix-->
       </nav>
       <!--*********************-->
       <!--/Left off canvas menu-->
       <!--*********************-->


       <!--*********************-->
       <!--Right off canvas menu-->
       <!--*********************-->

       <nav id="uthsc-off-canvas-menu--slide-right" class="uthsc-off-canvas-menu uthsc-off-canvas-menu--slide-right hide-for-print" aria-hidden="true">

           <div class="off-canvas-search">
               <!--Search form-->
               <form class="input-group" aria-label="Search the UTHSC site" action="/search/" method="get" style="margin-bottom:0;">
                   <input type="search" aria-label="Search the UTHSC site" role="search" name="q" placeholder="search" style="margin-right:0;">
                   <input type="hidden" name="cof" value="FORID:11" />
                   <input type="hidden" name="ie" value="UTF-8" />
                   <input type="hidden" name="col" value="uthsc" />
                   <div class="input-group-button">
                       <button type="submit" class="button" aria-label="Submit search form">
                           <span class="fa fa-search"></span>
                       </button>
                   </div>
               </form>
               <!--/Search form-->
           </div>

           <!--  Close menu button-->
           <button class="uthsc-off-canvas-menu__close">
               Close Menu &emsp;<span class="fa fa-chevron-right"></span>
           </button>
           <!--/ Close menu button-->


           <!--Mission links-->
           <div class="mission-links">
               <h2 class="link-heading">Mission</h2>

               <a href="/education/"><span class="uthsc-fa-centered fa fa-graduation-cap"></span>&emsp;Academics</a>
               <a href="research"><span class="uthsc-fa-centered fa fa-flask"></span>&emsp;Research</a>
               <a href="/clinicalcare/"><span class="uthsc-fa-centered fa fa-medkit"></span>&emsp;Clinical Care</a>
               <a href="/publicservice/"><span class="uthsc-fa-centered fa fa-globe"></span>&emsp;Public Service</a>
           </div>

           <a href="/give/" class="call-to-action-link"><span class="uthsc-fa-centered fa fa-gift"></span>&emsp;Make a Gift</a>
           <a href="/admissions/visit-uthsc.php" class="call-to-action-link"><span class="uthsc-fa-centered fa fa-road"></span>&emsp;Take a Tour</a>

           <ul>
               <li><span class="link-heading">Information for...</span>
                   <ul>
                       <li><a href="/students/">Students</a></li>
                       <li><a href="/faculty/">Faculty &amp; Staff</a></li>
                       <li><a href="/alumni/">Alumni</a></li>
                       <li><a href="/visitors/">Visitors</a></li>
                       <li><a href="/clinicalcare/">Patients</a></li>
                   </ul>
               </li>
               <li><span class="link-heading">Resources</span>
                   <ul>
                       <li><a href="/banner/info/">Banner</a></li>
                       <li><a href="http://courses.uthsc.edu/">Blackboard</a></li>
                       <li><a href="http://events.uthsc.edu/">Calendar</a></li>
                       <li><a href="http://uthsc.edu/hr/employment/">Career Opportunities</a></li>
                       <li><a href="/ilogin/">iLogin</a></li>
                       <li><a href="/map/">Maps</a></li>
                       <li><a href="http://utap.tennessee.edu/">MyUT</a></li>
                       <li><a href="http://news.uthsc.edu/">News</a></li>
                       <li><a href="/email/">Webmail</a></li>
                   </ul>
               </li>
           </ul>

           <!--Safari bottom nav fix-->
           <div class="safari-bottom-nav-fix"></div>
           <!--Safari bottom nav fix-->
       </nav>

       <!--**********************-->
       <!--/Right off canvas menu-->
       <!--**********************-->


       <!--***************-->
       <!--Off canvas mask-->
       <!--***************-->
       <div id="uthsc-off-canvas-mask" class="uthsc-off-canvas-mask hide-for-print"></div><!-- /uthsc-off-canvas-mask -->
       <!--****************-->
       <!--/Off canvas mask-->
       <!--****************-->


       <!--******************-->
       <!--Off canvas buttons-->
       <!--******************-->
       <div aria-hidden="true" id="mobile-navigation" class="hide-for-large hide-for-print">
           <button id="uthsc-off-canvas-button--slide-left" class="toggle-slide-left button" style="background-image: url('/-resources/2015/images/section-button-images/nav-toggler-left-home-page.png');"></button>
           <button id="uthsc-off-canvas-button--slide-right" class="toggle-slide-right button"></button>

           <!--Safari bottom nav fix-->
           <div class="safari-bottom-nav-fix"></div>
           <!--Safari bottom nav fix-->
       </div>
       <!--*******************-->
       <!--/Off canvas buttons-->
       <!--*******************-->


       <!--*******-->
       <!--Scripts-->
       <!--*******-->
       <script src="../-resources/2015/js/jquery.min.js"></script>
       <script src="../-resources/2015/js/what-input.min.js"></script>
       <script src="../-resources/2015/js/foundation.min.js"></script>
       <script src="../-resources/2015/js/uthsc.min.js"></script>
       <!--********-->
       <!--/Scripts-->
       <!--********-->
   </body>
</html>