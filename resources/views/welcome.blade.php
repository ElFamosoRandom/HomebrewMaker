<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
        .Iam p {
          height: 50px;
          float: left;
          margin-right: 0.3em;
        }
        .Iam b {
          float: left;
          overflow: hidden;
          position: relative;
          height: 36px;
        }
        .Iam .innerIam {
          display: inline-block;
          
          position: relative;
          white-space: nowrap;
          top: 0;
          left: 0;


        /*animation*/

                animation:move 5s;
        /*animation-iteration-count*/

                animation-iteration-count:infinite;
        /*animation-delay*/

                animation-delay:2s;
        }
        @keyframes move{
        0%  { top: 0px; }
        20% { top: -36px; }
        40% { top: -72px; }
        60% { top: -108px; }
        80% { top: -144px; }
        }

        .inner {
          font-weight: bold;
          height: 36px;
          overflow: hidden;
          position:relative;
        }

        .images-wrapper {
          display: flex;
          flex-direction: column;
          
          animation: slideToLeft 10s ease infinite 1s;
        }
        #ah{
          z-index:-1;
          animation: image-change 10s ease infinite 1s,hide-element 10s ease infinite 1s;
          
        }

        @keyframes hide-element {
          20%,
          50% {
              visibility:hidden
          }
          70%,
          90% {
            visibility:hidden
          }
          80%,
          100% {
            visibility:visible
          }
        }

       

        @keyframes image-change {
          0%,
          50% {
              transform: translateY(0%);
          }
          50%,
          70% {
            transform: translateY(0%);
          }
          70%,
          100% {
            transform: translateY(500%);
          }
        }

        @keyframes slideToLeft {
          0%,
          10% {
            transform: translateY(0);
          }
          15%,
          28% {
            transform: translateY(-20%);
          }
          33%,
          46% {
            transform: translateY(-40%);
          }
          51%,
          64% {
            transform: translateY(-60%);
          }
          69%,
          82% {
            transform: translateY(-80%);
          }
          87%,
          100% {
            transform: translateY(-100%);
          }
        }


    </style>
