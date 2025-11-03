document.addEventListener("DOMContentLoaded", function () {
    const contentBlocks = document.querySelectorAll('.content-block');

    const checkVisibility = () => {
        contentBlocks.forEach(block => {
            const rect = block.getBoundingClientRect();
            if (rect.top <= window.innerHeight && rect.bottom >= 0) {
                block.classList.add('fade-in');
            }
        });
    };

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Cek visibilitas saat halaman pertama kali dimuat
});