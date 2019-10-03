<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tailwind Lunch & Learn</title>

        <link href="{{ mix('css/main.css') }}" rel="stylesheet" />
    </head>

    <body>
    <div class="font-sans leading-tight min-h-screen bg-gray-100 p-8">
        <div class="max-w-sm md:max-w-md lg:max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="bg-cover h-40" style="background-image: url('http://www.vickeryvillageshops.com/wp-content/uploads/2016/09/cumming-ga-open-air-shopping-vickery-village.jpg');"></div>
            <div class="border-b px-4 pb-6">
                <div class="text-center sm:text-left sm:flex mb-4">
                    <div class="flex justify-center">
                        <img class="rounded-full border-4 border-white -mt-16 mr-4" src="img/nes128x128.jpg" alt="">
                    </div>
                    <div class="py-2">
                        <h3 class="font-bold text-gray-800 text-2xl mb-1">Justin Merrell</h3>
                        <div class="inline-flex text-gray-600 sm:flex items-center">
                            <svg class="h-5 w-5 text-gray-600 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                            Vickery Village, GA
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <button class="flex-1 rounded-full bg-blue-500 text-white antialiased font-bold hover:bg-blue-700 px-4 py-2 mr-2">Follow</button>
                    <button class="flex-1 rounded-full border-2 border-gray-300 hover:border-gray-400 font-semibold text-gray-800 px-4 py-2">Message</button>
                </div>
            </div>
            <div class="px-4 py-4">
                <div class="flex items-center text-gray-600 mb-4">
                    <svg class="h-6 w-6 text-gray-500 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/></svg>
                    <span><strong class="text-gray-800">12</strong> Followers you know</span>
                </div>
                <div class="flex">
                    <div class="flex flex-row-reverse justify-end mr-2">
                    <img class="border-2 border-white rounded-full h-10 w-10" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                    <img class="border-2 border-white rounded-full h-10 w-10 -mr-2" src="https://randomuser.me/api/portraits/women/31.jpg" alt="">
                    <img class="border-2 border-white rounded-full h-10 w-10 -mr-2" src="https://randomuser.me/api/portraits/men/33.jpg" alt="">
                    <img class="border-2 border-white rounded-full h-10 w-10 -mr-2" src="https://randomuser.me/api/portraits/women/32.jpg" alt="">
                    <img class="border-2 border-white rounded-full h-10 w-10 -mr-2" src="https://randomuser.me/api/portraits/men/44.jpg" alt="">
                    <img class="border-2 border-white rounded-full h-10 w-10 -mr-2" src="https://randomuser.me/api/portraits/women/42.jpg" alt="">
                    </div>
                    <span class="flex items-center justify-center text-sm text-gray-600 font-semibold border-2 border-gray-300 rounded-full h-10 w-10">+6</span>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
