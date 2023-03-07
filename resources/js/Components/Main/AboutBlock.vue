<script>
export default {

}
</script>
<template>

    <div class="overflow-hidden bg-white p-4 sm:py-32">
        <div class="mx-auto">
          <div class="mx-auto grid gap-y-16 gap-x-8 ">
            <div class="lg:pr-8 lg:pt-4">
              <div class="">
                <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl about-block__title">Сказка - это</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Родители могут быть по-настоящему счастливы только тогда, когда счастливы их дети. Дарить им радость открытий и получать удовольствие от увлекательной игры поможет наша компания ТД «Сказка», производящая игровое оборудование для детских площадок, уличный спортинвентарь и другие малые архитектурные формы в Санкт-Петербурге.</p>
                <a href="/about" class="font-bold my-9 about-button">Смотреть больше <span uk-icon="icon: arrow-right"></span></a>
              </div>
            </div>
          </div>
        </div>
    </div>

</template>

<style>

    .about-block__title {
        font-weight: 700;
        color: #627166;
    }

    .about-button {
        display: inline-flex;
        align-items: center;
        border: 1px solid #BC9E78;
        gap: 8px;
        color: #BC9E78;
        padding: 10px 16px;
        border-radius: 10px;
        transition: all .2s;
    }

    .about-button:hover {
        text-decoration: none;
        color: #474A50;
        border-color: #474A50;
    }

</style>
