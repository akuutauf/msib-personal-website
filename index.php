<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="assets/icons/github-alt.svg" />
  <title>Taufik Hidayat | MSIB Personal Website</title>
  <link rel="stylesheet" href="dist/output.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11/lib/typed.min.js"></script>
</head>

<body>

  <!-- Navbar Header Start -->
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-start z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="#home" class="font-bold text-lg text-primary block py-6">TAUFIK HIDAYAT</a>
        </div>
        <div class="flex items-center justify-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-700 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-700 ease-in-out"></span>
            <span class="hamburger-line transition duration-700 ease-in-out origin-bottom-left"></span>
          </button>
          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#home" class="text-base text-dark py-2 mx-8 flex hover:text-primary">Home</a>
              </li>
              <li class="group">
                <a href="#profile" class="text-base text-dark py-2 mx-8 flex hover:text-primary">Profile</a>
              </li>
              <li class="group">
                <a href="#projects" class="text-base text-dark py-2 mx-8 flex hover:text-primary">Projects</a>
              </li>
              <li class="group">
                <a href="#partners" class="text-base text-dark py-2 mx-8 flex hover:text-primary">Partners</a>
              </li>
              <li class="group">
                <a href="#gallery" class="text-base text-dark py-2 mx-8 flex hover:text-primary">Gallery</a>
              </li>
              <li class="group">
                <a href="#article" class="text-base text-dark py-2 mx-8 flex hover:text-primary">Article</a>
              </li>
              <li class="group">
                <a href="#contact" class="text-base text-dark py-2 mx-8 flex hover:text-primary">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Navbar Header End -->

  <!-- Hero Section Start -->
  <section id="home" class="pt-36">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-base font-semibold text-primary ml-2 md:text-xl" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Halo Semuanya 👋, <span class="text-dark">Perkenalkan Saya</span> <span class="mt-1 block text-4xl font-bold text-dark dark:text-white lg:text-5xl">Taufik Hidayat</span></h1>
          <h2 class="mb-5 text-lg font-medium text-secondary mt-2 ml-2 lg:text-2xl" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Mahasiswa, Programmer & Content Creator</span></h2>
          <p id="typed-text" class="mb-10 font-medium leading-relaxed ml-2 text-secondary" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            "Dengan memulai <span class="font-bold text-primary dark:text-white">Sesuatu yang baik bagimu</span> maka kamu akan membuka peluang masa depan yang <span class="font-bold text-primary dark:text-white">Cerah dan Sukses untuk karirmu!</span>,
            <span class="font-bold text-secondary dark:text-white">Insyallah</span>"
          </p>
          <a href="#profile" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 ease-in-out hover:opacity-80 hover:shadow-lg">Yuk Kenalan Dengan Saya</a>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2">
          <div class="relative mt-10 lg:right-0 lg:mt-9">
            <img src="https://i.postimg.cc/C1cpPc1q/aku.png" alt="Taufik Hidayat" title="Taufik Hidayat" class="relative z-10 mx-auto max-w-full" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" />
            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125">
              <svg class="lg:max-w-[400px]" width="350" height="350" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#6366F1" d="M55.6,-28.2C62.7,-19.8,52.6,2.4,40.5,20.9C28.3,39.5,14.2,54.4,-3.3,56.3C-20.7,58.1,-41.4,47,-48.6,31.3C-55.8,15.5,-49.6,-4.7,-39.2,-15C-28.9,-25.3,-14.4,-25.6,4.9,-28.4C24.2,-31.3,48.5,-36.6,55.6,-28.2Z" transform="translate(100 100)" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- Php native - menghitung usia -->
  <?php
  // Tanggal lahir
  $tanggal_lahir = "2001-09-12";

  // Hitung usia
  $tanggal_sekarang = date("Y-m-d");
  $usia = date_diff(date_create($tanggal_lahir), date_create($tanggal_sekarang))->y;
  ?>

  <!-- Profile Section Start -->
  <section id="profile" class="pt-36 pb-32">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-10 lg:w-1/2">
          <h4 class="font-bold text-primary text-lg mb-3">Profile</h4>
          <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Biodata Diri<br />Taufik Hidayat</h2>
          <p class="font-medium text-base text-secondary max-w-xl lg:text-lg" data-aos="zoom-in-right">
            <span class="font-bold text-secondary">Nama</span> : Taufik Hidayat<br /><span class="font-bold text-secondary">Tempat Lahir</span> :
            Banyuwangi<br /><span class="font-bold text-secondary">Gender</span> : Laki-laki<br /><span class="font-bold text-secondary">Usia</span> : <?= $usia ?> Tahun<br /><span class="font-bold text-secondary">Agama</span> : Islam<br /><span class="font-bold text-secondary">Hobi</span> : Bersepeda<br /><span class="font-bold text-secondary">Status</span> : Mahasiswa
          </p>
        </div>
        <div class="w-full px-4 lg:w-1/2">
          <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Kemampuan Taufik Hidayat</h3>
          <p class="font-medium text-base text-secondary mb-6 lg:text-lg text-justify" data-aos="zoom-in-left">
            Saya memiliki kemampuan untuk membangun sebuah project <span class="font-bold text-secondary">Web</span> dibidang <span class="font-bold text-primary">Full Stack Developper</span>.<br /><br />Tidak hanya itu Saya juga
            mampu dalam Menggunakan <span class="font-bold text-secondary">Bahasa Pemrograman Backend</span> seperti <span class="font-bold text-primary">MySQL, Javascript dan Php</span><br /><br />
            Untuk Lebih detail mengenai Project Saya, Anda melihat pada <span class="font-bold text-primary">Katalog Project</span> yang pernah saya kembangkan
            <a href="#projects" class="font-bold text-secondary hover:text-primary">dibawah ini</a>.
          </p>
          <div class="flex items-center">
            <!-- Youtube -->
            <a href="https://www.youtube.com/channel/UCZloAMpBDngVGf6hywQNC9w" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
              <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>YouTube</title>
                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
              </svg>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/akuutauf_/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
              <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
              </svg>
            </a>
            <!-- Twitterr -->
            <a href="https://twitter.com/akuutauf_" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
              <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Twitter</title>
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
              </svg>
            </a>
            <!-- GitHub -->
            <a href="https://github.com/akuutauf" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
              <svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>GitHub</title>
                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Profile Section End -->

  <!-- Projects Section Start-->
  <section id="projects" class="pt-36 pb-16 bg-slate-100">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary">Projects</h4>
          <h2 class="font-bold text-dark text-2xl mb-4 sm:text-2xl lg:text-3xl">Projects Github dan Codepen Terbaik</h2>
          <p class="font-medium text-md text-secondary md:text-lg">Berikut adalah katalog project yang pernah saya kembangkan secara mandiri maupun teamwork.</p>
        </div>
      </div>
      <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/XJSBVMR9/1.png" width="w-full" alt="First Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="https://akuutauf.github.io/" class="hover:text-primary" target="_blank">Portfolio Taufik Hidayat - GitHub</a></h3>
          <p class="font-medium text-base text-secondary">Project Portofolio Taufik Hidayat - Html, CSS, dan Javascript</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/KzPkjqbw/2.png" width="w-full" alt="Second Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="https://akuutauf.github.io/e-notebook/landing-page.html" target="_blank" class="hover:text-primary">Deisgn Thinking E-NoteBook UI - Web App</a></h3>
          <p class="font-medium text-base text-secondary">Project mandiri Desain Thinking IMK - Html, CSS, dan Javascript</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/g0K2TY21/obugame-katalog.png" width="w-full" alt="Third Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="http://obugame.com/" target="_blank" class="hover:text-primary">Obugame - E Commerce Web App</a></h3>
          <p class="font-medium text-base text-secondary">Project teamwork yang di khususkan untuk kegiatan penelitian dan pemberdayaan UMKM</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/ZqcJc4bn/Screenshot-2023-02-23-085254.png" width="w-full" alt="Fourth Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="https://sdn-2-kedaleman.000webhostapp.com/" target="_blank" class="hover:text-primary">SDN 2 Kedaleman - Web Profiling School</a></h3>
          <p class="font-medium text-base text-secondary">Project teamwork yang dikhususkan untuk sekolah SD dan untuk memajukan promosi sekolah</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/dQjswx5R/website-jurusan-ti-poliwangi.png" width="w-full" alt="Fourth Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="https://www.instagram.com/tipoliwangi/" target="_blank" class="hover:text-primary">TI Poliwangi Website - Web Profiling School</a></h3>
          <p class="font-medium text-base text-secondary">Project teamwork yang dikhususkan untuk program studi TI Poliwangi</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/0QnTRpcx/go-hair-cut.png" width="w-full" alt="Fourth Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="https://gohaircut.netlify.app/" target="_blank" class="hover:text-primary">Gohaircut - Platform Finding Barbershop and Order</a></h3>
          <p class="font-medium text-base text-secondary">Project teamwork yang dikhususkan untuk Design Thinking College Lesson</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/ZRmsff34/5.png" width="w-full" alt="Third Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="https://github.com/akuutauf/tugas-flutter-6" target="_blank" class="hover:text-primary">College Student Portfolio App (UI) Poliwangi</a></h3>
          <p class="font-medium text-base text-secondary">Simple UI Aplikasi Portofolio - Dart dan Flutter</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/FRxWwjgc/6.png" width="w-full" alt="Third Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="https://github.com/akuutauf/tugas-flutter-uts" target="_blank" class="hover:text-primary">News App UI of Mobile App</a></h3>
          <p class="font-medium text-base text-secondary">Simple UI Aplikasi Berita Mahasiswa - Dart dan Flutter</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/765HKSGQ/screencapture-codepen-io-akuutauf-full-q-Bx-Zbpr-2023-02-23-08-48-46.png" width="w-full" alt="Third Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="https://codepen.io/akuutauf/pen/qBxZbpr" target="_blank" class="hover:text-primary">Animation 2D Owl Canvas</a></h3>
          <p class="font-medium text-base text-secondary" data-aos="zoom-in-up">Animal Canvas 2D - Html, Css, dan Javascript</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://i.postimg.cc/J42ym4mX/animation-3d-katalog.png" width="w-full" alt="Third Project" />
          </div>
          <h3 class="font-semibold text-dark text-xl mt-5 mb-3"><a href="https://codepen.io/akuutauf/pen/bGLwGNd" target="_blank" class="hover:text-primary">Animation 3D Space Planet</a></h3>
          <p class="font-medium text-base text-secondary">Space Planet 3D Model - Html, Css, Javascript dan Three JS</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Projects Section End -->

  <!-- Client Section Start -->
  <section id="partners" class="pt-36 pb-32 bg-slate-800">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary">Partners</h4>
          <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-4xl">Mitra Yang Berkaitan Erat Dengan Saya</h2>
          <p class="font-medium text-md text-secondary md:text-lg">Berikut adalah Mitra, Organisasi dan Instansi<br />yang berkaitan oleh Saya</p>
        </div>
      </div>
      <div class="w-full px-4">
        <div class="flex flex-wrap items-center justify-center">
          <a href="https://www.google.com/" target="_blank" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-300 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
            <img src="https://i.postimg.cc/vBWqmzkN/google.png" alt="" />
          </a>
          <a href="https://www.instagram.com/smkmuh6rgj/" target="_blank" class="max-w-[80px] mx-4 py-4 grayscale opacity-60 transition duration-300 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
            <img src="https://i.postimg.cc/CKzSC1N0/smuhero.png" alt="" />
          </a>
          <a href="https://poliwangi.ac.id/" target="_blank" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-300 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
            <img src="https://i.postimg.cc/dtSRLLLB/poliwangi-white.png" alt="" />
          </a>
        </div>
      </div>
      <div class="w-full px-4">
        <div class="flex flex-wrap items-center justify-center">
          <a href="https://www.instagram.com/akuutauf_/" target="_blank" class="max-w-[80px] mx-4 py-4 grayscale opacity-60 transition duration-300 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
            <img src="https://i.postimg.cc/7ZJt7stK/jenesys-logo.png" alt="" />
          </a>
          <a href="https://www.instagram.com/robotika_poliwangi/" target="_blank" class="max-w-[80px] mx-4 py-4 grayscale opacity-60 transition duration-300 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
            <img src="https://i.postimg.cc/Qdp4061S/robotika.png" alt="" />
          </a>
          <a href="http://obugame.com/" target="_blank" class="max-w-[80px] mx-4 py-4 grayscale opacity-60 transition duration-300 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
            <img src="https://i.postimg.cc/jd6p7KRF/fotor-2023-2-23-9-1-35.png" alt="" />
          </a>
        </div>
      </div>
      <div class="w-full px-4">
        <div class="flex flex-wrap items-center justify-center">
          <a href="https://www.instagram.com/p2mdrobotika/" target="_blank" class="max-w-[80px] mx-4 py-4 grayscale opacity-60 transition duration-300 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
            <img src="https://i.postimg.cc/85N20ydt/p2md-robotika-poliwangi.png" alt="" />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- CLient Section End -->

  <!-- Gallery Section Start -->
  <section id="gallery" class="pt-36 pb-32 bg-slate-100">
    <!-- Container For Portofolio and Organization -->
    <div class="container lg:mt-10">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary">Gallery</h4>
          <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-4xl">Pengalaman Organisasi<br />dan Portfolio Saya</h2>
          <p class="font-medium text-md text-secondary md:text-md">
            <i>"Pengalaman itu seperti halnya menuang dan menumpahkan kesan dalam hati,<br />Jika itu pahit maka harus kita buang dan jika itu manis maka harus kita kenang."</i>
          </p>
        </div>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="flex flex-wrap justify-center">
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/RC3scbfm/jenesys-01.jpg" alt="Jenesys" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="https://www.instagram.com/p/B7n5C8QAN6K/">Jenesys 2019 - Asosiation Halal Food Japan (Tokyo)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  22 Januari 2020 - Alhamdulillah kami diberikan kesempatan untuk dapat bertemu dan diberikan penjelasan tentang Asosiasi Bisnis Halal Jepang. Disini kita diberkan pengetahuan tentang makanan halal yang baru saja diberikan
                  sertifikasi halal oleh badan NAHA ( Nippon Asia Halal Assosiation ), di jepang banyak sekali badan asosiasi yang mulai membuat sertifikasi makanan halal salah satu nya adalah NAHA. Dan Alhamdulillah sangat beruntung
                  rombongan Jenesys 2019/2020 kali ini diberikan kesempatan untuk mencicipi makanan halal tersebut yakni, ramen, nasi kare, dan juga kue macha, yang dimana semua masakan ini adalah halal.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/qMy1FhjZ/jenesys-02.jpg" alt="Jenesys" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="https://www.instagram.com/p/B7u0G3GHBCd/">Jenesys 2019 - Visiting Genbaku Dome (Hiroshima)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  25 Januari 2020 - Observasi dan kuliah (Taman monumen Perdamaian Hiroshima, rekonsiliasi peringatan perdamaian Hiroshima, rekonsiliasi korban bom Hiroshima) Pada kesempatan ini saya sangat bersyukur sekali karena saya
                  dapat berkunjung ke monumen bersejarah yang ada di Jepang yaitu "Genbaku Dome-mae" dan juga Hiroshima Peace Memorial Museum. Genbaku Dome merupakan bangunan yang tepat berada dibawah bom atom yang menyerang hiroshima dan
                  masih dipertahankan sampai saat ini. Kita juga belajar rekonsiliasi di museum perdamaian Hiroshima, disana kita melihat dan memahami tentang tragedi yang menyeramkan di Hiroshima. Dan kita juga di berikan suatu hal yang
                  spesial yaitu kita dipertemukan oleh salah satu korban pemboman yang masih hidup sampai saat yaitu ibu "Keiko Ogura", dan beliau menceritakan kisah nya kepada kita semua.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/66DHzLLv/jenesys-03.jpg" alt="Jenesys" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="https://www.instagram.com/p/B7qciYYALBw/">Jenesys 2019 - Visiting Takushoku University (Tokyo)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Pada pagi hari tepat nya di hari Kamis 23 Januari 2020 grup Jenesys Indonesa melakukan Belajar bersama di Universitas Takushoku, Tokyo - Japan. Pada kesempatan itu kita diberikan ilmu tentang Lecture Politic dan Lecture
                  Economic. Berkaitan tentang ekonomi antara Negara Cina dan Amerika dengan Jepang sebagai penengahnya serta juga teori keutuhan wilayah kedaulatan suatu negara.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/GmHPywpy/IMG-20200122-WA0008.jpg" alt="Jenesys" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="https://www.instagram.com/p/B7qZDnUgLCI/">Jenesys 2019 - Study Letures About ASEAN (Tokyo)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Pada hari Rabu kemarin kita melaksanakan kegiatan Pembahasan mengenai materi Asean. Dalam kesempatan itu kita diberikan pemahaman tentang apa itu Asean, sejarah Asean, kita juga diberikan pemahaman tentang peran pemuda
                  dalam mempromosikan atau memperkenalkan Asean dalam kancah internasional seperti kegiatan Jenesys 2019 / 2020 yang sedang kita lakukan pada saat itu.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/7Zd31sCQ/IMG-20200124-WA0023.jpg" alt="Jenesys" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="https://www.instagram.com/p/B7tMOg6AOwx/">Jenesys 2019 - Meet and greet with students at Hiroshima University and lecture on the history of the Hiroshima atomic bomb (Hiroshima)</a>
                </h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Pada pagi hari ini kita diberikan ilmu yang sangat banyak sekali yaitu mengenai perdamaian. Kita juga diberikan gambaran sejarah tentang pengeboman di daerah Hiroshima yang dilakukan oleh Amerika. Dan betapa sulit sekali
                  pada masa itu Jepang untuk bangkit dari keterpurukannya, oleh karena itu Jepang mengumpulkan 205 mahasiswa pintar yang selamat dari tragedi itu dan diajarkan tentang pendidikan hingga pada akhirnya Jepang bisa bangkit dari
                  semua ini.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/6QZdMrn6/IMG-20200131-WA0008.jpg" alt="Jenesys" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="https://www.instagram.com/p/B7tPMG6gaJS/">Jenesys 2019 - Meet and greet with one of the survivors of the hiroshima atomic bombing (Hiroshima)</a>
                </h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Kemudian pada Sore hari kita bertemu dengan organisasi Peace Building yang didirikan oleh orang Jepang, diikuti oleh mahasiswa dari Hiroshima dan Tokyo yang bertujuan untuk menjalin perdamaian di seluruh dunia. Dan mereka
                  memberikan informasi tentang tragedi pemboman Hiroshima yang dulu pernah terjadi, oleh karena itu mereka mendirikan organisasi ini karena mereka ingin menyatukan dunia dengan cara yang damai dan tidak dengan cara
                  berperang.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/FRQ08YVy/IMG-20200126-WA0035.jpg" alt="Jenesys" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="https://www.instagram.com/p/B7xrt_MgoRP/">Jenesys 2019 - Stay with a Japanese family and see the culture and activities they often do every day (Hiroshima)</a>
                </h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Pada kesempatan kali ini saya dan teman teman dapat bertemu dengan orang yang spesial yaitu orang tua kedua kita dari Hiroshima, dan kita menginap dirumah beliau dan bertukar pikiran tentang budaya, makanan, pakaian,
                  kegiatan sehari hari mereka yang ada di Jepang dengan budaya kita di Indonesia. Mereka sangat baik dan ramah sekali kepada kita semua dan mereka mengajak kita untuk mempelajari kegiatan sehari hari mereka. Saya banyak
                  belajar dari bapak Kiyota dan temannya bapak Matsuhida mereka mengajari kami dalam banyak segala hal seperti, memotong kayu dan membuat udon dan banyak kegiatan yang lain beliau ajarkan pada kami, harapan saya semoga saya
                  dan teman teman bisa bertemu lagi pada kesempatan berikut nya dan saya bisa membuat udon sesuai dengan resep bapak Kiyota. Terimakasih Kiyota san.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/6Q5hg15p/p2md-2021.jpg" alt="Kelas2A" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">P2MD 2021 Robotika Poliwangi</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Pada awal agustus tahun 2021 kami tim UKM Robotika Poliwangi membentuk sebuah kelompok untuk melaksanakan Program Pemberdayaan Masyarakat Desa (P2MD) di Dusun Pekiringan, Desa Sumbersari, Kecamatan Srono, Kabupaten Banyuwangi - Jawa Timur.
                  Pada waktu itu kami melaksanakan program P2MD yang mengangkat permasalahan yang sering dialami oleh masyarakat desa setempat, dimana terdapat beberapa sumber mata air yang masih kurang akan penjagaan serta perawatan, sedangkan sumber mata air tersebut merupakan sumber mata air satu satu nya yang bisa dapat dimanfaatkan langsung oleh masyarakat.
                  Sumber air ini sering digunakan untuk kebutuhan konsumsi maupun kebutuhan rumah tangga yang lain, dengan demikian kami memberikan sebuah penyelesaian masalah masyarakat desa, dengan mengajukan sebuah topik P2MD yang berjudul
                  <b>"Infrastruktur Sumber Air Minum yang Dilengkapi dengan Monitoring PH Air"</b>, dengan demikian kami berharap dari masyrakat dapat membentuk suatu komunitas untuk merawat dan melestarikan sumber air, juga dapat digunakan sebagai sarana pembelajaran kepada masyarakat untuk
                  mengetahui sumber air minum yang mereka konsumsi sehari-hari merupakan hal yang bermanfaat dan menyehatkan.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/KYPR7ZyK/p2md-2022.jpg" alt="Kelas2A" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">P2MD 2022 Robotika Poliwangi</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Pada Bulan April tahun 2022 kami tim Robotika Poliwangi membentuk tim P2MD baru lagi dan kami melaksanakan berbagai survey sehingga kami menemukan suatu permasalahan yang terdapat pada desa Lingkungan Papring, Kelurahan Kalipuro, Kecamatan Kalipuro, Kabupaten Banyuwangi - Jawa Timur.
                  Kami melakukan survey dan analisa dari sisi kehidupan masyarakat desa setempat, sehingga memperoleh sebuah permasalahan dan saran dari masyarakat, dimana masyarakat setempat kesehariannya adalah difokuskan dengan mata pencaharian petani, ternak dan pengrajin.
                  Kemudian kami menemukan masalah pada sektor pengrajin, yaitu masyarakat sering membuat kerajinan alat rumah tangga dari bambu dan kayu, dan dari kerajinan tersebut menghasilkan produk yang dapat diperjual-belikan.
                  Namun sangat disayangkan pada faktanya produk masih sering di akui oleh pengrajin luar daerah, dengan demikian hal ini merugikan pengrajin dan masyarakat itu sendiri. Dengan demikian tim kami mengajukan sebuah Proposal P2MD dengan judul
                  <b>"PENERAPAN TEKNOLOGI MESIN COMPUTER NUMERICAL CONTROL (CNC) ENGRAVING SEBAGAI SARANA LEBELISASI PRODUK KERAJINAN BAMBU DI LINGKUNGAN PAPRING"</b>, kami berharap semoga dengan adanya kegiatan ini masyarakat pengrajin tidak perlu khawatir akan pengakuan branding dari pihak
                  luar, sehingga produk dapat sering di produksi, meningkatkan pertumbuhan ekonomi masyarakat dan berkembangkan usaha desa setempat.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/ht0pDFFL/kelas-2a.jpg" alt="Kelas2A" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Penutupan Kegiatan PHP Mahasiswa TI Angkatan 20 (Poliwangi)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Kegiatan penutupan PHP dilambangkan sebagai lulusnya dari masa orientasi atau PKKMB Mahasiswa Politeknik Negeri Banyuwangi. Hal ini kami manfaatkan untuk saling berbagi kebersamaan agar kita saling mengenal satu sama lain
                  kedepannya, supaya kelas 2A menjadi kelas yang terbaik diantara yang lain.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/GtFb3ssp/Salinan-MG-1386.jpg" alt="Kelas2A" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Kegiatan Gotong Royong Lingkungan Prodi TI Bersama Kelas TI A (Poliwangi)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Kegiatan Bersih bersih dikampus Poliwangi mulai diterapkan pada Prodi TI pasalnya di lingkungan Prodi TI masih banyak sampah dan kotoran pohon yang berjatuhan, oleh karena nya Seluruh Anggota Kelas 2A bergotong royong
                  bersama Anggota kelas sebelah untuk membersihkan lingkungan Prodi TI. Setewlah kegiatan bersih bersih selesai kami seluruh masyarakat anggota TI yang telah melakukan bersih bersih mengadakan kegiatan Senam Pagi, dan
                  kemudian kegiatan diakhiri dengan Sarapan Bersama.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/3wq8thT3/Salinan-IMG-20201206-132206.jpg" alt="Hmti" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Kegiatan Akhir Carus Hmti Di Kalipuro (Banyuwangi)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Saya pernah masuk untuk menjadi Calon Pengurus HMTI, saya dan rekan saya bersama untuk mewudjudkan program dan rencana kelompok kami, diantaranya kami membuat sebuah rencana untuk kegiatan akhir, dimana kami sebelumnya
                  telah memperoleh rezeki dari hasil memperjual belikan produk kelompok kami yaitu Jamur Cripsy dan Kerupuk Tempe. Kemudian kami menyumbangkannya kepada salah satu daerah wisata di Kalipuro yaitu Bukit Sewu Sambang dalam
                  bentuk Tempat sampah, Bahan Makanan Kepada Masyarakat Sekitar Kawasan.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/4NzYqn48/robotika-01.jpg" alt="Robotika" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Dokumentasi Kegiatan Webinar Bersama Anggota UKM Robotika (Banyuwangi)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Setelah mengadakan kegiatan Webinar sekaligus Masa Penerimaan Anggota Baru UKM Robotika, Kami melakukan foto bersama anggota UKM Robotika dan Pengurus Organisasi Robotika Poliwangi.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/43y4vdj8/Salinan-IMG-20210221-103041.jpg" alt="Robotika" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Kegiatan Serah Terima Jabatan Pengurus Baru Tahun 2021 UKM Robotika (Poliwangi)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Untuk melanjutkan Harapan dari seluruh angoota UKM Robotika, maka dengan ini dilakukan Regenerasi anggota UKM Robotika yang baru, dengan Harapan bahwa UKM Robotika yang akan datang akan menjadi UKM yang Maju Digarda depan
                  mengenai Teknologi.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/L8SS36VZ/DSC03092.jpg" alt="Smk" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Keluarga Besar Kelas XI TKJ 1 (SMUHERO)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Dengan usaha dan kerja sama yang baik, kelas Saya mendapatkan salah satu predikat kelas TKJ Terbaik di SMK Muhammadiyah 6 Rogojampi. Dengan teman teman yang baik dan Wali Kelas yang ramah memberikan semangat bagi kami
                  untuk terus belajar dan menjalin pertemanan.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/pdPSpmJq/20180129-081829.jpg" alt="Smk" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Kompetisi Fisika dan Kimia dalam Bidang Roket Air Se Karesidenan Besuki (Genteng)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Saya bersama rekan saya Okky Iliayanto dan Miftahul Indry serta Guru pendamping Bu Anita Herlina, bersama sama membentuk tim untuk mengikuti kegiatan perlombaan Roket Air yang di selenggarakan di Lapangan Maron Genteng,
                  dengan bermodalkan usaha, niat dan beberapa alat yang cukup kami ikut meramaikan sekaligus berkompetisi untuk memenangkan perlombaan ini.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/CxGthGkR/smk-03.jpg" alt="Smk" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Kompetisi Wirausahawan Muda Kreatif 2019 (Banyuwangi)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Saya dan Rekan Saya Ibu membentuk satu kelompok dan mengikuti kegiatan Kompetisi yang diselenggarakan di UNTAG Banyuwangi, kami sama sama mengusulkan ide membuat usaha sederhana yaitu kami menjual Produk Sate Jamur dengan
                  Aneka macam rasa, dengan bermodalkan usaha, senyum dan sate jamur kelompok kami adalah salah satu kelompok yang laris daganannya, namun sayangnya kelompok kami masih belum juara pada kegiatan ini.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/YCKZBnGc/smk-04.jpg" alt="Smk" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Lomba Pekan Olaharaga Banyuwangi dalam Cabang Olahraga DrumBand (Banyuwangi)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Saya adalah salah satu anggota dari grup DrumBand Taruna Melati DC pada SMK Muhammadiyah 6 Rogojampi. Kami mengikuti kegiatan Pekan Olahraga ini untuk berlomba dan kami berjuang untuk mendapatkan juara, dengan modal usaha
                  dan waktu yang diluangkan kami berjuang dan akhirnya kami mendapatkan kesempatan emas untuk memenangkan kompetisi PORKAB dengan memperoleh juara 2 Se Banyuwangi.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://i.postimg.cc/4yqPDNz5/IMG20200229161151.jpg" alt="Smk" class="w-full" />
              <div class="py-8 px-6">
                <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary" href="#">Teknisi Komputer (IT Support) SMK Muhammadiyah 6 Rogojampi (SMUHERO)</a></h3>
                <p class="font-medium text-secondary text-base mb-6 text-justify">
                  Saya pernah menjadi anggota dari IT Support SMK Muhammadiyah 6 Rogojampi, dimana saya dan rekan saya dipercaya oleh Lembaga dan Guru TKJ untuk mempersiapkan Lab Komputer guna berlangsung nya Ujian dari SMP luar sekolah
                  maupun SMK Muhammadiyah 6 Rogojampi. Tidak hanya itu kami juga bertindak lanjut ketika ada troubleshoot dilapangan saat Siswa sedang mengerjakan Ujian.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Gallery Section End -->

  <!-- Article Section Start -->
  <section id="article" class="pt-36 pb-32 bg-slate-800">
    <!-- Container for Article Blog -->
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary">Article</h4>
          <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Artikel Terkini</h2>
          <p class="font-medium text-md text-secondary md:text-lg">Dibawah ini Artikel Tips dan Trik Untuk menjadi Seorang Programmer (Random Content)</p>
        </div>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10" data-aos="fade-up" data-aos-anchor-placement="center-center">
            <img src="https://source.unsplash.com/360x200?programming" alt="Programming" class="w-full" />
            <div class="py-8 px-6">
              <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate" href="#">Tips Menjadi Seorang Progammer</a></h3>
              <p class="font-medium text-secondary text-base mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, impedit?</p>
              <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80"> Baca Selengkapnya </a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10" data-aos="fade-up" data-aos-anchor-placement="center-center">
            <img src="https://source.unsplash.com/360x200?mobile+apps" alt="Programming" class="w-full" />
            <div class="py-8 px-6">
              <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate" href="#">Aplikasi Mobile Terpopuler</a></h3>
              <p class="font-medium text-secondary text-base mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam dolores molestias deserunt doloremque quasi!</p>
              <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80"> Baca Selengkapnya </a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10" data-aos="fade-up" data-aos-anchor-placement="center-center">
            <img src="https://source.unsplash.com/360x200?setup+desk+programer" alt="Programming" class="w-full" />
            <div class="py-8 px-6">
              <h3><a class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate" href="#">Membangun Lingkungan Yang Nyaman Untuk Bekerja</a></h3>
              <p class="font-medium text-secondary text-base mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore excepturi ullam soluta quisquam.</p>
              <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80"> Baca Selengkapnya </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Article Blog Section End -->

  <!-- Contact Section Start -->
  <section id="contact" class="pt-36 pb-32">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary">Contact</h4>
          <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Saya</h2>
          <p class="font-medium text-md text-secondary md:text-lg">Masukan kesan dan pesan Anda kepada Saya</p>
        </div>
      </div>
      <form>
        <div class="w-full lg:w-2/3 lg:mx-auto">
          <div class="w-full px-4 mb-8" data-aos="fade-up" data-aos-anchor-placement="center-center">
            <label for="name" class="text-base text-primary font-bold">Nama</label>
            <input type="text" name="name" id="name" class="w-full bg-slate-200 p-3 rounded-md text-dark focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8" data-aos="fade-up" data-aos-anchor-placement="center-center">
            <label for="email" class="text-base text-primary font-bold">Email</label>
            <input type="text" name="email" id="email" class="w-full bg-slate-200 p-3 rounded-md text-dark focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8" data-aos="fade-up" data-aos-anchor-placement="center-center">
            <label for="pesan" class="text-base text-primary font-bold">Pesan</label>
            <textarea type="text" name="pesan" id="pesan" class="w-full bg-slate-200 p-3 rounded-md text-dark focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-28"></textarea>
          </div>
          <div class="w-full px-4">
            <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-300">Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- Contact Section End -->

  <!-- Php native menghitung jumlah pengunjung -->
  <?php
  // Nama file yang digunakan untuk menyimpan jumlah pengunjung
  $file_pengunjung = "jumlah_pengunjung.txt";

  // Cek apakah file sudah ada
  if (file_exists($file_pengunjung)) {
    // Jika file sudah ada, baca jumlah pengunjung dari file
    $jumlah_pengunjung = file_get_contents($file_pengunjung);
    // Tambahkan jumlah pengunjung
    $jumlah_pengunjung++;
    // Simpan kembali jumlah pengunjung ke file
    file_put_contents($file_pengunjung, $jumlah_pengunjung);
  } else {
    // Jika file belum ada, buat file baru dan isi jumlah pengunjung dengan 1
    file_put_contents($file_pengunjung, 1);
    $jumlah_pengunjung = 1;
  }
  ?>

  <!-- Footer Start -->
  <footer class="bg-dark pt-24 pb-12">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full-px-4 mb-12 text-slate-300 font-medium md:w-1/3">
          <h2 class="font-bold text-2xl text-white mb-5">AKUUTAUF</h2>
          <h2 class="font-bold text-xl mb-2">Hubungi Kami</h2>
          <p>taufikhidayat09121@gmail.com</p>
          <p>Jln Iskandar Muda No. 125 Bedewang</p>
          <p>Banyuwangi - Jawa Timur</p>
        </div>
        <div class="w-full px-3 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
          <ul class="text-slate-300">
            <li><a href="#gallery" class="inline-block text-base mb-3 hover:text-primary">Programming</a></li>
            <li><a href="#gallery" class="inline-block text-base mb-3 hover:text-primary">Aplikasi Populer</a></li>
            <li><a href="#gallery" class="inline-block text-base mb-3 hover:text-primary">Lingkungan Programmer</a></li>
          </ul>
        </div>
        <div class="w-full px-2 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
          <ul class="text-slate-300">
            <li><a href="#home" class="inline-block text-base mb-3 hover:text-primary">Home</a></li>
            <li><a href="#profile" class="inline-block text-base mb-3 hover:text-primary">Profile</a></li>
            <li><a href="#projects" class="inline-block text-base mb-3 hover:text-primary">Projects</a></li>
            <li><a href="#partners" class="inline-block text-base mb-3 hover:text-primary">Partners</a></li>
            <li><a href="#gallery" class="inline-block text-base mb-3 hover:text-primary">Gallery</a></li>
            <li><a href="#article" class="inline-block text-base mb-3 hover:text-primary">Article</a></li>
            <li><a href="#contact" class="inline-block text-base mb-3 hover:text-primary">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="w-full pt-16 border-t border-slate-700">
        <div class="flex items-center justify-center mb-5">
          <!-- Youtube -->
          <a href="https://www.youtube.com/channel/UCZloAMpBDngVGf6hywQNC9w" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>YouTube</title>
              <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
            </svg>
          </a>

          <!-- Instagram -->
          <a href="https://www.instagram.com/akuutauf_/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Instagram</title>
              <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
            </svg>
          </a>
          <!-- Twitterr -->
          <a href="https://twitter.com/akuutauf_" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Twitter</title>
              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
            </svg>
          </a>
          <!-- GitHub -->
          <a href="https://github.com/akuutauf" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white text-slate-300">
            <svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>GitHub</title>
              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
            </svg>
          </a>
        </div>
        <p class="font-medium text-sm text-slate-500 text-center">
          Dibuat dengan <span class="text-pink-500">❤️</span> oleh <a href="https://www.instagram.com/akuutauf_/" target="_blank" class="font-bold text-white">Taufik Hidayat</a>, dengan Perasaan
          <span class="font-bold text-white">Bahagia.</span><br>
          Pengunjung Website (<?= $jumlah_pengunjung  ?>)
        </p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- AOS Animation -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Javascript -->
  <script src="dist/js/script.js"></script>

  <!-- Javascript Canvas 2D -->
  <script src="dist/js/canvas_2d.js"></script>

  <script>
    var typed = new Typed('#typed-text', {
      strings: ['Salam Kenal!', 'Salam kenal dengan Anda!'],
      typeSpeed: 20,
      backSpeed: 20,
      loop: true,
      smartBackspace: false,
      showCursor: false
    });
  </script>

</body>

</html>