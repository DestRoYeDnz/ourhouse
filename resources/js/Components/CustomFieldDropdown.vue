<template>
        <div
            class="flex items-start relative font-bold text-xs rounded-md text-white px-0.5 py-0.5 mb-1 mr-2"
            :style="'background-color: ' + cf.color"
        >
            <span
                class="flex-shrink-0 font-base text-xs ml-4 mt-1.5 w-24 min-w-24 text-left"
                >{{ cf.name }}:</span
            >

            <select
                :style="'background-color: ' + cf.color"
                v-model="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
                class="ml-4 form-select appearance-none block w-full px-2 py-1 text-xs text-white transition ease-in-out rounded-md m-0 font-bold leading-wide border border-white appearance: none; focus:text-white-700 focus:outline-none"
            >
                <option selected>Select a value for {{ cf.name }}</option>
                <option
                    v-for="(row, index) in getCustomFieldValue(cf.value)"
                    :key="index"
                    :value="row"
                >
                    {{ row }}
                </option>
            </select>
        </div>
</template>

<script>


export default {
  name: "CustomFieldDropdown",
  data() {
    return {
        input: '',
    }
  },
  emits: ['update:modelValue'],
  props: {
    cf: Object,
    errors: Object,
    modelValue: String,
  },
  methods: {
    getCustomFieldValue(json){
      const obj = JSON.parse(json);
      return obj;
    },
  }
};
</script>

<style></style>
