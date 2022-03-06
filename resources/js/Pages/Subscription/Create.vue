<template>
    <Head title="Subscription Create" />

    <BreezeAuthenticatedLayout>
        <vue3-snackbar top right :duration="4000"></vue3-snackbar>

        <!-- Section 1 -->
        <section
            x-data="{ billing: 'Monthly', basic: {'Monthly' : '49', 'Yearly' : '500' }, pro: {'Monthly' : '89', 'Yearly' : '900' }, cycle: {'Monthly' : 'mo', 'Yearly' : 'yr' } }"
            class="bg-white"
        >
            <div class="mx-auto max-w-7xl bg-white px-6 py-20 lg:px-8">

                <div class="flex items-center justify-center space-x-32">
                    <div
                        class="overflow-hidden rounded-lg border-2 border-indigo-100 bg-white md:border-gray-100"
                    >
                        <div class="p-5 md:p-8">
                            <div
                                class="mb-4 flex items-baseline justify-between"
                            >
                                <h4 class="text-xl font-bold lg:text-2xl">
                                    Free Plan
                                </h4>
                                <span class="text-xl font-bold lg:text-2xl"
                                    >$0</span
                                >
                            </div>
                            <p class="mb-6 text-lg text-gray-500">
                                Get started with our free plan.
                            </p>
                            <a
                                href="#"
                                class="block rounded-lg border bg-gradient-to-br px-5 py-3 text-center font-bold hover:from-indigo-500 hover:to-indigo-700 hover:text-white lg:px-8"
                                >Start for free</a
                            >
                        </div>
                        <div
                            class="border-t border-gray-200 bg-gray-50 p-5 md:p-8"
                        >
                            <ul class="space-y-4 text-lg text-gray-600">
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>10,000 Credits</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Email Support</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>3 Users</span>
                                </li>
                                <li
                                    class="flex items-center space-x-2 opacity-50"
                                >
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-red-400"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Analytics &amp; Insights</span>
                                </li>
                                <li
                                    class="flex items-center space-x-2 opacity-50"
                                >
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-red-400"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Automated Reports</span>
                                </li>
                                <li
                                    class="flex items-center space-x-2 opacity-50"
                                >
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-red-400"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Premium Tools</span>
                                </li>
                                <li
                                    class="flex items-center space-x-2 opacity-50"
                                >
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-red-400"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Integrations</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class="mt-12 overflow-hidden rounded-lg border-2 border-indigo-100 bg-white md:-mb-10 md:-translate-y-10 md:transform md:border md:shadow-md md:transition-all md:duration-500 md:hover:shadow-xl"
                    >
                        <div class="p-5 md:p-8">
                            <div
                                class="mb-4 flex items-baseline justify-between"
                            >
                                <h4 class="text-xl font-bold lg:text-2xl">
                                    Pro Plan
                                </h4>
                                <span class="text-xl font-bold lg:text-2xl"
                                    >$<span x-text="pro[billing]"></span
                                    ><span class="ml-1 text-xs font-light"
                                        >/
                                        <span
                                            x-text="cycle[billing]"
                                        ></span></span
                                ></span>
                            </div>
                            <p class="mb-6 text-lg text-gray-500">
                                Level-up your game with a pro plan
                            </p>
                            <Link
                                :href="route('subscription.checkout', { plan: 'pro' })"
                                class="cursor-pointer block rounded-lg border bg-gradient-to-br from-indigo-600 to-indigo-700 px-5 py-3 text-center font-bold text-white hover:from-indigo-500 hover:to-indigo-700 lg:px-8"
                                >Signup
                            </Link>
                            
                        </div>
                        <div
                            class="border-t border-gray-200 bg-gray-50 p-5 md:p-8"
                        >
                            <ul class="space-y-4 text-lg text-gray-600">
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>400,000 Credits</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>24/7 Customer Support</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Unlimited Users</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Analytics &amp; Insights</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Automated Reports</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Premium Tools</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <div class="h-6 w-6">
                                        <svg
                                            class="text-green-500"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="3"
                                                d="M5 13l4 4L19 7"
                                            ></path>
                                        </svg>
                                    </div>
                                    <span>Full Integrations</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="border-b border-gray-200 p-6">You're logged in!</div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import  {Link, Head } from "@inertiajs/inertia-vue3";
import BreezeButton from "@/Components/Button.vue";

export default {
    name: "CreateSubscription",
    data() {
        return {
            dropdownOpen: false,
        };
    },
    components: {
        BreezeAuthenticatedLayout,
        Head,
        BreezeButton,
        Link
    },
    props: {
        properties: Object,
    },
    methods: {
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
        price() {
            return;
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
