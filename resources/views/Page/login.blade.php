<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="css/stylel.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form id="signInForm" action="index.html" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="../img/c2.png" alt="easyclass" />
                <h4>Random Foot</h4>
              </div>

              <div class="heading">
                <h2>Bienvenido</h2>
                <h6>¿Aún no está registrado?</h6>
                <a href="#" class="toggle">Regístrate</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Nombre de usuario</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Contraseña</label>
                </div>

                <input type="submit" value="Iniciar sesión" class="sign-btn" />

                <p class="text">
                  ¿Olvidó su contraseña o sus datos de inicio de sesión?
                  <a href="#">Obtenga ayuda</a> iniciando sesión
                </p>
              </div>
            </form>

            <form id="signUpForm" action="index.html" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="../img/c1.png" alt="easyclass" />
                <h4>Random Foot</h4>
              </div>

              <div class="heading">
                <h2>Empezar</h2>
                <h6>¿Ya tienes una cuenta?</h6>
                <a href="#" class="toggle">Iniciar Secion</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Nombre</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Contraseña</label>
                </div>

                <input type="submit" value="Regitrarse" class="sign-btn" />

                <p class="text">
                  Al registrarme, acepto los
                  <a href="#">Terminos y Condiciones</a> y la
                  <a href="#">Política de privacidad</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="../img/logo.jpg" class="image img-1 show" alt="" />
              <img src="../img/logo2.jpg" class="image img-2" alt="" />
              <img src="../img/c3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Lideres en la comida rapida</h2>
                  <h2>Calidad-Precio </h2>
                  <h2>Precios ajustados </h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script >
        const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

toggle_btn.forEach((btn) => {
  btn.addEventListener("click", () => {
    main.classList.toggle("sign-up-mode");
  });
});

function moveSlider() {
  let index = this.dataset.value;

  let currentImage = document.querySelector(`.img-${index}`);
  images.forEach((img) => img.classList.remove("show"));
  currentImage.classList.add("show");

  const textSlider = document.querySelector(".text-group");
  textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

  bullets.forEach((bull) => bull.classList.remove("active"));
  this.classList.add("active");
}

bullets.forEach((bullet) => {
  bullet.addEventListener("click", moveSlider);
});

    </script>
    <script>
  // Redirigir al DashboardU al iniciar sesión
  document.getElementById('signInForm').addEventListener('submit', function (event) {
    event.preventDefault();
    window.location.href = './DashboardU';
  });

  // Redirigir al DashboardU después de registrarse
  document.getElementById('signUpForm').addEventListener('submit', function (event) {
    event.preventDefault();
    window.location.href = './DashboardU';
  });
</script>

  </body>
</html>
