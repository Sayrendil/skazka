<script>
  import ApplicationLogo from '@/Components/ApplicationLogo.vue';
  import { Carousel, Slide } from 'vue-carousel';
  import ProductSwiper from '@/Components/Main/SwiperProduct.vue';
  import AboutBlock from '@/Components/Main/AboutBlock.vue';

  export default {
    components: {
      ApplicationLogo,
      ProductSwiper,
      AboutBlock,
    },

    data() {
      return {
        callouts: [
          {
            name: 'Игровые комплексы',
            imageSrc: '/assets/site_img/igry.png',
            imageAlt: 'Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug.',
            href: '#',
          },
          {
            name: 'Развивающие элементы',
            imageSrc: '/assets/site_img/elements.png',
            imageAlt: 'Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant.',
            href: '#',
          },
          {
            name: 'Качели',
            imageSrc: '/assets/site_img/kacheli.png',
            imageAlt: 'Collection of four insulated travel bottles on wooden shelf.',
            href: '#',
          },
          {
            name: 'Беседки',
            imageSrc: '/assets/site_img/besedki.png',
            imageAlt: 'Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug.',
            href: '#',
          },
          {
            name: 'Батуты',
            imageSrc: '/assets/site_img/batut.png',
            imageAlt: 'Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant.',
            href: '#',
          },
          {
            name: 'Канатные комплексы на столбах',
            imageSrc: '/assets/site_img/kanat.png',
            imageAlt: 'Collection of four insulated travel bottles on wooden shelf.',
            href: '#',
          },
        ]
      }
    }

  }
</script>

<template>

  <div class="bg-white p-4">
    <div class="mx-auto max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mx-auto ">
            <h2 class="text-2xl font-bold text-gray-900">Основные категории каталога</h2>

            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                <div v-for="callout in callouts" :key="callout.name" class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                        <img :src="callout.imageSrc" :alt="callout.imageAlt" class="h-full w-full object-contain object-center" />
                    </div>
                    <h3 class="py-3 mb-3 text-center text-base font-semibold text-gray-900">
                        <a :href="callout.href">
                            <span class="absolute inset-0" />
                            {{ callout.name }}
                        </a>
                    </h3>
                    <p class="text-base font-semibold text-gray-900">{{ callout.description }}</p>
                </div>
            </div>
            <a href="" class="all-categories-btn ml-2">Смотреть все</a>
        </div>
    </div>
  </div>

  <AboutBlock class="max-w-7xl mx-auto sm:px-6 lg:px-8"></AboutBlock>

  <ProductSwiper></ProductSwiper>

  <section class="p-4 catalog-block max-w-7xl mx-auto sm:px-4 lg:px-8 max-w-7">
    <h1 class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl catalog-block__title">Наш каталог 2023</h1>
    <img src="/assets/site_img/catalog.png" alt="">
    <a href="/catalog" class="catalog-button py-2">Скачать каталог</a>
  </section>

</template>

<style>

  .all-categories-btn {
    background: transparent;
    color: #BC9E78;
    border: 1px solid #BC9E78;
    padding: 10px 25px;
    font-size: 18px;
    transition: all .2s;
    margin-top: 25px;
    display: inline-block;
    border-radius: 10px;
  }

  .all-categories-btn:hover {
    background: #BC9E78;
    color: #fff;
  }

  .catalog-block__title {
    color: #627166;
  }

  .catalog-button {
    background: #BC9E78;
    color: #fff;
    border-radius: 10px;
    transition: ease-in-out .3s;
    font-size: 18px;
    font-weight: 400;
    padding: 10px 25px;
    display: inline-block
  }

  .catalog-button:hover {
    background: #474A50;
  }

</style>
