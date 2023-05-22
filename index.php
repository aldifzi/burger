<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="burger 1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ7BPby09zybIIFcJHdiE4_-I4fiyWzjw" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@300&family=Anton&family=Bebas+Neue&family=Gothic+A1:wght@200;300;400;500;700&family=Inria+Sans:wght@400;700&family=Inter:wght@200;500&family=Just+Another+Hand&family=Kanit:ital@1&family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
        .home-demo .item {
    width: 43cm;
}
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
#map {
  height: 450px;
  width: 70%;
}

.client-container
{
  height: 40vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

.item img
{
  width:500px;
  height:750px;
}
.item1 img
{
  width:90px;
  height:170px;
}
:hover .item1 {
    transform: scale(1.1);
    transition-duration: 0.2s;
}

#slmt {
    font-family: 'Anton', sans-serif;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#F73403;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
.owl-carousel .owl-dot{
  height: 10px;
  width: 40px;
  background-color: #ff5722 !important;
  display: inline-block;
  border-radius: 0;
  opacity: 1;
  transition: 0.3s;
  margin: 0 5px;
}
.owl-carousel .owl-dots{
  width: 100%;
  margin: 10px auto;
  text-align:center;
}
.owl-carousel .owl-dot.active {
  background-color: #e1e1e1!important;
  opacity: 1;
  width: 40px;
  position:relative;
}
.owl-carousel .owl-dot.active ~ .owl-dot {
  background: #e1e1e1 !important;
}
.owl-carousel .owl-dot.active::before {
content: " ";
    background-color:  #ff5722;
    -webkit-animation: backgroundLinera 5s linear;
    animation: backgroundLinera 5s linear;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0;
    border-radius: 2px;
}
@keyframes backgroundLinera{
    0%{width:0}
    50%{width:50%}
    to{width:100%}
}
.item{
  position: relative;
}
#ul {
         font-family: 'Merriweather Sans', sans-serif;
        }
    </style>
</head>
<body>
  <header class="sticky top-0 z-50">
    <nav class="
  flex flex-wrap
  items-center
  justify-between
  w-full
  py-4
  md:py-0
  px-6
  text-lg text-gray-700
  bg-red-700">
        <div>
            <a href="#">
                <img src="logo.png" alt="" class="ml-32 w-32">
            </a>
        </div>



        <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
            <ul class="
      pt-4
      text-base text-gray-100
      md:flex
      md:justify-between 
      md:py-4
      md:px-4
      font-bold" id="ul">
                <li>
                    <a class="md:p-4 py-2 block hover:text-yellow-400 text-yellow-300" href="index">Home</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-yellow-400" href="burger">Menu</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-yellow-400" href="katering">Catering</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-yellow-400" href="contact">Kontak</a>
                </li>
                <li>
                    <div class="bg-yellow-500 -py-7 rounded-lg hover:bg-yellow-300">
                        <a class="md:p-4 py-2 block hover:text-slate-200 text-slate-900" href="order">ORDER
                            ONLINE</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <main>
        <section id="carousel">
            <div class="home-demo">
                <div class="owl-carousel owl-theme">
                  <div class="item" data-dot="">
                    <img src="slides/1.png" alt="">
                  </div>
                  
                  <div class="item" data-dot="">
                    <img src="slides/3.png" alt="">
                  </div>
                  <div class="item" data-dot="">
                    <img src="slides/4.png" alt="">
                  </div>
                </div>
              </div>
        </section>
