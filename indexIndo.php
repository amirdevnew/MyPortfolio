<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">

    <!-- FA CSS -->
    <link rel="stylesheet" href="./vendor/fa/css/all.min.css">

    <!-- My Style -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="./vendor/aos/aos.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="./vendor/animate/animate.min.css">

    <!-- THREE -->
    <!-- <script src="vendor/build/three.module.js" type="module"></script>
    <script src="vendor/build/OrbitControls.js" type="module"></script>
    <script src="vendor/build/GLTFLoader.js" type="module"></script>
    <script src="vendor/build/RGBELoader.js" type="module"></script> -->
</head>

<body class="bg-black">
    <div class="boxNavBar text-center position-fixed text-white">
        <img src="assets/img/menu-bar.png" alt="menu" class="openMenu" width="100%">
    </div>

    <div class="myNavBar text-center position-fixed">
        <canvas class="mycanvas2 canvashp"></canvas>
        <div class="container">
            <div class="navHp">
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <h3 class="aboutLinkHp">About</h3>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <h3 class="skillsLinkHp">Skills</h3>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <h3 class="portfolioLinkHp">Portfolio</h3>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <h3 class="testimonialLinkHp">Testimonial</h3>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <h3 class="contactLinkHp">Contact</h3>
                    </div>
                </div>



                <div class="row mt-4 position-relative">
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-danger btn-lang2 btn-tomato btn-en">English <i class="fas fa-caret-down"></i></button>
                    </div>
                    <div class="box-lang2 position-absolute">
                        <div class="container">
                            <div class="row justify-content-left pt-2">
                                <div class="col-12">
                                    <p class="stabilo en">English</p>
                                </div>
                                <div class="col-12">
                                    <p class="stabilo in">Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="myoverlay position-fixed">
        <div class="boxloading position-fixed"></div>
    </div>
    <div class="myBody">
        <!-- Header -->
        <div class="container-fluid my-header position-relative p-0">
            <div class="elemenVideoAmir p-0">
                <video autoplay loop muted playsinline style="z-index: 2;" class="video-bg">
                    <source src="./assets/video/sunset2.mp4" type="video/mp4">
                </video>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-8 pt-5 text-center mt-5" style="z-index: 3;">
                    <img src="assets/img/headerLogo.svg" width="100%" alt="myLogo" class="myLogo animate__backInDown animate_animated mt-5 d-none d-lg-block">
                    <img src="assets/img/headerLogo2.svg" width="100%" alt="myLogo" class="myLogo animate__backInDown animate_animated mt-5 d-block d-lg-none" >
                </div>
            </div>
            <img src="assets/img/bgPohon.png" alt="pohon" width="100%" style="z-index: 0;" class="pohon_sunset position-absolute text-center">
            

            <!-- <div class="row  justify-content-center ">
            <div class="col-12 text-center">
            </div>
        </div> -->
        </div>
        <!-- Tutup Header -->




        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark myNavbar" style="z-index: 5;">
            <canvas class="mycanvas canvaslaptop"></canvas>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item activeLink mr-5">
                        <p class="nav-link aboutLink">About <span class="sr-only">(current)</span></p>
                    </li>
                    <li class="nav-item  mr-5">
                        <p class="nav-link skillsLink">Skills</p>
                    </li>
                    <li class="nav-item  mr-5">
                        <p class="nav-link portfolioLink">Portfolio</p>
                    </li>
                    <li class="nav-item  mr-5">
                        <p class="nav-link testimonialLink">Testimonial</p>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link contactLink">Contact</p>
                    </li>
                </ul>
                <div class="position-relative">
                    <button type="button" class="btn btn-danger btn-tomato btn-lang btn-en">English <i class="fas fa-caret-down"></i></button>
                    <div class="box-lang position-absolute">
                        <div class="container">
                            <div class="row justify-content-left pt-2">
                                <div class="col-12">
                                    <p class="stabilo en">English</p>
                                </div>
                                <div class="col-12">
                                    <p class="stabilo in">Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section class="about mb-3 mt-5">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-sm-6">
                        <h1 class="judul fontAkronim">About</h1>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-6 text-left text-white myAboutP">
                        <p data-aos="fade-up" class="">Hello, my name is Amir Ahmad Bamahfud.</p>
                        <p data-aos="fade-up">I would like to share a brief story about my journey in technology and programming. I hope my experience can inspire others who are starting their own learning journey.</p>
                        <p data-aos="fade-up">My interest in programming began when I was 12 years old, and by the age of 14, I became deeply committed to learning software development. My father introduced me to programming through game development using Construct 2, where I learned the foundations of programming logic and problem-solving.</p>
                        <p data-aos="fade-up">As I continued learning, I shifted my focus to Web Development. My father often told me that web development sits at the center of many programming disciplines because it teaches fundamental concepts through technologies such as HTML, CSS, JavaScript, and PHP. This foundation helped me understand new programming languages and technologies more easily as I progressed.</p>
                        <p data-aos="fade-up">Like every developer, I faced many challenges. One of the most memorable moments was learning JavaScript Closures. At the time, it felt extremely difficult and confusing, but overcoming those challenges gave me a deeper understanding of programming concepts and strengthened my persistence. I still remember creating a simple public transportation game using JavaScript in the console just to better understand arrays, methods, and programming logic.</p>
                        <p data-aos="fade-up">In 2021, I entered a Software Engineering Vocational High School, where I expanded my knowledge into Java, C#, computer networking, and other technical subjects. Because I already had experience with programming fundamentals, I was able to adapt quickly and focus on learning more advanced concepts.</p>
                        <p data-aos="fade-up">Beyond programming, I also realized the importance of design. I believe great products should not only be functional, secure, and reliable on the backend, but also visually appealing and enjoyable to use. This motivated me to learn tools such as Figma, Adobe Photoshop, Adobe Illustrator, Lunacy, and video editing software to improve my ability to create complete digital experiences.</p>
                        <p data-aos="fade-up">One principle has guided me throughout my journey: "Stay Hungry, Stay Foolish." Inspired by my father's admiration for Steve Jobs, this mindset reminds me that there will always be more to learn, new challenges to overcome, and opportunities to grow.</p>
                        <p data-aos="fade-up">Today, I continue to develop my skills as a developer and designer while striving to create technology that can positively impact people and contribute to society.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="skills mt-5">
            <div class="container">
                <div class="row justify-content-center mb-5 text-center">
                    <div class="col-sm-6">
                        <h1 class="judul fontAkronim">Skills</h1>
                    </div>
                </div>

                <div class="row text-left text-white justify-content-center row-gap-3">
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox b-html py-3" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="500">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/html.png" alt="html" width="100px">
                                <h1 class="d-none d-lg-flex">HTML</h1>
                                <h3 class="d-flex d-lg-none">HTML</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox b-css py-3" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/css.png" alt="css" width="100px">
                                <h1 class="d-none d-lg-flex">CSS</h1>
                                <h3 class="d-flex d-lg-none">CSS</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox b-js py-3" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="500">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/javascript.png" alt="javascript" width="100px">
                                <h1 class="d-none d-lg-flex">JS</h1>
                                <h3 class="d-flex d-lg-none">JS</h3>
                            </div>
                            <!-- <h1 class="d-none d-lg-flex"><span data-purecounter-start="0" data-purecounter-once="false" data-purecounter-end="98" class="purecounter">0</span>%</h1> -->
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/phplogo.png" alt="php" width="100px">
                                <h1 class="d-none d-lg-flex">PHP</h1>
                                <h3 class="d-flex d-lg-none">PHP</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3 b-codeigniter" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/codeigniterlogo.png" alt="codeigniter" width="100px">
                                <h1 class="d-none d-lg-flex">CodeIgniter</h1>
                                <h3 class="d-flex d-lg-none">CodeIgniter</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3 b-bootstrap" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/bootstraplogo.png" alt="bootstrap" width="100px">
                                <h1 class="d-none d-lg-flex">Bootstrap</h1>
                                <h3 class="d-flex d-lg-none">Bootstrap</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3 b-jquery" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/jquerylogo.png" alt="jquery" width="100px">
                                <h1 class="d-none d-lg-flex">jQuery</h1>
                                <h3 class="d-flex d-lg-none">jQuery</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3 b-vuejs" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/vuejslogo.png" alt="vuejs" width="100px">
                                <h1 class="d-none d-lg-flex">VueJS</h1>
                                <h3 class="d-flex d-lg-none">VueJS</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3 b-flutter" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/flutterlogo.png" alt="flutter" width="100px">
                                <h1 class="d-none d-lg-flex">Flutter</h1>
                                <h3 class="d-flex d-lg-none">Flutter</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3 b-java" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/javalogo.png" alt="java" width="100px">
                                <h1 class="d-none d-lg-flex">Java</h1>
                                <h3 class="d-flex d-lg-none">Java</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3 b-kotlin" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/kotlin.png" alt="kotlin" width="100px">
                                <h1 class="d-none d-lg-flex">Kotlin</h1>
                                <h3 class="d-flex d-lg-none">Kotlin</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3 b-csharp" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/csharplogo.png" alt="csharp" width="100px">
                                <h1 class="d-none d-lg-flex">C#</h1>
                                <h3 class="d-flex d-lg-none">C#</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="mySkillsBox py-3 b-more" data-aos-duration="1000" data-aos-delay="500" data-aos="flip-down">
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center row-gap-2 flex-wrap flex-column">
                                <img src="assets/img/morelogo.png" alt="more" width="100px">
                                <h1 class="d-none d-lg-flex">& more</h1>
                                <h3 class="d-flex d-lg-none">& more</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio mt-5 pt-5 text-white">
            <div class="container">
                <div class="row justify-content-center mb-5 text-center">
                    <div class="col-sm-6">
                        <h1 class="judul fontAkronim">My Work</h1>
                    </div>
                </div>

                <div class="row text-left leftAl mt-5 pt-5">
                    <div class="col-12">
                        <div class="container-fluid">
                            <div class="row row-gap-3">
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home2.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home3.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home4.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home5.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home6.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home7.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home8.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home9.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home10.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home11.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/pedia_home12.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 portmasakanrumahpedia">
                        <div class="row">
                            <div class="col">
                                <h1 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class="fontAkronim">MASAKAN RUMAH PEDIA</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mt-5" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000">
                                    Aplikasi <span class="stabilo">MasakanRumahPedia</span> merupakan <span class="stabilo">Website & WebApp</span> yang menyediakan tempat keluarga untuk berkreasi membuat masakan yang bisa ditawarkan pada pengunjung online di seluruh Indonesia bahkan dunia untuk mendapatkan masakan <span class="stabilo">khas rumahan</span> yang dibuat oleh anggota keluarga terutama Ibu/Mama, sehingga menjadi <span class="stabilo">obat rindu</span> menikmati masakan rumah. Selain membantu pengunjung mendapatkan masakan yang diidamkan, juga membantu <span class="stabilo">memberdayakan keluarga</span> melalui dapur keluarga dengan adanya <span class="stabilo">sistem lelang</span> yang akan membuat nilai masakan lebih berharga dan bisa menjadi <span class="stabilo">tambahan pendapatan</span> untuk keluarga. 
                                </h4>
                                <h4 class="mt-5" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000">
                                    Di Proyek ini <span class="stabilo">saya</span> bekerja secara tim dengan <span class="stabilo">adik saya</span>. Saya berperan mengembangkan aplikasi ini <span class="stabilo">di sisi Web</span>. <span class="stabilo">Adik saya</span> berperan mengembangkan aplikasi di sisi <span class="stabilo">Mobile</span>. Teknologi yang digunakan di aplikasi ini adalah menggunakan <span class="stabilo">PHP</span> untuk backend, <span class="stabilo">CSS</span> untuk keindahan UI, and <span class="stabilo">HTML</span> untuk kerangka. Dan kami menggunakan teknologi <span class="stabilo">bahasa terbaru</span> dan populer saat ini untuk mobile yaitu <span class="stabilo">FLUTTER</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-right rightAl mt-5 pt-5">
                    <div class="col-12">
                        <div class="container-fluid">
                            <div class="row row-gap-3">
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/preplus1.png" width="100%" data-aos="flip-right" data-aos-duration="1000" alt="Presence+">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/preplus9.png" width="100%" data-aos="flip-right" data-aos-duration="1000" alt="Presence+">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/preplus2.png" width="100%" data-aos="flip-right" data-aos-duration="1000" alt="Presence+">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/preplus3.png" width="100%" data-aos="flip-right" data-aos-duration="1000" alt="Presence+">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/preplus4.png" width="100%" data-aos="flip-right" data-aos-duration="1000" alt="Presence+">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/preplus5.png" width="100%" data-aos="flip-right" data-aos-duration="1000" alt="Presence+">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/preplus6.png" width="100%" data-aos="flip-right" data-aos-duration="1000" alt="Presence+">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/preplus7.png" width="100%" data-aos="flip-right" data-aos-duration="1000" alt="Presence+">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/preplus8.png" width="100%" data-aos="flip-right" data-aos-duration="1000" alt="Presence+">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 portpreplus">
                        <div class="row">
                            <div class="col">
                                <h1 data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="500" class="fontAkronim">Presence+</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                                    <span class="stabilo">Presence+</span> merupakan sistem <span class="stabilo">manajemen kehadiran</span> berbasis web yang dibangun dengan teknologi <span class="stabilo">Kode QR</span> untuk menyederhanakan pelacakan kehadiran karyawan dan siswa.
                                </h4>
                                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                                    Di Proyek ini <span class="stabilo">saya</span> bekerja sendiri. mengembangkan aplikasi ini untuk berjalan di sisi <span class="stabilo">WEB</span>. Teknologi yang digunakan di aplikasi ini adalah menggunakan <span class="stabilo">JAVA</span> untuk backend, <span class="stabilo">CSS</span> untuk keindahan UI, and <span class="stabilo">HTML</span> untuk kerangka.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-left leftAl mt-5 pt-5">
                    <div class="col-12">
                        <div class="container-fluid">
                            <div class="row row-gap-3">
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/ngaduapps1.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/ngaduapps2.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/ngaduapps3.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/ngaduapps4.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/ngaduapps5.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                                <div class="col-6 col-lg-4">
                                    <img class="rounded" src="assets/img/ngaduapps6.png" width="100%" data-aos="flip-left" data-aos-duration="1000" alt="masakanrumahpedia">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 portmasakanrumahpedia">
                        <div class="row">
                            <div class="col">
                                <h1 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class="fontAkronim">NgaduApps</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                                    <span class="stabilo">NgaduApps</span> merupakan sebuah platform <span class="stabilo">pengaduan dan pelaporan</span> komunitas yang memungkinkan warga untuk mengirimkan <span class="stabilo">laporan</span>, <span class="stabilo">melacak status</span> pengaduan, dan berkomunikasi dengan administrator melalui sistem berbasis web.
                                </h4>
                                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                                    Di Proyek ini <span class="stabilo">saya</span> bekerja sendiri. mengembangkan aplikasi ini untuk berjalan di sisi <span class="stabilo">WEB</span>. Teknologi yang digunakan di aplikasi ini adalah menggunakan <span class="stabilo">PHP</span> untuk backend, <span class="stabilo">CSS</span> untuk keindahan UI, and <span class="stabilo">HTML</span> untuk kerangka dan juga menggunakan framework <span class="stabilo">CodeIgniter 4</span>.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial mb-5 mt-5 pt-5 text-white">
            <div class="container">
                <div class="row justify-content-center mb-5 text-center">
                    <div class="col-sm-6">
                        <h1 class="judul fontAkronim">What are they saying?</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <h1 class="judul">"</h1>
                    </div>
                </div>

                <div class="row text-center justify-content-center">
                    <div id="carouselTestimoniControls" class="carousel slide col-12" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-4 mx-auto">
                                    <h4 class="testi1">Even though he's relatively young, I'm satisfied with his work!</h4>
                                    <small class="stabilo text-center">Sarah Corner, CEO Coffe's First</small>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-4 mx-auto">
                                    <h4 class="testi2">For me, he is the best!</h4>
                                    <small class="stabilo text-center">Andrew Mathew, CEO Monday.com</small>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-4 mx-auto">
                                    <h4 class="testi3">The security system is very secure. He builds a multi-layered security system to the core of his program. I can't even get past it. Good!</h4>
                                    <small class="stabilo text-center">Edward Snowden, Hacker</small>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselTestimoniControls" data-slide="prev">
                            <span class="carousel-control-prev-icon stabilo judul" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselTestimoniControls" data-slide="next">
                            <span class="carousel-control-next-icon stabilo judul" aria-hidden="true"></span>
                            <span class="sr-only stabilo judul">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center mb-5 text-center">
                    <div class="col-sm-6">
                        <h1 class="judul fontAkronim">Contact Me(Us)</h1>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-3 text-center">
                        <a target="_blank" href="https://www.zoecomputer.com/"><img class="icon2Social" src="assets/img/icon/mouse_edge.svg" width="75%" alt="Web Link"></a>
                    </div>
                    <div class="col-3 text-center">
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100082869495721"><img class="icon2Social" src="assets/img/icon/Facebook.png" width="75%" alt="Facebook Link"></a>
                    </div>
                    <div class="col-3 text-center">
                        <a target="_blank" href="https://www.instagram.com/berkahsoft/"><img class="icon2Social" src="assets/img/icon/Instagram.png" alt="Instagram Link" width="75%"></a>
                    </div>
                    <div class="col-3 text-center">
                        <a target="_blank" href="https://www.linkedin.com/in/berkah-soft-776075244/"><img class="icon2Social" src="assets/img/icon/LinkedIn.png" alt="Linkedln Link" width="75%"></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-3 text-center">
                        <a target="_blank" href="https://www.tiktok.com/@berkahsoft"><img class="icon2Social" src="assets/img/icon/Tiktok.png" alt="TikTok Link" width="75%"></a>
                    </div>
                    <div class="col-3 text-center">
                        <a target="_blank" href="https://twitter.com/berkahsoft"><img class="icon2Social" src="assets/img/icon/Twitter.png" alt="Twitter Link" width="75%"></a>
                    </div>
                    <div class="col-3 text-center">
                        <a target="_blank" href="https://www.youtube.com/channel/UCaImjyhcBciRPWjYWhEEh4Q"><img class="icon2Social" src="assets/img/icon/Youtube.png" alt="Youtube Link" width="75%"></a>
                    </div>
                    <div class="col-3 text-center">
                        <a target="_blank" href="https://github.com/keluargaprogrammermilenial"><img class="icon2Social" src="assets/img/icon/Github.png" alt="Github Link" width="75%"></a>
                    </div>
                </div>
            </div>
        </section>


        <footer class="my-5 pt-5">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-3 text-center stabilo">2022. Amir Ahmad Bamahfud | ZoeComputer</div>
                </div>
            </div>
        </footer>

    </div>
    <div class="backToTop text-center text-white position-fixed"><i class="fas fa-angle-double-up"></i></div>
    <audio hidden autoplay="true" class="myAudio" loop>
        <source src="./assets/audio/burung.mp3" type="audio/mp3">
    </audio>

    <!-- THREE -->
    <script type="module">
        // MASUKNO SINI LINK IMPORT KE FILE three.module.js
        import * as THREE from "./vendor/build/three.module.js";

        // SAMA, MASUK NO SINI JUGA LINK KE FILE OrbitControls.js
        import {
            OrbitControls
        } from "./vendor/build/OrbitControls.js";

        // SAMA JUGA CARA E SEPERTI DIATAS
        import {
            GLTFLoader
        } from "./vendor/build/GLTFLoader.js";

        import {
            RGBELoader
        } from "./vendor/build/RGBELoader.js";


        /**
         * Base
         */
        // Canvas


        // MASUK NO SINI JEK, KELAS CANVAS MU. BUAT TO CANVAS KOSONG DI HTML MU. KASIK ONO CLASS YANG NANTI
        // DIMASUK NO DIBAWAH INI
        const canvas = document.querySelector(".mycanvas"); // KELAS KU NAMA mycanvas, TIRUEN LEK MAU

        // Scene
        const scene = new THREE.Scene();

        /**
         * Models
         */

        const gltfLoader = new GLTFLoader();

        // dracoLoader.setDecoderPath("https://www.gstatic.com/draco/v1/decoders/");
        // gltfLoader.setDRACOLoader(dracoLoader);
        // let mixerAnimation = null;

        // MASUKNO SINI LINK KE FILE GLTF MU, BIASA E SEMUA AKHIR E scene.gltf
        gltfLoader.load("./assets/gltf/2_pohon_palm/scene.gltf", (gltf) => {

            //   gltf.scene.scale.set(0.025, 0.025, 0.025);
            // Animation
            // mixerAnimation = new THREE.AnimationMixer(gltf.scene);
            // const action = mixerAnimation.clipAction(gltf.animations[0]);
            // action.play();
            gltf.scene.position.set(0, -5, 0)
            scene.add(gltf.scene);
        });

        /**
         * Lights
         */
        const ambientLight = new THREE.AmbientLight(0xffffff, 1);
        scene.add(ambientLight);

        const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
        directionalLight.castShadow = true;
        directionalLight.position.set(3, 3, 3);
        scene.add(directionalLight);

        /**
         * Sizes
         */
        const sizes = {
            width: 100,
            height: 100,
        };

        window.addEventListener("resize", () => {
            // // Update sizes
            // sizes.width = window.innerWidth;
            // sizes.height = window.innerHeight;

            // Update camera
            camera.aspect = sizes.width / sizes.height;
            camera.updateProjectionMatrix();

            // Update renderer
            renderer.setSize(sizes.width, sizes.height);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        });

        /**
         * Camera
         */
        // Base camera
        const camera = new THREE.PerspectiveCamera(
            75,
            sizes.width / sizes.height,
            0.1,
            100
        );
        camera.position.set(2.916173, 1, 20);
        scene.add(camera);

        // Controls
        const controls = new OrbitControls(camera, canvas);
        controls.target.set(0, 0.75, 0);
        controls.autoRotate = true;
        controls.enableRotate = true;
        controls.enableZoom = false;
        /**
         * Renderer
         */
        const renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            alpha: true,
            antialias: true,
        });
        renderer.shadowMap.enabled = true;
        renderer.shadowMap.type = THREE.PCFSoftShadowMap;
        renderer.setSize(sizes.width, sizes.height);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        /**
         * Animate
         */
        const clock = new THREE.Clock();
        let previousTime = 0;

        // Diatas adalah kesatu

        /**
         * Base
         */
        // Canvas


        // MASUK NO SINI JEK, KELAS CANVAS MU. BUAT TO CANVAS KOSONG DI HTML MU. KASIK ONO CLASS YANG NANTI
        // DIMASUK NO DIBAWAH INI
        const canvas2 = document.querySelector(".mycanvas2"); // KELAS KU NAMA mycanvas, TIRUEN LEK MAU

        // Scene
        const scene2 = new THREE.Scene();

        /**
         * Models
         */

        const gltfLoader2 = new GLTFLoader();

        // dracoLoader.setDecoderPath("https://www.gstatic.com/draco/v1/decoders/");
        // gltfLoader.setDRACOLoader(dracoLoader);
        // let mixerAnimation = null;

        // MASUKNO SINI LINK KE FILE GLTF MU, BIASA E SEMUA AKHIR E scene.gltf
        gltfLoader2.load("./assets/gltf/2_pohon_palm/scene.gltf", (gltf) => {

            //   gltf.scene.scale.set(0.025, 0.025, 0.025);
            // Animation
            // mixerAnimation = new THREE.AnimationMixer(gltf.scene);
            // const action = mixerAnimation.clipAction(gltf.animations[0]);
            // action.play();
            gltf.scene.position.set(0, -5, 0)
            scene2.add(gltf.scene);
        });

        /**
         * Lights
         */
        const ambientLight2 = new THREE.AmbientLight(0xffffff, 1);
        scene2.add(ambientLight2);

        const directionalLight2 = new THREE.DirectionalLight(0xffffff, 1);
        directionalLight2.castShadow = true;
        directionalLight2.position.set(3, 3, 3);
        scene2.add(directionalLight2);

        /**
         * Sizes
         */
        const sizes2 = {
            width: 100,
            height: 100,
        };

        window.addEventListener("resize", () => {
            // // Update sizes2
            // sizes2.width = window.innerWidth;
            // sizes2.height = window.innerHeight;

            // Update camera
            camera2.aspect = sizes2.width / sizes2.height;
            camera2.updateProjectionMatrix();

            // Update renderer
            renderer2.setSize(sizes2.width, sizes2.height);
            renderer2.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        });

        /**
         * Camera
         */
        // Base camera
        const camera2 = new THREE.PerspectiveCamera(
            75,
            sizes2.width / sizes2.height,
            0.1,
            100
        );
        camera2.position.set(2.916173, 1, 20);
        scene2.add(camera2);

        // Controls
        const controls2 = new OrbitControls(camera2, canvas2);
        controls2.target.set(0, 0.75, 0);
        controls2.autoRotate = true;
        controls2.enableRotate = true;
        controls2.enableZoom = false;

        /**
         * Renderer
         */
        const renderer2 = new THREE.WebGLRenderer({
            canvas: canvas2,
            alpha: true,
            antialias: true,
        });
        renderer2.shadowMap.enabled = true;
        renderer2.shadowMap.type = THREE.PCFSoftShadowMap;
        renderer2.setSize(sizes2.width, sizes2.height);
        renderer2.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        /**
         * Animate
         */
        const clock2 = new THREE.Clock();
        let previousTime2 = 0;

        const tick = () => {
            const elapsedTime = clock.getElapsedTime();
            const deltaTime = elapsedTime - previousTime;
            previousTime = elapsedTime;

            // Model animation
            // if (mixerAnimation) {
            //   mixerAnimation.update(deltaTime);
            // }

            // Update controls
            controls.update();

            // Render
            renderer.render(scene, camera);

            const elapsedTime2 = clock.getElapsedTime();
            const deltaTime2 = elapsedTime2 - previousTime2;
            previousTime2 = elapsedTime2;

            // Model animation
            // if (mixerAnimation) {
            //   mixerAnimation.update(deltaTime);
            // }

            // Update controls
            controls2.update();

            // Render
            renderer2.render(scene2, camera2);

            // Call tick again on the next frame
            window.requestAnimationFrame(tick);
        };

        tick();
    </script>


    <!-- JQUERY -->
    <script src="./vendor/bootstrap/js/jquery-3.6.0.min.js"></script>

    <!-- AOS JS -->
    <script src="./vendor/aos/aos.js"></script>

    <!-- FA JS -->
    <script src="./vendor/fa/js/all.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="./vendor/purecounter/purecounter_vanilla.js"></script>


    <!-- Vanilla Tilt -->
    <script type="text/javascript" src="vendor/vanilla_tilt/vanilla-tilt.min.js"></script>

    <!-- My Scripts -->
    <script src="./assets/js/script.js"></script>
</body>

</html>