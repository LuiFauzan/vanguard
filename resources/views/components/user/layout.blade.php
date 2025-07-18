<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="/js/main.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/46db5e6224.js" crossorigin="anonymous"></script>

    <title>{{ $title }}</title>

    <style>
        #text-rotator {
    position: relative;
  }
  .text-item {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
  }
  .blinking-cursor {
  animation: blink 0.7s infinite;
}

@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}
    </style>
    
  </head>
  <body class="bg-[#1690a3]">
   <x-user.navbar></x-user.navbar>
    <main class="p-2 h-auto">
    {{ $slot }}
   </main>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

</body>
</html>