<section id="promo" class="mt-32">
        <div class="text-center">
            <h2 class="text-red-700 text-6xl tracking-wider" id="slmt">SELAMAT DATANG</h2>
        </div>
        <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800 text-center">
    <h2 class="text-3xl font-bold mb-12 text-center">Promo Menarik</h2>
    
    <div class="grid lg:grid-cols-3 gap-6 xl:gap-x-12">
      <div class="mb-6 lg:mb-0 hover:shadow-2xl rounded">
        <div>
          <div
            class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
            data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img src="promo/image 6.png"
              class="w-full" alt="Louvre" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                style="background-color: rgba(251, 251, 251, 0.2)"></div>
            </a>
          </div>

          <h5 class="text-lg font-bold mb-3">Harapan di Setiap Gigitan</h5>
          <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center">
            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.5834 3.02604H3.41671C2.40419 3.02604 1.58337 3.84685 1.58337 4.85937V12.1927C1.58337 13.2052 2.40419 14.026 3.41671 14.026H12.5834C13.5959 14.026 14.4167 13.2052 14.4167 12.1927V4.85937C14.4167 3.84685 13.5959 3.02604 12.5834 3.02604Z" stroke="#C22026" stroke-width="1.19167"/>
                <path d="M1.58337 5.77604H14.4167" stroke="#C22026" stroke-width="1.19167"/>
                <path d="M4.33337 8.52604H11.6667" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.33337 11.276H8.91671" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.25 3.94271V1.19271" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.75 3.94271V1.19271" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                 Berlaku hingga 05 February 2023
          </div>
        </div>
      </div>

      <div class="mb-6 lg:mb-0">
        <div class="hover:shadow-2xl">
          <div
            class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
            data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img src="promo/image 13.png"
              class="w-full" alt="Louvre" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                style="background-color: rgba(251, 251, 251, 0.2)"></div>
            </a>
          </div>

          <h5 class="text-lg font-bold mb-3">Fruit Tea Blackcurrant</h5>
          <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center">
            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.5834 3.02604H3.41671C2.40419 3.02604 1.58337 3.84685 1.58337 4.85937V12.1927C1.58337 13.2052 2.40419 14.026 3.41671 14.026H12.5834C13.5959 14.026 14.4167 13.2052 14.4167 12.1927V4.85937C14.4167 3.84685 13.5959 3.02604 12.5834 3.02604Z" stroke="#C22026" stroke-width="1.19167"/>
                <path d="M1.58337 5.77604H14.4167" stroke="#C22026" stroke-width="1.19167"/>
                <path d="M4.33337 8.52604H11.6667" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.33337 11.276H8.91671" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.25 3.94271V1.19271" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.75 3.94271V1.19271" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                 Berlaku hingga 05 February 2023
          </div>
        </div>
      </div>

      <div class="mb-0 hover:shadow-2xl">
        <div>
          <div
            class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
            data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img src="promo/hemat.png"
              class="w-full" alt="Louvre" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                style="background-color: rgba(251, 251, 251, 0.2)"></div>
            </a>
          </div>

          <h5 class="text-lg font-bold mb-3">Paket Hemat BERGERAX</h5>
          <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center">
            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.5834 3.02604H3.41671C2.40419 3.02604 1.58337 3.84685 1.58337 4.85937V12.1927C1.58337 13.2052 2.40419 14.026 3.41671 14.026H12.5834C13.5959 14.026 14.4167 13.2052 14.4167 12.1927V4.85937C14.4167 3.84685 13.5959 3.02604 12.5834 3.02604Z" stroke="#C22026" stroke-width="1.19167"/>
                <path d="M1.58337 5.77604H14.4167" stroke="#C22026" stroke-width="1.19167"/>
                <path d="M4.33337 8.52604H11.6667" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.33337 11.276H8.91671" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.25 3.94271V1.19271" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.75 3.94271V1.19271" stroke="#C22026" stroke-width="1.19167" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                 Berlaku hingga 05 February 2023
          </div>
          <p class="text-gray-500 px-3 pb-6">
            Dapatkan promo paket hemat mulai harga 5000 sampai 15000 dengan datang di cabang bergerax terdekat
          </p>
        </div>
      </div>
    </div>
  </section>
</div>
<section>
</section>
</section>
<section id="menu" class="mx-auto py-20 text-center bg-amber-100">
    <p class="text-center text-red-900 text-3xl font-bold">Menu Favorit</p>
    <div class="client-container">
        <div id="owl2" class="owl-carousel owl-theme ">
          <div class="item1" data-dot="">
            <img src="menu/menu2.png" alt="">
          </div>
          <div class="item1" data-dot="">
            <img src="menu/menu1.png" alt="">
          </div>
          <div class="item1" data-dot="">
            <img src="menu/menu4.png" alt="">
          </div>
          <div class="item1" data-dot="">
            <img src="menu/menu3.png" alt="">
          </div>
          <div class="item1" data-dot="">
            <img src="menu/menu4.png" alt="" class="">
          </div>
        </div>
      </div>
      <button class="bg-red-700 rounded-md py-4 px-8 mt-5 text-white font-bold hover:bg-red-800">Lihat Semua Promo</button>
</section>
<section class="py-9 container mx-auto">
<h2 class="text-3xl font-bold mb-12 text-center">Lokasi Kami</h2>
<div id="map" class="mx-auto">
</div>
</section>

<!-- <section id="" class="">;
  <div class="container text-center block text-red-700">;
      <h1 class=" font-bold font-anton">;
              “EATING GOOD FOOD;
WITH GOOD FRIENDS AND FAMILY.;
WELCOME TO OUR BACKYARD.”;
      </h1>;
  </div>;
</section>; -->
<div class="">
  <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
    <span style=" color: white;">
    <i class="fa fa-solid fa-whatsapp my-float"></i>
  </span>
    </a>
</div>

    </main>
    <?php
include'menu/footer.php';
    ?>
    

  

  


<script>
    $(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 1,
    margin: 2,
    autoWidth:true,
    loop: true,
    lazyLoad:true,
    autoplay:true,
    smartSpeed: 1000,
    dotsData: true,
    autoplayTimeout:3000,
    dots: true,
    autoplayTimeout:1500,
    animateOut: "fadeOut",
    animateIn: "slideInDown",
  });
});

$('#owl2').owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    nav: false,
    dotsData: true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    items : 5,
    responsive: {
    0: {
      items: 1
    },

    600: {
      items: 1
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
})
</script>
<script>
  var locations = [
	['<b>Bergerax 1,</b><br> Bantul', -7.9442987, 110.3714465,19,  "menu/map.png"],
	['<b>Bergerax 2,</b><br> Bantul', -7.9255856, 110.3771681,16, "menu/map.png"],
  ['<b>Bergerax 3,</b><br> Bantul', -7.9306553, 110.3703505,14, "menu/map.png"]
  
];
var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 12,
	center: new google.maps.LatLng(-7.9442987, 110.3714465,19),
	mapTypeId: google.maps.MapTypeId.ROADMAP
});
var infowindow = new google.maps.InfoWindow();
var marker, i;
for (i = 0; i < locations.length; i++) {
	marker = new google.maps.Marker({
		position: new google.maps.LatLng(locations[i][1], locations[i][2], locations[i][3]),
		icon: locations[i][4],
		map: map
	});
	google.maps.event.addListener(marker, 'click', (function (marker, i) {
		return function () {
			infowindow.setContent(locations[i][0]);
			infowindow.open(map, marker);
		}
	})(marker, i));
}
</script>
</body>
</html>