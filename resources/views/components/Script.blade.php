<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/app.js"></script>

<script>
    var screenSize = screen.width;

    var map = L.map('map').setView([-7.072505262549012, 107.94232816547856], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    var marker = L.marker([-7.072505262549012, 107.94232816547856]).addTo(map);

    var swiper = new Swiper(".videoSwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
        },
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiper1 = new Swiper(".travelSwiper", {
        effect: "coverflow",
        slidesPerView: 3,
        spaceBetween: 40,
        autoplay: true,
        centeredSlides: true,
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiper2 = new Swiper(".productSwiper", {
        effect: "coverflow",
        slidesPerView: 3,
        spaceBetween: 40,
        autoplay: true,
        centeredSlides: true,
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper3 = new Swiper(".articleSwiper", {
        slidesPerView: 1.5,
        spaceBetween: 30,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    articleGrid = document.querySelector("#article-grid");
    articleSwipe = document.querySelector("#article-swipe");

    function query_800(x) {
        if (x.matches) { // If media query matches
            articleGrid.style.display = "none"
            articleSwipe.style.display = "block"
        } else {
            articleGrid.style.display = "grid"
            articleSwipe.style.display = "none"
        }
    }

    var media_800 = window.matchMedia("(max-width: 800px)")
    query_800(media_800) // Call listener function at run time
    media_800.addListener(query_800) // Attach listener function on state changes
</script>
