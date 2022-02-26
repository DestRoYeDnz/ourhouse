require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import number from '@coders-tm/vue-number-format'
import { SnackbarService, Vue3Snackbar } from "vue3-snackbar";
import "vue3-snackbar/dist/style.css";

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'ourHouse';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(number)
            .use(SnackbarService)
            .component("vue3-snackbar", Vue3Snackbar)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563', showSpinner: true });
