<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Kontak</title>
    <style>
       #hero {
    background-image: url("image 11.png");
    width: 99cm;
    height: 19cm;
    position: static;
background-size: cover;
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
          font-bold">
                    <li>
                        <a class="md:p-4 py-2 block hover:text-yellow-400 " href="index">Home</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-yellow-400" href="burger">Menu</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-yellow-400" href="katering">Catering</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-yellow-400 text-yellow-300" href="contact">Kontak</a>
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
    <section id="kontak">
        <div class="max-w-screen-md mx-auto p-5">
            <div class="text-center mb-16">
              <p class="mt-4 text-sm leading-7 text-gray-500 font-regular uppercase">
                  Contact
                </p>
                
            </div>
            
            <form class="w-full">
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700  text-xs font-bold mb-2" for="grid-first-name">
                  Nama Depan
                </label>
                <input class=" block w-full  text-gray-900 border border-gray-900  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="text" placeholder="Jane">
                <p class="text-red-500 text-xs italic">Harus diisi.</p>
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide  text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Nama Belakang
                </label>
                <input class="block w-full  text-gray-700 border border-gray-900  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                <p class="text-red-500 text-xs italic">Harus diisi.</p>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Alamat Email
                </label>
                <input class="appearance-none block w-full  text-gray-700 border border-gray-900  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="email" placeholder="********@*****.**">
                <p class="text-red-500 text-xs italic">Harus diisi.</p>
              </div>
            </div>
              
              <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Pesan
                </label>
                <textarea rows="10" class=" block w-full  text-gray-700  border-gray-900 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-900">
                  
                </textarea>
              </div>
              <div class="flex justify-center mt-6 w-full px-3">
                <button class="shadow bg-red-600 hover:bg-red-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded" type="submit">
                  Kirim Pesan
                </button>
              </div>
                
            </div>
              
          </form>
          </div>
    </section>
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
</body>
</html>