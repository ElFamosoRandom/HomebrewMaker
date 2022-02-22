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
        .box {
            @apply
            bg-indigo-700
            text-gray-100
            min-w-full
            h-32
            min-h-full
            rounded;
        }

    </style>
</head>
<body class="bg-zinc-900 h-screen w-screen overflow-hidden">
    <header style="" class="relative overflow-hidden shadow-xl mt-16 h-1/2">
        <img src="../images/BackgroundTest2.png" style="background-size: contain; background-repeat: no-repeat; transform: scaleX(-1);" class="absolute h-2/4 lg:h-full -left-20 -bottom-20 lg:-left-36 lg:-bottom-40">
        <img src="../images/BackgroundTest3.png" style="background-size: contain; background-repeat: no-repeat; transform: scaleX(-1);" class="absolute h-2/4 lg:h-full -right-32 -top-10 lg:-right-40 lg:top-0">
        <div class="absolute h-full w-full bg-zinc-800 opacity-70"></div>
        <div class="relative overflow-hidden w-full h-full">
            <div class="h-full w-full flex flex-col justify-center m-auto z-20 visible">
                <div class="ml-12 lg:ml-80 mr-auto">
                    <div class="z-10 w-full h-px invisible lg:visible lg:h-1 bg-zinc-50"></div>
                    <p class="text-4xl lg:text-6xl text-zinc-50 p-0 m-2 break-all">Homebrew</p>
                    <p class="text-4xl lg:text-6xl text-zinc-50 p-0 m-2 break-all">Maker</p>
                </div>
            </div>
            <div class="invisible top-0 right-0 fixed w-14 h-full flex flex-col z-20">
                <div class="rounded-full mx-auto mt-8 w-2 h-2 bg-yellow-500"></div>
                <div class="rounded-full mx-auto mt-8 w-2 h-2 bg-yellow-500"></div>
                <div class="rounded-full mx-auto mt-8 w-2 h-2 bg-yellow-500"></div>
            </div>
            <div class="bottom-0 right-0 fixed h-32 w-1/4 flex flex-row z-20 invisible lg:invisible md:invisible sm:invisible xs:invisible">
                <div class="grow w-1/2">
                    <svg class="h-16 w-16 mx-auto mt-3 text-yellow-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 8 8 12 12 16" />  <line x1="16" y1="12" x2="8" y2="12" /></svg>
                </div>
                <div class="grow w-1/2">
                    <svg class="h-16 w-16 mx-auto mt-3 text-yellow-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 16 16 12 12 8" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
                </div>
            </div>
            <div class="fixed top-12 invisible lg:visible lg:top-16 left:0 lg:left-12 z-10 w-4/6 h-px bg-zinc-50"></div>
            <div class="visible lg:invisible fixed top-2 left-2 z-10 h-18">
                <div class="z-20 w-full h-full">
                    <svg class="h-10 w-10 md:h-16 md:w-16 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="3" y1="12" x2="21" y2="12" />  <line x1="3" y1="6" x2="21" y2="6" />  <line x1="3" y1="18" x2="21" y2="18" /></svg>
                </div>
            </div>
            <div class="invisible lg:visible fixed top-0 xs:left-0 lg:left-12 z-10 flex flex-row w-4/6 h-12 lg:h-16">
                <div class="z-20 w-full h-full bg-yellow-500">
                    <svg class="h-8 w-8 text-zinc-900 mx-auto mt-2 lg:mt-4" <svg  width="24"  height="24"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M12 19l7-7 3 3-7 7-3-3z" />  <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />  <path d="M2 2l7.586 7.586" />  <circle cx="11" cy="11" r="2" /></svg>
                </div>
                <div class="z-20 w-full h-full">
                    <svg class="h-8 w-8 text-white mx-auto mt-2 lg:mt-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg>
                </div>
                <div class="z-20 w-full h-full">
                    <svg class="h-8 w-8 text-white mx-auto mt-2 lg:mt-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />  <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" /></svg>
                </div>
                <div class="z-20 w-full h-full">
                    <svg class="h-8 w-8 text-white mx-auto mt-2 lg:mt-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />  <polyline points="14 2 14 8 20 8" />  <line x1="16" y1="13" x2="8" y2="13" />  <line x1="16" y1="17" x2="8" y2="17" />  <polyline points="10 9 9 9 8 9" /></svg>
                </div>
                <div class="z-20 w-full h-full">
                    <svg class="h-8 w-8 text-white mx-auto mt-2 lg:mt-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />  <circle cx="12" cy="7" r="4" /></svg>
                </div>
            </div>
            <div class="invisible fixed bottom-2 lg:bottom-10 right-0 ml-10 lg:right-12 z-10 w-full lg:w-4/6 h-px bg-zinc-50"></div></div>
        </div>
    </header>
    <main>
        <div class="grid overflow-hidden grid-cols-6 grid-rows-1 gap-2 gap-y-2 grid-flow-row h-full m-auto w-11/12 h-full mt-12">
            <div class="box bg-indigo-700 text-gray-100 min-w-full h-32 min-h-full rounded">1</div>
            <div class="box bg-indigo-700 text-gray-100 min-w-full h-32 min-h-full rounded">2</div>
            <div class="box bg-indigo-700 text-gray-100 min-w-full h-32 min-h-full rounded">3</div>
            <div class="box bg-indigo-700 text-gray-100 min-w-full h-32 min-h-full rounded">4</div>
            <div class="box bg-indigo-700 text-gray-100 min-w-full h-32 min-h-full rounded">5</div>
            <div class="box bg-indigo-700 text-gray-100 min-w-full h-32 min-h-full rounded">6</div>
        </div>
    </main>
    <footer></footer>
</body>
</html>