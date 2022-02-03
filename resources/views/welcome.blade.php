<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-blue-500">
<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg bg-red-500">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            Article Title
                        </a>
                    </h1>
                    <p class="text-grey-darker text-sm">
                        11/1/19
                    </p>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Author Name
                        </p>
                    </a>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden">Like</span>
                        <i class="fa fa-heart"></i>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->
		
		<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
			<article class="overflow-hidden rounded-lg shadow-lg bg-red-500 h-full">
				<a href="#">
                    <img alt="Placeholder" class="h-full object-cover" src="https://picsum.photos/600/400/?random">
                </a>
			</article>
		</div>
		<div class="my-1 px-1 w-full lg:w-2/4 lg:px-4 lg:my-4">
			<article class="w-full h-full bg-red-500 rounded-lg">
				<div class=""> 
				
				</div>
			</article>
		</div>
		<div class="my-1 px-1 w-full lg:w-2/4 lg:my-4">
			<article class="w-full h-full bg-red-500 rounded-lg">
				<div class=""> 
				
				</div>
			</article>
		</div>
    </div>
</div>
</body>
</html>