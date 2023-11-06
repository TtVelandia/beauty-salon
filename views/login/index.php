<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cortes y estilos La Negra</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

        <link href="assets/css/main.css" rel="stylesheet">
    </head>
    
    <body>

        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12 col-lg-12 p-0">

                    <section class="login-section section-padding" id="login-section">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-12 mx-auto">
                                    <form action="?controller=login&action=signIn" method="POST" class="custom-form booking-form" id="bb-booking-form" role="form">
                                        <div class="text-center mb-5">
                                            <h2 class="mb-1">Hola...</h2>
                                        </div>

                                        <div class="booking-form-body">
                                            <div class="row">

                                                <div class="col-lg-12 col-12">
                                                    <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Escriba su usuario..." required>
                                                </div>

                                                <div class="col-lg-12 col-12">
                                                    <input type="password" name="password" id="password" class="form-control" placeholder="Escriba su contraseña..." required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-12 mx-auto">
                                                    <button type="submit" class="form-control me-2 mb-2">Acceder!</button>
                                                </div>
                                            </div>  
                                            
                                            <div class="row">
                                                <div class="col-lg-6 col-12 mx-auto">
                                                    <a class="form-control btn custom-btn custom-border-btn" href="?controller=home&action=index">Ir al nicio</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>    
                    </section>
                </div>
            </div>
        </div>
        <!-- JAVASCRIPT FILES -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/click-scroll.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>