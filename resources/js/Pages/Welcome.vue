<template>
    <Head title="Welcome" />

    <section class="relative w-full overflow-hidden bg-gray-900">
        <div
            class="mx-auto flex h-24 max-w-7xl items-center justify-between px-8"
        >
            <a
                href="#_"
                class="relative z-10 flex w-auto select-none items-center text-2xl font-extrabold leading-none text-white"
            >
                <div class="mt-8 flex items-center justify-center">
                    <div class="flex flex-col items-center">
                        <div>
                            <img class="mb-4 h-12" src="/img/logo.png" />
                        </div>
                        <div class="flex text-4xl font-thin text-white">
                            <span>HOME</span>
                            <span class="ml-0.5 text-red-500">HACK</span>
                        </div>
                        FTails
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
                    href="/register"
                    class="whitespace-no-wrap inline-flex items-center justify-center rounded-md border border-gray-700 bg-gray-700 px-4 py-2 text-base leading-6 text-white shadow-sm hover:bg-gray-600"
                >
                    Signup
                </a>
            </nav>

            <!-- Mobile Button -->
            <div
                class="flex h-full items-center justify-center text-gray-200 md:hidden"
                @click="mobileShow = true"
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

        <div V-IF="mobileShow" class="relative mx-auto max-w-7xl px-8 pt-10">
            <div
                class="absolute top-0 right-0 -ml-32 hidden h-full w-full translate-x-1/2 translate-y-20 -rotate-12 scale-100 transform bg-gray-800 opacity-90 md:block"
            ></div>
            <div
                class="flex w-full flex-col items-center justify-between md:flex-row"
            >
                <div
                    class="-mt-10 flex w-full flex-col items-start justify-center pt-10 pb-10 md:w-1/2 md:pb-24 md:pr-16"
                >
                    <div
                        class="mb-10 rounded-md bg-gray-800 px-3 py-1.5 text-sm font-medium text-gray-400 opacity-100"
                    >
                        50% off every plan 🎉
                    </div>
                    <h1
                        class="bg-gradient-to-r from-gray-200 via-gray-50 to-gray-400 bg-clip-text text-6xl font-extrabold text-transparent"
                    >
                        Your Journey <br />Starts Here
                    </h1>
                    <p class="my-7 text-lg text-gray-400">
                        The story about your amazing application starts right
                        here. <br class="hidden xl:block" />Believe in the story
                        that you want to see unfold.
                    </p>
                    <a
                        href="#_"
                        class="w-full rounded-lg bg-gray-100 px-5 py-2 text-center text-lg font-normal text-gray-800 md:w-auto"
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
                        class="relative h-auto h-full w-full max-w-sm md:w-96"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section
        class="w-full overflow-hidden bg-black bg-cover pt-24 pb-8 lg:pb-32"
    >
        <div
            class="mx-auto max-w-2xl space-y-8 px-8 pb-10 text-white md:max-w-3xl lg:px-5 xl:px-0"
        >
            <h2 class="text-5xl font-extrabold sm:text-7xl">
                Designed for Developers
            </h2>
            <p class="block text-lg text-gray-300 sm:text-xl">
                We've hand-crafted the ultimate set of components and templates
                to help you build your next great idea in style. Our templates
                are designed with developers in-mind.
            </p>
            <div class="w-full">
                <a
                    href="#_"
                    class="mb-6 inline-block w-full rounded-xl bg-indigo-700 px-8 py-5 text-2xl hover:bg-indigo-600 sm:mb-0 sm:w-auto"
                    >Signup Today</a
                >
                <a
                    href="#_"
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
        class="relative w-full border-0 border-solid border-gray-200 bg-purple-900 px-8 font-sans leading-6 text-gray-50"
    >
        <div
            class="mx-auto flex max-w-6xl flex-col items-center border-solid px-8 py-20 leading-6 md:items-stretch md:justify-center md:py-24"
        >
            <h2
                class="m-0 w-full border-0 border-gray-200 text-center font-sans text-4xl font-black tracking-wide text-gray-50 sm:text-5xl"
            >
                Award-Winning Features
            </h2>
            <p
                class="mx-0 mx-auto mt-4 mb-0 w-full max-w-3xl border-0 border-gray-200 text-center font-sans text-sm font-medium leading-relaxed text-indigo-200 md:text-base lg:text-lg"
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
                            class="flex-shrink-0 rounded-full border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
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
                            class="flex-shrink-0 rounded-full border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
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
                            class="flex-shrink-0 rounded-full border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
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
                            class="flex-shrink-0 rounded-full border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
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
                            class="flex-shrink-0 rounded-full border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
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
                            class="flex-shrink-0 rounded-full border-0 border-gray-200 bg-gray-50 p-5 font-sans text-gray-50"
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
        class="bg-white py-8 leading-7 text-gray-900 sm:py-12 md:py-16 lg:py-24"
    >
        <div class="mx-auto max-w-6xl border-solid px-4 px-10 lg:px-12">
            <div
                class="flex flex-col items-start border-0 border-gray-200 leading-7 text-gray-900 lg:flex-row lg:items-center"
            >
                <div
                    class="box-border flex-1 border-solid text-center sm:text-left"
                >
                    <h2
                        class="m-0 border-0 border-gray-200 text-left text-4xl font-semibold leading-tight tracking-tight text-black sm:text-5xl"
                    >
                        Boost Your Productivity
                    </h2>
                    <p
                        class="mt-2 border-0 border-gray-200 text-left text-xl text-gray-900 sm:text-2xl"
                    >
                        Our service will help you maximize and boost your
                        productivity.
                    </p>
                </div>
                <a
                    href="#_"
                    class="mt-6 ml-0 inline-flex w-full cursor-pointer items-center justify-center rounded border border-solid border-indigo-600 bg-indigo-600 px-5 py-4 font-sans text-base leading-none text-white no-underline focus-within:border-indigo-700 focus-within:bg-indigo-700 focus-within:text-white hover:border-indigo-700 hover:bg-indigo-700 hover:text-white sm:text-lg md:w-auto md:text-xl lg:mt-0 lg:ml-6"
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

    <!-- Section 5 -->
    <section class="w-full bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 xl:px-12">
            <div
                class="box-border flex flex-wrap pt-20 pb-0 text-base leading-tight text-gray-500 md:pb-12"
            >
                <div
                    class="w-1/2 flex-initial px-2 pb-12 leading-tight md:w-1/4"
                >
                    <div class="box-border text-base text-gray-500">
                        <div
                            class="rounded-xxl mr-3 mb-7 flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-purple-500 via-indigo-600 to-blue-500"
                        >
                            <svg
                                class="h-5 w-5 fill-current text-white"
                                viewBox="0 0 39 15"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M11.252 1.152C4.184 2.526.454 6.918.061 14.329c1.963-4.049 4.798-5.975 8.503-5.778 2.115.112 3.84 1.295 5.75 2.603 3.11 2.133 6.712 4.601 13.281 3.324 7.068-1.374 10.798-5.766 11.191-13.177-1.963 4.049-4.798 5.975-8.503 5.779-2.115-.113-3.84-1.296-5.75-2.604-3.11-2.133-6.712-4.601-13.281-3.324z"
                                    fill-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                        <ul class="m-0 list-none p-0 text-base leading-tight">
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Home</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Downloads</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Web App</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Changelog</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Integrations</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Templates</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    width="6,3"
                    class="w-1/2 flex-initial px-2 pb-12 leading-tight md:w-1/4"
                >
                    <div class="box-border text-base text-gray-500">
                        <h2
                            class="mb-8 font-sans text-xl font-bold tracking-wide text-gray-100 md:text-2xl"
                        >
                            Product
                        </h2>
                        <ul class="m-0 list-none p-0 text-base leading-tight">
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Drag'n Drop Builder</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Developer Inspector</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Theme Configuration</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Template Customization</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Developer API</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >System Import</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    width="6,3"
                    class="w-1/2 flex-initial px-2 pb-12 leading-tight md:w-1/4"
                >
                    <div class="box-border text-base text-gray-500">
                        <h2
                            class="mb-8 font-sans text-xl font-bold tracking-wide text-gray-100 md:text-2xl"
                        >
                            Company
                        </h2>
                        <ul class="m-0 list-none p-0 text-base leading-tight">
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Contact us</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Blog</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Culture</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Jobs</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Technology</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Security</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-1/2 flex-initial px-2 pb-12 leading-tight md:w-1/4"
                >
                    <div class="box-border text-base text-gray-500">
                        <h2
                            class="mb-8 font-sans text-xl font-bold tracking-wide text-gray-100 md:text-2xl"
                        >
                            Support
                        </h2>
                        <ul class="m-0 list-none p-0 text-base leading-tight">
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Getting started</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Suggest a feature</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Help center</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Server status</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Report a bug</a
                                >
                            </li>
                            <li
                                class="box-border py-2 text-left text-sm font-normal text-gray-500 md:mb-1 md:text-base"
                            >
                                <a
                                    href="#_"
                                    class="cursor-pointer bg-transparent text-base leading-tight no-underline hover:text-gray-400"
                                    >Press Kit</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div
                class="flex w-full flex-col items-center justify-between border-t border-gray-800 py-12 text-xs leading-none text-gray-500 lg:flex-row"
            >
                <div
                    class="flex w-full flex-shrink-0 flex-grow-0 self-start leading-none lg:w-auto"
                >
                    <span
                        class="mt-4 inline-flex w-full justify-center space-x-5 sm:ml-auto sm:mt-0"
                    >
                        <a href="#" class="text-gray-400 hover:text-gray-200">
                            <span class="sr-only">Facebook</span>
                            <svg
                                class="h-6 w-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-200">
                            <span class="sr-only">Instagram</span>
                            <svg
                                class="h-6 w-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-200">
                            <span class="sr-only">Twitter</span>
                            <svg
                                class="h-6 w-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                                ></path>
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-200">
                            <span class="sr-only">GitHub</span>
                            <svg
                                class="h-6 w-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-200">
                            <span class="sr-only">Dribbble</span>
                            <svg
                                class="h-6 w-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </a>
                    </span>
                </div>
                <ul
                    class="my-6 flex list-none text-sm text-gray-500 lg:my-0 lg:flex-shrink-0 lg:flex-grow-0"
                >
                    <li class="box-border block text-left font-semibold">
                        <a
                            href="#_"
                            class="mr-5 cursor-pointer border-r border-gray-700 bg-transparent pr-5 text-gray-500 no-underline"
                            >Terms of service</a
                        >
                    </li>
                    <li class="box-border block text-left font-semibold">
                        <a
                            href="#_"
                            class="mr-5 cursor-pointer border-r border-gray-700 bg-transparent pr-5 text-gray-500 no-underline"
                            >Privacy policy</a
                        >
                    </li>
                    <li class="box-border block text-left font-semibold">
                        <a
                            href="#_"
                            class="mr-5 cursor-pointer border-r border-gray-700 bg-transparent pr-5 text-gray-500 no-underline"
                            >Licenses</a
                        >
                    </li>
                    <li class="box-border block text-left font-semibold">
                        <a
                            href="#_"
                            class="cursor-pointer bg-transparent text-gray-500 no-underline"
                            >Sitemap</a
                        >
                    </li>
                </ul>
                <p class="m-0 block text-base font-semibold text-gray-500">
                    Copyright © 2021 Home Hacks
                </p>
            </div>
        </div>
    </section>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    data() {
        return {
        mobileShow: false,
        }
        }
    }
    components: {
      Head,
      Link,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
}
</script>
