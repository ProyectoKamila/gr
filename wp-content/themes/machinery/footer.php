<?php query_posts(array('post_type'=>'page','pagename'=>'contacto','posts_per_page'=>1)); ?>
     <?php while(have_posts()){ the_post();?>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 sin-padding text-center">
                 <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                <div class="fondo-footer" style="background: url(<?php echo $feat_image;?>  ) top center no-repeat; background-size:cover; sin-padding">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                       <div class="titulo-contacto">
                           <h3>Contacto</h3>
                       </div>
                       <?php if(get_field('contacto-footer')){?>
                       <div class="parrafo-contacto">
                           <p>
                             <?php the_field('contacto-footer');?> 
                           </p>
                       </div>
                       <?php } ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="titulo-menu-footer">
                           <h3>Menu</h3>
                       </div>
                       <div class="menu-footer">
                           <ul>
                               <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                                     <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url(""); ?>">INICIO</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("nosotros");?>">NOSOTROS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("productos"); ?>">PRODUCTOS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("videos"); ?>">VIDEOS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob " href="">NOTICIAS</a>
                                    </li>
                                     <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("contacto"); ?>">CONTACTO</a>
                                    </li>
                                <?php } else {?>
                                         <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url(""); ?>">HOME</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("nosotros");?>">ABOUT US</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("productos"); ?>">PRODUCTS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("videos"); ?>">VIDEOS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob " href="">NEWS</a>
                                    </li>
                                     <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("contacto"); ?>">CONTACT</a>
                                    </li>
                                <?php } ?>
                           </ul>
                       </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 text-center">
                <div class="desarrollado">
                        <div class="info-footer">
                                <div class="redes-footer">
                                        <?php if(get_field('cuenta-twitter')){?>
                                            <a href=" <?php the_field('cuenta-twitter');?> " target="_blank"><i class="fa fa-twitter-square"></i></a>
                                        <?php } ?>
                                        <?php if(get_field('cuenta-facebook')){?>
                                            <a href="<?php the_field('cuenta-facebook');?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                        <?php } ?>
                                        <?php if(get_field('cuenta-instagram')){?>
                                            <a  href="<?php the_field('cuenta-instagram');?>" target="_blank"><i class="face-header fa fa-instagram"></i></a>
                                        <?php } ?>
                                        <?php if(get_field('cuenta-google')){?>
                                            <a  href="<?php the_field('cuenta-google');?>" target="_blank"><i class=" face-header fa fa-google-plus-square"></i></a>
                                        <?php } ?>
                                </div>
                                <p>g&r machinery trading  © Copyright 2015 todos los derechos reservados
                                    <a href="http://proyectokamila.com/" target="_blank">Desarrollado Por Proyecto kamila</a>
                                </p>
                        </div>
                </div>
        </div>
    </div>
    </div>
</footer>
<?php } ?>
<?php
if (isset($_POST['email'])) {
if(!empty($_POST['nombre']) AND !empty($_POST['email'])){

$to ="maikolleon@hotmail.com";
$headers = "Content-Type: text/html; charset=iso-8859-1\n";
$headers .= "From:".$_POST['email']."\r\n";           
$tema="Solicitud de Contacto maikolleon@hotmail.com";
$contenido = '<div style="font-color: #000;">';
                          $contenido .= '<p>Enviado el ' . date("d/m/Y") . '</p>';
                          //$contenido .= '<p>vengo de' . bloginfo('template_url') . '</p>';
                          $contenido .= '<hr />';
                          $contenido .= '<p><strong>Nombre: </strong>' . $_POST['nombre'] . '</p>';
                          $contenido .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
                          $contenido .= '<p><strong>Telefono: </strong>' . $_POST['telefono'] . '</p>';
                           $contenido .= '<p><strong>Pais: </strong>' . $_POST['pais'] . '</p>';
                          $contenido .= '<p><strong>Mensaje: </strong>' . $_POST['mensaje'] . '</p>';
                          $contenido .= '<hr />';
                          $contenido .= '</div>';
@mail($to,$tema,$contenido,$headers);
   //echo "Su mensaje ha sido enviado con éxito, Gracias por Contactarnos.";
echo $mensaje = '<script type="text/javascript">alert("Su mensaje ha sido enviado con éxito, Gracias por Contactarnos.");</script>';
} else {
  //echo "No se puede enviar el formulario, verifica los campos";
  echo $mensaje = '<script type="text/javascript">alert("No se puede enviar el formulario, verifica los campos.");</script>';
}
}
?> 
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/slider/css/anythingslider.css">
    <script src="<?php bloginfo('template_url');?>//slider/js/jquery.anythingslider.js"></script>
   
     <script>
        $(function () {
            $('#slider1').anythingSlider({
    pauseOnHover: false,
    expand: true,
    buildStartStop: false,
    buildArrows: false,  
    autoPlay: true ,
    hashTags: false
                            
            });
    
    
        });
        
           
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
 function mostrardescri() {
            console.log('Mostrar active');
            $('#especificacion').slideUp();
            $('#info').slideUp();
            $('#videos').slideUp();
            $('#descripcion').slideDown();
            $(".act").removeClass("bot-active");
            $(".act1").addClass("bot-active");
        }
 function mostrarespecifi() {
    console.log('Mostrar active');
    $('#info').slideUp();
    $('#descripcion').slideUp();
     $('#videos').slideUp();
    $('#especificacion').slideDown();
    $(".act").removeClass("bot-active");
    $(".act2").addClass("bot-active");
}
function mostrarinfo() {
    console.log('Mostrar active');
    $('#especificacion').slideUp();
    $('#descripcion').slideUp();
     $('#videos').slideUp();
    $('#info').slideDown();
    $(".act").removeClass("bot-active");
    $(".act3").addClass("bot-active");
}
function mostrarvideos() {
    console.log('Mostrar active');
    $('#info').slideUp();
    $('#descripcion').slideUp();
     $('#especificacion').slideUp();
    $('#videos').slideDown();
    $(".act").removeClass("bot-active");
    $(".act4").addClass("bot-active");
}

(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 3,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 3 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>
</body>

</html>