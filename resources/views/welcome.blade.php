<x-app-layout>
    <div class="h-full mt-20">
        <h2 class="text-white text-2xl font-semibold mb-4 ">BIENVENIDO A VOLARE</h2>

        <x-image-slider :images="[
            asset('img/image1.jpg'),
            asset('img/image2.jpg'),
            asset('img/image3.jpg')
        ]" />


    </div>
</x-app-layout>
