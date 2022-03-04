<template>
    <div>
        {{ numeralFormat(repayments, '$0,0[.00') }} <br>
    </div>
</template>

<script>
export default {
    name: "MortgageCalculator",
    data() {
        return {

        };
    },
    props: {
        row: Object,
        listingAmount: Number,
        deposit: Number,
        loan_period: Number,
        interest_rate: Number,
        errors: Object,
        term: String,
    },
    computed: {
        loan_price() {
            return this.row.price - this.deposit
        },
        numrepayments() {
            return  this.loan_period *12
        }
        ,
        interest() {
            return this.interest_rate * 0.01
        },
        repayments() {
            switch(this.term) {
                case "yearly":
                    return (this.loan_price /  this.numrepayments) + (this.loan_price * this.interest) / this.numrepayments
                    break;
                case "monthly":
                    return ((this.loan_price /  this.numrepayments) + (this.loan_price * this.interest) / this.numrepayments)
                    break;
                case "fortnightly":
                    return ((((this.loan_price /  this.numrepayments) + (this.loan_price * this.interest) / this.numrepayments) * 12)/(52/2)).toFixed(2)
                    break;
                case "weekly":
                    return ((((this.loan_price /  this.numrepayments) + (this.loan_price * this.interest) / this.numrepayments) * 12)/52).toFixed(2)
                    break;
                default:
                    return 0;
            }
        }
    },
    methods: {
        formatCurrency(price) {
            let dollarUSLocale = Intl.NumberFormat("en-US", { minimumSignificantDigits : 2 });
            return '$' +  dollarUSLocale.format(price);
        },
    }
};
</script>

<style></style>