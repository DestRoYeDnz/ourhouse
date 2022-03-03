<template>
    <div
        class="flex justify-between relative font-bold text-xs rounded-md text-white px-0.5 py-0.5 mb-1 mr-2"
        :style="'background-color: ' + cf.color"
    >
        <span
            class="flex-shrink-0 font-base text-xs ml-4 mt-1.5 w-24 min-w-24 text-left"
        >
            {{ cf.name }}:
        </span>
        <div class="relative flex justify-end flex-shrink-0 text-xs mr-0 w-48">
           <Toggle v-model="isToggleOn" onText="Hide Map" offText="Show Map"/>
        </div>
    </div>
</template>

<script>
import Toggle from '@/Components/Toggle'

export default {
    name: "CustomFieldBoolean",
    data() {
        return {
            modelValue: 'no',
            isToggleOn: true
        };
    },
    props: {
        cf: Object,
        errors: Object,
    },
    components: {
        Toggle
    },
    methods: {
        getCustomFieldValue(json) {
            const obj = JSON.parse(json);
            return obj;
        },
    },
};
</script>

<style></style>
