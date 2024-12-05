<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones</title>
    <link rel="stylesheet" href="css/styleD.css">
    <script>
        const toggleButton=document.getElementById("toggle-btn");
const sidebar=document.getElementById("sidebar");

function toggleSidebar() {
    sidebar.classList.toggle('close');
    toggleButton.classList.toggle('rotate');
    
    closeAllSubMenus()
}
function toggleSubMenu (button) {
    if (!button.nextElementSibling.classList.contains('show')){
        closeAllSubMenus();
    }
    
    button.nextElementSibling.classList.toggle('show');
    button.classList.toggle('rotate');

    if(sidebar.classList.contains('close')) {
        sidebar.classList.toggle('close');
        toggleButton.classList.toggle('rotate');
    }
}
function closeAllSubMenus() {
    Array.from(sidebar.getElementsByClassName('show')).forEach(ul =>{
        ul.classList.remove('show');
        ul.previousElementSibling.classList.remove('rotate');
    }); 
}
    </script>
<body>
    <nav id="sidebar">
        <ul>
            <li>
                <span class="logo">Random Food</span>
                <button onclick=toggleSidebar() id="toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M383-480 200-664l56-56 240 240-240 240-56-56 183-184Zm264 0L464-664l56-56 240 240-240 240-56-56 183-184Z"/></svg>
                </button>
            </li>
            <li>
                <a href="/DashboardU">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
                <span>Inicio</span>
                </a>
            </li>
            <li class="active">
                <a href="/Promociones">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.337 9h-2.838v3h2.838a1.501 1.501 0 1 0 0-3z"/><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm1.337 12h-2.838v3H8.501V7h4.837a3.498 3.498 0 0 1 3.499 3.499 3.499 3.499 0 0 1-3.5 3.501z"/></svg>
                <span>Promociones</span>
                </a>
            </li>
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg>
                    <span>Categorias</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="m18.707 12.707-1.414-1.414L13 15.586V6h-2v9.586l-4.293-4.293-1.414 1.414L12 19.414z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="#">Folder</a></li>
                        <li><a href="#">Document</a></li>
                        <li><a href="#">Project</a></li>
                    </div>
                </ul>
            </li>
            <li>
                <a href="/Productos">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>
                <span>Productos</span>
                </a>
            </li>
            <li>
                <a href="profile.html">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                <span>Profile</span>
                </a>
            </li>
        </ul>
    </nav>
    <main>
        <section class="shop" id="shop">
            <div class="container">
            <div class="middle-text">
                <h4>Nuestros Productos Populares</h4>
                <h2>Promocion de la semana </h2>
            </div>
            
            <div class="shop-content">
                <div class="row">
                    <img src="../img-P/pr1.jpg" alt="">
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
                    <img src="../img-P/pr2.jpg" alt="">
                    <h3>Hamburguesa Clasica 2x35</h3>
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
                    <img src="../img-P/pr3.jpg" alt="">
                    <h3>Alitas X5</h3>
                    <p>Incluye papas fritas</p>
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
                    <img src="../img-P/pr4.png" alt="">
                    <h3>Hamburguesa con salchipapa</h3>
                    <p>Nuevo Producto</p>
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
            </div>
        </div>
        </section>
        </div>
    </main>
</body>
</html>