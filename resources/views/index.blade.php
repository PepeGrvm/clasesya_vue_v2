<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="ClasesYa - Plataforma para clases en línea" />
    <meta name="author" content="" />
    <title>ClasesYa</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="index.css" rel="stylesheet" />
</head>

<body id="page-top">
    <div id="app">
        <!-- Aquí se renderizará tu aplicación Vue -->
    </div>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Conéctate con el aprendizaje.</h1>
                        <p class="lead fw-normal text-muted mb-5">Impulsa tus habilidades con clases en línea de expertos. Únete a ClasesYa y comienza a aprender hoy mismo.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source src="img/demo-screen.mp4" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">"ClasesYa ha transformado la manera en que aprendo. La flexibilidad y calidad de los cursos es inigualable."</div>
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Acceso Multiplataforma</h3>
                                    <p class="text-muted mb-0">Accede a tus clases desde cualquier dispositivo, ya sea tu teléfono, tableta o computadora.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Clases en Vivo y Grabadas</h3>
                                    <p class="text-muted mb-0">Participa en clases en vivo o revisa las grabaciones cuando te convenga.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Acceso Gratuito</h3>
                                    <p class="text-muted mb-0">La mayoría de nuestros cursos son gratuitos, permitiéndote aprender sin barreras.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Certificación de Cursos</h3>
                                    <p class="text-muted mb-0">Obtén certificados al completar tus cursos para destacar tus nuevas habilidades.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source src="img/demo-screen.mp4" type="video/mp4" />                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="call-to-action text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h2 class="display-4 text-white mb-4">Empieza a aprender hoy mismo.</h2>
                        <p class="lead text-white-50 mb-4">Únete a ClasesYa y accede a una amplia gama de cursos impartidos por expertos. ¡No esperes más para mejorar tus habilidades!</p>
                        <a class="btn btn-outline-light btn-lg px-4" href="#contact">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section id="contact">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="text-center text-lg-start">
                        <h2 class="display-4">¿Tienes preguntas?</h2>
                        <p class="lead fw-normal text-muted mb-5">Estamos aquí para ayudarte. Si tienes alguna duda o necesitas más información sobre nuestros cursos, no dudes en contactarnos.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="name">Nombre</label>
                                <input class="form-control" id="name" type="text" placeholder="Tu nombre" required />
                                <div class="invalid-feedback">Nombre es requerido.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="email">Correo electrónico</label>
                                <input class="form-control" id="email" type="email" placeholder="Tu correo electrónico" required />
                                <div class="invalid-feedback">Correo electrónico es requerido.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="message">Mensaje</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Tu mensaje" required></textarea>
                            <div class="invalid-feedback">Mensaje es requerido.</div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h3 class="text-dark">ClasesYa</h3>
                    <p class="text-muted">Tu plataforma para aprender de manera flexible y efectiva. Únete a nuestra comunidad y descubre una nueva forma de aprender.</p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h3 class="text-dark">Enlaces importantes</h3>
                    <ul class="list-unstyled">
                        <li><a class="text-muted" href="#features">Características</a></li>
                        <li><a class="text-muted" href="#contact">Contacto</a></li>
                        <li><a class="text-muted" href="#">Sobre nosotros</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h3 class="text-dark">Contacto</h3>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt me-2"></i>Dirección: Calle Ejemplo 123, Ciudad</li>
                        <li><i class="bi bi-envelope me-2"></i>Email: contacto@clasesya.com</li>
                        <li><i class="bi bi-phone me-2"></i>Teléfono: (123) 456-7890</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <!-- Core theme JS-->
    <script src="index.js"></script>
    <script src="{{ mix('js/app.js') }}"></script> <!-- Incluye JS generado por Laravel Mix -->

</body>

</html>
