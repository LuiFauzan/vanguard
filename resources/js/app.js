import './bootstrap';
import gsap from 'gsap';

gsap.from(".nav-logo",{
    x:-100,
    duration:2.5,
    opacity:0,
    ease:"power2.out"
})
gsap.from(".nav-about",{
    x:100,
    duration:2.5,
    opacity:0,
    ease:"power2.out"
})
gsap.from(".g-text",{
    y:100,
    duration:2.5,
    opacity:0,
    ease:"power2.out"
})
gsap.from(".g-lambang",{
    y:100,
    duration:2.5,
    opacity:0,
    ease:"power2.out"
})

// Animasi Text Cipta,rasa,karsa
const texts = document.querySelectorAll(".text-item");
  const tl = gsap.timeline({ repeat: -1 });

  texts.forEach((text, index) => {
    tl.to(text, {
      opacity: 1,
      duration: 1,
      onStart: () => {
        // Sembunyikan semua dulu
        texts.forEach(t => gsap.set(t, { opacity: 0 }));
      }
    })
    .to(text, { opacity: 0, duration: 2 }, "+=2"); // tampil 2 detik lalu fade out
  });


// Animasi Mengetik
document.addEventListener("DOMContentLoaded", () => {
    const words = ["Jika kamu tidak bisa menjelaskannya dengan sederhana, kamu belum memahaminya dengan cukup baik."];
    let currentWord = 0;
    let currentLetter = 0;
    let isDeleting = false;

    const textElement = document.getElementById("typing-text");

    function type() {
        const word = words[currentWord];
        if (isDeleting) {
            textElement.textContent = word.substring(0, currentLetter--);
        } else {
            textElement.textContent = word.substring(0, currentLetter++);
        }

        if (!isDeleting && currentLetter === word.length) {
            isDeleting = true;
            setTimeout(type, 1000); // jeda sebelum menghapus
        } else if (isDeleting && currentLetter === 0) {
            isDeleting = false;
            currentWord = (currentWord + 1) % words.length;
            setTimeout(type, 600); // jeda sebelum mengetik kata berikutnya
        } else {
            setTimeout(type, isDeleting ? 80 : 100); // kecepatan ketik/hapus
        }
    }

    type();
});