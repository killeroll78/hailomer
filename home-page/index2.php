<!DOCTYPE html>
<html>
<title>home page</title>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Animated Template</title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="http://www.google.com/s2/favicons?domain=css-tricks.com">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="all.min.css" />
  <!-- AOS CSS -->
  <link  rel="stylesheet" href="aos.css">
  <!-- Tailwind Library -->
  <link rel="stylesheet" href="compiled-tailwind.min.css" />

  <!-- AOS.js [Order matters, load at 1st]-->
  <script defer src="aos.js"></script>
  <script defer src="script.js"></script>
  <!-- Navigation Script -->
  <script defer src="navbar.js"></script>
</head>

<body class="text-gray-800 antialiased">
  <div class="a" id="a">
    <link rel="stylesheet" href="klop.css">
  <nav class="a">
      <style>
.nav.a body{ margin:0; font-family:'tahoma'}

nav.a {
  margin:0 auto;
  width:100%;
  height:auto;
  display:inline-block;
  background:#37bc9b;
}

.nav.a ul {
  margin:0;padding:0;
  list-style-type:none;
 
  display:inline-block;
}

nav.a ul li {
  position:relative;
  margin:0 20px 0 0;
  
  display:inline-block;
}

.nav.a li > a:after { content: ' »'; } /* Change this in order to change the Dropdown symbol */

.nav.a li > a:only-child:after { content: ''; }

nav.a ul li a {
  padding:20px;
  display:inline-block;
  color:white;
  text-decoration:none;
}

nav.a ul li a:hover {
  opacity:0.5;
}

nav.a ul li ul {
  display:none;
  position:absolute;
  left:0;
  background:#37bc9b;
  float:left;
}

nav.a ul li ul li {
  width:100%;
  border-bottom:1px solid rgba(255,255,255,.3);
}

nav.a ul li:hover ul {
  display:block;
}

      </style>
      <li><a href="#">Home</a></li>
      <li><a href="logout.php">logout</a></li>
      <li><a href="../Admin/dashboard.php">Dashboard</a></li>
      <li><a href="#">Contact</a></li>
    
  </nav>
