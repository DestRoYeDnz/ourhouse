<template>
    <Head title="My Properties" />

    <BreezeAuthenticatedLayout>
        <vue3-snackbar top right :duration="4000"></vue3-snackbar>

        <div class="relative mb-8 flex items-start justify-between">
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
            <section>
                <transition appear name="slide-fade">
                <MortgageDetails
                    class='absolute top-16 right-5 z-10 bg-ourhouse-100 rounded-md shadow-lg transition duration-200 ease-in-out'
                    title="title"
                    @changed-listing-amount="methodListingAmount"
                    @changed-deposit-amount="methodDepositAmount"
                    @changed-interest-rate-amount="methodInterestRateAmount"
                    @changed-loan-period-amount="methodLoanPeriod"
                />
                </transition>
            </section>

            <section class="grid grid-cols-4 space-x-2"></section>

            <section>
                <div class="min-h-128 mt-7 overflow-x-auto">
                    <table class="w-full">
                        <TransitionGroup name="table" tag="tbody">
                            <PropertyRow
                                v-for="property in properties"
                                :key="property.id"
                                :custom_fields="custom_fields"
                                :deposit="deposit"
                                :loan_period="loan_period"
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
import MortgageDetails from "@/Components/MortgageDetails.vue";

export default {
    name: "PropertiesIndex",
    data() {
        return {
            dropdown: false,
            deposit: 0,
            interest_rate: 0,
            loan_period: 0,
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
        MortgageDetails,
    },
    props: {
        properties: Object,
        custom_fields: Object,
        setting: Object,
    },
    created() {

    },
    methods: {
        methodDepositAmount(n) {
            this.deposit = parseInt(n);
        },
        methodInterestRateAmount(n) {
            this.interest_rate = parseInt(n);
        },
        methodLoanPeriod(n) {
            this.loan_period = parseInt(n);
        },

        formatCurrency(price) {
            let dollarUSLocale = Intl.NumberFormat("en-US");
            return dollarUSLocale.format(price);
        },
        getCustomFieldValue(json) {
            const obj = JSON.parse(json);
            return obj;
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

.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>
