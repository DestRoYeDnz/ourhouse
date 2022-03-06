<template>
    <Head title="My profile" />

    <BreezeAuthenticatedLayout>
        <template #header> My profile </template>

        <div class="shadow-xs rounded-lg bg-white p-4">
            <div
                v-show="$page.props.flash.success"
                class="mb-4 inline-flex w-full overflow-hidden rounded-lg bg-white shadow-md"
            >
                <div
                    class="flex w-12 items-center justify-center bg-ourhouse-500"
                >
                    <svg
                        class="h-6 w-6 fill-current text-white"
                        viewBox="0 0 40 40"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
                        ></path>
                    </svg>
                </div>

                <div class="-mx-3 px-4 py-2">
                    <div class="mx-3">
                        <span class="font-semibold text-ourhouse-500"
                            >Success</span
                        >
                        <p class="text-sm text-gray-600">
                            {{ $page.props.flash.success }}
                        </p>
                    </div>
                </div>
            </div>

            <BreezeValidationErrors class="mb-4" />

            <form @submit.prevent="submit">
                <div class="mt-3">
                    <BreezeLabel for="name" value="Name" />
                    <BreezeInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
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
                    />
                </div>

                <div class="mt-3">
                    <BreezeLabel for="password" value="New password" />
                    <BreezeInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                    />
                </div>

                <div class="mt-3">
                    <BreezeLabel
                        for="password_confirmation"
                        value="New password confirmation"
                    />
                    <BreezeInput
                        id="password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password_confirmation"
                    />
                </div>

                <div class="mt-4 flex justify-end">
                    <BreezeButton
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Submit
                    </BreezeButton>
                </div>
            </form>

            <BreezeValidationErrors class="mb-4" />

            <div
                class="mt-4 rounded-b border-t-4 border-ourhouse-500 bg-ourhouse-100 px-4 py-3 text-ourhouse-900 shadow-md"
                role="alert"
            >
                <div class="flex">
                    <div class="py-1">
                        <svg
                            class="mr-4 h-6 w-6 fill-current text-ourhouse-500"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"
                            />
                        </svg>
                    </div>
                    <div class="w-full flex items-center justify-between">
                        <div>
                            <span
                                class="font-xl mr-2 font-semibold text-ourhouse-500"
                                >Current Plan:</span
                            >
                            <span style="text-transform: capitalize">{{
                                this.$page.props.auth.subscription
                            }}</span>
                        </div>
                        <div>
                            <Link
                                class="mt-0 p-0 px-1 py-0.5 text-xs leading-tight"
                                :href="route('subscription.create')"
                            >
                                Check out upgrading to Pro
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeButton from "@/Components/Button.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        BreezeButton,
        BreezeInput,
        BreezeLabel,
        BreezeValidationErrors,
        Link,
    },
    props: {
        auth: Object,
    },
    data() {
        return {
            form: useForm({
                _method: "put",
                name: this.$page.props.auth.user.name,
                email: this.$page.props.auth.user.email,
                password: null,
                password_confirmation: null,
            }),
        };
    },

    methods: {
        submit() {
            this.form.post(this.route("profile.update"), {
                onSuccess: () =>
                    this.form.reset("password", "password_confirmation"),
                onError: () =>
                    this.form.reset("password", "password_confirmation"),
            });
        },
    },
};
</script>
