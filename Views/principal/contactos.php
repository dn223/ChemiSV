<?php include "Views/template/header.php"; ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?php echo BASE_URL; ?>public/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contáctenos</h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo BASE_URL; ?>">Inicio</a>
                        <span>Contáctenos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone"></span>
                    <h4>Teléfono</h4>
                    <p><?php echo $data['negocio']['telefono']; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_pin_alt"></span>
                    <h4>Dirección</h4>
                    <p><?php echo $data['negocio']['direccion']; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"></span>
                    <h4>Abiertos desde</h4>
                    <p>8:00 am - 18:00 pm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"></span>
                    <h4>Email</h4>
                    <p><?php echo $data['negocio']['correo']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2304.8510457380667!2d-89.21863572999158!3d13.701365050509107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sUniversidad%20Francisco%20Gavidia!5e0!3m2!1ses!2ssv!4v1710918465857!5m2!1ses!2ssv" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h4>El Salvador</h4>
            <ul>
                <li>Teléfono: <?php echo $data['negocio']['telefono']; ?></li>
                <li>Direccion: <?php echo $data['negocio']['direccion']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Map End -->

<!-- Contact Form Begin -->
<div class="contact-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__title">
                    <h2>Deja un mensaje</h2>
                </div>
            </div>
        </div>
        <form action="#">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Tu nombre">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Tu Email">
                </div>
                <div class="col-lg-12 text-center">
                    <textarea placeholder="Tu mensaje"></textarea>
                    <button type="submit" class="site-btn">Enviar mensaje</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact Form End -->


<?php include "Views/template/footer.php"; ?>

</body>

</html>