<script setup>
import DefaultLayout from '@/Layouts/DefaultLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Slider from '@/Components/Slider.vue';
</script>

<template>
    <DefaultLayout title="Главная">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <Slider />

        <div class="py-12">
            <div class="">
                <div class="overflow-hidden">
                    <Welcome />
                </div>
            </div>
        </div>
    </DefaultLayout>
</template>
