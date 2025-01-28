@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="/img/parasite.jpg" alt="parasite" class="w-64 md:w-96">
        <div class="details ml-0 md:ml-24">
            <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-orange-500">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="ml-1">99%</span>
                <span class="mx-2">|</span>
                <span>Feb 18, 2021</span>
                <span>Action, Thriller, Comedy</span>
            </div>
            <p class="text-lg text-gray-300 mt-8">
                The neighbors are a nice crowd in the suburbs, but when a new neighbor is added, things get complicated. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit doloribus vitae eos repellendus tempora sequi optio rem alias, iusto, nobis rerum incidunt quisquam blanditiis ut nemo saepe aspernatur? Numquam, nihil?
            </p>

            <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div>Song Kang-hoo</div>
                        <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                    </div>
                    <div class="ml-8">
                        <div>Lee Sun-hyuk</div>
                        <div class="text-sm text-gray-400">Screenplay</div>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                    </svg>

                    <span class="ml-2">Play Trailer</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- end movie-info -->

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="/img/actor1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/actor2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/actor3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/actor4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/actor5.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">
                        John Smith
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- end movie-cast -->

<div class="movie-images">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image5.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/image6.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
        </div>
    </div>
</div> 
<!-- end movie-images -->

@endsection