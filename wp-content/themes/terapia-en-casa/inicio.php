<?php /* Template Name: Página de inicio */ ?>

<?php get_header(); ?>

<!-- ─────────────────── -->
<!--     INFORMACIÓN     -->
<!-- ─────────────────── -->

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<section>

    <h2 class="titulo-seccion">Quiénes somos</h2>
    <hr>

    <p>
        Terapia en casa es un centro de psicología online y nace de una realidad: hay cientos de personas como tú a las que les gustaría recibir terapia psicológica pero no saben dónde acudir. Otras no se sienten cómodas asistiendo a una consulta que les resulte poco cómoda o impersonal, o simplemente no tienen a un profesional cercano o de habla hispana en su ciudad. Nuestra vocación es ayudar a la gente como tú y por eso te queremos facilitar la posibilidad de disfrutar de todos los beneficios de la psicoterapia con la comodidad que implica hacerlo desde tu casa y a un precio asequible.
    </p>

    <div class="video">
        <div class="play">
            <div class="flecha"></div>
        </div>
    </div>

    <!-- <iframe src="https://www.youtube.com/embed/d6Lp48o64mo" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

    <p>
        En Terapia en casa ofrecemos psicología online con un trato personal, cercano y honesto; preocupándonos en todo momento por tus emociones, teniendo en cuenta que lo más importante es ayudarte a entender lo que te ocurre y darte las herramientas para sentirte mejor, pudiendo disfrutar de todos los beneficios de la psicoterapia desde tu hogar y a un precio asequible.
    </p>

</section>

<!-- ─────────────── -->
<!--     CALLOUT     -->
<!-- ─────────────── -->

<aside class="callout bg-callout-1">
    <span class="texto">
        <span class="texto tilde">Atencion</span> online a toda<br>la comunidad hispanohablante
    </span>
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
    <span class="texto">
        La primera <span class="texto tilde">sesion</span><br>de terapia online es gratuita
    </span>
</aside>

<!-- ─────────────────── -->
<!--     INFORMACIÓN     -->
<!-- ─────────────────── -->

<section>

    <h2 class="titulo-seccion">Nuestro método</h2>

    <p class="margin-bottom-35">
        Las ventajas que proporciona la terapia online son ahorro de tiempo y dinero, trato personal, cercano y honesto, todo sin barreras geográficas, desde la comodidad e intimidad de tu casa. ¿Cómo lo hacemos? Es muy sencillo. Nuestras sesiones de psicología online se realizan a través de una videoconferencia vía Skype u otro medio digital y seguro que nos quieras proponer. Solamente necesitarás tener un ordenador, móvil o tablet que disponga de cámara y conexión a internet. Tras recibir tu solicitud, estudiar tu situación y comprobar que cumples con los requisitos, concertaremos una cita contigo con el miembro de nuestro equipo de psicólogos que más se adapte a tus necesidades.
    </p>

    <a href="#" class="boton">Ampliar información sobre psicoterapia online</a>

</section>

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

<!-- ─────────────────── -->
<!--     TESTIMONIOS     -->
<!-- ─────────────────── -->

<?php

    $items = get_posts(

        array(
            'post_per_page' => -1,
            'post_type' => 'testimonios',
            'category_name' => $type
        )
    );

    $catObj = get_category_by_slug( $type );
    $parent = get_the_category_by_ID( $catObj->category_parent );
?>

<?php if ( $items ): ?>

<aside class="testimonios">

    <div class="carrusel owl-carousel owl-theme owl-height">
        <?php foreach ( $items as $item ) : ?>
        <div class="item">

            <?php
                
            $campos = get_fields( $item->ID );

            setup_postdata( $item );
            echo $campos["testimonio"];
            wp_reset_postdata();

            ?>

        </div>
        <?php endforeach; ?>
    </div>

    <div class="flechas">
        <i class="flecha flecha-derecha fa fa-angle-right"></i>
        <i class="flecha flecha-izquierda fa fa-angle-left"></i>
    </div>
</aside>

<?php endif; ?>

<!-- ──────────────── -->
<!--     CONTACTO     -->
<!-- ──────────────── -->

<section id="contacto">

    <!-- Título de la sección -->
    <h2 class="titulo-seccion">Contacto</h2>

    <!-- Formulario de contacto -->
    <?php echo do_shortcode( '[contact-form-7 id="84" title="Formulario de contacto"]' ); ?>

    <!-- Enlaces a RRSS -->
    <?php dynamic_sidebar( 'pie-de-pagina' ); ?>

</section>

<?php get_footer(); ?>