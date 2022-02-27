<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link,
    },

    props: ['href', 'active'],

    computed: {
        classes() {
            return this.active
                ? 'block pl-3 pr-4 py-2 border-l-4 border-ourhouse-400 text-base font-medium text-ourhouse-700 bg-ourhouse-50 focus:outline-none focus:text-ourhouse-800 focus:bg-ourhouse-100 focus:border-ourhouse-700 transition duration-150 ease-in-out'
                : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out'
        }
    }
}
</script>
