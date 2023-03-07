<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-white-900 focus:outline-none focus:border-indigo-700 transition active-link'
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white-700 hover:text-orange-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition link';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

<style>

    .link {
        color: #fff;
        margin-right: 30px;
    }

    .link:hover {
        color: #BC9E78;
        text-decoration: none;
        border-color: #BC9E78;
    }

    .active-link {
        color: #fff;
        border-color: #BC9E78;
        margin-right: 30px;
    }

    .active-link:hover {
        color: #BC9E78;
        text-decoration: none;
    }

</style>
