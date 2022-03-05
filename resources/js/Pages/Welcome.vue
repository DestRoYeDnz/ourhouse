<template>
    <Head title="Welcome" />

    <section class="relative w-full overflow-hidden bg-gray-200">
        <div
            class="mx-auto flex h-24 max-w-7xl items-center justify-between px-8 py-16"
        >
            <a
                href="#_"
                class="relative z-10 flex w-auto select-none items-center text-2xl font-extrabold leading-none text-white"
            >
                <div class="flex justify-center items-center mt-16">
                <div class="flex flex-col items-center">
                    <div>
                    <img
                        class="h-12 mb-4"
                        src="/img/logo.png"
                    />
                    </div>
                    <div class='flex text-gray-700 text-4xl font-thin'>
                    <span>HOME</span>
                    <span class='text-red-500 ml-0.5'>HACK</span>
                    </div>
                </div>
                </div>
            </a>

            <nav
                class="hidden items-center justify-center space-x-8 font-light text-gray-200 md:flex"
            >
                <a
                    href="/dashboard"
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
                    class="whitespace-no-wrap inline-flex items-center justify-center rounded-md border border-gray-700 bg-bg-gray-200 px-4 py-2 text-base leading-6 text-gray-500 shadow-sm hover:bg-gray-600"
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

        <div class="relative mx-auto max-w-7xl px-8 pt-16">
            <div
                class="absolute top-0 right-0 -ml-32 hidden h-full w-full translate-x-1/2 translate-y-20 -rotate-12 scale-100 transform bg-ourhouse-400 opacity-90 md:block"
            ></div>
            <div
                class="flex w-full flex-col items-center justify-between md:flex-row"
            >
                <div
                    class="-mt-16 flex w-full flex-col items-start justify-center pt-10 pb-10 md:w-1/2 md:pb-24 md:pr-16"
                >
                    <h1
                        class="bg-gradient-to-r from-ourhouse-400 via-ourhouse-500 to-ourhouse-600 bg-clip-text text-3xl md:text-6xl font-extrabold text-transparent"
                    >
                        Your Journey to being rent free, starts here
                    </h1>
                    <p class="my-7 text-lg text-ourhouse-600">
                        The story about your amazing application starts right
                        here. <br class="hidden xl:block" />Believe in the story
                        that you want to see unfold.
                    </p>
                    <a
                        href="#_"
                        class="whitespace-no-wrap inline-flex items-center justify-center rounded-md border border-gray-700 bg-gray-700 px-4 py-2 text-base leading-6 text-white shadow-sm hover:bg-gray-600"
                        >Get Started Now!</a
                    >
                </div>
                <div
                    class="relative flex w-full items-center justify-center md:w-1/2 md:pt-0"
                >
                    <div class="absolute w-full p-12 opacity-100">
                        <img
                            src="https://cdn.devdojo.com/images/august2021/background-patterns.png"
                        />
                    </div>
                    <img
                        src="https://cdn.devdojo.com/images/august2021/person.png"
                        class="relative h-full w-full md:w-96"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section
        class="w-full overflow-hidden bg-ourhouse-600 bg-cover pt-24 pb-8 lg:pb-32"
    >
        <div
            class="mx-auto space-y-8 px-8 pb-10 text-white md:max-w-3xl lg:px-5 xl:px-0"
        >
            <h2 class="text-4xl font-extrabold sm:text-3xl">
                Designed for Everyone
            </h2>
            <p class="block text-lg text-gray-300 sm:text-2xl">
                We've hand-crafted the ultimate set of tools
                to help you find your idea home. 
            </p>
            <div class="w-full">
                <a
                    href="/register"
                    class="mb-6 inline-block w-full rounded-xl bg-indigo-500 px-8 py-5 text-2xl hover:bg-indigo-400 sm:mb-0 sm:w-auto"
                    >Signup Today</a
                >
                <a
                    href="/about"
                    class="inline-block w-full rounded-xl bg-gray-800 px-8 py-5 text-2xl hover:bg-gray-700 sm:ml-4 sm:w-auto"
                    >Learn More</a
                >
            </div>
        </div>

        <div class="hidden h-32 sm:h-72 lg:block"></div>
        <div
            class="relative mx-auto h-auto w-full max-w-2xl px-8 md:max-w-3xl lg:max-w-4xl lg:px-5"
        >
            <img
                src="https://cdn.devdojo.com/images/december2020/ipad-mockup.png"
                class="relative w-full transform lg:absolute lg:-mt-64 lg:pr-10"
            />
        </div>
    </section>

    <!-- Section 3 -->
    <section
        class="relative w-full border-0 border-solid border-gray-200 bg-ourhouse-400 px-8 font-sans leading-6 text-gray-50"
    >
        <div
            class="mx-auto flex max-w-6xl flex-col items-center border-solid px-8 py-20 leading-6 md:items-stretch md:justify-center md:py-24"
        >
            <h2
                class="m-0 w-full border-0 border-gray-200 text-center font-sans text-4xl font-black tracking-wide text-gray-50 sm:text-5xl"
            >
                Some of the great features we have for you
            </h2>
            <p
                class="mx-0 mt-4 mb-0 w-full max-w-3xl border-0 border-gray-200 text-center font-sans text-sm font-medium leading-relaxed text-indigo-200 md:text-base lg:text-lg"
            >
                Check out some of our award-winning features. We have been
                trusted by over 250 large name brand companies. We strive to
                make a product that is revolutionary.
            </p>
            <div
                class="mt-10 grid grid-cols-3 gap-5 sm:grid-cols-8 lg:grid-cols-12"
            >
                <div
                    class="col-span-4 max-w-xs border-0 border-gray-200 font-sans text-gray-50"
                >
                    <div
                        class="mx-4 box-border flex h-full flex-col items-center border-solid px-2 py-8 text-center leading-6 sm:items-start sm:text-left"
                    >
                        <span
                            class="flex-shrink-0 rounded-xl border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
                        >
                            <svg
                                class="h-8 w-8 text-black"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                ></path>
                            </svg>
                        </span>
                        <div
                            class="mt-6 border-0 border-gray-200 text-center font-sans text-gray-50 sm:text-left"
                        >
                            <span
                                class="box-border border-solid text-xl font-bold leading-none tracking-wider text-gray-50"
                                >Secure</span
                            >
                            <p
                                class="mx-0 mt-2 mb-0 box-border border-solid text-center font-normal leading-snug text-gray-300 sm:text-left"
                            >
                                We strictly only deal with vendors that provide
                                top notch security infrastructure.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="col-span-4 max-w-xs border-0 border-gray-200 font-sans text-gray-50"
                >
                    <div
                        class="mx-4 box-border flex h-full flex-col items-center border-solid px-2 py-8 text-center leading-6 sm:items-start sm:text-left"
                    >
                        <span
                            class="flex-shrink-0 rounded-xl border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
                        >
                            <svg
                                class="h-8 w-8 text-black"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z"
                                ></path>
                            </svg>
                        </span>
                        <div
                            class="mt-6 border-0 border-gray-200 text-center font-sans text-gray-50 sm:text-left"
                        >
                            <span
                                class="box-border border-solid text-center text-xl font-bold leading-none tracking-wider text-gray-50 sm:text-left"
                                >Amazing Support</span
                            >
                            <p
                                class="mx-0 mt-2 mb-0 box-border border-solid text-center font-normal leading-snug text-gray-300 sm:text-left"
                            >
                                We provide world-class support to help you
                                integrate into your system.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="col-span-4 max-w-xs border-0 border-gray-200 font-sans text-gray-50"
                >
                    <div
                        class="mx-4 box-border flex h-full flex-col items-center border-solid px-2 py-8 text-center leading-6 sm:items-start sm:text-left"
                    >
                        <span
                            class="flex-shrink-0 rounded-xl border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
                        >
                            <svg
                                class="h-8 w-8 text-black"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                                ></path>
                            </svg>
                        </span>
                        <div
                            class="mt-6 border-0 border-gray-200 text-center font-sans text-gray-50 sm:text-left"
                        >
                            <span
                                class="box-border border-solid text-center text-xl font-bold leading-none tracking-wider text-gray-50 sm:text-left"
                                >Configurations</span
                            >
                            <p
                                class="mx-0 mt-2 mb-0 box-border border-solid text-center font-normal leading-snug text-gray-300 sm:text-left"
                            >
                                Fully configurable interface to fit into your
                                application and website.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="col-span-4 max-w-xs border-0 border-gray-200 font-sans text-gray-50"
                >
                    <div
                        class="mx-4 box-border flex h-full flex-col items-center border-solid px-2 py-8 text-center leading-6 sm:items-start sm:text-left"
                    >
                        <span
                            class="flex-shrink-0 rounded-xl border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
                        >
                            <svg
                                class="h-8 w-8 text-black"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                                ></path>
                            </svg>
                        </span>
                        <div
                            class="mt-6 border-0 border-gray-200 text-center font-sans text-gray-50 sm:text-left"
                        >
                            <span
                                class="box-border border-solid text-center text-xl font-bold leading-none tracking-wider text-gray-50 sm:text-left"
                                >Developer API</span
                            >
                            <p
                                class="mx-0 mt-2 mb-0 box-border border-solid text-center font-normal leading-snug text-gray-300 sm:text-left"
                            >
                                The Developer API will allow you to leverage our
                                tools and build quicker.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="col-span-4 max-w-xs border-0 border-gray-200 font-sans text-gray-50"
                >
                    <div
                        class="mx-4 box-border flex h-full flex-col items-center border-solid px-2 py-8 text-center leading-6 sm:items-start sm:text-left"
                    >
                        <span
                            class="flex-shrink-0 rounded-xl border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
                        >
                            <svg
                                class="h-8 w-8 text-black"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"
                                ></path>
                            </svg>
                        </span>
                        <div
                            class="mt-6 border-0 border-gray-200 text-center font-sans text-gray-50 sm:text-left"
                        >
                            <span
                                class="box-border border-solid text-center text-xl font-bold leading-none tracking-wider text-gray-50 sm:text-left"
                                >Fast and Reliable</span
                            >
                            <p
                                class="mx-0 mt-2 mb-0 box-border border-solid text-center font-normal leading-snug text-gray-300 sm:text-left"
                            >
                                Our system has a 99.9% uptime and is extremely
                                fast and reliable.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="col-span-4 max-w-xs border-0 border-gray-200 font-sans text-gray-50"
                >
                    <div
                        class="mx-4 box-border flex h-full flex-col items-center border-solid px-2 py-8 text-center leading-6 sm:items-start sm:text-left"
                    >
                        <span
                            class="flex-shrink-0 rounded-xl border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
                        >
                            <svg
                                class="h-8 w-8 text-black"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"
                                ></path>
                            </svg>
                        </span>
                        <div
                            class="mt-6 border-0 border-gray-200 text-center font-sans text-gray-50 sm:text-left"
                        >
                            <span
                                class="box-border border-solid text-center text-xl font-bold leading-none tracking-wider text-gray-50 sm:text-left"
                                >Open Source</span
                            >
                            <p
                                class="mx-0 mt-2 mb-0 box-border border-solid text-center font-normal leading-snug text-gray-300 sm:text-left"
                            >
                                Free and open-source tools that will continue to
                                grow.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section
        class="py-8 leading-7 text-gray-600 bg-ourhouse-500 sm:py-12 md:py-16 lg:py-24"
    >
        <div class="mx-auto max-w-6xl border-solid px-10 lg:px-12">
            <div
                class="flex flex-col items-start border-0 border-gray-200 leading-7 text-gray-900 lg:flex-row lg:items-center"
            >
                <div
                    class="box-border flex-1 border-solid text-center sm:text-left"
                >
                    <h2
                        class="m-0 border-0 border-gray-200  text-left text-4xl font-semibold leading-tight tracking-tight text-gray-300 sm:text-5xl"
                    >
                        Boost Your Productivity
                    </h2>
                    <p
                        class="mt-2 border-0 border-gray-200 text-left text-xl text-gray-600 sm:text-2xl"
                    >
                        Our service will help you maximize and boost your
                        productivity.
                    </p>
                </div>
                <a
                    href="#_"
                    class="mt-6 ml-0 inline-flex w-full cursor-pointer items-center justify-center rounded-xl border border-solid border-ourhouse-400 bg-ourhouse-400 px-5 py-4 font-sans text-base leading-none text-white no-underline focus-within:border-ourhouse-500 focus-within:bg-ourhouse-500 focus-within:text-white hover:border-ourhouse-800 hover:bg-ourhouse-700 hover:text-white sm:text-lg md:w-auto md:text-xl lg:mt-0 lg:ml-6"
                >
                    Get Started
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2 h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <Footer/>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Footer from '@/Layouts/Footer.vue'

export default {
    data() {
        return {
            mobileShow: false,
        };
    },
    components: {
        Head,
        Link,
        Footer
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
};
</script>
