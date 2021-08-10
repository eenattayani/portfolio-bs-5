<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <title>My Portfolio | Enry Firmana</title>
  </head>

  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#home">Enry Firmana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/gambar.jpg" alt="Enry Firmana" width="200" class="rounded-circle img-thumbnail shadow" />
      <h1 class="display-4">Enry Firmana</h1>
      <p class="lead"></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L48,117.3C96,107,192,85,288,96C384,107,480,149,576,176C672,203,768,213,864,202.7C960,192,1056,160,1152,138.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col" data-aos="fade-down" data-aos-offset="300">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4" data-aos="fade-right" data-aos-offset="300" data-aos-duration="1000">
            <p>A coder that trying to always doing code in my single time. Feel enjoy life with codes. Being professional proggrammer is just what i am keep try going to be.</p>
          </div>
          <div class="col-md-4" data-aos="fade-left" data-aos-offset="300" data-aos-duration="1000" data-aos-delay="200">
            <p>Bachelor of Informatic Engineering that keep trying to be Master of Science and then to be Doctor of Philosophy.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,64L48,85.3C96,107,192,149,288,186.7C384,224,480,256,576,245.3C672,235,768,181,864,181.3C960,181,1056,235,1152,261.3C1248,288,1344,288,1392,288L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Projects -->
    <section id="projects">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Projects</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left">
            <img src="img/1.jpg" class="card-img-top" alt="mouse-1" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-delay="200">
            <img src="img/2.jpg" class="card-img-top" alt="mouse-2" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-delay="400">
            <img src="img/3.jpg" class="card-img-top" alt="mouse-3" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-delay="200">
            <img src="img/4.jpg" class="card-img-top" alt="mouse-4" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-delay="400">
            <img src="img/5.jpg" class="card-img-top" alt="mouse-5" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L18.5,160C36.9,192,74,256,111,277.3C147.7,299,185,277,222,250.7C258.5,224,295,192,332,186.7C369.2,181,406,203,443,197.3C480,192,517,160,554,170.7C590.8,181,628,235,665,245.3C701.5,256,738,224,775,213.3C812.3,203,849,213,886,213.3C923.1,213,960,203,997,218.7C1033.8,235,1071,277,1108,261.3C1144.6,245,1182,171,1218,138.7C1255.4,107,1292,117,1329,149.3C1366.2,181,1403,235,1422,261.3L1440,288L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects -->

    <!-- Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Gallery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/1.jpg" alt="gambar 1" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/2.jpg" alt="gambar 2" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/3.jpg" alt="gambar 3" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/4.jpg" alt="gambar 4" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/5.jpg" alt="gambar 5" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/6.jpg" alt="gambar 6" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/7.jpg" alt="gambar 7" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/8.jpg" alt="gambar 8" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/9.jpg" alt="gambar 9" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="img/gallery/thumbnail/10.jpg" alt="gambar 10" class="img-fluid gallery-img" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Gallery -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center ms-2 me-2">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terima Kasih!</strong> Pesan Anda sudah diterima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <form name="submit-to-google-sheet">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" name="email" required />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-kirim">Kirim</button>

            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </form>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,128L60,122.7C120,117,240,107,360,138.7C480,171,600,245,720,250.7C840,256,960,192,1080,170.7C1200,149,1320,171,1380,181.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-center text-white pb-5">
      <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.instagram.com/een_attayani/" class="text-white fw-bold">Enry Firmana</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
      const galleryImage = document.querySelectorAll(".gallery-img");

      galleryImage.forEach((img, i) => {
        img.dataset.aos = "fade-down";
        img.dataset.aosDelay = i * 100;
        img.dataset.aosDuration = 1000;
      });
    </script>

    <script>
      AOS.init({
        once: true,
        duration: 1500,
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
    <script>
      gsap.registerPlugin(TextPlugin);
      gsap.to(".lead", { duration: 2, delay: 1.5, text: "Programmer | Engineer" });
      gsap.from(".jumbotron img", { duration: 1, opacity: 0, rotateY: 360 });
      gsap.from(".navbar", { duration: 1.5, opacity: 0, y: "-100%", ease: "bounce" });
      gsap.from(".display-4", { duration: 1, opacity: 0, x: -50, delay: 0.5, ease: "back" });
    </script>

    <script>
      const scriptURL = "https://script.google.com/macros/s/AKfycbwJshfvAulkuGzNg3BrQHEg2zj5CrBS4eZNMuGbIP5h5QddU8rqzDVkiEub7nGb2fQW/exec";
      const form = document.forms["submit-to-google-sheet"];
      const btnKirim = document.querySelector(".btn-kirim");
      const btnLoading = document.querySelector(".btn-loading");
      const myAlert = document.querySelector(".my-alert");

      form.addEventListener("submit", (e) => {
        e.preventDefault();

        // Ketika tombol diklik
        // tampilkan button loading ; hilangkan button submit
        btnKirim.classList.toggle("d-none");
        btnLoading.classList.toggle("d-none");

        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            // tampilkan button kirim ; hilangkan button loading
            btnKirim.classList.toggle("d-none");
            btnLoading.classList.toggle("d-none");
            // tampilkan alert
            myAlert.classList.toggle("d-none");
            // reset formnya
            form.reset();

            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
  </body>
</html>
