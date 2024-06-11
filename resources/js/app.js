import './bootstrap';

// Habitat
document.querySelectorAll('.habitat').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        const videoId = item.getAttribute('data-video-id');
        const iframe = document.getElementById('videoFrame');
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1&modestbranding=1&showinfo=0&rel=0&iv_load_policy=3`;
    });
});
