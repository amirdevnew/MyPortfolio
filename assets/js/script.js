$(document).ready(function () {
    $('html, body').animate({ scrollTop: "0" }, 400);
    setTimeout(function () {
        $('.myoverlay').fadeOut();
        setTimeout(() => {
            $('.myBody').addClass('myBodyNormal');    
            $('html, body').animate({ scrollTop: "0" }, 400);
        }, 300);
    }, 2000);
});

$(document).on('click', function () {
    $('.myAudio').get(0).play();
    console.log('masuk');
});





setInterval(function () {
    let bodyWith = document.body.getBoundingClientRect().width;

    if (bodyWith < 768) {
        if ($('.boxNavBar img').hasClass('closeMenu')) {
            $('.myNavBar').css('display', 'block');
            setTimeout(() => {
                $('.myNavBar').addClass('myNavBarActive');
            }, 100);
        }
        $('.myNavbar').fadeOut();
        // toCenter('.portfolio .port1 h1, .portfolio .port1 h4, .portfolio .port2 h1, .portfolio .port2 h4, .portfolio .port3 h1, .portfolio .port2 h4');
        center('.rightAl');
        center('.leftAl', 'text-left');
        $('.port1 h1, .port3 h1').css('margin-top', '100px');
        $('.port2 h4').css('margin-bottom', '100px');
        
        $('.boxNavBar').fadeIn();
        $('.boxNavBar').addClass('boxNavBarActive');
    } else {
        $('.myNavBar').removeClass('myNavBarActive');
        setTimeout(() => {
            $('.myNavBar').css('display', 'none');
        }, 100);
        $('.boxNavBar').fadeOut();
        $('.boxNavBar').removeClass('boxNavBarActive');
        $('.port2 h4').css('margin-bottom', 0);
        $('.port1 h1, .port3 h1').css('margin-top', 0);
        center('.rightAl', 'text-right', false);
        center('.leftAl', 'text-left', false);
        $('.myNavbar').fadeIn();
    }
}, 500);

// Initialization AOS and Purecounter
AOS.init();
new PureCounter();

// // You can also pass an optional settings object
// // below listed default settings
// AOS.init({
//   // Global settings:
//   disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
//   startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
//   initClassName: 'aos-init', // class applied after initialization
//   animatedClassName: 'aos-animate', // class applied on animation
//   useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
//   disableMutationObserver: false, // disables automatic mutations' detections (advanced)
//   debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
//   throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

//   // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
//   offset: 120, // offset (in px) from the original trigger point
//   delay: 0, // values from 0 to 3000, with step 50ms
//   duration: 400, // values from 0 to 3000, with step 50ms
//   easing: 'ease', // default easing for AOS animations
//   once: false, // whether animation should happen only once - while scrolling down
//   mirror: false, // whether elements should animate out while scrolling past them
//   anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

// });

