<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <vue3-snackbar top right :duration="4000"></vue3-snackbar>

        <div class="bg-white py-10 md:py-16">
            ---{{ plan }}---
            <div class="mx-auto max-w-7xl px-10 md:px-16">
                <div class="mx-auto mb-10 max-w-3xl md:mb-16">
                    <p class="text-xs font-bold uppercase text-blue-500">
                        Checkout
                    </p>
                    <h2
                        class="mt-1 text-left text-2xl font-bold text-gray-800 md:mt-2 lg:text-3xl"
                    >
                        Upgrading to Pro Plan
                    </h2>
                    <p
                        class="mx-auto mt-4 max-w-screen-md text-left text-gray-500 md:mt-6 md:text-lg"
                    >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Mauris vel faucibus purus, in scelerisque massa. Nam
                        vestibulum augue eu libero lacinia dapibus. Praesent
                        mollis euismod erat in hendrerit. Integer fermentum nisi
                        neque, vel suscipit metus semper eu. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos. Fusce mollis leo pellentesque purus
                        ornare aliquam. Praesent placerat justo eu ultricies
                        ultricies. Duis ac lorem eget arcu porttitor condimentum
                        <a
                            href="#_"
                            class="pl-1 font-medium text-blue-500 underline"
                            >support center</a
                        >
                    </p>
                </div>
                <form id="payment-form" @submit.prevent="submitPayment" class="mx-auto grid max-w-3xl gap-4 sm:grid-cols-2">
                    <div class="sm:col-span-2 mt-8 text-lg font-semibold">
                        Your Details:
                    </div>
                        <div class="sm:col-span-2">
                        <input type='text' v-model="form.plan" name="plan" >
                        <input
                            v-model="form.name"
                            class="w-full rounded-md border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-blue-300 transition duration-100 focus:ring"
                        />
                    </div>
                    <div class="sm:col-span-2">
                        <label
                            for="company"
                            class="mb-2 inline-block text-sm font-medium text-gray-500 sm:text-base"
                            >Name</label
                        >
                        <input
                            v-model="form.name"
                            class="w-full rounded-md border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-blue-300 transition duration-100 focus:ring"
                        />
                    </div>


                    <div class="sm:col-span-2">
                        <label
                            for="company"
                            class="mb-2 inline-block text-sm font-medium text-gray-500 sm:text-base"
                            >Email Address</label
                        >
                        <input
                            v-model="form.email"
                            class="w-full rounded-md border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-blue-300 transition duration-100 focus:ring"
                        />
                    </div>

                    <div class="sm:col-span-2">
                        <label
                            for="address"
                            class="mb-2 inline-block text-sm font-medium text-gray-500 sm:text-base"
                            >Street Address</label
                        >
                        <input
                            v-model="form.address"
                            class="w-full rounded-md border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-blue-300 transition duration-100 focus:ring"
                        />
                    </div>

                    <div class="sm:col-span-2">
                        <label
                            for="city"
                            class="mb-2 inline-block text-sm font-medium text-gray-500 sm:text-base"
                            >City</label
                        >
                        <input
                            v-model="form.city"
                            class="w-full rounded-md border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-blue-300 transition duration-100 focus:ring"
                        />
                    </div>

                    <div>
                        <label for="country" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Country</label>
                        <input v-model="form.country" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                    </div>

                    <div>
                        <label for="post_code" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Postal Code</label>
                        <input v-model="form.postal_code" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                    </div>
                    <div class="sm:col-span-2 mt-8 text-lg font-semibold">
                        Card Details:
                    </div>
                     <div class="sm:col-span-2">
                        <label
                            for="card_holder_name"
                            class="mb-2 inline-block text-sm font-medium text-gray-500 sm:text-base"
                            >Card Holder Name</label
                        >
                        <input
                            id="card_holder_name"
                            v-model="form.card_holder_name"
                            class="w-full rounded-md border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-blue-300 transition duration-100 focus:ring"
                        />
                    </div>
                     <div class="sm:col-span-2 mt-8">
                        ELEMENTS
                    </div>
                        <div class="sm:col-span-2 mt-8">
                        <label
                            for="message"
                            class="mb-2 inline-block text-sm font-medium text-gray-500 sm:text-base"
                            >Do you have any comments or feedback on our service?</label
                        >
                        <textarea
                            v-model="form.message"
                            class="h-64 w-full rounded-md border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-blue-300 transition duration-100 focus:ring"
                        ></textarea>
                    </div>
                    <div
                        class="flex items-center justify-between sm:col-span-2"
                    >
                        <button 
                            id="card-button"
                            :data-secret="intent.client_secret"
                            class="inline-block rounded-md bg-blue-600 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-blue-300 transition duration-100 hover:bg-blue-500 active:bg-blue-700 md:text-base"
                        >
                            Checkout
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import BreezeButton from "@/Components/Button.vue";

export default {
    data() {
        return {
            dropdownOpen: false,
            form: {
                name: null,
                card_holder_name: null,
                email: null,
                address: null,
                city: null,
                state: null,
                postal_code: null,
                plan: null,
                message: null,
            }
        };
    },
      mounted() {
        //this.form.plan = this.$route.query;
    },
    components: {
        BreezeAuthenticatedLayout,
        Head,
        BreezeButton,
        Link
    },
    props: {
        properties: Object,
        intent: Object,
        plan: String
    },
    methods: {
        submitPayment(){
            console.log(this.form)
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
                type: "error",
                text: this.fsiledFlash,
                background: "orange",
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
        failedFlash(val) {
            if (val.length > 0) {
                this.failedMessage(val);
            }
        },
    },
    computed: {
        user() {
            return this.$page.props.auth.user;
        },
        successFlash() {
            return this.$page.props.flash.success;
        },
        failedFlash() {
            return this.$page.props.flash.failed;
        },
    },
};
</script>

<style>
/* Animations */
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
    opacity: 0;
}

/* Slide-in-up animation*/
.slide-in-up-enter-active,
.slide-in-up-leave-active {
    transition: all 0.5s;
    transform: translateY(0);
}
.slide-in-up-enter,
.slide-in-up-leave-to {
    opacity: 0;
    transform: translateY(20px);
}

/* Slide-in-right animation*/
.slide-in-right-enter-active,
.slide-in-right-leave-active {
    transition: all 0.5s;
    transform: translateX(0);
}
.slide-in-right-enter,
.slide-in-right-leave-to {
    opacity: 0;
    transform: translateX(20px);
}

/* Slide-in-left animation*/
.slide-in-left-enter-active,
.slide-in-left-leave-active {
    transition: all 0.5s;
    transform: translateX(0);
}
.slide-in-left-enter,
.slide-in-left-leave-to {
    opacity: 0;
    transform: translateX(-20px);
}

/* Scale animation*/
.scale-enter-active,
.scale-leave-active {
    transition: all 0.5s;
    transform: scale(1);
}
.scale-enter,
.scale-leave-to {
    opacity: 0;
    transform: scale(0);
}

/* Rotate animation*/
.rotate-enter-active,
.rotate-leave-active {
    transition: all 0.5s;
    transform: scale(1) rotate(-360deg);
}
.rotate-enter,
.rotate-leave-to {
    opacity: 0;
    transform: scale(0) rotate(360deg);
}
</style>
