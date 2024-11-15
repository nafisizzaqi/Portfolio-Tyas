<?php 
    include 'koneksi.php';
    $query = "SELECT * FROM users";
    $query_sql = mysqli_query($koneksi, $query);
    $tampil = mysqli_fetch_assoc($query_sql);
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- navbar --> 
    <nav class="h-24 bg-white border-gray-200 dark:bg-gray-900 fixed w-full  top-0 left-0 shadow-sm" style="z-index: 10;">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="image/<?= $tampil['logo']?>" class="w-20" alt="Flowbite Logo" />
          </a>
          <!-- Mobile menu toggle button -->
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="mx-36 font-bold flex flex-col p-4 md:p-0 mt-4 rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li><a href="#home" class="block py-2 px-3 text-cyan-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a></li>
              <li><a href="#about" class="block py-2 px-3 text-cyan-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a></li>
              <li><a href="#exp" class="block py-2 px-3 text-cyan-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Experience</a></li>
              <li><a href="#portfolio" class="block py-2 px-3 text-cyan-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Portfolio</a></li>
              <li><a href="#contact" class="block py-2 px-3 text-cyan-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact Me</a></li>
            </ul>
          </div>
        </div>
      </nav>


    <!-- hero -->
    <section id="home" class="pt-36 pb-28" style="background-image: url('image/bg-home.jpg'); background-size: contain; background-size: cover;">
        <div class="container ">
            <div class="flex flex-wrap justify-between">
                <div class="text-start mx-16">
                    <h1 class="text-6xl font-bold">Hello, I'm </h1>
                    <span id="typings" class="text-6xl font-semibold text-cyan-600"></span>
                    <p class="text-5xl w-[30rem]"><?= $tampil['description']?></p>
    
                    <button type="button" class="mt-5 text-black bg-blue-400 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Show  More</button>
                </div>

                
                <div class="w-1/2 mb-10 relative bottom-14">
                    <div class="mt-10">
                        <img src="image/<?= $tampil['profile']?>" alt="gambar tyas" class="bg-white max-w-full mx-auto w-96 shadow-slate-800 shadow-2xl rounded-full">
                    </div>
                </div>
                
            </div>
        </div>
    </section>
  
    <!-- about  -->
     <?php 
        include 'koneksi.php';
        $about_query = "SELECT * FROM about_me";
        $query_sql = mysqli_query($koneksi, $about_query);
        $tampil = mysqli_fetch_assoc($query_sql);
             ?>
     <section id="about" class="pt-24 pb-36" style="background-image: url(image/bg-about.jpg); z-index: -1;">
        <div class="container mx-auto text-center">
            <div class="flex flex-wrap">
                <div class="w-full ">
                    <h3 class="text-5xl font-bold"> <?= $tampil['title']?></h3>
                </div>

                <div class="w-full lg:w-1/2 pl-24">
                    <div class=" mt-5 ml-20">
                        <img src="image/<?= $tampil['picture']?>" alt="Nafis Izzaqi" class="w-80 py-10"> 
                    </div>
                </div>
                <div class="text-start py-14 ">
                    <h1 class="text-2xl font-bold">I'M</h1>
                    <span class="text-6xl font-bold text-cyan-600" id="typing" style="letter-spacing: 1px;"><?= $tampil['name']?></span>
                    <p class="text-base mt-5 w-96  font-semibold">
                        <?= $tampil['bio']?>
                    </p>
                    <button type="button" class="mt-5 text-black bg-blue-400 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Contact Me</button>
                </div>    
            </div>
        </div>
     </section>
     
     <!-- exp  -->
      <?php 
        include 'koneksi.php';
        $experience_query = "SELECT * FROM experience";
        $query_sql = mysqli_query($koneksi, $experience_query);
        $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);

        // var_dump($ambildata);
      ?>
     <section id="exp" class="pt-28 pb-36">
        <div class="container mx-auto text-center">
            <div class="flex flex-wrap">
                <div class="w-full">
                    <h3 class="text-5xl font-bold text-cyan-600"><?= $ambildata[0]['title']?></h3>
                </div>

                <div class="flex mt-10 gap-10 mx-auto">
                    
                <?php 
                foreach($ambildata as $tampil) {
                ?>
                <div class="w-72 mx-10 bg-gray-500 border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-44 mx-auto" src="image/<?= $tampil['picture']?>" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white"><?= $tampil['name_picture']?></h5>
                        </a>
                        <p class="mb-3 font-medium text-gray-100 dark:text-gray-400"><?= $tampil['description']?></p>
                    </div>
                </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
     </section>

     <!-- Portfolio -->
     <?php 
        include 'koneksi.php';
        $portfolio_query = "SELECT * FROM portfolio";
        $query_sql = mysqli_query($koneksi, $portfolio_query);
        $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);

        // var_dump($ambildata);
      ?>
      <section id="portfolio" class="pt-28 pb-36">
        <div class="container mx-auto text-center">
            <div class="flex flex-wrap">
                <div class="w-full">
                    <h3 class="text-5xl font-bold text-cyan-600"><?= $ambildata[0]['title']?></h3>
                    <p class="font-bold text-3xl mt-10"><?= $ambildata[0]['description']?></span></p>
                </div>

                <div class="flex gap-20 mx-auto mt-10">

                <?php 
                foreach($ambildata as $tampil) {
                ?>
                    <div class="w-56">
                        <img src="image/<?= $tampil['picture']?>" class="bg-cyan-600 rounded-3xl" alt="">
                        <p class="mt-4 font-bold text-xl"><?= $tampil['name_picture']?></p>
                    </div>
                    <?php 
                    }
                    ?>
                    
                    
                </div>
            </div>
        </div>
      </section>

      <!-- contact  -->

      <section id="contact" class="pt-28 pb-36">
        <div class="w-8/12 h-[30rem] bg-cyan-600 mx-auto">
            <div class="w-full text-center">
                <h3 class="text-3xl font-bold text-gray-200 pt-10">Contact Me</h3>
            </div>
            <form action="proses.php" method="post">
            <div class="w-56 pt-10 ml-60">
                <input type="text" name="name" id="name" placeholder="Name :" class="w-[26rem] p-2 text-cyan-600" >
            </div>

            <div class="w-56 pt-10 ml-60">
                <input type="text" name="email" id="email" placeholder="Email :" class="w-[26rem] p-2 text-cyan-600" >
            </div>

            <div class="w-56 pt-10 ml-60">
                <textarea name="message" id="message" placeholder="Message" class="w-[26rem] h-36 p-2 text-cyan-600" ></textarea>
            </div>

            <div class="ml-96">
                <button name="submit" class="w-32 mt-2 p-1 bg-green-500 text-white rounded-md hover:bg-green-700">Send</button>
            </div>
            </form>
        </div>
      </section>

      <!-- footer  -->
       <footer class="pt-10 pb-5 bg-gray-600">
            <div class="container">
                <div class="text-start ml-10 flex">
                    <p class="text-white font-bold text-lg">@TyasAndarista</p>

                    <div class="ml-[65rem] flex">
                        
                         <a href="https://api.whatsapp.com/send/?phone=62895391622424" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center hover:bg-green-600 hover:text-white text-green-600">
                            <svg  role="img" width="60" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                         </a>

                         <a href="https://instagram.com/apissssayangibuuu" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-white hover:bg-red-600 hover:text-white "  > 
                            <svg role="img"  width="72" class="fill-current "  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                         </a>

                    </div>
                </div>

            </div>
       </footer>

       <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
       <script src="script.js"></script>

     
</body>
</html>