let wind = $(window);
let offMyLogo = $('.myLogo').offset().top;
let offMyNavbar = $('.myNavbar').offset().top;
let offAbout = $('.about').offset().top - 500;
let offSkills = $('.skills').offset().top - 200;
let offPortfolio = $('.portfolio').offset().top - 200;
let offTestimonial = $('.testimonial').offset().top - 200;
let offContact = $('.contact').offset().top - 200;
let jrkNavbar = 0;
$(window).on('scroll', function () {
    offMyLogo = $('.myLogo').offset().top;
    offMyNavbar = $('.myNavbar').offset().top;
    
    

    $('.myLogo').css('transform', `translateY(${wind.scrollTop() / 2}px)`);

    if (!($('.myNavbar').css('display') == 'none')) {
        offAbout = $('.about').offset().top - 500;
        offSkills = $('.skills').offset().top - 300;
        offPortfolio = $('.portfolio').offset().top - 200;
        offTestimonial = $('.testimonial').offset().top - 200;
        offContact = $('.contact').offset().top - 200;
        if ($('.btn-lang').hasClass('btn-in')) offContact = $('.contact').offset().top - 200;
        jrkNavbar = $('.myNavbar').height();
    }
    else {
        offAbout = $('.about').offset().top - 90;
        offSkills = $('.skills').offset().top - 30;
        offPortfolio = $('.portfolio').offset().top - 50;
        offTestimonial = $('.testimonial').offset().top - 50;
        offContact = $('.contact').offset().top - 50;
        jrkNavbar = 0
    }
    if ((wind.scrollTop() + jrkNavbar) >= $('.myNavbar').offset().top) {
        $('.myNavbar').addClass('sticky');
    } else {
        $('.myNavbar').removeClass('sticky');
    }

    if ((wind.scrollTop() + jrkNavbar) >= offAbout && (wind.scrollTop() + jrkNavbar) < offSkills) {
        $('.activeLink').removeClass('activeLink');
        $('.aboutLink, .aboutLinkHp').addClass('activeLink');
        $('.backToTop').css({opacity: 1, transform: 'scale(1)'});
    } else if ((wind.scrollTop() + jrkNavbar) >= offSkills && (wind.scrollTop() + jrkNavbar) < offPortfolio) {
        $('.activeLink').removeClass('activeLink');
        $('.skillsLink, .skillsLinkHp').addClass('activeLink');
    } else if ((wind.scrollTop() + jrkNavbar) >= offPortfolio && (wind.scrollTop() + jrkNavbar) < offTestimonial) {
        $('.activeLink').removeClass('activeLink');
        $('.portfolioLink, .portfolioLinkHp').addClass('activeLink');
    } else if ((wind.scrollTop() + jrkNavbar) >= offTestimonial  && (wind.scrollTop() + jrkNavbar) < offContact) {
        $('.activeLink').removeClass('activeLink');
        $('.testimonialLink, .testimonialLinkHp').addClass('activeLink');
    }  else if ((wind.scrollTop() + jrkNavbar) >= offContact) {
        $('.activeLink').removeClass('activeLink');
        $('.contactLink, .contactLinkHp').addClass('activeLink');
    } else {
        $('.activeLink').removeClass('activeLink');
        $('.backToTop').css({opacity: 0, transform: 'scale(.5)'});
    }

});

$('.btn-lang').on('click', function () {
    if($('.box-lang').css('opacity') == 1)
        $('.box-lang').css({
            opacity: 0,
            transform: 'translateY(-20px)'
        });
    else 
        $('.box-lang').css({
            opacity: 1,
            transform: 'translateY(0)'
        });
});

$('.btn-lang2').on('click', function () {
    if($('.box-lang2').css('opacity') == 1)
        $('.box-lang2').css({
            opacity: 0,
            transform: 'translateY(0px) translateX(-50%)'
        });
    else 
        $('.box-lang2').css({
            opacity: 1,
            transform: 'translateY(-30px) translateX(-50%)'
        });
});

$('p.en').on('click', function () {
    changeLanguange();
    $('.btn-lang, .btn-lang2').removeClass('btn-in').addClass('btn-en').html('English <i class="fas fa-caret-down"></i>');
});

$('p.in').on('click', function () {
    changeLanguange('in');
    $('.btn-lang, .btn-lang2').removeClass('btn-en').addClass('btn-in').html('Indonesia <i class="fas fa-caret-down"></i>');
});

$('.backToTop').on('click', function () {
    $('html, body').animate({ scrollTop: "0" }, 400);
});

$('.aboutLinkHp').on('click', function () {
    offAbout = $('.about').offset().top - 80;
    $('.myNavBar').removeClass('myNavBarActive');
    setTimeout(() => {
        $('.myNavBar').css('display', 'none');
    }, 100);
    $('.boxNavBar img').fadeOut().removeClass('closeMenu').addClass('openMenu');
    setTimeout(function () {
        $('.boxNavBar img').attr('src', 'assets/img/menu-bar.png').fadeIn();
        $('.boxNavBar').prop('disabled', false);
    }, 600);
    $('html, body').animate({ scrollTop: (offAbout) }, 400);
});

$('.aboutLink').on('click', function () {
    offAbout = $('.about').offset().top - 120;
    $('html, body').animate({ scrollTop: (offAbout) }, 400);
});

