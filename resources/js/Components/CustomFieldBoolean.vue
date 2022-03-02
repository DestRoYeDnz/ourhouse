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
            <span class="radio">
                <input
                    class="bg-white text-gray-700 text-xs"
                    label="Yes"
                    type="radio"
                    id="yes"
                    name="result"
                    value="yes"
                    v-model='modelValue'
                    @input="$emit('update:modelValue', $event.target.value)"
                />
                <input
                    class="bg-white text-gray-700 text-xs"
                    label="No"
                    type="radio"
                    id="no"
                    name="result"
                    value="no"
                    v-model='modelValue'
                    @input="$emit('update:modelValue', $event.target.value)"
                    checked
                />
            </span>
        </div>
    </div>
</template>

<script>
export default {
    name: "CustomFieldBoolean",
    data() {
        return {
            modelValue: 'no',
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
