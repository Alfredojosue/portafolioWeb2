<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Web</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="logo">Josue<span> Ram&iacute;rez</span></div>
                <ul class="nav-links">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#experiencia">Experiencia</a></li>
                    <li><a href="#proyectos">Proyectos</a></li>
                </ul>
        </nav>
    </header>
    <main>
        <section id="inicio" class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Josue Ram&iacute;rez</h1>
                    <h2>Ing. sistemas computacionales</h2>
                    <p>Soy ingeniero en sistemas computacionales con especialidad de desarrollo web y moviles.
                        Cuento con gran capacidad aprendizaje, motivaci&oacute;n y entusiasmo por sobrellevar nuevos
                        retos.</p>
                    <div class="social-links">
                        <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                    <a href="#contacto" class="btn">Contactame</a>
                </div>
                <div class="hero-image">
                    <img src="./img/perfil.jpeg" alt="imagen de perfil">
                </div>
            </div>
        </section>
        <!-- Seccion de experiencia -->
        <section id="experiencia" class="experiencia">
            <h2 class="section-title">Experiencia Laboral</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date"> 01 de julio 2025 - 31 diciembre 2025</span>
                        <h3>Soporte tecnico Administrativo</h3>
                        <h4>Secretaria de salud (CAPACITS)</h4>
                        <p>Soporte tecnico a equipos de computo, ademas de generar
                            reportes en formatos de excel proporcionado de
                            un conjunto de datos de la instituci&oacute;n, adem&aacute;s
                            manejo de inventario de farmacia y caputara de informaci&oacute;n
                            en plataformas institucionales.
                        </p>
                        <ul class="skills">
                            <li>Excel</li>
                            <li>Soporte de software</li>
                        </ul>
                    </div>
                </div>
                <!-- Se agregan timelne item, cuantas veces sea necesario para plasmar los trabajos realizados -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date"> 03 de octubre 2024 - 13 de marzo 2025</span>
                        <h3>Ingeniero en infrestructura</h3>
                        <h4>Salud Digna</h4>
                        <p>Manejo de redes, cableado estructurado, ponchado de nodos y peinado del site, configuracion
                            de equipos tecnologicos como switch, administraci&oacute;n de inventarios, requisiciones y
                            destrucciones
                            de equipos tecnologicos, configuracion de impresoras termicas, soporte tecnico a equipos de
                            computo e impresoras, mantenimiento
                            de camaras de seguridad CCTV.
                        </p>
                        <ul class="skills">
                            <li>cableado estructurado</li>
                            <li>soporte tecnico</li>
                            <li>Instalacion de camaras y mantenimiento</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date">agosto 2023 - enero 2024</span>
                        <h3>Desarrollador web Full-stack</h3>
                        <h4>Centro de investigaci&oacute;n en matematicas</h4>
                        <p>Desarrollo web informarmativo y de demostraci&oacute;n
                            del funcionamiento de un sistema de inteligencia artificial
                            con aplicacion al turismo. Utilizando framework como flask empleando modelo vista
                            controlador, asi como
                            lenguajes de programaci&oacute;n en python, html, css, javaScript etc.
                        </p>
                        <ul class="skills">
                            <li>flask</li>
                            <li>python (Lenguaje de prosesamiento natural)</li>
                            <li>html</li>
                            <li>css</li>
                            <li>javaScript</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="proyectos" class="proyects">
            <h2>Proyectos Personales</h2>
            <div class="proyects-container">
                <div class="proyect-card">
                    <div class="proyect-img">
                        <img src="./img/perfil.jpeg" alt="proyecto1">
                    </div>
                    <div class="proyect-info">
                        <h3>Desarrollo Web</h3>
                        <p>Desarrollo web enfocada a la venta de productos navideños</p>
                        <div clas="proyect-tech">
                            <span>html</span>
                            <span>css bootstrap</span>
                            <span>javaScript</span>
                        </div>
                        <div class="proyect-link">
                            <a href="#" target="_blank"><i class="bi bi-link-45deg"></i>Demo</a>
                        </div>
                    </div>
                </div>
                <!-- se plasma cada uno de los proyectos en una card -->
                <div class="proyect-card">
                    <div class="proyect-img">
                        <img src="./img/perfil.jpeg" alt="proyecto1">
                    </div>
                    <div class="proyect-info">
                        <h3>Desarrollo Web</h3>
                        <p>Desarrollo web enfocada a la venta de productos navideños</p>
                        <div clas="proyect-tech">
                            <span>html</span>
                            <span>css bootstrap</span>
                            <span>javaScript</span>
                        </div>
                        <div class="proyect-link">
                            <a href="#" target="_blank"><i class="bi bi-link-45deg"></i>Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer clas="footer-content">
        <p>@copy; 2026 Josue Ram&iacute;rez Todos los derechos reservados</p>
        <div class="social-links">
            <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
            <!-- <a href="" target="_blank"><i class="bi bi-whatsapp"></i></a> -->
            <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>
</body>

</html>