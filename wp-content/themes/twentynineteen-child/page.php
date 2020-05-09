<?php /* Template Name: Página personalizada */ ?>

<!-- ────────────── -->
<!--     HEADER     -->
<!-- ────────────── -->

<?php get_header(); ?>

<!-- ────────────── -->
<!--     NAVBAR     -->
<!-- ────────────── -->

<?php

$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ 'menu-1' ] );
$menuItems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

// echo "<pre>";
// print_r( $menuItems );
// echo "</pre>";

?>

<div class="contenedor">

    <!-- ─────────────── -->
    <!--     PORTADA     -->
    <!-- ─────────────── -->

    <header class="portada">

        <!-- Menú de navegación -->
        <nav id="menu">
            <ul class="items">
                <?php foreach ( $menuItems as &$menuItem ) { echo "<li class='item'><a class='enlace' href='" . $menuItem->url . "'>" . $menuItem->title . "</a></li>"; } ?>
            </ul>
        </nav>
        
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>-child/img/logo.png">

        <h1 class="titulo">Terapia en casa</h1>

        <div class="nubes">
            <img class="nube" src="<?php echo get_template_directory_uri(); ?>-child/img/nube1.png">
            <img class="nube" src="<?php echo get_template_directory_uri(); ?>-child/img/nube2.png">
            <img class="nube" src="<?php echo get_template_directory_uri(); ?>-child/img/nube3.png">
            <img class="nube" src="<?php echo get_template_directory_uri(); ?>-child/img/nube4.png">
            <img class="nube" src="<?php echo get_template_directory_uri(); ?>-child/img/nube5.png">
        </div>
    </header>

    <!-- ─────────────────── -->
    <!--     INFORMACIÓN     -->
    <!-- ─────────────────── -->

    <section>

        <h2 class="titulo-seccion">Quiénes somos</h2>
        <hr>

        <p class="margin-bottom-35">
            Terapia en casa es un centro de psicología online y nace de una realidad: hay cientos de personas como tú a las que les gustaría recibir terapia psicológica pero no saben dónde acudir. Otras no se sienten cómodas asistiendo a una consulta que les resulte poco cómoda o impersonal, o simplemente no tienen a un profesional cercano o de habla hispana en su ciudad. Nuestra vocación es ayudar a la gente como tú y por eso te queremos facilitar la posibilidad de disfrutar de todos los beneficios de la psicoterapia con la comodidad que implica hacerlo desde tu casa y a un precio asequible.
        </p>

        <p>
            En Terapia en casa ofrecemos psicología online con un trato personal, cercano y honesto; preocupándonos en todo momento por tus emociones, teniendo en cuenta que lo más importante es ayudarte a entender lo que te ocurre y darte las herramientas para sentirte mejor, pudiendo disfrutar de todos los beneficios de la psicoterapia desde tu hogar y a un precio asequible.
        </p>

    </section>

    <!-- ─────────────── -->
    <!--     CALLOUT     -->
    <!-- ─────────────── -->

    <aside class="callout bg-callout-1">
        <span class="texto"><span class="texto tilde">Atencion</span> online a toda
la comunidad hispanohablante</span>
    </aside>

    <!-- ─────────────────── -->
    <!--     INFORMACIÓN     -->
    <!-- ─────────────────── -->

    <section>

        <h2 class="titulo-seccion">Qué abarcamos</h2>

        <p class="margin-bottom-35">
            En Terapia en casa trabajamos basándonos en la orientación cognitivo-conductal. En nuestras sesiones de psicología online tratamos problemas de miedo, ansiedad, depresión, hipocondría, autoestima, autorrealización personal, etc. Además, podemos abordar otros problemas más profundos como trastornos de conducta, problemas de agresividad o de autocontrol, adicciones y dificultades de relación. También te brindamos la oportunidad de poder realizar sesiones de psicología online para más de una persona y tratar problemas de pareja y problemas familiares al mismo precio, sin ningún tipo de incremento.
        </p>

        <a href="#" class="boton">Ampliar información sobre estos y otros servicios</a>

    </section>

    <!-- ─────────────── -->
    <!--     CALLOUT     -->
    <!-- ─────────────── -->

    <aside class="callout bg-callout-2">
        <span class="texto">La primera <span class="texto tilde">sesion</span>
de terapia online es gratuita</span>
    </aside>

    <!-- ─────────────────── -->
    <!--     INFORMACIÓN     -->
    <!-- ─────────────────── -->

    <section>

        <h2 class="titulo-seccion">Ventajas de la terapia online</h2>

        <p class="">
            Trato personal, cercano y honesto. La primera sesión es GRATIS. Ahorro de tiempo y dinero. Sin barreras geográficas, desde la comodidad e intimidad de tu casa. 
        </p>

        <h2 class="titulo-seccion">¿Cómo lo hacemos?</h2>

        <p class="margin-bottom-35">
            Es muy sencillo. Nuestras sesiones de psicología online se realizan a través de una videoconferencia vía Skype u otro medio digital y seguro que nos quieras proponer. Solamente necesitarás tener un ordenador, móvil o tablet que disponga de cámara y conexión a internet. Tras recibir tu solicitud, estudiar tu situación y comprobar que cumples con los requisitos, concertaremos una cita contigo con el miembro de nuestro equipo de psicólogos que más se adapte a tus necesidades.
        </p>

        <a href="#" class="boton">Ampliar información sobre psicoterapia online</a>

    </section>

    <!-- ─────────────── -->
    <!--     CALLOUT     -->
    <!-- ─────────────── -->

    <aside class="callout bg-callout-3">
        <span class="texto"><span class="texto tilde">Atencion</span> online a toda
la comunidad hispanohablante</span>
    </aside>

    <!-- ─────────────────── -->
    <!--     INFORMACIÓN     -->
    <!-- ─────────────────── -->

    <section>

        <h2 class="titulo-seccion">Pasos a seguir</h2>

        <p class="margin-bottom-35">
            Contacta con nosotros sin compromiso y dinos en qué te podemos ayudarte. Te orientaremos en la situación en la que te encuentres y concertaremos una primera cita gratuita. El psicólogo asignado acordará contigo una cita para tu sesión de psicoterapia online. Puedes elegir al profesional que tú quieras si tienes alguna preferencia personal. Este valorará tu situación y en caso de ser necesaria la continuación del proceso terapéutico, te explicará las distintas formas de pago y los tiempos para realizarlos. El día y hora señalados nos conectaremos contigo de forma puntual y procederemos a realizar tu terapia psicológica.
        </p>

        <a href="#" class="boton">Recuerda que la primera sesión es gratuita</a>

    </section>

</div>

<!-- ────────────── -->
<!--     FOOTER     -->
<!-- ────────────── -->

<?php // get_footer(); ?>