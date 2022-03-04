<template>
    <div>
        <div
            class="relative mr-2 inline-block w-12 select-none align-middle leading-normal"
        >
            <input
                v-bind:value="value"
                v-model="isToggleOn"
                v-on:change="$emit('input', $event.target.checked)"
                type="checkbox"
                name="1"
                id="1"
                class="hidden"
            />
            <label
                class="block h-6 cursor-pointer overflow-hidden rounded-full border bg-red shadow-inner"
                for="1"
            ></label>
        </div>
        <label class="text-grey-dark text-xs" for="1">{{
            `${isToggleOn ? '' : ''}`
        }}</label>
    </div>
</template>

<script>
export default {
    mounted() {
        this.isToggleOn = this.value;
    },
    props: ["value", "onText", "offText"],
    data() {
        return {
            isToggleOn: false,
        };
    },
};
</script>

<style></style>