</div>
  <!-- Navigation -->
  <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
      <!-- Nav Left Side -->
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
          href="https://www.creative-tim.com/learning-lab/tailwindcss-starter-project#/presentation">
          <!-- Nav Title -->
          
        </a>
        <!-- Hamburger Menu (Mobile) -->
        <button
          class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
          type="button" onclick="toggleNavbar('example-collapse-navbar')">
          <!-- Icon -->
          <i class="text-white fas fa-bars"></i>
        </button>
      </div>
      <!-- Nav Right Side -->
      <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
        id="example-collapse-navbar">
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
          <!-- Social Media Button -->
          
          <!-- Social Media Button -->
          
          <!-- Social Media Button -->
          
        </ul>
      </div>
    </div>
    </div>
  </nav>
  
  <!-- End of Navigation -->

  <!-- Splash Page -->
  <main>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
      <!-- Background Image -->
      <div class="absolute top-0 w-full h-full bg-cover bg-center bg-no-repeat"
        style="background: url(techno.jpg)">
        <!-- Overlay -->
        <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
      </div>
      <!-- Text Over Main Background -->
      <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
            <div class="pr-12">
              <h1 class="text-white font-semibold text-5xl">
                Welcome to wollega university 
              </h1>
              <p class="mt-4 text-lg text-gray-300">
                Icon of Quality and relevalence!
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Making Polygon Shape in Background -->
      <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px; transform: translateZ(0);">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
          version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- End of Splash Page -->

    <!-- Services Section -->
    <section class="pb-20 bg-gray-300 -mt-24">
      <!-- 3 Card Section -->
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <!-- Card -->
          <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-right" data-aos-delay="1200">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
              <div class="px-4 py-5 flex-auto">
                <div
                  class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                  <!-- Icon -->
                  <i class="fas fa-robot"></i>
                </div>
                <!-- Text Box -->
                <h5 class="text-x1 font-bold">Wollega University</h5>
                <h6 class="text-xl font-semibold">Mission</h6>
                <p class="mt-2 mb-4 text-gray-600">
                  Mission of Wollega University is to achieve excellence in producing competent professionals in various disciplines and be a model in research and consultancy service through practical based, lifelong learning, and promote democratic culture to contribute to the national development of the country.
                </p>
              </div>
            </div>
          </div>
          <!-- Card -->
          <div class="rg:pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-left" data-aos-delay="1400">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
              <div class="px-4 py-5 flex-auto">
                <div
                  class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                  <!-- Icon -->
                  
                </div>
                <!-- Text Box -->
                <h5 class="text-x1 font-bold">Wollega University</h5>
                <h6 class="text-xl font-semibold">Vision</h6>
                <p class="mt-2 mb-4 text-gray-600">
                  Wollega University aspires to be a center of excellence in producing competent citizens and high-level professionals and researchers that could play a critical leadership role, generate new knowledge and adapt relevant knowledge to national development.
                </p>
              </div>
            </div>
          </div>
         <!-- Card -->
         <div class="pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-left" data-aos-delay="1600">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                <!-- Icon -->
                
              </div>
              <!-- Text Box -->
              <h5 class="text-x1 font-bold">Wollega University</h5>
              <h6 class="text-xl font-semibold">Core Values</h6>
              <p class="mt-2 mb-4 text-gray-600">Inovation and Creativity</p>
               <p class="mt-2 mb-4 text-gray-600"> Excellence</p>
               <p class="mt-2 mb-4 text-gray-600">Quality</p>
              <p class="mt-2 mb-4 text-gray-600"> Relevance</p>
               <p class="mt-2 mb-4 text-gray-600">Academic Freedom</p> 
              </p>
            </div>
          </div>
        </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Text Box and Card Container -->
        <div class="flex flex-wrap items-center mt-32">
          <!-- Text Box Container -->
          <div class="w-full md:w-5/12 px-4 mr-auto ml-auto" data-aos="zoom-int-right">
            <!-- Text Box -->
            <div
              class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
              <!-- Icon -->
              <i class="fas fa-star text-xl"></i>
            </div>
            <h3 class="text-3xl mb-2 font-semibold leading-normal">
              history of wollega university
            </h3>
            <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
              Wollega University has been developed a Research and Community Service Policy and has been executing its activities according to the preset premises. In 2013/2005 E.C budget year, Wollega University has completed one research works, and executing 44 research proposals among which many of them are expected to be completed at the end of this academic year. And in the process of implementing five research projects, of which one research project is sponsored by international collaborating organizations. The main sources of budget for the research project are from the University’s internal revenue and allocated budget by Ministry of Education. The University is also seeking other sources of funds through developing research projects and inviting local and international stakeholders to sponsor such projects. Hence, we are looking for interested stakeholders to participate in our activities and sponsor the University’s research projects in the future. Furthermore, Wollega University publishes its official international Science, Technology, and Arts Research (STAR) Journal quarterly and organizes at least one symposium and University level research review annually. The detailed elaborated information for 2005 E.C research activities are available here under.
            </p>
            <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
              One of the major functions of the Wollega University is the development and transmission of knowledge and skills through research. For this Wollega University empowers the RECO to promote and to make financial provisions by creating linkages with funding agencies, to create facilities for a global centre of research excellence within the University.

              In order to achieve its mandate in research and extension, Wollega University through this Research Policy will enable its staff and students to make full use of its limited resources to create a research culture consistent with National development.
            </p>
            <a href="https://wollegauniversity.edu.et/"
              class="font-bold text-gray-800 mt-8">Check wollega univeristy website
            </a>
          </div>

          <!-- Image Cap & Text Card -->
          <div class="w-full md:w-4/12 px-4 mr-auto ml-auto" data-aos="flip-left" data-aos-delay="1000">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-orange-500">
              <!-- Image -->
              <img alt="..."
                src="wollega.jpeg"
                class="w-full align-middle rounded-t-lg" />
              <blockquote class="relative p-8 mb-4">
                <!-- Making Polygon Shape in Card -->
                
                <!-- Text Box -->
                <h4 class="text-xl font-bold text-white">
                  wollega univeristy
                </h4>
            
                <p class="text-md font-light mt-2 text-white">
                 
                </p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Services Section -->

    <!-- About Section -->
    <section class="relative py-20">
      <!-- Making Polygon Shape in Background -->
      <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0);">
        
      </div>
      <!-- Section Container -->
      <div class="container mx-auto px-4">
        <div class="items-center flex flex-wrap">
          <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
            <!-- Image -->
            <img alt="..." class="max-w-full rounded-lg shadow-lg" data-aos="flip-right" data-aos-delay="1000"
              src="President.jpeg" />
          </div>
          <!-- Text Box Container-->
          <div class="w-full md:w-5/12 ml-auto mr-auto px-4" data-aos="zoom-int-left">
            <div class="md:pr-12">
              <div
                class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                <!-- Icon -->
                <i class="fas fa-rocket text-xl"></i>
              </div>
              <!-- Text Box -->
              <h3 class="text-3xl font-semibold">message of the president</h3>
              <p class="mt-4 text-lg leading-relaxed text-gray-600">
               <h4> 
                 Dr. Hassen Yusuf (President)

                As Wollega University president, 
                I am honored and privileged to welcome you   
                all to the young and innovative University which 
                aspires to be one of the top 25    
                universities in Africa by 2033 (2025 Ethiopian Calendar)</h4>
              </p>
              <!-- List -->
             
  <!-- End of Footer Section -->

</body>

</html>