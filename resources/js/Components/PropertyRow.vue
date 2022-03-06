<template>
    <tr
        class="flex-no wrap mb-2 flex w-full flex-col border-b border-ourhouse-600 pt-4 sm:mb-0 sm:rounded-none lg:table-row"
    >
        <td>
            <div>
                <div class="flex w-1/2 p-2 text-left align-top font-bold">
                    <div class="text-3xl tracking-wider lg:text-2xl">
                        {{ row.title }}
                    </div>
                </div>
                <div
                    class="mb-4 flex flex-col p-2 text-left align-top font-semibold"
                >
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

                    <div
                        class="flex items-center justify-between border-b border-gray-300 p-2 text-left align-top lg:text-center"
                    >
                        <span class="pr-4">Bedrooms:</span>
                        <span>{{ row.bedrooms }} </span>
                    </div>

                    <div
                        class="flex items-center justify-between border-b border-gray-300 p-2 text-left align-top lg:text-center"
                    >
                        <span class="pr-4">Bathrooms:</span>
                        <span>{{ row.bathrooms }} </span>
                    </div>
                    <div
                        class="flex items-center justify-between border-b border-gray-300 p-2 text-left align-top lg:text-center"
                    >
                        <span class="pr-4">House:</span>
                        <div>
                            <span>{{ row.house_area }} </span>
                            <span class="pl-2">
                                <span>m<sup>2</sup></span></span
                            >
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-between border-b border-gray-300 p-2 text-left align-top lg:text-center"
                    >
                        <span class="pr-4">Land:</span>
                        <div>
                            <span>{{ row.land_area }}</span>
                            <span class="pl-2">
                                <span>m<sup>2</sup></span></span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </td>
        <td
            class="w-1/4 border-b border-gray-300 p-4 text-left align-top lg:text-center"
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
            <div class="mt-8 flex items-center justify-between px-8">
                <span class="mx-auto px-8 text-left font-bold tracking-wider"
                    >Monthly:</span
                >
                <MortgageCalculator
                    class="flex-1 text-right"
                    term="monthly"
                    :listingAmount="listing_amount"
                    :deposit="deposit"
                    :loan_period="loan_period"
                    :interest_rate="interest_rate"
                    :row="row"
                />
            </div>
            <div class="flex items-center justify-between px-8">
                <span class="mx-auto px-8 text-left font-bold tracking-wider"
                    >Fortnightly:</span
                >
                <MortgageCalculator
                    class="flex-1 text-right"
                    term="fortnightly"
                    :listingAmount="listing_amount"
                    :deposit="deposit"
                    :loan_period="loan_period"
                    :interest_rate="interest_rate"
                    :row="row"
                />
            </div>
            <div class="flex items-center justify-between px-8">
                <span class="mx-auto px-8 text-left font-bold tracking-wider"
                    >Weekly:</span
                >
                <MortgageCalculator
                    class="flex-1 text-right"
                    term="weekly"
                    :listingAmount="listing_amount"
                    :deposit="deposit"
                    :loan_period="loan_period"
                    :interest_rate="interest_rate"
                    :row="row"
                />
            </div>
            <div class="mt-8 flex flex-col items-start justify-between px-8">
                <div class="flex flex-col items-start justify-between w-full">
                    <div class="flex items-center justify-between w-full">
                        <span class="pl-8 font-semibold  text-sm">Estate Agent:</span>
                        <span class="flex-1 pl-8 text-right font-semibold text-sm">{{
                            row.agent_name
                        }}</span>
                    </div>
                    <div class="flex items-center justify-between  w-full">
                        <span class="pl-8 font-semibold  text-sm">Email:</span>
                        <span class="pl-8 text-right font-semibold  text-sm text-ourhouse-400 hover:text-ourhouse-500 hover:underline">
                            <a :href="'mailto: ' + row.agent_email + '?subject=Enquiry about - '+ row.address">{{row.agent_email}} </a>
                        </span>
                    </div>
                    <div class="flex items-center justify-between  w-full">
                        <span class="pl-8 font-semibold  text-sm">Phone:</span>
                        <span class="pl-8 text-right font-semibold  text-sm">{{
                            row.agent_phone
                        }}</span>
                    </div>
                </div>
            </div>
        </td>
        <td class="w-1/4">
            <div
                class="flex h-max flex-col items-start justify-start p-2 text-left align-top lg:text-center"
            >
                <div v-if="custom_fields.length > 0">
                    <div
                        class="flex flex-col leading-6 text-right"
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
                </div>
                <div v-else class="w-full">
                    <div class="flex flex-col items-center justify-start">
                        <div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mb-4 h-8 w-8 text-gray-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"
                                />
                            </svg>
                        </div>
                        <span class="text-gray-300"
                            >Add some Custom Attributes</span
                        >
                    </div>
                </div>
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
            isToggleOn: true,
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
