<template>
    <Listbox v-model="selectedCfs">
        <ListboxButton
            class="w-1/2 rounded-md border border-gray-400 px-4 py-2 text-left text-xs"
        >
        {{selectedCfs.name}}
        </ListboxButton>
        <transition name="slide">
            <ListboxOptions
                class="w-1/2 rounded-md border border-gray-400 px-4 py-2 text-left text-xs"
            >
                <ListboxOption
                    v-for="cf in cfs"
                    :key="cf.id"
                    :value="cf"
                    :disabled="cf.unavailable"
                    class="w-full h-6 text-left text-xs flex justify-between items-center"
                >
                <div class='w-full flex item-center justify-between' v-if="cf.pro">
                        <div class="text-gray-300 text-xs leading-tight">{{ cf.name }}</div>


                        <div class='p-0 bg-ourhouse-500 leading-tight rounded text-white font-bold' >
                            <Link
                            class="p-0 mt-0 leading-tight text-xs px-1 py-0.5"
                            :href="route('subscription.create')">
                            pro required
                            </Link>
                        </div>
                    </div>

                    <div v-else>
                        <div class="text-gray-600  text-xs leading-tight">{{ cf.name }}</div>
                    </div>
                </ListboxOption>
            </ListboxOptions>
        </transition>
    </Listbox>
</template>

<script>
import { ref, computed } from "vue";
import { Link } from '@inertiajs/inertia-vue3';

import {
    Listbox,
    ListboxButton,
    ListboxOptions,
    ListboxOption,

} from "@headlessui/vue";

export default {
    components: {Link, Listbox, ListboxButton, ListboxOptions, ListboxOption },

    setup() {
        const cfs = [
            { id: 1, name: "Single Value", value: 'value', unavailable: false },
            { id: 1, name: "Dropdown", value: 'dropdown', unavailable: false },
            { id: 1, name: "Multi Select", value: 'multi-select', unavailable: false },
            { id: 1, name: "Yes / No", value: 'boolean', unavailable: false },
            { id: 1, name: "Computed Value", value: 'computed', unavailable: true, pro: true  }
        ];
        const selectedCfs = ref(cfs[0]);

        // a computed ref
        const selected = computed(() => {
            return this.selectedCfs.name;
        });

        return {  
            cfs,
            selectedCfs,
        };
    },
};
</script>

<style>
.slide-fade-enter-active {
    transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateX(20px);
    opacity: 0;
}
</style>
