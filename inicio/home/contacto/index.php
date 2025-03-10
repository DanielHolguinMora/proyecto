<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Barra de navegación superior -->
    <nav class="top-nav">
        <div class="brand-logo">
            <img src="img/logo.png" alt="Logo de tu marca">
        </div>
        <ul>
        <li><a href="/inicio/home/index.html">Inicio</a></li>
        <li><a href="catalogo/index.html">Catálogo Digital</a></li>
        <li><a href="contacto/index.php">Contacto</a></li>
        </ul>
    </nav>

    <div class="contact-container">
        <h2>Contacto</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.0438228381595!2d-106.43743248826229!3d31.742004786049606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75be35fd9713f%3A0x51a85a69dba383ad!2sIADA-IIT%201%2C%20C.%20Henry%20Dunant%2C%2032417%20Ju%C3%A1rez%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1716533454812!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i> Dirección: Calle Henry Dunant 32417, Ciudad Juárez, México</p>
            <p><i class="fas fa-envelope"></i> Correo: alumnos@uacj.mx</p>
            <p><i class="fas fa-phone"></i> Teléfono: +52 000 180 211</p>
        </div>

        <div class="container">
            <div class="id-card">
                <div class="profile-pic">
                    <img src="img/yo.jpg" alt="Foto de Perfil">
                </div>
                <div class="details">
                    <h2>Daniel Holguin</h2>
                    <p><strong>Cargo:</strong> Gerente de Ventas</p>
                    <p><strong>Departamento:</strong> Ventas</p>
                    <p><strong>Correo:</strong> al204826@alumnos.uacj.mx</p>
                    <p><strong>Teléfono:</strong> +52 656 532 66 55</p>
                </div>
                <div class="qr-code">
                    <img src="img/qr.png" alt="Código QR">
                </div>
            </div>
        </div>

        <div class="contact-form">
            <h3>¡Envíanos un mensaje!</h3>
            
            <form class="clientes" action="guardar.php" method="POST" id="contact_form">
                <label for="Nombre">Nombre:</label>
                <input type="text" id="Nombre" name="Nombre" maxlength="30" required> <br><br>
                <label for="Email">Correo Electrónico:</label>
                <input type="email" id="Email" name="Email" maxlength="60" required>  <br><br>
                <label for="Telefono">Teléfono:</label>
                <input type="tel" id="Telefono" name="Telefono" maxlength="10" required>  <br><br>
                <label for="Mensaje">Mensaje:</label>
                <textarea id="Mensaje" name="Mensaje" rows="4" maxlength="60" required></textarea>  <br><br>
                <button class="submit" type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column footer-contact">
                <h3>Contacto</h3>
                <p>* Calle: Henry Dunant 32417</p>
                <p>* Teléfono: +52 656 532 66 55</p>
                <p>* Email: al204826@alumnos.uacj.mx</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com"><img src="img/facebook.png" alt="Facebook"></a>
                    <a href="https://www.twitter.com"><img src="img/twitter.png" alt="Twitter"></a>
                    <a href="https://www.instagram.com"><img src="img/instagram.png" alt="Instagram"></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Enlaces</h3>
                <ul>
                    <li><a href="/inicio/home/index.html">Inicio</a></li>
                    <li><a href="/inicio/home/catalogo/index.html">Catalogo Digital</a></li>
                    <li><a href="/inicio/home/contacto/index.php">Contacto</a></li>
                    <li><a href="/inicio/index.html">Cerrar Sesión</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Nuestros Servicios</h3>
                <ul>
                    <li><a href="#">Cambios de Aceite</a></li>
                    <li><a href="#">Afinación de Punterías</a></li>
                    <li><a href="#">Modificaciones Custom</a></li>
                    <li><a href="#">Carenado</a></li>
                    <li><a href="#">Cambios de Motos</a></li>
                </ul>
            </div>
            <div class="footer-column footer-newsletter">
                <h3>Coméntanos</h3>
                <p>Tus comentarios son importantes.</p>
                <form>
                    <input type="email" placeholder="¡Escríbenos!">
                    <button type="submit">Subir</button>
                </form>
            </div>
        </div>
    </footer>
</body>
</html>
