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
            .component('vue-dropdown', {
                data: function() {
                  return{
                    show: false,
                    cars: [
                      'BMW',
                      'Mercedes',
                      'Audi',
                      'Volvo',
                    ]
                  }
                },
                props: {
                  color: String,
                  animation: String
                },
                template: `
                  <div class="dropdown-wrapper relative flex items-center justify-between">
                  <button v-on:click="show = !show" class="flex items-center justify-between w-full text-white font-bold py-2 px-4 whitespace-no-wrap rounded transition duration-300 bg-ourhouse-400 text-sm">
                    <div class='text-sm'>BUTTON NAME ??</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                  </button>
                  <transition :name="animation">
                    <div class="dropdown-menu bg-ourhouse-400 text-white  rounded absolute z-10 top-8 shadow-lg w-56 mt-8 max-w-xs" v-if="show">
                      <ul class="list-none overflow-hidden rounded">
                        <li v-for="car in cars">
                          <a href="" class="flex py-2 px-4 transition duration-300">{{car}}</a>
                        </li>
                      </ul>
                    </div>
                  </transition>
                </div>
                `
              })
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563', showSpinner: true });


String.prototype.toProperCase = function () {
  return this.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
};