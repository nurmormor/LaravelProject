<div class="relative overflow-hidden w-full max-w-6xl mx-auto">
    <!-- Contenedor del slider -->
    <div class="slider flex transition-transform duration-700 ease-in-out">
        @foreach ($images as $image)
            <div class="min-w-full aspect-w-16 aspect-h-9">
                <img src="{{ $image }}" alt="Slider image" class="w-full h-[600px] object-cover">
            </div>
        @endforeach
    </div>

    <!-- Botones de navegación -->
    <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full slider-prev">
        &#10094;
    </button>
    <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full slider-next">
        &#10095;
    </button>

    <!-- Indicadores -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
        @foreach ($images as $index => $image)
            <button data-index="{{ $index }}" class="w-3 h-3 bg-white rounded-full"></button>
        @endforeach
    </div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slider = document.querySelector(".slider");
        const slides = document.querySelectorAll(".slider > div");
        const prevButton = document.querySelector(".slider-prev");
        const nextButton = document.querySelector(".slider-next");
        const indicators = document.querySelectorAll("[data-index]");

        let currentIndex = 0;

        const updateSliderPosition = () => {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle("bg-gray-500", index === currentIndex);
            });
        };

        const showPrevSlide = () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
            updateSliderPosition();
        };

        const showNextSlide = () => {
            currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
            updateSliderPosition();
        };

        prevButton.addEventListener("click", showPrevSlide);
        nextButton.addEventListener("click", showNextSlide);

        indicators.forEach(indicator => {
            indicator.addEventListener("click", (e) => {
                currentIndex = parseInt(e.target.dataset.index);
                updateSliderPosition();
            });
        });

        setInterval(showNextSlide, 5000);
    });
</script>
