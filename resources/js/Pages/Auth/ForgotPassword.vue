<template>
    <Head title="Forgot Password" />

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
                            <span class='text-gray-500'>HOME</span>
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
                    <div class="mb-4 text-sm text-gray-600">
                            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                        </div>

                        <div v-if="status" class="mb-4 text-sm font-medium text-ourhouse-600">
                            {{ status }}
                        </div>

                        <BreezeValidationErrors class="mb-4" />

                        <form @submit.prevent="submit">
                            <div>
                                <BreezeLabel for="email" value="Email" />
                                <BreezeInput id="email" type="email" class="block mt-1 w-full" v-model="form.email" required autofocus autocomplete="username" />
                            </div>

                            <div class="flex justify-end items-center mt-4">
                                <BreezeButton class="w-full" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Email Password Reset Link
                                </BreezeButton>
                            </div>
                        </form>
            </div>
        </div>
    </section>

    <Footer/>
</template>


<script>
import BreezeButton from '@/Components/Button.vue'
import BreezeGuestLayout from '@/Layouts/Guest.vue'
import BreezeInput from '@/Components/Input.vue'
import BreezeLabel from '@/Components/Label.vue'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import { Link, Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeButton,
        BreezeInput,
        BreezeLabel,
        BreezeValidationErrors,
        BreezeApplicationLogo,
        Head,
        Link
    },

    props: {
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: ''
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('password.email'))
        }
    }
}
</script>
