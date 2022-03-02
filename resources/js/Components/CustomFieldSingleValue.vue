<template>
    <div
        class="flex items-start relative font-bold text-xs rounded-md text-white px-0.5 py-0.5 mb-1 mr-2"
        :style="'background-color: ' + cf.color"
    >
        <span
            class="flex-shrink-0 font-base text-xs ml-4 mt-1.5 w-24 min-w-24 text-left"
            >{{ cf.name }}:</span
        >

        <input
            type="text"
                v-model="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
            :style="'background-color: ' + cf.color"
            class="ml-4 block w-full px-2 py-1 text-xs text-white transition rounded-md ease-in-out m-0.5 border border-white"
        />
    </div>
</template>

<script>
export default {
    name: "CustomFieldSingleValue",
    data() {
        return {
            modelValue: ''
        };
    },
    props: {
        cf: Object,
        errors: Object,
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
