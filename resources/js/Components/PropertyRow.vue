<template>
    <tr
        class="flex-no wrap mb-2 flex w-full flex-col border-b border-ourhouse-600 pt-4 sm:mb-0 sm:rounded-none lg:table-row"
    >
        <td class="flex p-2 text-left align-top font-bold">
            <div class="text-3xl tracking-wider lg:text-2xl">
                {{ row.title }}
            </div>
        </td>
        <td class="mb-4 flex flex-col p-2 text-left align-top font-semibold">
            <div>{{ row.address }}</div>
            <div>
                <a
                    class="text-ourhouse-400 hover:text-ourhouse-800 hover:underline"
                    target="_BLANK"
                    :href="'https://maps.google.com/?q=' + row.address"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                        /></svg
                ></a>
            </div>
        </td>
        <td
            class="flex border-b border-gray-300 p-2 text-left align-top lg:text-center"
        >
            <span>{{ row.bedrooms }}</span>
            <span class="pl-2"> bedrooms.</span>
        </td>
        <td
            class="flex border-b border-gray-300 p-2 text-left align-top lg:text-center"
        >
            <span>{{ row.bathrooms }}</span>
            <span class="pl-2"> bathrooms.</span>
        </td>
        <td
            class="flex border-b border-gray-300 p-2 text-left align-top lg:text-center"
        >
            <span class="pr-4">House:</span>
            <span>{{ row.house_area }} </span>
            <span class="pl-2">
                <span>m<sup>2</sup></span></span
            >
        </td>
        <td
            class="flex border-b border-gray-300 p-2 text-left align-top lg:text-center"
        >
            <span class="pr-4">Land:</span>
            <span>{{ row.land_area }}</span>
            <span class="pl-2">
                <span>m<sup>2</sup></span></span
            >
        </td>
        <td
            class="w-48 border-b border-gray-300 p-4 text-left align-top lg:text-center"
        >
            <div>
                <span class="font-boldtext-right text-4xl tracking-wider">{{
                    "$" + formatCurrency(row.price)
                }}</span
                ><br />
            </div>
            <div class="p-0">
                <span
                    class="font-boldtext-right pl-0 text-lg uppercase tracking-widest text-ourhouse-400"
                    >listing price</span
                ><br />
            </div>
            <div class="mt-8 grid grid-cols-2">
                <span class="col-span-1 text-left font-bold tracking-wider"
                    >Monthly:</span
                >
                <MortgageCalculator
                    class="col-span-1 text-right"
                    term="monthly"
                    :listingAmount="listing_amount"
                    :deposit="deposit"
                    :loan_period="loan_period"
                    :frequency="frequency"
                    :listing_amount="listing_amount"
                    :interest_rate="interest_rate"
                    :row="row"
                />
            </div>
            <div class="grid grid-cols-2">
                <span class="col-span-1 text-left font-bold tracking-wider"
                    >Fortnightly:</span
                >
                <MortgageCalculator
                    class="col-span-1 text-right"
                    term="fortnightly"
                    :listingAmount="listing_amount"
                    :deposit="deposit"
                    :loan_period="loan_period"
                    :frequency="frequency"
                    :listing_amount="listing_amount"
                    :interest_rate="interest_rate"
                    :row="row"
                />
            </div>
            <div class="grid grid-cols-2">
                <span class="col-span-1 text-left font-bold tracking-wider"
                    >Weekly:</span
                >
                <MortgageCalculator
                    class="col-span-1 text-right"
                    term="weekly"
                    :listingAmount="listing_amount"
                    :deposit="deposit"
                    :loan_period="loan_period"
                    :frequency="frequency"
                    :listing_amount="listing_amount"
                    :interest_rate="interest_rate"
                    :row="row"
                />
            </div>
        </td>
        <td
            class="border-b border-gray-300 p-2 text-left align-top lg:text-center"
        >
            <div
                class="flex flex-col leading-6"
                v-for="cf in custom_fields"
                :key="cf.id"
            >
                <CustomFieldDropdown
                    v-model="form[cf.id]"
                    v-if="cf.type == 'dropdown'"
                    :cf="cf"
                />
                <CustomFieldSingleValue
                    v-model="form[cf.id]"
                    v-if="cf.type == 'value'"
                    :cf="cf"
                />
                <CustomFieldBoolean
                    v-model="form[cf.id]"
                    v-if="cf.type == 'boolean'"
                    :cf="cf"
                />
            </div>
        </td>
    </tr>
</template>

<script>
import CustomFieldDropdown from "@/Components/CustomFieldDropdown.vue";
import CustomFieldSingleValue from "@/Components/CustomFieldSingleValue.vue";
import CustomFieldBoolean from "@/Components/CustomFieldBoolean.vue";
import MortgageCalculator from "@/Components/MortgageCalculator.vue";


export default {
    name: "PropertyRow",
    data() {
        return {
            form: {},
            isToggleOn: true
        };
    },
    components: {
        CustomFieldDropdown,
        CustomFieldSingleValue,
        CustomFieldBoolean,
        MortgageCalculator,
    },
    props: {
        custom_fields: Object,
        row: Object,
        errors: Object,
        listingAmount: Number,
        deposit: Number,
        loan_period: Number,
        frequency: Number,
        listing_amount: Number,
        interest_rate: Number,
    },
    methods: {
        formatCurrency(price) {
            let dollarUSLocale = Intl.NumberFormat("en-US");
            return dollarUSLocale.format(price);
        },
    },
};
</script>

<style></style>
