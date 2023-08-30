@extends('layouts.base')

@section('content')


<div id="top">

    {{-- <div class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">

        <a target="_blank" href="https://swiggy.wdd12-jasveer.xyz/">Swiggy Food App</a>
        <a target="_blank" href="/sorting-visualizer">Sorting Visulaizer</a>
        <a target="_blank" href="/path-finder">Path Finder</a>
        <a target="_blank" href="http://linkedin.wdd12-jasveer.xyz/">Linkedin Clone</a>
        <a target="_blank" href="http://todo.wdd12-jasveer.xyz/">To-Do List</a>
        <a target="_blank" href="http://capstone.wdd12-jasveer.xyz/">Ecommerce</a>

    </div> --}}

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- site header
    ================================================== -->
    <header class="s-header">

      

        <nav class="header-nav-wrap">
            <ul class="header-main-nav">
                <li class="current"><a class="smoothscroll" href="#intro" title="intro">Intro</a></li>
                <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                <li><a class="smoothscroll" href="#services" title="services">Services</a></li>
                <li><a class="smoothscroll" href="#works" title="works">Works</a></li>
                <li><a class="smoothscroll" href="#contact" title="contact us">Say Hello</a></li>	
            </ul>

            <ul class="header-social">
                <li><a href="https://www.linkedin.com/in/jasveer-singh-7222b51b0/"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- intro
    ================================================== -->
    <section id="intro" class="s-intro target-section">

        <div class="row intro-content">

            <div class="column large-9 mob-full intro-text">
                <h3>Hello, I'm Jasveer</h3>
                <h1>
                    Full Stack <br>Web Developer <br>
                    Based In Winipeg, Manitoba.
                </h1>
            </div>

            <div class="intro-scroll">
                <a href="#about" class="intro-scroll-link smoothscroll">
                    Scroll For More
                </a>
            </div>

            <div class="intro-grid"></div>
            <div class="intro-pic"></div>

        </div> <!-- end row -->

    </section> <!-- end intro -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="about-me">

            <div class="row heading-block" data-aos="fade-up">
                <div class="column large-full">
                    <h2 class="section-heading">About Me</h2>
                </div>
            </div>

            <div class="row about-me__content" data-aos="fade-up">
                <div class="column large-full about-me__text">
                    <p class="lead">
                        I am a passionate web developer with 2.5 years of professional experience in the field. My journey has equipped me with a strong understanding of web development technologies and a proven track record of consistently delivering high-quality software solutions. My expertise encompasses a range of technologies, including Laravel, Vue.js, and React, allowing me to craft dynamic and engaging web applications.
                    </p>

                    <p>
                        Front-end development is where I thrive, and I bring solid proficiency in HTML, CSS, and JavaScript libraries to create seamless user interfaces. My experience extends beyond the visual aspect, as I possess a deep understanding of RESTful API design and have successfully developed APIs that enhance application functionality. Additionally, I have harnessed the power of Google Maps API to integrate location-based services seamlessly.


                    </p>

                    <p>
                        Collaboration is at the core of my approach, and I am well-versed in Git, ensuring efficient teamwork and version control. My adaptability shines through my ability to swiftly learn and master new technologies, making me an asset when tackling fresh challenges. I am fueled by the desire to continuously enhance my skills and contribute to cutting-edge projects that push the boundaries of web development.





                    </p>
 
                </div>
            </div>
    
            <div class="row about-me__buttons">
                <div class="column large-half tab-full" data-aos="fade-up">
                    <a href="#contact" class="btn btn--stroke full-width">Hire Me</a>
                </div>
                <div class="column large-half tab-full" data-aos="fade-up">
                    <a href="/images/Jasveer_Resume.pdf" class="btn btn--primary full-width" download>Download CV</a>
                </div>
            </div>

        </div> <!-- end about-me -->

        <div class="about-experience">

            <div class="row heading-block" data-aos="fade-up">
                <div class="column large-full">
                    <h2 class="section-heading">Work & Education</h2>
                </div>
            </div>

            <div class="row about-experience__timeline">

                <div class="column large-half tab-full" data-aos="fade-up">
                    <div class="timeline">

                        <div class="timeline__icon-wrap">
                            <span class="timeline__icon timeline__icon--work"></span>
                        </div>

                        <div class="timeline__block">
                            <div class="timeline__bullet"></div>
                            <div class="timeline__header">
                                <p class="timeline__timeframe">Jan 2020 - June 2022</p>
                                <h3 class="item-title">Dynamb Technologies</h3>
                                <h5>Full Stack Web Developer</h5>
                            </div>
                            <div class="timeline__desc">
                                <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                            </div>
                        </div>
 

                    </div>
                </div>

                <div class="column large-half tab-full" data-aos="fade-up">
                    <div class="timeline">

                        <div class="timeline__icon-wrap">
                            <span class="timeline__icon timeline__icon--education"></span>
                        </div>

                        <div class="timeline__block">
                            <div class="timeline__bullet"></div>
                            <div class="timeline__header">
                                <p class="timeline__timeframe">Aug 2022 - Aug 2023</p>
                                <h3 class="item-title">The University of Winnipeg</h3>
                                <h5>Post Graduation Diploma in Web Development</h5>
                            </div>
                            
                        </div>

                        <div class="timeline__block">
                            <div class="timeline__bullet"></div>
                            <div class="timeline__header">
                                <p class="timeline__timeframe">July 2017 - April 2020</p>
                                <h3 class="item-title">Himachal Pradesh University</h3>
                                <h5>Bachelor Degree in Computer Applications</h5>
                            </div>
                             
                        </div>

                        

                    </div>
                </div>
            </div>

        </div> <!-- end about-experience -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services ss-dark target-section">

        <div class="shadow-overlay"></div>

        <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading section-heading--centerbottom">Capabilities</h2>

                <p class="section-desc">
                    My passion and goal is to help you make your business standout.
                </p>
            </div>
        </div> <!-- end heading-block -->

        <div class="row services-list block-large-1-3 block-medium-1-2 block-tab-full">

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">JAVASCRIPT</h4>
                     
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">PHP</h4>
                   
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">HTML & CSS</h4>
                    
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">OOPS</h4>
                    
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">DBMS</h4>
                   
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">MOBILE RESPONSIVE DESIGN</h4>
                    
                </div>
            </div>
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">LINUX</h4>
                    
                </div>
            </div>
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">VUE.JS</h4>
                    
                </div>
            </div>
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">REACT.JS</h4>
                    
                </div>
            </div>
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">GIT VERSION CONTROL</h4>
                    
                </div>
            </div>
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">MYSQL/SQLITE</h4>
                    
                </div>
            </div>
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">LARAVEL</h4>
                    
                </div>
            </div>
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">UI/UX</h4>
                    
                </div>
            </div>
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">TAILWIND/BOOTSTRAP</h4>
                    
                </div>
            </div>
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">JQUERY</h4>
                    
                </div>
            </div>
        </div> <!-- end services-list -->

    </section> <!-- end s-services -->
 

    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading section-heading--centerbottom">Selected Works</h2>
                <p class="section-desc">
                    Here are some of my selected works I have done lately. Feel free to 
                    check them out.
                </p>
            </div>
        </div> <!-- end heading-block -->

        <div class="masonry-wrap">

            <div class="masonry">
                <div class="grid-sizer"></div>
    
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/acehonda.png" class="thumb-link" title="acehonda" data-size="1050x700">
                                <img src="images/portfolio/acehonda.png" 
                                     srcset="images/portfolio/acehonda.png 1x, images/portfolio/acehonda.png 2x" alt="">
                            </a>    
                            <a href="https://www.acehonda.in/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
    
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Acehonda.in
                            </h4>
                            <p class="item-folio__cat">
                                Outlet Branding and Inventory Management System
                            </p>
                        </div>
     
                    </div>
                </div> <!-- end masonry__brick -->
    
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/serinity.png" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                <img src="images/portfolio/serinity.png" 
                                     srcset="images/portfolio/serinity.png 1x, images/portfolio/serinity.png@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://serenitymode.com/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Serinity Mode
                            </h4>
                            <p class="item-folio__cat">
                                NGO Website
                            </p>
                        </div>
                        
                    </div>
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/bakehoney.png" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                <img src="images/portfolio/bakehoney.png"
                                     srcset="images/portfolio/bakehoney.png 1x, images/portfolio/bakehoney.png 2x" alt="">
                            </a>
                            <a href="https://www.bakehoney.com.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Bakehoney.com
                            </h4>
                            <p class="item-folio__cat">
                                Ecommerce website 
                            </p>
                        </div>
                        
                    </div>
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/food.png" class="thumb-link" title="Grow Green" data-size="1050x700">
                                <img src="images/portfolio/food.png" 
                                     srcset="images/portfolio/food.png 1x, images/portfolio/food.png 2x" alt="">
                            </a>
                            <a href="https://swiggy.wdd12-jasveer.xyz/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Food Ordering App
                            </h4>
                            <p class="item-folio__cat">
                               Personal Project - React and Redux Toolkit
                            </p>
                        </div>
                       
                    </div>
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/sorting.png" class="thumb-link" title="Guitarist" data-size="1050x700">
                                <img src="images/portfolio/sorting.png" 
                                     srcset="images/portfolio/sorting.png 1x, images/portfolio/sorting.png@2x.png 2x" alt="">
                            </a>
                            <a href="https://portfolio.wdd12-jasveer.xyz/sorting-visualizer" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Sorting Visualizer
                            </h4>
                            <p class="item-folio__cat">
                               Personal Project - Sorting Algorithm with Vue.js 
                            </p>
                        </div>
                        
                    </div>
                

            </div> <!-- end masonry -->

        </div> <!-- end masonry-wrap -->

    </section> <!-- end s-work -->


   
    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact ss-dark target-section">

        <div class="row heading-block" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading">Get In Touch</h2>
            </div>
        </div>

        <div class="row contact-main" data-aos="fade-up">
            <div class="column large-full">
                <p class="contact-email">
                    <a href="mailto:thejasveer13@gmail.com">thejasveer13@gmail.com</a>
                </p>

                <p class="section-desc">
                I'm happy to connect, listen and help. Let's work together and build
                something awesome. Let's turn your idea to an even greater product.
                <a href="mailto:thejasveer13@gmail.com">Email Me</a>.
                </p>
            </div>
        </div>

        <div class="row contact-infos" data-aos="fade-up" data-aos-anchor=".contact-main">

            <div class="column large-5 medium-full contact-phone">
                <h4>Call Me</h4>
                <a href="tel:+14312933578">+1 431-293-3578</a>
            </div>

            <div class="column large-7 medium-full contact-social">
                <h4>Social</h4>
                <ul>
                    <li><a href="https://www.linkedin.com/in/jasveer-singh-7222b51b0/" title="Linkedin">Linkedin</a></li>
                  
                </ul>
            </div>

        </div> <!-- end contact-infos -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
                        

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"></a>
            </div>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    

</div>

@endsection