<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
         <!--slide-->
         <link rel="stylesheet" type="text/css" href="../revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="../revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="../revolution/css/navigation.css">

        <!-- LOAD JQUERY LIBRARY -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
        
        <!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="../revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="../revolution/js/jquery.themepunch.revolution.min.js"></script>
        
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
		<script type="text/javascript" src="../revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="../revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="../revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="../revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    </head>
    <body>
       <?php include ('../includes/navbar.php'); ?>

       <!--slide-->
       <div class="rev_slider_wrapper">
 
            <!-- the ID here will be used in the JavaScript below to initialize the slider -->
            <div id="rev_slider_1" class="rev_slider" data-version="5.4.5" style="display:none">

                <!-- BEGIN SLIDES LIST -->
                <ul>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">

                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="../images/image5.jpg" alt="Sky" class="rev-slidebg">

                    </li>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">

                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="../images/image3.jpg" alt="Ocean" class="rev-slidebg">

                    </li>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">

                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="../images/image4.jpg" alt="Ocean" class="rev-slidebg">

                    </li>

                </ul><!-- END SLIDES LIST -->

            </div><!-- END SLIDER CONTAINER -->
        </div>

       <?php include ('../includes/footer.php'); ?>


                <!-- Slider's main "init" script -->
                <script type="text/javascript">
            
            /* https://learn.jquery.com/using-jquery-core/document-ready/ */
            jQuery(document).ready(function() {

                /* initialize the slider based on the Slider's ID attribute from the wrapper above */
                jQuery('#rev_slider_1').show().revolution({

                    /* options are 'auto', 'fullwidth' or 'fullscreen' */
                    sliderLayout: 'auto',

                    /* basic navigation arrows and bullets */
                    navigation: {

                        arrows: {
                            enable: true,
                            style: "hesperiden",
                            hide_onleave: false
                        },

                        bullets: {
                            enable: true,
                            style: "hesperiden",
                            hide_onleave: false,
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20,
                            space: 5

                        }
                    }
                });
            });

            </script>

            <!-- ***************** -->
            <!-- END SLIDER MARKUP -->
            <!-- ***************** -->
    </body>
</html>