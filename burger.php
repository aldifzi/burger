<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Aleo:wght@300&family=Anton&family=Bebas+Neue&family=Gothic+A1:wght@200;300;400;500;700&family=Inria+Sans:wght@400;700&family=Inter:wght@200;500&family=Just+Another+Hand&family=Kanit:ital@1&family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="burger 1.png" type="image/x-icon">
    <style>
        .home-demo .item {
            background: #ff3f4d;
        }

        .home-demo h2 {
            color: #FFF;
            text-align: center;
            padding: 13rem 0;
            margin: 0;
            font-style: italic;
            font-weight: 300;
        }
        #hero {
    background-image: url("menu.png");
    width: 100%;
    height: 16cm;
    background-size: 100% 100%;
    position: relative;

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
#ul {
         font-family: 'Merriweather Sans', sans-serif;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                    fontFamily: {
        'anton': ['"Anton"', 'cursive'],
      },
                }
            }
        }
        
    </script>
    <title>Menu</title>
</head>



    <body class="
      antialiased">
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
                <a href="#" class="flex">
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
                        <a class="md:p-4 py-2 block hover:text-yellow-400 " href="index">Home</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-yellow-400 text-yellow-300" href="burger">Menu</a>
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
    <section id="hero" class="d-flex align-items-center bg-hero bg-local  sm:bg-fixed">
    <div class="container position-relative" >
    </div>
  </section>
  <section id="menu" class="py-9 ">
    <div class="text-center">
        <p class="font-bold text-6xl mt-32 text-red-800">BURGER</p>
    </div>
    <div class="container mx-auto px-4"> 
    <section class="py-8 px-4">
    <div id="item" class="flex flex-wrap mx-auto -mb-8">
        <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><img src="classic.png" alt=""><h2 class="text-red-800 mx-32 mt-3"><strong>BURGER</strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
           </div>
        <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><img src="menu/beef.png" alt="" class="mx-auto w-56"><h2 class="text-red-800 mx-32 mt-3"><strong>BEEF BURGER</strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
            </div>
        <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><img src="menu/burger2.png" alt="" class="w-96"><h2 class="text-red-800 mx-32 mt-3"><strong>BURGER HITAM</strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
           </div>
        <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><img src="menu/keju.png" alt="" class="mx-auto w-52"><h2 class="text-red-800 mx-32 mt-3"><strong>CHEESE BURGER</strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
            </div>
        <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><img src="menu/fish.png" alt="" class="w-48 mx-auto"><h2 class="text-red-800 mx-32 mt-3"><strong>FISH BURGER</strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
            </div>
            <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><img src="classic.png" alt=""><h2 class="text-red-800 mx-32 mt-3"><strong>BURGER</strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
             </div>
              <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><img src="classic.png" alt=""><h2 class="text-red-800 mx-32 mt-3"><strong>BURGER</strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
               </div>
               <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><img src="classic.png" alt=""><h2 class="text-red-800 mx-32 mt-3"><strong>BURGER</strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
               </div>
      </div>
    </section>
    </div>
      <div class="text-center">
        <p class="font-bold text-6xl mt-32 text-red-800">AYAM</p>
    </div>
    <div id="item"  class="grid grid-rows-1 content-center gap-x-2.5 grid-flow-col gap-32 mt-16 ">
        <div><img src="menu/ayam.png" alt="" class="mx-auto w-56"><h2 class="text-red-800 mx-32 mt-3 text-center	text-lg font-bold"">AYAM PANGGANG</h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
            <p class="text-xs mt-2 text-center font-medium	mx-auto">Ayam panggang menggunakan keju, bacon, selada, tomat</p></div>
        <div><img src="menu/ayam.png" alt="" class="mx-auto w-56"><h2 class="text-red-800 mx-32 mt-3 text-center	text-lg font-bold"">AYAM PANGGANG</h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
            <p class="text-xs mt-2 text-center font-medium mx-auto">Ayam yang dihitamkan, keju, bacon, selada, tomat</p></div>
        <div><img src="menu/ayamgoreng.png" alt="" class="mx-auto w-96"><h2 class="text-red-800 mx-32 mt-3 text-center	text-lg font-bold" ">AYAM GORENG 
        </h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2><p class="text-xs mt-2 mx-32 font-medium text-center">Lettuce, tomato, red onion, pickles, mustard, ketchup, mayo</p>
      </div>
    </div>
    <div id="item" class="grid grid-rows-1 content-center mx-auto grid-flow-col gap-3 gap-y-2.5 mt-16 ">
        <div><h2 class="text-red-800  mt-3 text-center	text-lg font-bold">AYAM PANGGANG HITAM</h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
            <p class="text-xs mt-2 text-center font-medium">Ayam yang dihitamkan, keju, bacon, selada, tomat</p></div>
        <div><h2 class="text-red-800  mt-3 text-center	text-lg  font-bold">AYAM PANGGANG HITAM</h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
            <p class="text-xs mt-2 text-center font-medium">Ayam yang dihitamkan, keju, bacon, selada, tomat</p></div>
    </div>
    <div class="text-center">
        <p class="font-bold text-6xl mt-32 text-red-800">SALADS</p>
        
    </div>
    <div class="container ml-64 px-4"> 
      <section class="py-8 pl-9">
      <div id="item" class="flex flex-wrap -mx-4 -mb-8">
          <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8" onclick="toggleModal()"><h2 class="text-red-800 text-center mx-auto mt-3"><strong>BERGERAX SALAD
          </strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
              <p class="text-xs font-medium text-center mt-2">Pilih dari potongan ayam yang dipanggang, dihitamkan, atau dilapisi tepung roti di atas sayuran segar dengan tomat matang, bawang merah, bacon, mentimun, crouton, dan keju parut</p></div>
              <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><h2 class="text-red-800 mx-20 text-center mt-3"><strong>BERGERAX SALAD</strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
                <p class="text-xs font-medium text-center mt-2">Pilih dari potongan ayam yang dipanggang dilapisi tepung roti di atas sayuran segar dengan tomat matang, bawang merah, bacon, mentimun, crouton, dan keju parut
                </p></div>
                <div class="hover:bg-yellow-100 md:w-1/4 py-4 px-4 mb-8"><h2 class="text-red-800 text-center mx-28 mt-3"><strong>BERGERAX SALAD
                </strong></h2><br><h2 class="text-red-800 mx-32 mt-3">Rp.30.000</h2>
                  <p class="text-xs font-medium text-center mt-2">Pilih dari potongan ayam yang dipanggang dilapisi tepung roti di atas sayuran segar dengan tomat matang, bawang merah, bacon, mentimun, crouton, dan keju parut</p></div>
        </div>
      </section>
      </div>
  </section>
  <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
    <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-900 opacity-75" />
      </div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
      <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <label>Name</label>
          <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" />
          <label>Url</label>
          <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" />
        </div>
        <div class="bg-gray-200 px-4 py-3 text-right">
          <button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2" onclick="toggleModal()"><i class="fas fa-times"></i> Cancel</button>
          <button type="button" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700 mr-2"><i class="fas fa-plus"></i> Create</button>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
      <span style=" color: white;">
      <i class="fa fa-solid fa-whatsapp my-float"></i>
    </span>
      </a>
  </div>
  
  
</main>

<!-- component -->

<?php
include'menu/footer.php';
    ?>

<script>
    $(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 1,
    margin: 7,
    loop: true,
    nav: true
  });
});

</script>
<script>
  function toggleModal() {
  document.getElementById('modal').classList.toggle('hidden')
}
</script>
    </body>



</html>