$('.skillsLinkHp').on('click', function () {
    offSkills = $('.skills').offset().top - 20;
    $('.myNavBar').removeClass('myNavBarActive');
    setTimeout(() => {
        $('.myNavBar').css('display', 'none');
    }, 100);
    $('.boxNavBar img').fadeOut().removeClass('closeMenu').addClass('openMenu');
    setTimeout(function () {
        $('.boxNavBar img').attr('src', 'assets/img/menu-bar.png').fadeIn();
        $('.boxNavBar').prop('disabled', false);
    }, 600);
    $('html, body').animate({ scrollTop: (offSkills) }, 400);
});

$('.skillsLink').on('click', function () {
    offSkills = $('.skills').offset().top - 290;
    $('html, body').animate({ scrollTop: (offSkills) }, 400);
});


$('.portfolioLinkHp').on('click', function () {
    offPortfolio = $('.portfolio').offset().top - 40;
    $('.myNavBar').removeClass('myNavBarActive');
    setTimeout(() => {
        $('.myNavBar').css('display', 'none');
    }, 100);
    $('.boxNavBar img').fadeOut().removeClass('closeMenu').addClass('openMenu');
    setTimeout(function () {
        $('.boxNavBar img').attr('src', 'assets/img/menu-bar.png').fadeIn();
        $('.boxNavBar').prop('disabled', false);
    }, 600);
    $('html, body').animate({ scrollTop: (offPortfolio) }, 400);
});

$('.portfolioLink').on('click', function () {
    offPortfolio = $('.portfolio').offset().top - 190;
    $('html, body').animate({ scrollTop: (offPortfolio) }, 400);
});

$('.testimonialLinkHp').on('click', function () {
    offTestimonial = $('.testimonial').offset().top - 40;
    $('.myNavBar').removeClass('myNavBarActive');
    setTimeout(() => {
        $('.myNavBar').css('display', 'none');
    }, 100);
    $('.boxNavBar img').fadeOut().removeClass('closeMenu').addClass('openMenu');
    setTimeout(function () {
        $('.boxNavBar img').attr('src', 'assets/img/menu-bar.png').fadeIn();
        $('.boxNavBar').prop('disabled', false);
    }, 600);
    $('html, body').animate({ scrollTop: (offTestimonial ) }, 400);
});

$('.testimonialLink').on('click', function () {
    offTestimonial = $('.testimonial').offset().top - 150;
    $('html, body').animate({ scrollTop: (offTestimonial) }, 400);
});

$('.contactLinkHp').on('click', function () {
    offContact = $('.contact').offset().top - 40;
    $('.myNavBar').removeClass('myNavBarActive');
    setTimeout(() => {
        $('.myNavBar').css('display', 'none');
    }, 100);
    $('.boxNavBar img').fadeOut().removeClass('closeMenu').addClass('openMenu');
    setTimeout(function () {
        $('.boxNavBar img').attr('src', 'assets/img/menu-bar.png').fadeIn();
        $('.boxNavBar').prop('disabled', false);
    }, 600);
    $('html, body').animate({ scrollTop: (offContact) }, 400);
});

$('.contactLink').on('click', function () {
    offContact = $('.contact').offset().top - 150;
    if ($('.btn-lang').hasClass('btn-in')) offContact = $('.contact').offset().top - 180;
    $('html, body').animate({ scrollTop: (offContact) }, 400);
});


$('.boxNavBar').on('click', function () {
    $('.boxNavBar').prop('disabled', true);
    if ($('.boxNavBar img').hasClass('openMenu')) {
        $('.boxNavBar img').fadeOut().removeClass('openMenu').addClass('closeMenu');
        setTimeout(function () {
            $('.boxNavBar img').attr('src', 'assets/img/close.png').fadeIn();
        }, 600);

        $('.myNavBar').css('display', 'block');
        setTimeout(() => {
            $('.myNavBar').addClass('myNavBarActive');
            $('.boxNavBar').prop('disabled', false);
        }, 100);
    } else {
        $('.myNavBar').removeClass('myNavBarActive');
        setTimeout(() => {
            $('.myNavBar').css('display', 'none');
        }, 100);
        $('.boxNavBar img').fadeOut().removeClass('closeMenu').addClass('openMenu');
        setTimeout(function () {
            $('.boxNavBar img').attr('src', 'assets/img/menu-bar.png').fadeIn();
            $('.boxNavBar').prop('disabled', false);
        }, 600);
    }
    
});