</head>
<body class="bg-zinc-400 overflow-hidden">
    <div class="w-full h-screen bg-cover pl-4 pr-4 pt-4 pb-4" style="background-image: url('https://cdnb.artstation.com/p/assets/images/images/024/684/143/large/pixel-cat-2020-02-25-gai1.jpg?1583202914')">
        <div class=" border-solid border-8 borer-slate-50 w-full h-full rounded-md" >
          <div>
            <button type="button" class='absolute right-10 top-10 w-36 h-12 bg-gradient-to-r from-indigo-500 via-blue-500 to-green-500 hover:from-indigo-600 hover:via-pink-600 hover:to-red-600 focus:outline-none text-white text-xs uppercase font-bold shadow-md rounded-full mx-auto'>
              <div class="flex sm:flex-cols-12 gap-2">
                  <div class="pl-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                      </svg>
                  </div>
                  <div class="col-span-2 pt-1">Button name</div>
              </div>    
            </button>
            <button type="button" class='absolute right-52 top-10 w-36 h-12 bg-gradient-to-r from-indigo-500 via-blue-500 to-green-500 hover:from-indigo-600 hover:via-pink-600 hover:to-red-600 focus:outline-none text-white text-xs uppercase font-bold shadow-md rounded-full mx-auto'>
              <div class="flex sm:flex-cols-12 gap-2">
                  <div class="pl-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                      </svg>
                  </div>
                  <div class="col-span-2 pt-1">Button name</div>
              </div>    
            </button>
          </div>
          <div class="flex w-72 pt-4 pl-4">
            <img style="" src="{{ asset('images/logo.png') }}" alt="tag">
          </div>
          <div class="flex p-12 w-full absolute top-30">
            <div class="w-6/12 shadow-2xl">
              <div class="bg-zinc-900 bg-opacity-60 w-full z-10 rounded-md">
                <p class="pr-12 pl-12 pt-12 text-white text-2xl z-20 w-full">How about a little help with your homebrew campaign ?</p>
                <div class="Iam pr-12 pl-12 pt-12 text-white text-2xl z-20 w-full">
                  <p>Hombrew maker can help you with </p>
                  <div class="inner">
                    <div class="images-wrapper">
                      <p id="ah"> your character sheet</p>
                      <p> your battle</p>
                      <p> your spells</p>
                      <p> your world</p>
                      <p> your creativity</p>
                    </div>
                  </div>
                </div>
                <p class="p-12 text-white text-2xl z-20 w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a fermentum quam. Sed blandit aliquam egestas. Nullam et arcu et nulla suscipit varius. Vivamus suscipit, dui porttitor sagittis sagittis, turpis ante feugiat sapien, eu fringilla orci nisi sed nulla. Ut iaculis molestie sapien, in scelerisque quam molestie a.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div style="height: 30%; width: 100%; overflow: hidden; position:absolute; top:70%; left:0;">
      <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M-7.34,6.44 C114.55,110.05 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #f8fafc;">
        </path>
      </svg>
    </div>
    <div class="flex space-x-7 w-full pl-7">
      <div class="relative -top-28 h-72 py-4 px-8 bg-slate-200 shadow-lg rounded-lg z-30 item grow transition-all hover:-top-52">
          <div class="flex justify-center -mt-16">
            <img class="w-20 h-20" src="{{ asset('images/sword.png') }}">
          </div>
          <div>
            <h2 class="text-gray-800 text-2xl font-semibold text-center">Design Tools</h2>
          </div>
      </div>
      <div class="relative -top-28 py-4 px-8 bg-slate-200 shadow-lg rounded-lg z-30 item grow transition-all hover:-top-52">
          <div class="flex justify-center -mt-16">
            <img class="w-20 h-20" src="{{ asset('images/gears.png') }}">
          </div>
          <div>
            <h2 class="text-gray-800 text-2xl font-semibold text-center">Design Tools</h2>
          </div>
          
      </div>
      <div class="relative -top-28 py-4 px-8 bg-slate-200 shadow-lg rounded-lg z-30 item grow transition-all hover:-top-52">
          <div class="flex justify-center -mt-16">
            <img class="w-20 h-20" src="{{ asset('images/mage.png') }}">
          </div>
          <div>
            <h2 class="text-gray-800 text-2xl font-semibold text-center">Design Tools</h2>
          </div>
      </div>
      <div class="relative -top-28 py-4 px-8 bg-slate-200 shadow-lg rounded-lg z-30 item grow transition-all hover:-top-52">
          <div class="flex justify-center -mt-16">
            <img class="w-20 h-20" src="{{ asset('images/mage.png') }}">
          </div>
          <div>
            <h2 class="text-gray-800 text-2xl font-semibold text-center">Design Tools</h2>
          </div>
      </div>
      <div class="relative -top-28 py-4 px-8 bg-slate-200 shadow-lg rounded-lg z-30 item grow transition-all hover:-top-52">
          <div class="flex justify-center -mt-16">
            <img class="w-20 h-20" src="{{ asset('images/mage.png') }}">
          </div>
          <div>
            <h2 class="text-gray-800 text-2xl font-semibold text-center">Design Tools</h2>
          </div>
      </div>
      <div class="relative -top-28 py-4 px-8 bg-slate-200 shadow-lg rounded-lg z-30 item grow transition-all hover:-top-52">
          <div class="flex justify-center -mt-16">
            <img class="w-20 h-20" src="{{ asset('images/mage.png') }}">
          </div>
          <div>
            <h2 class="text-gray-800 text-2xl font-semibold text-center">Design Tools</h2>
          </div>
      </div>
      <div class="relative -top-28 py-4 px-8 bg-slate-200 shadow-lg rounded-lg z-30 item grow transition-all hover:-top-52">
          <div class="flex justify-center -mt-16">
            <img class="w-20 h-20" src="{{ asset('images/mage.png') }}">
          </div>
          <div>
            <h2 class="text-gray-800 text-2xl font-semibold text-center">Design Tools</h2>
          </div>
      </div>
      
    <div>
    <!--<div style="height: 50%; width: 25%; overflow: hidden; position:absolute; top:0; left:0;">
      <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path fill="#FFFFFF" d="M36.2,-51.4C48.8,-48.2,62.3,-41.4,67.5,-30.7C72.6,-19.9,69.5,-5.2,66.9,9.3C64.3,23.8,62.3,38,53.2,43.1C44.1,48.2,27.9,44.1,15.3,44C2.8,43.9,-6.2,47.7,-18.2,49.8C-30.3,51.9,-45.4,52.1,-54.3,45.2C-63.3,38.2,-66.1,24.1,-65.9,10.8C-65.7,-2.4,-62.6,-14.8,-59.4,-29.4C-56.3,-44,-53.1,-60.9,-43.2,-65.3C-33.3,-69.8,-16.7,-61.8,-2.4,-58C11.8,-54.3,23.6,-54.6,36.2,-51.4Z" transform="translate(100 100)" />
      </svg>
    </div>-->
    
    <header style="" class="">
        
    </header>
    <main class="w-full h-full">
        
    </main>
    <footer></footer>
</body>
</html>