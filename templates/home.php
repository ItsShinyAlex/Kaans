<?php
    /* Template Name:  home*/ 
echo "<section id ='shiny-template'>";
    get_header();
?>




<section id="slider-home" >
    <?php putRevSlider("home1", "home.php"); ?>
</section>

<section class="template-section" id="bodyb">
  <div class="container">
       <div class="relative-top">
            <div class="fcentered">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="BodyBalance Centro de nutrición y Metabolismo integral">
            </div>
            <div class="flex">
                <div class="col">
                   <div class="fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/bigben.png" alt="pera, naranja, toronja, manzana combianadas">
                   </div>
                   
                </div>
                
                <div class="col col-txt">
                    <h1>
                         Cursos de inglés enfocados a desarrollar habilidades que favorezcan al entorno laboral, profesional y emprendedor
                    </h1>
                    <p>
                        <!--Somos un equipo de profesionistas con experiencia en la enseñanza y aprendizaje enfocados a desarrollar cursos, brindar capacitación y proveer servicios profesionales a tí, nuestro cliente. -->
                        Somos un equipo de expertos en la enseñanza enfocado a fortalecer las habilidades clave en cualquiera de nuestros cursos

                    </p>
                    <a href="#contacto" class="btn-brown">¡Saber más!</a>
                </div>
            </div>
       </div>
   
  </div>
</section>

<section class="template-section" id="consultas">
    <div class="container">
        <div class="flex">
            <div class="col col-txt">
                <h2 class="white">Nuestra Misión
                </h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/w-bar.png" alt="----------">
                <p class="white">
                    Ayudarte a alcanzar tus metas profesionales y personales a través de nuestros cursos.

                </p>
               <!-- <p class="white"><b>¡Te acompañaremos hasta alcanzar la meta deseada!</b></p>-->
                 <a href="#contacto" class="btn-brown">¡Saber más!</a>
            </div>
            <div class="col">
                <div class="relative-top fcentered">
                    <img id="expand" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/expand.png" alt="Misión">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="template-section" id="servicios">
    <div class="container">
       <div class="center">
           <h2>NUESTROS CURSOS</h2>
       </div>
        <div class="flex">
           <div class="fcentered">
                   
                    <div class="col center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/speak.png" alt="hablar">
                        <div class="fix-h">
                            <div class="txt">

                                 <p>Inglés comunicativo</p>
                        


                            </div>
                        </div>
                        
                        <!--<a href="#contacto" class="btn-brown">¡Saber más!</a>-->
                        
                       
                    </div>


                    <div class="col center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/portfolio.png" alt="Corporativo">
                        
                          <div class="fix-h">
                        
                            <div class="txt">
                                <p class="">Inglés para el ámbito corporativo</p>
                         


                            </div>
                        
                         </div>
                    <!--<a href="#contacto" class="btn-brown">¡Saber más!</a>-->
                           
                    </div>


                    <div class="col center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/degree.png" alt="Preparación para certificaciones">
                        
                        
                        <div class="fix-h">
                            
                            <div class="txt">
                                <p class="">Preparación para TOEIC® & TOEFL®</p>
                    
                                
                            
                            </div>
                            
                        
                            
                        </div>
                        
                        <!--<a href="#contacto" class="btn-brown">¡Saber más!</a>-->
                        
                        
                    </div>
            </div>
            
        </div>
    </div>
</section>








<?php 
    include("shiny-footer.php");
    get_footer();
?>

