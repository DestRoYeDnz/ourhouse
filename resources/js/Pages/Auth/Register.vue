<template>
    <Head title="Register" />

    <section class="relative w-full overflow-hidden bg-white pb-8">
        <div
            class="mx-auto flex h-24 max-w-7xl items-center justify-between px-8"
        >
            <a
                href="#_"
                class="relative z-10 flex w-auto select-none items-center text-2xl font-extrabold leading-none text-white"
            >
                <div class="mt-16 flex items-center justify-center">
                    <div class="flex flex-col items-center">
                        <div>
                            <img class="mb-4 h-12" src="/img/logo.png" />
                        </div>
                        <div class="flex text-4xl font-thin text-white">
                            <span class="text-gray-500">HOME</span>
                            <span class="ml-0.5 text-red-500">HACK</span>
                        </div>
                    </div>
                </div>
            </a>

            <nav
                class="hidden items-center justify-center space-x-8 font-light text-gray-200 md:flex"
            >
                <a
                    href="#_"
                    class="ease relative inline-block text-base text-gray-400 transition duration-150 hover:text-gray-200"
                >
                    <span class="block">Home</span>
                </a>
                <a
                    href="#_"
                    class="ease relative inline-block text-base text-gray-400 transition duration-150 hover:text-gray-200"
                >
                    <span class="block">Features</span>
                </a>
                <a
                    href="#_"
                    class="ease relative inline-block text-base text-gray-400 transition duration-150 hover:text-gray-200"
                >
                    <span class="block">Pricing</span>
                </a>
                <a
                    href="#_"
                    class="ease relative inline-block text-base text-gray-400 transition duration-150 hover:text-gray-200"
                >
                    <span class="block">Blog</span>
                </a>
                <a
                    href="/login"
                    class="whitespace-no-wrap bg-bg-gray-900 inline-flex items-center justify-center rounded-md border border-gray-700 px-4 py-2 text-base leading-6 text-gray-500 shadow-sm hover:bg-gray-600"
                >
                    Login
                </a>
                <a
                    href="/register"
                    class="whitespace-no-wrap inline-flex items-center justify-center rounded-md border border-gray-700 bg-gray-700 px-4 py-2 text-base leading-6 text-white shadow-sm hover:bg-gray-600"
                >
                    Signup
                </a>
            </nav>

            <!-- Mobile Button -->
            <div
                class="flex h-full items-center justify-center text-gray-200 md:hidden"
            >
                <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 8h16M4 16h16"
                    ></path>
                </svg>
            </div>
        </div>

        <BreezeValidationErrors class="mb-4" />

        <div class="flex flex-col items-center justify-center">
            <div
                class="mt-16 w-full rounded-lg bg-gray-100 p-10 shadow-lg md:w-1/2 lg:w-1/3"
            >
                <button
                    aria-label="Continue with google"
                    role="button"
                    class="mt-10 flex w-full items-center rounded-lg border border-gray-900 py-3.5 px-4 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-1"
                >
                    <svg
                        width="19"
                        height="20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M18.99 10.187c0-.82-.065-1.417-.205-2.037H9.688v3.698h5.34c-.108.919-.69 2.303-1.981 3.233l-.018.124 2.876 2.292.2.02c1.83-1.738 2.884-4.296 2.884-7.33Z"
                            fill="#4285F4"
                        />
                        <path
                            d="M9.688 19.931c2.616 0 4.812-.886 6.416-2.414l-3.057-2.436c-.818.587-1.916.997-3.359.997-2.562 0-4.736-1.739-5.511-4.141l-.114.01-2.99 2.38-.04.112c1.593 3.256 4.866 5.492 8.655 5.492Z"
                            fill="#34A853"
                        />
                        <path
                            d="M4.177 11.937a6.294 6.294 0 0 1-.323-1.971c0-.687.118-1.351.312-1.971l-.006-.132-3.028-2.42-.099.05a10.208 10.208 0 0 0 0 8.946l3.144-2.502Z"
                            fill="#FBBC05"
                        />
                        <path
                            d="M9.688 3.853c1.82 0 3.046.809 3.746 1.484l2.734-2.746C14.49.985 12.304 0 9.688 0c-3.79 0-7.062 2.237-8.655 5.492l3.133 2.503c.786-2.403 2.96-4.142 5.522-4.142Z"
                            fill="#EB4335"
                        />
                    </svg>
                    <p class="ml-4 text-base font-medium text-gray-900">
                        Continue with Google
                    </p>
                </button>

                <button
                    aria-label="Continue with twitter"
                    role="button"
                    class="mt-4 flex w-full items-center rounded-lg border border-gray-900 py-3.5 px-4 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-offset-1"
                >
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M22.1623 5.656C21.3989 5.9937 20.5893 6.21548 19.7603 6.314C20.634 5.79144 21.288 4.96902 21.6003 4C20.7803 4.488 19.8813 4.83 18.9443 5.015C18.3149 4.34158 17.4807 3.89497 16.5713 3.74459C15.6618 3.59421 14.7282 3.74849 13.9156 4.18346C13.1029 4.61842 12.4567 5.30969 12.0774 6.1498C11.6981 6.9899 11.607 7.93178 11.8183 8.829C10.1554 8.74566 8.52863 8.31353 7.04358 7.56067C5.55854 6.80781 4.24842 5.75105 3.1983 4.459C2.82659 5.09745 2.63125 5.82323 2.6323 6.562C2.6323 8.012 3.3703 9.293 4.4923 10.043C3.82831 10.0221 3.17893 9.84278 2.5983 9.52V9.572C2.5985 10.5377 2.93267 11.4736 3.54414 12.2211C4.15562 12.9685 5.00678 13.4815 5.9533 13.673C5.33691 13.84 4.6906 13.8647 4.0633 13.745C4.33016 14.5762 4.8503 15.3032 5.55089 15.8241C6.25147 16.345 7.09742 16.6338 7.9703 16.65C7.10278 17.3313 6.10947 17.835 5.04718 18.1322C3.98488 18.4294 2.87442 18.5143 1.7793 18.382C3.69099 19.6114 5.91639 20.2641 8.1893 20.262C15.8823 20.262 20.0893 13.889 20.0893 8.362C20.0893 8.182 20.0843 8 20.0763 7.822C20.8952 7.23017 21.6019 6.49702 22.1633 5.657L22.1623 5.656Z"
                            fill="#1DA1F2"
                        />
                    </svg>

                    <p class="ml-4 text-base font-medium text-gray-900">
                        Continue with Twitter
                    </p>
                </button>

                <div class="flex w-full items-center justify-between py-5">
                    <hr class="w-full bg-gray-400" />
                    <p
                        class="px-2.5 text-base font-medium leading-4 text-gray-900"
                    >
                        OR
                    </p>
                    <hr class="w-full bg-gray-400" />
                </div>

                <div
                    v-if="status"
                    class="mb-4 text-sm font-medium text-green-600"
                >
                    {{ status }}
                </div>

                <BreezeValidationErrors class="mb-4" />

                <form @submit.prevent="submit">
                    <div>
                        <BreezeLabel for="name" value="Name" />
                        <BreezeInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            required
                            autofocus
                            autocomplete="name"
                        />
                    </div>

                    <div class="mt-3">
                        <BreezeLabel for="email" value="Email" />
                        <BreezeInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            autocomplete="username"
                        />
                    </div>

                    <div class="mt-3">
                        <BreezeLabel for="password" value="Password" />
                        <BreezeInput
                            id="password"
                            type="password"
                            class="mt-1 block w-full"
                            v-model="form.password"
                            required
                            autocomplete="new-password"
                        />
                    </div>

                    <div class="mt-3">
                        <BreezeLabel
                            for="password_confirmation"
                            value="Confirm Password"
                        />
                        <BreezeInput
                            id="password_confirmation"
                            type="password"
                            class="mt-1 block w-full"
                            v-model="form.password_confirmation"
                            required
                            autocomplete="new-password"
                        />
                    </div>

                    <div class="mt-4 flex flex-col items-end">
                        <BreezeButton
                            class="w-full"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Register
                        </BreezeButton>

                        <Link
                            :href="route('login')"
                            class="mt-4 text-sm text-gray-600 underline hover:text-gray-900"
                        >
                            Already registered?
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <Footer />
</template>

<script>
import BreezeButton from "@/Components/Button.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {

    components: {
        BreezeButton,
        BreezeInput,
        BreezeLabel,
        BreezeValidationErrors,
        BreezeApplicationLogo,
        Head,
        Link,
    },

    data() {
        return {
            form: this.$inertia.form({
                name: "",
                email: "",
                password: "",
                password_confirmation: "",
                terms: false,
            }),
        };
    },

    methods: {
        submit() {
            this.form.post(this.route("register"), {
                onFinish: () =>
                    this.form.reset("password", "password_confirmation"),
            });
        },
    },
};
</script>
