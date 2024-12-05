<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random food Restaurant</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="
    https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        img{
            width: 100%;
            height: auto;
        }
        .modal-content {
            background-color: #ff9f0d;
            margin: 2% auto;
            padding: 10px;
            width: 40%;
            border-radius: 2px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            cursor: pointer;
        }
        /* Responsivo para dispositivos móviles */
@media (max-width: 768px) {
    .modal-content {
        width: 90%;
        
    }
}
        </style>
</head>

<body>
    <header>
    <div class="modal" id="menuModal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <img src="img-P/Menu.png" alt="">
        </div>
    </div>
        <a href="#" class="logo"><i class="bx bxs-home"></i>Random Foot</a>

        <ul class="navlist">
            <li><a href="#home" class="active">Inicio</a></li>
            <li><a href="#about">Sobre Nosotros</a></li>
            <li><a href="#shop">Nuestra tienda</a></li>
            <li><a href="#review">Nuestros Clientes</a></li>
            <li><a href="#contact">Contáctenos</a></li>
        </ul>

        <div class="nav-icons">
            <a href="#"><i class="bx bx-search"></i></a>
            <a href="./loginU"><i class="bx bx-cart"></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <section class="home" id="home">
        <div class="home-text">
            <h1>Conoce, <span>Come y</span><br>Disfruta el verdadero<br>sabor</h1>
            <button class="btn" id="openModal">Explora nuestro menu <i class="bx bxs-right-arrow"></i></button>
            <a href="#" class="btn2">Ordenar ahora</a>
            
        </div>

        <div class="home-img">
            <img src="img/logooo.jpg.png" alt="">
        </div>
    </section>

    <section class="container">
        <div class="container-box">
            <img src="img/c1.png" alt="">
            <h3>18:00 - 23:00</h3>
            <a href="#">Horario de atencion</a>
        </div>

        <div class="container-box">
            <img src="img/c2.png" alt="">
            <h3>Random Food</h3>
            <a href="#">Obtener Direcciones </a>
        </div>

        <div class="container-box">
            <img src="img/c3.png" alt="">
            <h3>(591) 78584807</h3>
            <a href="#">Llamanos ahora</a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="img-P/p1.png" alt="">
        </div>
        <div class="about-text">
            <h1>NUESTRA MISION Y  <br>VISION COMO CADENA DE COMIDA RAPIDA</h1><BR></BR>
            <p>Mision: Brindar a nuestros clientes comida rapida de excelente calidad, acompañado de un servicio excepcional, en un entorno agradable y a precios accesibles</p>
            <p>Vision: Posicionarnos como la cadena de comidad rapida en Potosí, introduciendo continuamente innovaciones en nuestro menú y en la atencion al clientes</p>
            <a href="" class="btn">Explora Historias <i class="bx bxs-right-arrow"></i></a>
        </div>
    </section>
    
    <section class="shop" id="shop">
        <div class="middle-text">
            <h4>Nuestros productos</h4>
            <h2>Promociones y Productos Populares</h2>
        </div>
        
        <div class="shop-content">
            <div class="row">
                <img src="./img-P/pr1.jpg" alt="">
                    <h3>Alitas X5</h3>
                    <p>Papas fritas y salsa a eleccion</p>
                    <div class="in-text">
                        <div class="price">
                            <h6>Bs 26.00</h6>
                        </div>
                        <div class="s-btnn">
                            <a href="#">Ordenar ahora</a>
                        </div>
                    </div>
                    <div class="top-icon">
                        <a href=""><i class="bx bx-heart"></i></a>
                    </div>
                </div>

                <div class="row">
                    <img src="./img-P/pr2.jpg" alt="">
                    <h3>Hamburguesa Clasica </h3>
                    <p>Papas fritas y salsa a eleccion</p>
                    <div class="in-text">
                        <div class="price">
                            <h6>Bs 35.00</h6>
                        </div>
                        <div class="s-btnn">
                            <a href="#">Ordenar ahora</a>
                        </div>
                    </div>
                    <div class="top-icon">
                        <a href=""><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="./img-P/pr3.jpg" alt="">
                    <h3>Hamburguesa Monstruo</h3>
                    <p>1 Gaseosa de tu preferencia GRATIS!!</p>
                    <div class="in-text">
                        <div class="price">
                            <h6>Bs 32.00</h6>
                        </div>
                        <div class="s-btnn">
                            <a href="#">Ordenar ahora</a>
                        </div>
                    </div>
                    <div class="top-icon">
                        <a href=""><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="./img-P/pr4.png" alt="">
                    <h3>Hamburguesa con salchipapa</h3>
                    <p>Nuevo Producto incluye una porcion de papas fritas GRATIS!!</p>
                    <div class="in-text">
                        <div class="price">
                            <h6>Bs 22.00</h6>
                        </div>
                        <div class="s-btnn">
                            <a href="#">Ordenar ahora</a>
                        </div>
                    </div>
                    <div class="top-icon">
                        <a href=""><i class="bx bx-heart"></i></a>
                    </div>
                </div>

        </div>
        <div class="row-btn">
            <a href="#" class="btn">Todos nuestros productos <i class="bx bxs-right-arrow"></i></a>
        </div>
    </section>

    <section class="review" id="review">
        <div class="middle-text">
            <h4>Nuestros Clientes</h4>
            <h2>Comentarios de clientes sobre nuestra comida</h2>
        </div>

        <div class="review-content">
            <div class="box">
                <p>¡Excelente servicio y sabor inigualable! He probado varios platos y siempre quedo sorprendido. Las promociones son perfectas para compartir en familia. ¡Muy recomendado para los amantes de la buena comida!"</p>
                <div class="in-box">
                    <div class="bx-img">
                        <img src="img/r1.jpg">
                    </div>
                    <div class="bxx-text">
                        <h4>John Karahan</h4>
                        <h5>Foot Vlogger</h5>
                        <div class="ratings">
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Los mejores platos a un precio increíble. La hamburguesa 'Monstruo' es simplemente espectacular y las porciones son generosas. Además, la atención es rápida y el personal es súper amable. </p>
                <div class="in-box">
                    <div class="bx-img">
                        <img src="img/r2.jpg">
                    </div>
                    <div class="bxx-text">
                        <h4>John Karahan</h4>
                        <h5>Foot Vlogger</h5>
                        <div class="ratings">
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>¡Mis favoritos para cualquier ocasión! Cada vez que visito, encuentro nuevas promociones y sabores increíbles. La variedad de productos y la calidad son insuperables. Gracias, Random Food, por ser mi lugar favorito.</p>
                <div class="in-box">
                    <div class="bx-img">
                        <img src="img/r3.jpg">
                    </div>
                    <div class="bxx-text">
                        <h4>John Karahan</h4>
                        <h5>Foot Vlogger</h5>
                        <div class="ratings">
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                            <a href=""><i class="bx bxs-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="contact-content">
            <div class="contact-text">
                <h2>Contactanos</h2>
                <p>¡Gracias por visitar nuestro sitio! En Random Food, valoramos tus preguntas, comentarios y sugerencias. Si deseas obtener más información sobre nuestras promociones, productos o cualquier otro tema, no dudes en ponerte en contacto con nosotros.</p>
                <div class="social">
                    <a href="#" class="cls"><i class="bx bxl-instagram-alt"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100064370761121"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.tiktok.com/@random.food.oficial1"><i class='bx bxl-tiktok'></i></a>
                    <a href="https://www.google.com/search?q=random+food+potosi&oq=random+food+potosi&gs_lcrp=EgZjaHJvbWUqBggAEEUYOzIGCAAQRRg7MgYIARBFGDzSAQgxNTEwajBqN6gCALACAA&sourceid=chrome&ie=UTF-8"><i class="bx bxl-google"></i></a>
                </div>
            </div>

            <div class="details">
                <div class="main-d">
                    <a href="https://maps.app.goo.gl/gEUoMW7PXR5JeiAr5"><i class="bx bxs-location-plus"></i>Av. Panamericana </a>
                </div>

                <div class="main-d">
                    <a href=""><i class="bx bx-mobile-alt"></i>(591) 78584807</a>
                </div> 

                <div class="main-d">
                    <a href=""><i class="bx bxl-youtube"></i>Random Foot</a>
                </div>

                <div class="main-d">
                    <a href=""><i class="bx bxs-bell"></i>Activar notificaciones</a>
                </div>
            </div>
        </div>
    </section>
    
    <a href="#" class="scroll">
        <i class="bx bx-up-arrow-alt"></i>
    </a>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
        
