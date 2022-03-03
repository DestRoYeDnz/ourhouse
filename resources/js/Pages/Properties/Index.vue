<template>
    <Head title="My Properties" />

    <BreezeAuthenticatedLayout>
        <vue3-snackbar top right :duration="4000"></vue3-snackbar>

        <div class="mb-8 flex items-start justify-between">
            <div class="mb-4 text-3xl font-medium text-gray-700">
                My Properties
            </div>
            <div>
                <BreezeButton
                    @click="addModalOpen = !addModalOpen"
                    class="w-full"
                >
                    Add a New Property
                </BreezeButton>
            </div>
        </div>
        <div class="inline-block min-w-full overflow-hidden rounded-lg">
            <section class="grid grid-cols-4 space-x-2">
                <div>
                    <div
                        class="font-xl mr-4 block text-sm font-semibold text-gray-700"
                    >
                        Deposit
                    </div>
                    <div
                        class="relative mt-1 flex items-center rounded-md shadow-sm"
                    >
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                        >
                            <span class="text-gray-500 sm:text-sm"> $ </span>
                        </div>
                        <input
                            type="text"
                            v-model="deposit"
                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-ourhouse-500 focus:ring-ourhouse-500 sm:text-sm"
                            placeholder="0.00"
                        />
                    </div>
                </div>
                <div>
                    <div
                        class="font-xl mr-4 block text-sm font-semibold text-gray-700"
                    >
                        Interest Rate
                    </div>
                    <div
                        class="relative mt-1 flex items-center rounded-md shadow-sm"
                    >
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                        >
                            <span class="text-gray-500 sm:text-sm"> % </span>
                        </div>
                        <input
                            type="text"
                            v-model="interest_rate"
                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-ourhouse-500 focus:ring-ourhouse-500 sm:text-sm"
                            placeholder="4.75"
                        />
                    </div>
                </div>

                <div>
                    <div
                        class="font-xl mr-4 block text-sm font-semibold text-gray-700"
                    >
                        Loan Period
                    </div>
                    <div
                        class="relative mt-1 flex items-center rounded-md shadow-sm"
                    >
                        <input
                            type="number"
                            v-model="loan_period"
                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 py-2 focus:border-ourhouse-500 focus:ring-ourhouse-500 sm:text-sm"
                            placeholder="4.75"
                        />
                    </div>
                </div>
            </section>
            <section>
                <div class="min-h-128 mt-7 overflow-x-auto">
                    <table class="w-full">
                        <TransitionGroup name="table" tag="tbody">
                            <PropertyRow
                                v-for="property in properties"
                                :key="property.id"
                                :custom_fields="custom_fields"
                                :listingAmount="listing_amount"
                                :deposit="deposit"
                                :loan_period="loan_period"
                                :frequency="frequency"
                                :listing_amount="listing_amount"
                                :interest_rate="interest_rate"
                                :row="property"
                            />
                        </TransitionGroup>
                    </table>
                </div>
            </section>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination.vue";
import BreezeButton from "@/Components/Button.vue";
import DropdownMenu from "@/Components/DropdownMenu.vue";
import AddPropertyModal from "@/Components/AddPropertyModal.vue";
import PropertyRow from "@/Components/PropertyRow.vue";

export default {
    data() {
        return {
            dropdown: false,
            listing_amount: 249000,
            deposit: 80000,
            interest_rate: 4.5,
            loan_period: 30,
            frequency: 12,
            number: {
                decimal: ".",
                separator: ",",
                prefix: "$ ",
                suffix: " ",
                precision: 2,
                masked: false,
            },
            form: {
                user: "",
            },
        };
    },
    components: {
        BreezeAuthenticatedLayout,
        Pagination,
        Head,
        BreezeButton,
        DropdownMenu,
        AddPropertyModal,
        PropertyRow,
    },
    props: {
        properties: Object,
        custom_fields: Object,
    },
    methods: {
        formatCurrency(price) {
            let dollarUSLocale = Intl.NumberFormat("en-US");
            return dollarUSLocale.format(price);
        },
        getCustomFieldValue(json) {
            const obj = JSON.parse(json);
            return obj;
        },
        getComplementaryColor(color = "") {
            const colorPart = color.slice(1);
            const ind = parseInt(colorPart, 16);
            let iter = ((1 << (4 * colorPart.length)) - 1 - ind).toString(16);
            while (iter.length < colorPart.length) {
                iter = "0" + iter;
            }
            return "#" + iter;
        },
        resendVerification() {
            this.$inertia.post("/email/verification-notification", this.form);
        },
        openAddPropertyModal() {
            this.addModalOpen = true;
        },
        successMessage(message) {
            this.$snackbar.add({
                type: "success",
                text: message,
                background: "green",
                dismissible: true,
            });
            console.log("sending toast");
        },
        failedMessage() {
            this.$snackbar.add({
                type: "success",
                text: this.successFlash,
                background: "green",
                dismissible: true,
            });
        },
    },
    watch: {
        successFlash(val) {
            if (val.length > 0) {
                this.successMessage(val);
            }
        },
    },
    computed: {
        getValue(row, slug) {
            return row;
        },
        user() {
            return this.$page.props.auth.user;
        },
        successFlash() {
            return this.$page.props.flash.success;
        },
    },
};
</script>

<style>
.vue3-snackbar-message-title {
    font-size: 14px;
    font-weight: 700;
}
.property-table-item {
    transition: all 1s;
}
.property-table-item > * {
    transition: all 1s;
    overflow: hidden;
}
.property-table-enter {
    line-height: 0 !important;
}
.property-table-enter > * {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
}
</style>