// Functions
function changeLanguange(to = 'en') {
    if (to == 'in') {
        $('.myoverlay').fadeIn();
        setTimeout(() => {
            if (toIndonesia())
                $('.myoverlay').fadeOut();
            else
                document.location.href = document.location.href;
        }, 600);
    } else {
        $('.myoverlay').fadeIn();
        setTimeout(() => {
            if (toEnglish())
                $('.myoverlay').fadeOut();
            else
                document.location.href = document.location.href;
        }, 600);
    }
    $('.box-lang').css({
        opacity: 0,
        transform: 'translateY(-20px)'
    });
    $('.box-lang2').css({
        opacity: 0,
        transform: 'translateY(0px) translateX(-50%)'
    });
}

function toIndonesia() {
    $('.aboutLink, .aboutLinkHp').html('Tentang');
    $('.skillsLink, .skillsLinkHp').html('Skil');
    $('.contactLink, .contactLinkHp').html('Kontak');
    $('.about h1.judul.fontAkronim').html('Tentang');
    $('.skills h1.judul.fontAkronim').html('Skil');
    $('.contact h1.judul.fontAkronim').html('Hubungi Saya(Kami)');
    $('.about .myAboutP').html(`<p data-aos="fade-up" class="">Halo, nama saya Amir Ahmad Bamahfud.</p>
                        <p data-aos="fade-up">Saya ingin berbagi cerita singkat tentang perjalanan saya di bidang teknologi dan pemrograman. Saya berharap pengalaman saya dapat menginspirasi orang lain yang memulai perjalanan belajar mereka sendiri.</p>
                        <p data-aos="fade-up">Minat saya dalam pemrograman dimulai ketika saya berusia 12 tahun, dan pada usia 14 tahun, saya sangat berkomitmen untuk mempelajari pengembangan perangkat lunak. Ayah saya memperkenalkan saya pada pemrograman melalui pengembangan game menggunakan Construct 2, di mana saya mempelajari dasar-dasar logika pemrograman dan pemecahan masalah.</p>
                        <p data-aos="fade-up">Saat saya terus belajar, saya mengalihkan fokus saya ke Pengembangan Web. Ayah saya sering mengatakan kepada saya bahwa pengembangan web berada di pusat banyak disiplin pemrograman karena mengajarkan konsep-konsep fundamental melalui teknologi seperti HTML, CSS, JavaScript, dan PHP. Fondasi ini membantu saya memahami bahasa pemrograman dan teknologi baru dengan lebih mudah seiring kemajuan saya.</p>
                        <p data-aos="fade-up">Seperti setiap pengembang/developer, saya menghadapi banyak tantangan. Salah satu momen yang paling berkesan adalah mempelajari JavaScript Closures. Pada saat itu, terasa sangat sulit dan membingungkan, tetapi mengatasi tantangan tersebut memberi saya pemahaman yang lebih dalam tentang konsep pemrograman dan memperkuat ketekunan saya. Saya masih ingat membuat game transportasi umum sederhana menggunakan JavaScript di konsol hanya untuk lebih memahami array, metode, dan logika pemrograman.</p>
                        <p data-aos="fade-up">Pada tahun 2021, saya masuk Sekolah Menengah Kejuruan Teknik Perangkat Lunak, di mana saya memperluas pengetahuan saya ke Java, C#, jaringan komputer, dan mata pelajaran teknis lainnya. Karena saya sudah memiliki pengalaman dengan dasar-dasar pemrograman, saya dapat beradaptasi dengan cepat dan fokus pada pembelajaran konsep yang lebih lanjut.</p>
                        <p data-aos="fade-up">Di luar pemrograman, saya juga menyadari pentingnya desain. Saya percaya produk yang hebat tidak hanya harus fungsional, aman, dan andal di sisi backend, tetapi juga menarik secara visual dan menyenangkan untuk digunakan. Hal ini memotivasi saya untuk mempelajari alat-alat seperti Figma, Adobe Photoshop, Adobe Illustrator, Lunacy, dan perangkat lunak pengeditan video untuk meningkatkan kemampuan saya dalam menciptakan pengalaman digital yang lengkap.</p>
                        <p data-aos="fade-up">Satu prinsip telah membimbing saya sepanjang perjalanan saya: "Stay Hungry, Stay Foolish." yang artinya "Tetap Lapar, Tetap Bodoh." Terinspirasi oleh kekaguman ayah saya terhadap Steve Jobs, pola pikir ini mengingatkan saya bahwa akan selalu ada lebih banyak hal untuk dipelajari, tantangan baru untuk diatasi, dan peluang untuk berkembang.</p>
                        <p data-aos="fade-up">Saat ini, saya terus mengembangkan keterampilan saya sebagai developer dan desainer sambil berupaya menciptakan teknologi yang dapat memberikan dampak positif bagi masyarakat dan berkontribusi pada kehidupan sosial.</p>`);
    $('.portfolio h1.judul.fontAkronim').html('Pekerjaan Ku');
    $('.portfolio .portmasakanrumahpedia .colReplace').replaceWith(`
            <div class="col-12 colReplace">
                <h4 class="mt-5" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000">
                    <span class="stabilo">MasakanRumahPedia</span> adalah sebuah <span class="stabilo">Website & Aplikasi Web</span> yang menyediakan platform bagi keluarga untuk membuat dan menawarkan masakan rumahan mereka kepada pengunjung online di seluruh Indonesia bahkan hingga mancanegara. Platform ini membantu pelanggan menemukan <span class="stabilo">masakan rumahan</span> yang autentik, khususnya hidangan yang dimasak oleh para ibu, sehingga mereka dapat merasakan kehangatan, kenyamanan, dan nostalgia dari makanan buatan rumah.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000">
                    Selain membantu pelanggan menemukan makanan yang mereka inginkan, platform ini juga bertujuan untuk <span class="stabilo">memberdayakan keluarga</span> melalui dapur rumah mereka. Dengan menerapkan <span class="stabilo">sistem lelang</span>, masakan rumahan dapat memiliki nilai yang lebih tinggi dan menjadi <span class="stabilo">sumber pendapatan tambahan</span> bagi keluarga. Melalui konsep ini, MasakanRumahPedia tidak hanya menghubungkan pecinta kuliner dengan berbagai hidangan rumahan yang unik, tetapi juga mendukung pemberdayaan ekonomi keluarga.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000">
                    Dalam proyek ini, <span class="stabilo">saya</span> bekerja sebagai bagian dari sebuah tim bersama <span class="stabilo">adik saya</span>. Saya bertanggung jawab dalam pengembangan aplikasi pada sisi <span class="stabilo">Web Development</span>, sementara <span class="stabilo">adik saya</span> berfokus pada sisi <span class="stabilo">Mobile Development</span>. Teknologi yang digunakan dalam proyek ini meliputi <span class="stabilo">PHP</span> untuk pengembangan backend, <span class="stabilo">HTML</span> untuk membangun struktur aplikasi, dan <span class="stabilo">CSS</span> untuk menciptakan antarmuka pengguna yang menarik. Untuk aplikasi mobile, kami memanfaatkan <span class="stabilo">Flutter</span>, salah satu teknologi pengembangan lintas platform yang modern dan populer saat ini.
                </h4>
            </div>
        `);

    $('.portfolio .portpreplus .colReplace').replaceWith(`
            <div class="col-12">
                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    <span class="stabilo">Presence+</span> adalah sebuah <span class="stabilo">sistem manajemen absensi</span> berbasis web yang dibangun menggunakan <span class="stabilo">teknologi QR Code</span> untuk mempermudah proses pencatatan kehadiran bagi karyawan maupun pelajar. Sistem ini memungkinkan pengguna melakukan absensi secara efisien melalui pemindaian QR Code, sekaligus meningkatkan akurasi dan mengurangi proses pencatatan secara manual.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    Dalam proyek ini, <span class="stabilo">saya bekerja secara mandiri</span> dan bertanggung jawab penuh terhadap seluruh proses pengembangan aplikasi pada <span class="stabilo">platform Web</span>. Aplikasi ini dikembangkan menggunakan <span class="stabilo">Java</span> untuk pengembangan backend, <span class="stabilo">HTML</span> untuk membangun struktur aplikasi, serta <span class="stabilo">CSS</span> untuk merancang antarmuka yang menarik dan mudah digunakan.
                </h4>
            </div>
        `);
    
    $('.portfolio .portngaduapps .colReplace').replaceWith(`
            <div class="col-12">
                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    <span class="stabilo">NgaduApps</span> adalah sebuah <span class="stabilo">platform pengaduan dan pelaporan masyarakat</span> yang memungkinkan warga untuk mengirimkan <span class="stabilo">laporan</span>, <span class="stabilo">memantau status pengaduan</span>, serta berkomunikasi dengan administrator melalui sistem berbasis web. Platform ini dirancang untuk meningkatkan komunikasi antara masyarakat dan pihak terkait sekaligus menyediakan proses pelaporan yang transparan dan efisien.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    Dalam proyek ini, <span class="stabilo">saya bekerja secara mandiri</span> dan bertanggung jawab penuh terhadap seluruh proses pengembangan aplikasi pada <span class="stabilo">platform Web</span>. Aplikasi ini dikembangkan menggunakan <span class="stabilo">PHP</span> untuk pengembangan backend, <span class="stabilo">HTML</span> untuk membangun struktur aplikasi, serta <span class="stabilo">CSS</span> untuk menciptakan antarmuka yang menarik dan mudah digunakan. Proyek ini juga dikembangkan menggunakan framework <span class="stabilo">CodeIgniter 4</span> guna memastikan arsitektur aplikasi yang terstruktur, mudah dipelihara, dan dapat dikembangkan sesuai kebutuhan di masa mendatang.
                </h4>
            </div>
        `);

    $('.portfolio .portlogo57 h1').html(`Desain Logo HUT KADIN Indonesia ke 57`);
    $('.portfolio .portlogo57 .colReplace').replaceWith(`
            <div class="col-12 colReplace">
                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    <span class="stabilo">Saya</span> berpartisipasi dalam sebuah <span class="stabilo">kompetisi desain</span> yang diselenggarakan oleh <span class="stabilo">Kadin Indonesia</span> untuk <span class="stabilo">HUT ke-57 Kadin Indonesia</span>. Logo ini dirancang dengan konsep yang bermakna serta simbolisme visual yang kuat. Desain logo ini dibuat menggunakan alat desain modern, khususnya <span class="stabilo">Lunacy</span>.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    Logo ini <span class="stabilo">mengintegrasikan angka 57</span> melalui desain geometris yang menampilkan dua elemen saling terhubung sebagai simbol <span class="stabilo">kolaborasi</span> antara <span class="stabilo">para pengusaha</span>, lembaga pemerintah, dan para pemangku kepentingan dari berbagai sektor serta daerah. Angka 5 dan 7 disusun secara strategis untuk <span class="stabilo">membentuk panah ke atas</span>, yang melambangkan <span class="stabilo">inovasi</span> dan pertumbuhan ekonomi yang berkelanjutan menuju kemajuan. Warna merah dan emas mencerminkan identitas <span class="stabilo">bangsa yang makmur dan berjaya</span>, sementara warna biru menggambarkan profesionalisme, modernitas, <span class="stabilo">teknologi maju</span>, dan stabilitas. Warna hijau melambangkan keberlanjutan, sedangkan elemen padi merepresentasikan <span class="stabilo">kemakmuran</span>. Logo ini mengusung tema <span class="stabilo">"Kolaborasi dan Inovasi Menuju Ekonomi Indonesia yang Maju"</span>, di mana setiap elemennya dirancang untuk mengekspresikan dinamisme, <span class="stabilo">kerja sama</span>, dan kemajuan bersama dalam membangun perekonomian Indonesia yang <span class="stabilo">tangguh</span> serta berdaya saing tinggi.
                </h4>
            </div>
        `);

    $('.testimonial h1.judul.fontAkronim').html('Apa yang mereka katakan?');
    $('.testi1').html(`GG Amir, keren banget`);
    $('.testi2').html(`Kita digendong sama Amir guys. Gilaaa, Amir yang bikin kelompok kita lolos...`);
    $('.testi3').html(`Keren lu mir, lu emang serba bisa`);
    return true;
}


