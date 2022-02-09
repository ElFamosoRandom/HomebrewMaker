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
        <div class="bottom-0 right-0 fixed h-20 w-1/4 flex flex-row z-20">
            <div class="grow w-1/2">
                <svg class="h-14 w-14 mx-auto mt-3 text-yellow-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 8 8 12 12 16" />  <line x1="16" y1="12" x2="8" y2="12" /></svg>
            </div>
            <div class="grow w-1/2">
                <svg class="h-14 w-14 mx-auto mt-3 text-yellow-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 16 16 12 12 8" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
            </div>
        </div>
        <img src="../images/BackgroundTest2.png" style="background-size: contain; background-repeat: no-repeat; transform: scaleX(-1);" class="absolute h-5/6 -left-36 -bottom-40 z-1">
        <img src="../images/BackgroundTest3.png" style="background-size: contain; background-repeat: no-repeat; transform: scaleX(-1);" class="absolute h-4/6 -right-40 top-0 z-1">
        <p class="text-6xl z-10 text-zinc-50 absolute top-56 left-96 ml-20 ">The ultimate</p>
        <p class="text-6xl z-10 text-zinc-50 absolute top-80 left-96 ml-20 ">homebrew experience</p>
        <button class="bg-yellow-500 w-64 h-16 absolute top-80 left-96 hover:bg-yellow-600 ml-20 mt-32 text-gray-50 font-semibold z-10 text-2xl  py-2 px-4 border rounded shadow">Learn More</button>
        <div class="absolute top-0 bottom-0 h-full w-full bg-zinc-800 opacity-50 z-1">
        <!--<div class="bg-zinc-700 carousel-item absolute opacity-0 bg-center bg-cover h-full"">

        </div>
        <div class="bg-zinc-700 carousel-item absolute opacity-0 bg-center bg-cover h-full"">

        </div>
        <ol class="carousel-indicators">
        <li class="inline-block mr-3">
            <label for="carousel-1"
            class="carousel-bullet cursor-pointer block text-9xl text-white hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
            <label for="carousel-2"
            class="carousel-bullet cursor-pointer block text-9xl text-white hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
            <label for="carousel-3"
            class="carousel-bullet cursor-pointer block text-9xl text-white hover:text-blue-700">•</label>
        </li>
        </ol> -->

    </div>
</div>
</div>
<!--<div class="container absolute mx-auto px-2 inset-x-0 bottom-0 w-full lg:h-2/6">
    <div class="flex overflow-x-auto -mx-1 h-full">
      
        <div class="my-1 px-1 w-full flex-shrink-0 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">

            
            <article class="overflow-hidden rounded-lg shadow-lg bg-neutral-50 h-full">

            </article>
            

        </div>
       
		
		<div class="my-1 px-1 w-full flex-shrink-0 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
			<article class="overflow-hidden rounded-lg shadow-lg bg-neutral-50 h-full">
				
			</article>
		</div>
		<div class="my-1 px-1 w-full flex-shrink-0 lg:w-1/4 lg:px-4 lg:my-4">
			<article class="w-full h-full bg-neutral-50 rounded-lg">
				
			</article>
		</div>
		<div class="my-1 px-1 w-full flex-shrink-0 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4 lg:h-50">
			<article class="w-full h-full bg-neutral-50 rounded-lg">

			</article>
		</div>

        <div class="my-1 px-1 w-full flex-shrink-0 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4 lg:h-50">
			<article class="w-full h-full bg-neutral-50 rounded-lg">

			</article>
		</div>

        <div class="my-1 px-1 w-full flex-shrink-0 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4 lg:h-50">
			<article class="w-full h-full bg-neutral-50 rounded-lg">

			</article>
		</div>
    </div>
</div>-->
</body>
</html>