const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", window.scrollY>80);
});

let menu = document.querySelector("#menu-icon");
let navlist = document.querySelector(".navlist");

menu.onclick = ()   => {
    menu.classList.toggle("bx-x");
    navlist.classList.toggle("open");
}

window.onscroll = () => {
    menu.classList.remove("bx-x");
    navlist.classList.remove("open");
}

const sr= ScrollReveal({
    origin: "top",
    distance: "85px",
    duration: 2500,
    reset: true
})

sr.reveal(".home-text", {delay: 300});
sr.reveal(".home-img", {delay: 400});
sr.reveal(".container", {delay: 400});

sr.reveal(".about-img", {});
sr.reveal(".about-text", {delay: 300});

sr.reveal(".middle-text", {});
sr.reveal(".review-content,.shop-content", {delay:300})

sr.reveal(".review-content,.contact ",{delay:300});

document.addEventListener("DOMContentLoaded", function() {
    const openModalButton = document.getElementById("openModal");
    const modal = document.getElementById("menuModal");
    const closeModalButton = document.getElementById("closeModal");

    // Abrir el modal
    openModalButton.addEventListener("click", () => {
        modal.style.display = "block";
    });

    // Cerrar el modal al hacer clic en la "x"
    closeModalButton.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Cerrar el modal al hacer clic fuera de la ventana modal
    window.addEventListener("click", (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const openModalBtn = document.getElementById('openModal');
            const closeModalBtn = document.getElementById('closeModal');
            const modal = document.getElementById('menuModal');
    
            openModalBtn.addEventListener('click', () => {
                modal.style.display = 'block';
            });
    
            closeModalBtn.addEventListener('click', () => {
                modal.style.display = 'none';
            });
    
            window.addEventListener('click', (event) => {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
    
</body>
</html>