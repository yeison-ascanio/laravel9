<x-layouts.app title="Home" meta-description="Home">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Home
    </h1>
    @auth
           <div class="my-4 font-serif text-2xl text-center text-sky-600 dark:text-white">
               Welcome {{ Auth::user()->name }}
           </div>
        @endauth
</x-layouts.app>
