<template>
  <div
    :class="$page.props.showingMobileMenu ? 'block' : 'hidden'"
    @click="$page.props.showingMobileMenu = false"
    class="fixed inset-0 z-20 bg-black opacity-50 transition-opacity lg:hidden"
  ></div>

  <div
    :class="
      $page.props.showingMobileMenu
        ? 'translate-x-0 ease-out'
        : '-translate-x-full ease-in'
    "
    class="
      overflow-y-auto
      fixed
      inset-y-0
      left-0
      z-30
      w-64
      bg-gray-900
      transition
      duration-300
      transform
      lg:translate-x-0 lg:static lg:inset-0
    "
  >
    <div class="flex justify-center items-center mt-8">
      <div class="flex flex-col items-center">
        <div>
          <img
            class="h-12 mb-4"
            src="/img/logo.png"
          />
        </div>
        <div class='flex text-white text-4xl font-thin'>
        <span>HOME</span>
        <span class='text-red-500 ml-0.5'>HACK</span>
        </div>
      </div>
    </div>

    <nav class="mt-10" x-data="{ isMultiLevelMenuOpen: false }">
      <nav-link
        :href="route('dashboard')"
        :active="route().current('dashboard')"
      >
        <template #icon>
          <svg
            class="w-6 h-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"
            />
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"
            />
          </svg>
        </template>
        Dashboard
      </nav-link>

      <nav-link
        :href="route('properties.index')"
        :active="route().current('properties.index')"
      >
        <template #icon>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m3 12 2-2m0 0 7-7 7 7M5 10v10a1 1 0 0 0 1 1h3m10-11 2 2m-2-2v10a1 1 0 0 1-1 1h-3m-6 0a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1m-6 0h6"
            />
          </svg>
        </template>
        My Properties
      </nav-link>

      <nav-link
        :href="route('custom_fields.index')"
        :active="route().current('custom_fields.index')"
      >
        <template #icon>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H6a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3z"
            />
          </svg>
        </template>
        Custom Attributes
      </nav-link>
    </nav>
  </div>
</template>

<script>
import NavLink from "@/Components/NavLink";
import { Link } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

export default {
  components: {
    NavLink,
    Link,
  },

  setup() {
    let showingTwoLevelMenu = ref(false);

    return {
      showingTwoLevelMenu,
    };
  },
};
</script>

<style scoped>
</style>
