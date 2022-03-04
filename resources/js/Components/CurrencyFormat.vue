<template>
    <div>
        <input
            type="text"
            id="myInput"
            inputmode="numeric"
            v-model="val"
            @keyup="send($event)"
        />
    </div>
</template>

<script>
import { SimpleMaskMoney } from "simple-mask-money/lib/simple-mask-money"; // import mask

export default {
    data() {
        // Your value
        return {
            val: "0,00",
        };
    },
    mounted() {
        const args = {
            allowNegative: false,
            negativeSignAfter: false,
            prefix: "$",
            suffix: "",
            fixed: true,
            fractionDigits: 2,
            decimalSeparator: ".",
            thousandsSeparator: ",",
            cursor: "move",
        };
        SimpleMaskMoney.setMask("#myInput", args);
    },
    methods: {
        // Your send method
        send(e) {
            if (e.key !== "Enter") return;
            SimpleMaskMoney.formatToNumber(this.val);
        },
    },
};
</script>
