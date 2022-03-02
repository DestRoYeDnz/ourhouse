<template>

<tr class="
      w-full
      pt-4
      border-b border-ourhouse-600
      flex flex-col flex-no
      wrap
      lg:table-row
      sm:rounded-none
      mb-2
      sm:mb-0
    "
  >
    <td class="align-top p-2 text-left font-bold flex">
      <div class="text-3xl lg:text-2xl tracking-wider">
        {{ row.title }}
      </div>
    </td>
    <td class="flex flex-col align-top p-2 text-left font-semibold mb-4">
      <div>{{ row.address }}</div>
      <div><a class="text-ourhouse-400 hover:underline hover:text-ourhouse-800" target="_BLANK" :href="'https://maps.google.com/?q=' + row.address">Google Maps</a></div>
    </td>
    <td
      class="
        align-top
        p-2
        text-left
        lg:text-center
        border-b border-gray-300
        flex
      "
    >
      <span>{{ row.bedrooms }}</span>
      <span class="pl-2"> bedrooms.</span>
    </td>
    <td
      class="
        align-top
        p-2
        text-left
        lg:text-center
        border-b border-gray-300
        flex
      "
    >
      <span>{{ row.bathrooms }}</span>
      <span class="pl-2"> bathrooms.</span>
    </td>
    <td
      class="
        align-top
        p-2
        text-left
        lg:text-center
        border-b border-gray-300
        flex
      "
    >
      <span class="pr-4">House:</span>
      <span>{{ row.house_area }} </span>
      <span class="pl-2">
        <span>m<sup>2</sup></span></span
      >
    </td>
    <td
      class="
        align-top
        p-2
        text-left
        lg:text-center
        border-b border-gray-300
        flex
      "
    >
      <span class="pr-4">Land:</span>
      <span>{{ row.land_area }}</span>
      <span class="pl-2">
        <span>m<sup>2</sup></span></span
      >
    </td>
    <td class="w-48 align-top p-2 text-left lg:text-center border-b border-gray-300">
      <span class="font-bold tracking-wider text-lg">{{"$" + formatCurrency(row.price)}}</span><br>
      <span class='text-xs text-right font-thin tracking-wide'>{{'M: $' + formatCurrency((((row.price - deposit) / (loan_period * frequency)) +  (((row.price - deposit) * (interest_rate * 0.01)) / (loan_period * frequency))).toFixed(2) ) }}</span><br>
      <span class='text-xs text-right font-thin tracking-wide'>{{'W: $' + formatCurrency((((((row.price - deposit) / (loan_period * frequency)) +  (((row.price - deposit) * (interest_rate * 0.01)) / (loan_period * frequency))).toFixed(2) )*12) / 52)}}</span><br>
    </td>
    <td class="align-top p-2 text-left lg:text-center border-b border-gray-300">
      <div
        class="leading-6 flex flex-col"
        v-for="cf in custom_fields"
        :key="cf.id">
      <CustomFieldDropdown v-model="form[cf.id]" v-if="cf.type == 'dropdown'" :cf ="cf"/>
      <CustomFieldSingleValue v-model="form[cf.id]" v-if="cf.type == 'value'" :cf ="cf"/>
      <CustomFieldBoolean v-model="form[cf.id]" v-if="cf.type == 'boolean'" :cf ="cf"/>
      </div>
    </td>
  </tr>
</template>

<script>
import CustomFieldDropdown from "@/Components/CustomFieldDropdown.vue";
import CustomFieldSingleValue from "@/Components/CustomFieldSingleValue.vue";
import CustomFieldBoolean from '@/Components/CustomFieldBoolean.vue';


export default {
  name: "PropertyRow",
  data() {
    return {
      form: {
      }
    }
  },
  components: {
    CustomFieldDropdown,
    CustomFieldSingleValue,
    CustomFieldBoolean
  },
  props: {
    custom_fields: Object,
    row: Object,
    errors: Object,
    listingAmount: Number ,
    deposit: Number ,
    loan_period: Number ,
    frequency: Number ,
    listing_amount: Number ,
    interest_rate: Number ,
  },
    methods: {
    formatCurrency(price) {
      let dollarUSLocale = Intl.NumberFormat("en-US");
      return dollarUSLocale.format(price);
    },
  }
};
</script>

<style>
</style>