<?php 
//template-name: Page Contacto
get_header();?>
<div id="stoy" data-url="contacto"></div>
<?php if (ICL_LANGUAGE_CODE == 'es') { ?>
<?php portada("contacto"); ?>
<?php } else {?>
<?php portada("contacto-en"); ?>
<?php }?>
<?php wp_reset_query("");?>
<?php the_post("");?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <section id="nosotros">
                <div class="title">
                    <h1><?php the_field("titulo1"); ?></h1>
                </div>
            </section>
        <?php 

            $location = get_field('mapa');
            
            if( !empty($location) ):
            ?>
            <div class="acf-map">
            	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
            <?php endif; ?>
            <section id="nosotros">
                <div class="title">
                    <p class="text-dudas" ><?php the_field("titulo2"); ?></p>
                </div>
            </section>
            <section class="form">
                <form action="" method="POST">
                <div class="col-xs-12 col-sm-4">
                    <?php if (ICL_LANGUAGE_CODE == 'es') { ?>  
                    <label for="">Nombre:</label>
                    <?php }else{?>
                    <label for="">Name:</label>
                    <?php } ?>
                    <br/>
                    <input type="text" name="name" class="texto" required/>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <?php if (ICL_LANGUAGE_CODE == 'es') { ?>  
                    <label for="">Apellido:</label>
                    <?php }else{?>
                    <label for="">Last name:</label>
                    <?php } ?>
                    <br/>
                    <input type="text" name="apellido" class="texto" required/>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <label for="">Email:</label>
                    <br/>
                    <input type="email" name="email" class="texto" required/>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <?php if (ICL_LANGUAGE_CODE == 'es') { ?>  
                    <label for="">Teléfono:</label>
                    <?php } else {?>
                    <label for="">Phone:</label>
                    <?php } ?>
                    <br/>
                    <input type="text" name="phone" class="texto" required/>
                </div>
                <div class="col-xs-12 col-sm-4">
                <?php if (ICL_LANGUAGE_CODE == 'es') { ?>  
                    <label for="">País:</label>
                <?php } else {?>    
                    <label for="">State:</label>
                <?php } ?>
                    <br/>
                    <input type="text" name="phone" class="texto" required/>
                </div>
                <div class="col-xs-12 col-sm-4">
            <?php if (ICL_LANGUAGE_CODE == 'es') { ?>        
                    <label for="">Mensaje:</label>
            <?php } else { ?>
            <label for="">Message:</label>
            <?php } ?>
                    <br/>
                    <input type="text" name="mensaje" class="texto" required/>
                   
                </div>
                <div class="col-xs-12">
                     <input type="submit" name="enviar" class="btn btn-succes pull-right"/>
                </div>
                </form>
            </section>
            </div>
        <div class="col-xs-12 col-sm-offset-1 col-sm-3">
            <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
            <h2 class="tit-ct"> Direccion</h2>
            <?php } else { ?>
            <h2 class="tit-ct">Address</h2>
            <?php } ?>
            <p class="txt-ct"><?php the_field("direccion");?></p>
        </div>
        <div class="col-xs-12 col-sm-3">
            <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
            <h2 class="tit-ct"> Telèfono</h2>
            <?php } else { ?>
            <h2 class="tit-ct">Phone</h2>
            <?php } ?>
            <p class="txt-ct"><?php the_field("telefono1");?><br/>
            <?php the_field("telefono2");?></p>
        </div>
        <div class="col-xs-12 col-sm-3">
            <h2 class="tit-ct"> Email</h2>
            <p class="txt-ct"><?php the_field("email");?><br/>
            <?php the_field("email2");?></p>
            <?php $emailto = get_field("email");?>
        </div>
    </div>
</div>
<?php get_footer();?>
 <?php
                  if (isset($_POST['email'])) {
                //echo"<h1>Pasoo uno !</h1>";
                        if (!empty($_POST['email']) && !empty($_POST['name'])) {
                            require_once ABSPATH . WPINC . '/class-phpmailer.php';
                            $mail = new PHPMailer();

                            $mail->AddAddress($mail);
                            $mail->From = $mail;
                            $mail->FromName = 'Solicitud de inscripcion G&R Maachinery';
                            $contenido = '<div style="font-color: #000;">';
                            $contenido .= '<h2>Solicitud de Contacto.</h2>';
                            $contenido .= '<p>Enviado el ' . date("d/m/Y") . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '<p><strong>Nombre: </strong>' . $_POST['name'] . ' ' . $_POST['apellido'] .'</p>';
                            $contenido .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
                            $contenido .= '<p><strong>Telefono: </strong>' . $_POST['phone'] . '</p>';
                            $contenido .= '<p><strong>Mensaje: </strong>' . $_POST['mensaje'] . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '</div>';
                            $mail->Subject = $asunto;
                            $mail->Body = $contenido;
                            $mail->IsHTML();

                //      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                //      $mail = wp_mail($correo, $asunto, $contenido, $headers);

                        if ($mail->send()) {
                            echo $mensaje = '<script type="text/javascript">alert("Su mensaje ha sido enviado con éxito, Gracias por Inscribirte.");</script>';

                        } else {
                            echo $mensaje = '<script type="text/javascript">alert("Error al Enviar.");</script>';

                        }
                    } else {
                        echo $mensaje = '<script type="text/javascript">alert("Faltan campos por llenar.");</script>';

                    }
                    }
        ?>