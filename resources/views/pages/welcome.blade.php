<x-user.layout>
    <x-slot name="title">Welcome Page</x-slot>

    <div class="flex flex-col md:flex-row items-center justify-between gap-5 h-auto mt-5 px-4">
        <!-- Teks Berjalan -->
        <div class="g-text w-full md:w-1/2 text-center">
            <div id="text-rotator" class="relative text-5xl md:text-7xl font-bold h-16 overflow-hidden uppercase font-chonburi">
                <div class="text-item text-white">Cipta</div>
                <div class="text-item text-red-500">Rasa</div>
                <div class="text-item text-yellow-500">Karsa</div>
            </div>
        </div>

        <!-- Gambar -->
        <div  class="g-lambang w-full md:w-1/2 flex justify-center">
            <img src="assets/images/img/lambang1hd.png" class="w-[250px] md:w-[450px] h-auto object-contain">
        </div>
    </div>
    {{-- <div class="w-full mt-5 p-3 text-center">
        <div class="text-xl md:text-4xl font-bold h-20 uppercase font-chonburi text-white">
            <span>"</span>
            <span id="typing-text"></span><span class="blinking-cursor">|</span>
            <span>"</span>
        </div>
    </div> --}}
    <div class="g-lambang text-center md:mt-20 mt-52 text-white font-calsans">
        <h1 class="font-bold">Scroll Down</h1>
        <a href="#" class="text-xl">    
            <i class="fa-solid fa-arrow-down"></i>
        </a>
    </div>
    <div class="h-screen border mt-10">
       
    
    </div>
</x-user.layout>
