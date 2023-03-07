<script>

    // Import Swiper Vue.js components
    import { Swiper, SwiperSlide } from 'swiper/vue';

    // Import Swiper styles
    import 'swiper/css';

    import 'swiper/css/pagination';

    // import required modules
    import { Pagination } from 'swiper';

    export default {
        components: {
            Swiper,
            SwiperSlide,
        },
        setup() {
            return {
            modules: [Pagination],
            };
        },
    };

</script>

<template>

    <swiper
        :slidesPerView="1"
        :spaceBetween="30"
        :pagination="{
            clickable: true,
        }"
        :modules="modules"
        class="PruductSwiper"
    >
        <swiper-slide>
            <div class="group">
                <div class="w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none">
                  <img src="/assets/site_img/0001.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="group">
                <div class="w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none">
                  <img src="/assets/site_img/0002.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="group">
                <div class="w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none">
                  <img src="/assets/site_img/0003.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
            </div>
        </swiper-slide>
    </swiper>

    <div class="p-4 project-block max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl about-block__title">Место, где рождается сказка</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">
            Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое. Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое.
        </p>

        <a href="/projects" class="font-bold my-9 projects-button">Все проекты</a>
    </div>

</template>

<style>

    .projects-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #fff;
        padding: 10px 16px;
        border-radius: 10px;
        transition: ease-in-out .3s;
        background: #BC9E78;
    }

    .projects-button:hover {
        background: #627166;
    }

    .PruductSwiper {
        height: 50vh;
    }

    .PruductSwiper .swiper {
        width: 100%;
        height: 30vh;
    }

    .PruductSwiper .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .PruductSwiper .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .PruductSwiper .swiper-pagination {
      margin: 10px 0;
    }

    .ProductSwiper .swiper-pagination-bullet {
      background: #627166;
    }

    .ProductSwiper  .swiper-pagination-bullet-active {
      background: #BC9E78;
    }

</style>
