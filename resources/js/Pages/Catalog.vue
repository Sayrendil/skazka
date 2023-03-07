<script>
    import DefaultLayout from '@/Layouts/DefaultLayout.vue';

    export default {
        components: {
            DefaultLayout,
        }
    }

</script>

<template>
    <Head title="Каталог" />

    <DefaultLayout title="Каталог">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Каталог
            </h2>
        </template>
        <Slider />

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    
                </div>
            </div>
        </div>
    </DefaultLayout>

    
</template>
