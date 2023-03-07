<script>
    // Import Swiper Vue.js components
    import { Swiper, SwiperSlide } from "swiper/vue";

    // Import Swiper styles
    import "swiper/css";

    import "swiper/css/navigation";

    // import required modules
    import { Navigation } from "swiper";

    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
        },

        components: {
            Swiper,
            SwiperSlide
        },

        setup() {
            return {
                modules: [Navigation],
            };
        },
    }

</script>

<template>
    <Head title="Главная" />
    <swiper :navigation="true" :modules="modules" class="mySwiper">
        <swiper-slide>
            <div className="object-fill w-full h-96" class="slide-image__1 bg-[url('/assets/site_img/0002.jpg')]">
                <div class="slide-overflow">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="overflow-hidden flexable">
                                <div class="slide-title">Вдохновение, воплощенное в реальность!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </swiper-slide>
        <swiper-slide>
            <div className="object-fill w-full h-96" class="slide-image__2 bg-[url('/assets/site_img/0002.jpg')]">
                <div class="slide-overflow">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="overflow-hidden flexable">
                                <div class="slide-title">Вдохновение, воплощенное в реальность!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div className="object-fill w-full h-96" class="slide-image__3 bg-[url('/assets/site_img/0003.jpg')]">
                <div class="slide-overflow">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="overflow-hidden flexable">
                                <div class="slide-title">Вдохновение, воплощенное в реальность!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </swiper-slide>
    </swiper>

</template>

<style>

    .slide-image__1 {
        background-size: cover;
        background-position: center center;
        height: 60vh;
        background-attachment: fixed;
    }

    .slide-image__2 {
        background-size: cover;
        background-position: center center;
        height: 60vh;
        background-attachment: fixed;
    }

    .slide-image__3 {
        background-size: cover;
        background-position: center center;
        height: 60vh;
        background-attachment: fixed;
    }

    .slide-overflow {
        background-color: rgba(0, 0, 0, 0.5);
        height: 86vh;
    }

    .slide-title {
        font-size: 36px;
        margin-bottom: 20px;
        text-transform: uppercase;
        font-weight: bold;
        color: #fff;
    }

    .slide-text {
        font-size: 22px;
        font-weight: 400;

        color: #fff;
    }

    .flexable {
        padding-top: 100px;
    }

    .modal-button {
        background: transparent;
        color: #fff;
        border: 1px solid #BC9E78;
        margin-top: 25px;
        padding: 10px 25px;
        font-size: 18px;
        transition: all .2s;
    }

    .modal-button:hover {
        background: #BC9E78;
        color: #fff;
    }

</style>
