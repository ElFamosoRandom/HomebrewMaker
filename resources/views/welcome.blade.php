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
<body class="bg-zinc-400 overflow-hidden">
    <div class="w-full h-screen bg-cover p-20" style="background-image: url('https://i.pinimg.com/originals/85/94/fd/8594fdb3396363a23030592a0a22088b.jpg')">
        <div class=" border-solid border-4 border-sky-500 w-full h-full rounded-md" >
            <div class="-m-1 -p-1 w-1/2 h-full">
                <svg id="visual" class="w-full h-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M367 0L372.3 20C377.7 40 388.3 80 401.2 120C414 160 429 200 433.8 240C438.7 280 433.3 320 421 360C408.7 400 389.3 440 380.7 480C372 520 374 560 375 580L376 600L0 600L0 580C0 560 0 520 0 480C0 440 0 400 0 360C0 320 0 280 0 240C0 200 0 160 0 120C0 80 0 40 0 20L0 0Z" fill="#0ea4e9" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
            </div>
        </div>
    </div>
    
    <header style="" class="">
        
    </header>
    <main class="w-full h-full">
        
    </main>
    <footer></footer>
</body>
</html>