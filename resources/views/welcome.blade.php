<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
        .carousel-open:checked+.carousel-item {
          position: static;
          opacity: 100;
        }

        .carousel-item {
          -webkit-transition: opacity 0.6s ease-out;
          transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
          display: block;
        }

        .carousel-indicators {
          list-style: none;
          margin: 10px;
          padding: 0;
          position: absolute;
          left: 95%;
          right: 0;
          top:10%;
          text-align: center;
          z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
          color: #2b6cb0;
          /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>
</head>
<body class="bg-zinc-900 h-screen w-screen">
    <div style="" class="relative rounded relative overflow-hidden shadow-xl h-full">
        <div class="carousel relative rounded relative overflow-hidden shadow-xl h-full">
            <div class="carousel-inner relative overflow-hidden w-full h-full">
                <!-- <img src="../images/backgroundback2.jpg" style="background-size: contain; background-repeat: no-repeat;" class="h-full w-full"> -->
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
                <div class="bg-zinc-900 carousel-item absolute opacity-0 bg-center bg-cover h-full"">

                </div>
                

                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="bg-zinc-700 carousel-item absolute opacity-0 bg-center bg-cover h-full"">

                </div>


                <!--Slide 3-->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="bg-zinc-500 carousel-item absolute opacity-0 bg-center bg-cover h-full"">

                </div>

                <!-- Add additional indicators for each slide-->
                <div class="top-0 right-0 fixed w-14 h-full flex flex-col z-20">
                    <div class="rounded-full mx-auto mt-8 w-2 h-2 bg-yellow-500"></div>
                    <div class="rounded-full mx-auto mt-8 w-2 h-2 bg-yellow-500"></div>
                    <div class="rounded-full mx-auto mt-8 w-2 h-2 bg-yellow-500"></div>
                </div>
                <div class="bottom-0 right-0 fixed h-32 w-1/4 flex flex-row z-20">
                    <div class="grow w-1/2">
                        <svg class="h-16 w-16 mx-auto mt-3 text-yellow-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 8 8 12 12 16" />  <line x1="16" y1="12" x2="8" y2="12" /></svg>
                    </div>
                    <div class="grow w-1/2">
                        <svg class="h-16 w-16 mx-auto mt-3 text-yellow-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 16 16 12 12 8" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
                    </div>
                </div>
                <img src="../images/BackgroundTest2.png" style="background-size: contain; background-repeat: no-repeat; transform: scaleX(-1);" class="absolute h-5/6 -left-36 -bottom-40 z-1">
                <img src="../images/BackgroundTest3.png" style="background-size: contain; background-repeat: no-repeat; transform: scaleX(-1);" class="absolute h-4/6 -right-40 top-0 z-1">

                <div class="absolute top-16 left-12 z-10 w-4/6 h-px bg-zinc-50"></div>
                <div class="absolute top-60 left-80 z-10 w-96 h-1 bg-zinc-50"></div>
                <div class="absolute top-60 left-80 z-10 mr-32">
                    <div class="m-8">
                        <p class="text-6xl text-zinc-50">Homebrew</p>
                    </div>
                    <div class="m-8">
                        <p class="text-6xl text-zinc-50">Maker</p>
                    </div>
                    <div class="mt-8 mb-8 ml-8 mr-32">
                        <p class="text-xl text-zinc-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada vel augue sit amet laoreet. Sed pellentesque orci vitae nibh placerat tristique. Donec sagittis magna a odio euismod rutrum.</p>
                    </div>
                    <div class="m-8">
                        <button class="bg-yellow-500 w-64 h-16 hover:bg-yellow-600 text-gray-50 font-semibold text-2xl py-2 px-4 border rounded shadow">Learn More</button>
                    </div>
                </div>
                <div class="absolute top-0 left-12 z-10 flex flex-row w-4/6 h-16">
                    <div class="z-20 w-full h-full bg-yellow-500">
                        <svg class="h-8 w-8 text-zinc-900 mx-auto mt-4" <svg  width="24"  height="24"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M12 19l7-7 3 3-7 7-3-3z" />  <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />  <path d="M2 2l7.586 7.586" />  <circle cx="11" cy="11" r="2" /></svg>
                    </div>
                    <div class="z-20 w-full h-full">
                        <svg class="h-8 w-8 text-white mx-auto mt-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg>
                    </div>
                    <div class="z-20 w-full h-full">
                        <svg class="h-8 w-8 text-white mx-auto mt-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />  <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" /></svg>
                    </div>
                    <div class="z-20 w-full h-full">
                        <svg class="h-8 w-8 text-white mx-auto mt-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />  <polyline points="14 2 14 8 20 8" />  <line x1="16" y1="13" x2="8" y2="13" />  <line x1="16" y1="17" x2="8" y2="17" />  <polyline points="10 9 9 9 8 9" /></svg>
                    </div>
                    <div class="z-20 w-full h-full">
                        <svg class="h-8 w-8 text-white mx-auto mt-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />  <circle cx="12" cy="7" r="4" /></svg>
                    </div>
                </div>
                
                
                <div class="absolute bottom-10 right-12 z-10 w-4/6 h-px bg-zinc-50"></div>
                
                <div class="absolute top-0 bottom-0 h-full w-full bg-zinc-800 opacity-50 z-1">
            </div>
        </div>
    </div>
</body>
</html>