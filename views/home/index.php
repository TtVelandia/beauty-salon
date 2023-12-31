<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Beauty Salon</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

        <link href="assets/sweetalert/sweetalert2.min.css" rel="stylesheet">

        <link href="assets/css/main.css" rel="stylesheet"> 

        <script src="assets/sweetalert/sweetalert2.min.js"></script>

        <!-- JAVASCRIPT-->  
        <script type="text/javascript">
            function showSuccessAlert() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Tu reserva esta lista!",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        </script> 
    </head>
    
    <body>
        <?php if(isset($showSuccess) && $showSuccess){ ?> <script type="text/javascript">showSuccessAlert();</script> <?php } ?>

        <div class="container-fluid">
            <div class="row">

                <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                    <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/log3.png" class="logo-image img-fluid">
                        </a>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Nosotros</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Servicios</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Precios</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contacto</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="?controller=login&action=index">Inicia sesión</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-8 col-12">
                                        <h1 class="text-white mb-lg-3 mb-4"><strong>Salon de <em>Belleza</em></strong></h1>
                                        <p class="text-black">Consigue el corte de cabello más profesional para ti!</p>
                                        <br>
                                        <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_2">Nosotros</a>

                                        <a class="btn custom-btn smoothscroll mb-2" href="#section_3">Que hacemos...</a>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
                                <img src="assets/images/vintage-chair-barbershop.jpg" class="custom-block-image img-fluid" alt="">

                                <h4><strong class="text-white">¡Apresurate! Hazte un buen corte de cabello.</strong></h4>

                                <a href="#booking-section" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Reserva</a>
                                <!--a href="https://wa.me/3014187374" target="_blank" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Reserva</a-->
                            </div>
                    </section>


                    <section class="about-section section-padding" id="section_2">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12 mx-auto">
                                    <h2 class="mb-4">Los mejores peluqueros</h2>

                                    <div class="border-bottom pb-3 mb-5">
                                        <p>Nuestros profesionales cuentan con más de cinco años de experiencia, brindando un excelente servicio, la satisfacción de nuestros clientes es nuestra prioridad.</p>
                                    </div>
                                </div>

                                <h6 class="mb-5">Conocelos...</h6>

                                <?php foreach ($collaborators as $index => $collaborator) {?>

                                    <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5">
                                        <img src="<?php echo $collaborator->image; ?>" class="custom-block-bg-overlay-image img-fluid" alt="">

                                        <div class="team-info d-flex align-items-center flex-wrap">
                                            <p class="mb-0"><?php echo $collaborator->name; ?></p>

                                            <ul class="social-icon ms-auto">
                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-facebook">
                                                    </a>
                                                </li>

                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-instagram">
                                                    </a>
                                                </li>

                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-whatsapp">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } ?>        

                            </div>
                        </div>
                    </section>

                    <section class="featured-section section-padding">
                        <div class="section-overlay"></div>

                        <div class="container">
                            <div class="row">

                                <div class="col-lg-10 col-12 mx-auto">
                                    <h2 class="mb-3">Consigue un 15% de descuento</h2>

                                    <p>cada segunda semana del mes</p>

                                    <strong>Codigo: LANEGRA</strong>
                                </div>

                            </div>
                        </div>
                    </section>


                    <section class="services-section section-padding" id="section_3">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12">
                                    <h2 class="mb-5">Servicios</h2>
                                </div>

                                <?php foreach ($services as $index => $service) {?>
                                    <div class="col-lg-6 col-12 mb-4">
                                        <div class="services-thumb">
                                            <img src="<?php echo $service->image; ?>" class="services-image img-fluid" alt="">

                                            <div class="services-info d-flex align-items-end">
                                                <h4 class="mb-0"><?php echo $service->name; ?></h4>

                                                <strong class="services-thumb-price"><?php echo asMoneda($service->price); ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </section>

                    <section class="booking-section section-padding" id="booking-section">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-10 col-12 mx-auto">
                                    <form action="?controller=home&action=booking" method="POST" class="custom-form booking-form" id="bb-booking-form" role="form">
                                        <div class="text-center mb-5">
                                            <h2 class="mb-1">Reserva una silla</h2>

                                            <p>Rellene el formulario y nos pondremos en contacto con usted.</p>
                                        </div>

                                        <div class="booking-form-body">
                                            <div class="row">

                                                <div class="col-lg-6 col-12">
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
                                                </div>

                                                <div class="col-lg-6 col-12">
                                                    <input type="tel" class="form-control" id="celphone" name="celphone" placeholder="Celular"  required="">
                                                </div>
                                            
                                                <div class="col-lg-6 col-12">
                                                    <input class="form-control" type="time" id="hour" name="hour" min="09:00:00" max="21:00:00" />
                                                </div>

                                                <div class="col-lg-6 col-12">
                                                    <select class="form-select form-control" name="service" id="service" aria-label="Default select example">
                                                        <option selected="">Que servicio deseas?</option>
                                                        <?php foreach ($services as $index => $service) {?>
                                                            <option value="<?php echo $service->id; ?>"><?php echo $service->name; ?></option>
                                                        <?php } ?>
                                                    </select>

                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <input type="date" name="date" id="date" class="form-control" placeholder="Fecha" required>
                                                </div>

                                                <div class="col-lg-6 col-12">
                                                    <input type="number" min="1" name="quantity" id="quantity" class="form-control" placeholder="Numero de personas" required>
                                                </div>
                                            </div>

                                            <textarea name="comment" rows="3" class="form-control" id="comment" placeholder="Comentario (opcional)"></textarea>

                                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                                <button type="submit" class="form-control">Reservar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>    
                    </section>


                    <section class="price-list-section section-padding" id="section_4">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-8 col-12">
                                    <div class="price-list-thumb-wrap">
                                        <div class="mb-4">
                                            <h2 class="mb-2">Precios</h2>

                                            <strong>Desde <?php echo asMoneda($serviceByMinPrice->price); ?></strong>
                                        </div>

                                        <?php foreach ($services as $index => $service) {?>

                                            <div class="price-list-thumb">
                                                <h6 class="d-flex">
                                                    <?php echo $service->name; ?>
                                                    <span class="price-list-thumb-divider"></span>
                                                    <strong><?php echo asMoneda($service->price); ?></strong>
                                                </h6>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                                    <img src="assets/images/vintage-chair-barbershop.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
                                </div>

                            </div>
                        </div>
                    </section>


                    <section class="contact-section" id="section_5">
                        <div class="section-padding section-bg">
                            <div class="container">
                                <div class="row">   

                                    <div class="col-lg-8 col-12 mx-auto">
                                        <h2 class="text-center">Saludanos</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-padding">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <h5 class="mb-3"><strong>Información </strong> de Contacto </h5>

                                        <p class="text-white d-flex mb-1">
                                            <a href="tel: 120-240-3600" class="site-footer-link">
                                                301-418-7374
                                            </a>
                                        </p>

                                        <p class="text-white d-flex">
                                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                                estiloslanegra@gmail.com
                                            </a>
                                        </p>

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-facebook">
                                                </a>
                                            </li>
                
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-instagram">
                                                </a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-whatsapp">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-5 col-12 contact-block-wrap mt-5 mt-lg-0 pt-4 pt-lg-0 mx-auto">
                                        <div class="contact-block">
                                            <h6 class="mb-0">
                                                <i class="custom-icon bi-shop me-3"></i>

                                                <strong>Abierto todos los días</strong>

                                                <span class="ms-auto">10:00 AM - 8:00 PM</span>
                                            </h6>
                                        </div>
                                    </div>

                                    <!--div class="col-lg-12 col-12 mx-auto mt-5 pt-5">
                                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7702.122299518348!2d13.396786616231472!3d52.531268574169616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85180d9075183%3A0xbba8c62c3dc41a7d!2sBarbabella%20Barbershop!5e1!3m2!1sen!2sth!4v1673886261201!5m2!1sen!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </!--div-->

                                </div>
                            </div>
                        </div>
                    </section>

                    <footer class="site-footer">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12">
                                    <h4 class="site-footer-title mb-4">Nuestra sede</h4>
                                </div>

                                <div class="col-lg-4 col-md-6 col-11">
                                    <div class="site-footer-thumb">
                                        <strong class="mb-1">Cucuta</strong>
                                        <p>Av 5 21-07, Ospina Perez, Cucuta, Colombia</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="site-footer-bottom">
                            <div class="container">
                                <div class="row align-items-center">

                                    <div class="col-lg-8 col-12 mt-4">
                                        <p class="copyright-text mb-0">Copyright © 2023 Cortes y estilos La Negra 
                                        - Diseño: <a href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a></p>
                                    </div>

                                    <div class="col-lg-2 col-md-3 col-3 mt-lg-4 ms-auto">
                                        <a href="#section_1" class="back-top-icon smoothscroll" title="Back Top">
                                            <i class="bi-arrow-up-circle"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <!-- JAVASCRIPT FILES -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/click-scroll.js"></script>
        <script src="assets/js/custom.js"></script>

        <script type="text/javascript">
            var currentDate = new Date();
            var formattedDate = currentDate.toISOString().split("T")[0];
            var formattedTime = currentDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            document.getElementById("date").setAttribute("min", formattedDate);
            document.getElementById('hour').value = formattedTime;
        </script>

        <script type="text/javascript">
            const form = document.getElementById('bb-booking-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                
                const nameField = document.getElementById("name");
                const nameValue = nameField.value;
                const celphoneField = document.getElementById("celphone");
                const celphoneValue = celphoneField.value;
                const hourField = document.getElementById("hour");
                const hourValue = hourField.value;
                const serviceField = document.getElementById("service");
                const serviceValue = serviceField.value;
                const dateField = document.getElementById("date");
                const dateValue = dateField.value;
                const quantityField = document.getElementById("quantity");
                const quantityValue = quantityField.value;

                if (
                    nameValue.trim() !== "" &&
                    celphoneValue.trim() !== "" &&
                    hourValue.trim() !== "" &&
                    serviceValue.trim() !== "" &&
                    dateValue.trim() !== "" &&
                    quantityValue.trim() !== ""
                ) {
                    Swal.fire({
                        title: "<strong>Política de Privacidad</strong>",
                        icon: "info",
                        html: `
                            <p>Esta compañía se compromete a proteger la privacidad de los usuarios de este sitio web. Esta política de privacidad describe cómo se recopila, utiliza y protege la información personal que se recopila.</p>
        
                            <strong>Información recopilada</strong>
                            <p>Recopilamos la siguiente información personal:</p>
                            <ul>
                                <li>Nombre y apellido</li>
                                <li>Numero de telefono de contacto</li>
                            </ul>
                            
                            <strong>Uso de la información</strong>
                            <p>La información personal recopilada se utiliza para:</p>
                            <ul>
                                <li>Enviar información solicitada</li>
                                <li>Mejorar la experiencia del usuario</li>
                                <li>Enviar comunicaciones de marketing</li>
                            </ul>
                            
                            <strong>Divulgación de la información</strong>
                            <p>No vendemos, cedemos ni distribuimos la información personal recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p>
                            
                            <strong>Seguridad</strong>
                            <p>Implementamos medidas de seguridad para proteger la información personal recopilada contra accesos no autorizados o divulgación.</p>
                            
                            <strong>Cambios a la política de privacidad</strong>
                            <p>Esta política de privacidad puede ser modificada en cualquier momento sin previo aviso. La versión más reciente estará disponible en esta página.</p>
                            
                            <strong>Contacto</strong>
                            <p>Si tiene alguna pregunta sobre esta política de privacidad, puede ponerse en contacto con nosotros a través de la siguiente dirección de correo electrónico: estiloslanegra@gmail.com.</p>
                            
                            <p>Última actualización: 19/11/2023</p>
                        `,

                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: `
                            Si, acepto!
                        `,
                        cancelButtonText: `
                            Cancelar
                        `
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                        } else {
                            return;
                        }
                    });
                } 
            });
        </script>
    </body>
</html>