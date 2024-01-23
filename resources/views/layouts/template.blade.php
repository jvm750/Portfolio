<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portfolio - Vazquez Mendez</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <style>
        .card {
        width: 300px;
        height: 254px;
        background: #324759;
        transition: all 0.4s;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 5px  rgba(0, 0, 0, 0.705);
        font-size: 20px;
        font-weight: 900;
        TEXT-align:center;
        padding:10px
        }

        .card:hover {
        border-radius: 15px;
        cursor: pointer;
        transform: scale(1.2);
        box-shadow: 0px 0px 10px 5px  rgba(0, 0, 0, 0.705);
        background: #324759;
        color:#1FBF92;
        }

        .first-content {
        height: 100%;
        width: 100%;
        transition: all 0.4s;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 1;
        border-radius: 15px;
        }

        .card:hover .first-content {
        height: 0px;
        opacity: 0;
        }

        .second-content {
        height: 0%;
        width: 100%;
        opacity: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 15px;
        transition: all 0.4s;
        font-size: 0px;
        transform: rotate(90deg) scale(-1);
        }

        .card:hover .second-content {
        opacity: 1;
        height: 100%;
        font-size: 1.8rem;
        transform: rotate(0deg);
        }
        #mainNav a {
            color: #7F5AF0;
            transition: color 0.3s ease; /* Agregamos una transición suave de 0.3 segundos */
        }

        #mainNav a:hover {
            color: #7F5AF0; /* Color que deseas cuando el mouse está sobre el enlace */
        }

    </style>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav" style="background-color:#242629;">
            <div class="container">
                <a class="navbar-brand" href="#page-top" style="color:#7F5AF0;">Portfolio</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded transition duration-300 hover:text-indigo-500" href="#portfolio">Projects</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded transition duration-300 hover:text-indigo-500" href="#about">Technologies</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded transition duration-300 hover:text-indigo-500" href="#about">Courses</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded transition duration-300 hover:text-indigo-500" href="#contact">About Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style="background-color:#16161A;">
            <div class="container d-flex align-items-center flex-column" >
                
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" style="border-radius: 50%; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 2px solid #fff; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.2)'" onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)'" class="masthead-avatar mb-5" src="https://i.ibb.co/QYkZvqV/TECHNOLOGIES.png" alt="..." />
                <!-- Masthead Heading-->
                <!--<div id="particles-js" style="width:100%; height:100vh; background-color:#1bbc9d; margin:0; padding:0;"></div> -->
                <h1 class="masthead-heading text-uppercase mb-0" style="color:#7F5AF0;">José Manuel Vazquez Mendez</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-laptop-code fa-2xl"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Computer Systems Engineering Student <br> Programming technician <br>FrontEnd Developer</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio" style="background-color:#242629;">
            <div class="container">
                
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase  mb-0" style="color:WHITE;">PROJECTS</h2>
                <!-- Icon Divider-->
                <div class="divider-custom" >
                    <h1>__________________</h1>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                @yield('content')
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section  text-white mb-0" id="about" style="background-color:#16161A;">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">TECHNOLOGIES</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                <h1></h1>
                </div>
                <!-- CONTENIDO-->
                
                <!-- About Section Button-->
                <div class="text-center mt-4">
                <i class="fa-brands fa-java fa-2xl" style="margin: 20px;"></i>
                <i class="fa-brands fa-python fa-2xl" style="margin: 20px;"></i>
                <i class="fa-brands fa-html5 fa-2xl" style="margin: 20px;"></i>
                <i class="fa-brands fa-css3-alt fa-2xl" style="margin: 20px;"></i>
                <i class="fa-brands fa-js fa-2xl" style="margin: 20px;"></i>
                <i class="fa-brands fa-php fa-2xl" style="margin: 20px;"></i>
                <i class="fa-solid fa-database fa-2xl" style="margin: 20px;"></i>
                </div>
            </div>
        </section>



        <section class="page-section" id="contact" style="background-color:#242629;">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-white text-uppercase text-secondary mb-0">COMPLEMENTARY COURSES</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <P class="masthead-subheading font-weight-light mb-0" style="text-align: justify; margin-bottom: 1em;">I am a student within the career of
                                            Computerstystems engineer,
                                            with the conviction of overcoming
                                            personal, organized, committed and
                                            multifunctional.
                                            In terms of academic training, I completed my higher education at the Tepic Technological Institute, during the period between 2020 and 2025. Before that, in the period from 2017 to 2020, I attended the Industrial and Services Technological Studies Centers No. 100, where I completed my high school studies. My basic education, which includes primary and secondary, was carried out at the Fernando Montaño Primary School and the República de Chile Secondary School, from 2009 to 2017. In addition to a complementary course on web programming at CECATI48. </P>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section text-white" id="contact" style="background-color:#16161A;">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-white text-uppercase text-secondary mb-0">ABOUT Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <P class="masthead-subheading font-weight-light mb-0" style="text-align: justify; margin-bottom: 1em;">I am a student within the career of
Computerstystems engineer,
with the conviction of overcoming
personal, organized, committed and
multifunctional.
In terms of academic training, I completed my higher education at the Tepic Technological Institute, during the period between 2020 and 2025. Before that, in the period from 2017 to 2020, I attended the Industrial and Services Technological Studies Centers No. 100, where I completed my high school studies. My basic education, which includes primary and secondary, was carried out at the Fernando Montaño Primary School and the República de Chile Secondary School, from 2009 to 2017. In addition to a complementary course on web programming at CECATI48. </P>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Tepic, Nayarit, México
                            <br />
                            
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="http://www.linkedin.com/in/jvm750"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/jvm750/Portfolio"><i class="fa-brands fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://discord.gg/FB9CXdxG"><i class="fa-brands fa-discord"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">ALL RIGHTS RESERVED</h4>
                        <p class="lead mb-0">
                            
                        2024 ITTepic. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Portfolio - Vazquez Mendez</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="js/particle.sim.js" ></script>
        <script src="js/particlesjs-config.json" ></script>
    </body>
</html>
