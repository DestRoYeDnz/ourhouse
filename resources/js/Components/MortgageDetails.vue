<template>
    <div>
        <div class="tab__header">
            <a
                href="#"
                class="tab__link mb-1 flex justify-between rounded bg-ourhouse-100 p-4 text-white no-underline"
                @click.prevent="active = !active"
            >
                <strong class="text-ourhouse-700">Mortgage Settings</strong>
                <span class="text-gray-200" v-show="!active">&#10133;</span>
                <span class="text-gray-200" v-show="active">&#10134;</span>
            </a>
        </div>
            <div
                class="tab__content -mt-4 border-b border-l border-r border-ourhouse-100 p-2 pt-8"
                v-if="active"
            >

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
                            class="block w-full rounded-md border-gray-300 py-2 pl-7 pr-12 focus:border-ourhouse-500 focus:ring-ourhouse-500 sm:text-sm"
                            placeholder="4.75"
                        />
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-end">
                        <div class="relative mt-1 flex rounded-md">
                            <div>
                                <Button @click="saveSettings"
                                    >Update Settings</Button
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
import Button from "@/Components/Button.vue";

export default {
    name: "MortgageDetails",
    props: ["title"],
    data() {
        return {
            active: false,
            deposit: 80000,
            interest_rate: 4.5,
            loan_period: 30,
        };
    },
    created() {
        this.$emit("changedDepositAmount", this.deposit);
        this.$emit("changedInterestRateAmount", this.interest_rate);
        this.$emit("changedLoanPeriodAmount", this.loan_period);
    },
    methods: {
        saveSettings() {
            this.active = false;
            let form = {
                deposit: this.deposit,
                interest_rate: this.interest_rate,
                loan_period: this.loan_period,
            };
            this.$inertia.post("/settings", form);
        },
    },
    watch: {
        deposit(old, newval) {
            this.$emit("changedDepositAmount", newval);
        },
        interest_rate(old, newval) {
            this.$emit("changedInterestRateAmount", newval);
        },
        loan_period(old, newval) {
            this.$emit("changedLoanPeriodAmount", newval);
        },
    },
    components: {
        Button,
    },
};
</script>

<style>
.accordion {
    max-width: 400px;
    font-family: Lato;
    margin-bottom: 20px;

    background-color: #ec5366;
    border-radius: 6px;
}

.accordion .header {
    height: 40px;
    line-height: 40px;
    padding: 0 40px 0 8px;
    position: relative;
    color: #fff;
    cursor: pointer;
}

.accordion .header-icon {
    position: absolute;
    top: 5px;
    right: 8px;
    transform: rotate(0deg);
    transition-duration: 0.3s;
}

.accordion .body {
    /*   display: none; */
    overflow: hidden;
    background-color: #fff;
    border: 10px solid #ec5366;
    border-top: 0;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    transition: 150ms ease-out;
}

.accordion .body-inner {
    padding: 8px;
    overflow-wrap: break-word;
    /*   white-space: pre-wrap; */
}

.accordion .header-icon.rotate {
    transform: rotate(180deg);
    transition-duration: 0.3s;
}

.accordion.purple {
    background-color: #8c618d;
}

.accordion.purple .body {
    border-color: #8c618d;
}
</style>