function toEnglish() {
    $('.aboutLink, .aboutLinkHp').html('About');
    $('.skillsLink, .skillsLinkHp').html('Skills');
    $('.contactLink, .contactLinkHp').html('Contact');
    $('.about h1.judul.fontAkronim').html('About');
    $('.skills h1.judul.fontAkronim').html('Skills');
    $('.contact h1.judul.fontAkronim').html('Contact Me(Us)');
    $('.about .myAboutP').html(`<p data-aos="fade-up" class="">Hello, my name is Amir Ahmad Bamahfud.</p>
                        <p data-aos="fade-up">I would like to share a brief story about my journey in technology and programming. I hope my experience can inspire others who are starting their own learning journey.</p>
                        <p data-aos="fade-up">My interest in programming began when I was 12 years old, and by the age of 14, I became deeply committed to learning software development. My father introduced me to programming through game development using Construct 2, where I learned the foundations of programming logic and problem-solving.</p>
                        <p data-aos="fade-up">As I continued learning, I shifted my focus to Web Development. My father often told me that web development sits at the center of many programming disciplines because it teaches fundamental concepts through technologies such as HTML, CSS, JavaScript, and PHP. This foundation helped me understand new programming languages and technologies more easily as I progressed.</p>
                        <p data-aos="fade-up">Like every developer, I faced many challenges. One of the most memorable moments was learning JavaScript Closures. At the time, it felt extremely difficult and confusing, but overcoming those challenges gave me a deeper understanding of programming concepts and strengthened my persistence. I still remember creating a simple public transportation game using JavaScript in the console just to better understand arrays, methods, and programming logic.</p>
                        <p data-aos="fade-up">In 2021, I entered a Software Engineering Vocational High School, where I expanded my knowledge into Java, C#, computer networking, and other technical subjects. Because I already had experience with programming fundamentals, I was able to adapt quickly and focus on learning more advanced concepts.</p>
                        <p data-aos="fade-up">Beyond programming, I also realized the importance of design. I believe great products should not only be functional, secure, and reliable on the backend, but also visually appealing and enjoyable to use. This motivated me to learn tools such as Figma, Adobe Photoshop, Adobe Illustrator, Lunacy, and video editing software to improve my ability to create complete digital experiences.</p>
                        <p data-aos="fade-up">One principle has guided me throughout my journey: "Stay Hungry, Stay Foolish." Inspired by my father's admiration for Steve Jobs, this mindset reminds me that there will always be more to learn, new challenges to overcome, and opportunities to grow.</p>
                        <p data-aos="fade-up">Today, I continue to develop my skills as a developer and designer while striving to create technology that can positively impact people and contribute to society.</p>`);
    $('.portfolio h1.judul.fontAkronim').html('My Work');
    $('.portfolio .portmasakanrumahpedia .colReplace').replaceWith(`
            <div class="col-12 colReplace">
                <h4 class="mt-5" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000">
                    <span class="stabilo">MasakanRumahPedia</span> is a <span class="stabilo">Website & Web Application</span> that provides a platform for families to create and offer their homemade dishes to online visitors across Indonesia and even around the world. The platform helps customers discover authentic <span class="stabilo">home-cooked meals</span>, especially dishes prepared by mothers, allowing them to experience the warmth, comfort, and nostalgia of homemade food.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000">
                    In addition to helping customers find the food they desire, the platform also aims to <span class="stabilo">empower families</span> through their home kitchens. By implementing an <span class="stabilo">auction system</span>, homemade dishes can gain greater value and become an <span class="stabilo">additional source of income</span> for families. Through this concept, MasakanRumahPedia not only connects food lovers with unique homemade meals but also supports family economic empowerment.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000">
                    In this project, <span class="stabilo">I</span> worked as part of a team alongside <span class="stabilo">my younger brother</span>. I was responsible for developing the application on the <span class="stabilo">Web Development</span> side, while <span class="stabilo">my younger brother</span> focused on the <span class="stabilo">Mobile Development</span> side. The technologies used in this project include <span class="stabilo">PHP</span> for backend development, <span class="stabilo">HTML</span> for structuring the application, and <span class="stabilo">CSS</span> for creating an attractive user interface. For the mobile application, we utilized <span class="stabilo">Flutter</span>, one of the most popular and modern cross-platform development technologies available today.
                </h4>
            </div>
        `);

    $('.portfolio .portpreplus .colReplace').replaceWith(`
            <div class="col-12">
                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    <span class="stabilo">Presence+</span> is a web-based <span class="stabilo">attendance management system</span> built with <span class="stabilo">QR Code technology</span> to streamline attendance tracking for employees and students. The system enables users to record attendance efficiently through QR code scanning while improving accuracy and reducing manual processes.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    In this project, <span class="stabilo">I worked independently</span> and was responsible for the complete development of the application on the <span class="stabilo">Web platform</span>. The application was built using <span class="stabilo">Java</span> for backend development, <span class="stabilo">HTML</span> for structuring the application, and <span class="stabilo">CSS</span> for designing an attractive and user-friendly interface.
                </h4>
            </div>
        `);
    
    $('.portfolio .portngaduapps .colReplace').replaceWith(`
            <div class="col-12">
                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    <span class="stabilo">NgaduApps</span> is a community <span class="stabilo">complaint and reporting platform</span> that enables citizens to submit <span class="stabilo">reports</span>, <span class="stabilo">track complaint status</span>, and communicate with administrators through a web-based system. The platform is designed to improve communication between communities and authorities while providing a transparent and efficient reporting process.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    In this project, <span class="stabilo">I worked independently</span> and was responsible for the complete development of the application on the <span class="stabilo">Web platform</span>. The application was built using <span class="stabilo">PHP</span> for backend development, <span class="stabilo">HTML</span> for structuring the application, and <span class="stabilo">CSS</span> for creating an attractive and user-friendly interface. The project was also developed using the <span class="stabilo">CodeIgniter 4</span> framework to ensure a structured, maintainable, and scalable architecture.
                </h4>
            </div>
        `);
    
    $('.portfolio .portlogo57 h1').html(`KADIN Indonesia 57th Anniversary Logo Design`);

    $('.portfolio .portlogo57 .colReplace').replaceWith(`
            <div class="col-12 colReplace">
                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    <span class="stabilo">I</span> participated in a <span class="stabilo">design competition</span> organized by <span class="stabilo">Kadin Indonesia</span> for the <span class="stabilo">57th Anniversary of Kadin Indonesia</span>. This logo was designed with a meaningful concept and strong visual symbolism. The logo design was created using modern design tools, particularly <span class="stabilo">Lunacy</span>.
                </h4>

                <h4 class="mt-5" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                    The logo <span class="stabilo">integrates the number 57</span> through a geometric design featuring two interconnected elements that symbolize <span class="stabilo">collaboration</span> among <span class="stabilo">entrepreneurs</span>, government institutions, and stakeholders from various sectors and regions. The numbers 5 and 7 are strategically arranged to <span class="stabilo">form an upward arrow</span>, representing <span class="stabilo">innovation</span> and continuous economic growth toward progress. The red and gold colors reflect the identity of a <span class="stabilo">prosperous and successful nation</span>, while blue conveys professionalism, modernity, <span class="stabilo">advanced technology</span>, and stability. Green symbolizes sustainability, and the rice element represents <span class="stabilo">prosperity</span>. The logo embodies the theme <span class="stabilo">"Collaboration and Innovation Towards an Advanced Indonesian Economy"</span>, as every element was designed to express dynamism, <span class="stabilo">cooperation</span>, and collective progress in building a <span class="stabilo">resilient</span> and highly competitive Indonesian economy.
                </h4>
            </div>
        `);

    $('.testimonial h1.judul.fontAkronim').html('What are they saying?');
    $('.testi1').html(`GG Amir, that's awesome!`);
    $('.testi2').html(`Amir carried the entire team. Honestly, we wouldn't have made it without him.`);
    $('.testi3').html(`You're awesome, Mir. You're a true all-rounder.`);
    return true;
}

function center(kelas, kelasLama = 'text-right', tipe = true) {
    if(tipe)
        $(kelas).addClass('text-center').removeClass(kelasLama);
    else 
        $(kelas).addClass(kelasLama).removeClass('text-center')
}