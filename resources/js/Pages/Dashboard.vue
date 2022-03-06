<template>
  <Head title="Dashboard" />

  <BreezeAuthenticatedLayout>
    <vue3-snackbar top right :duration="4000"></vue3-snackbar>
     <div class="flex items-top justify-between mb-8">
      <div class="mb-4 text-3xl font-medium text-gray-700">
        Dashboard
      </div>
      <div class="flex flex-col">


        <span
          @click="customeFieldsModalOpen = !customeFieldsModalOpen"
          class="font-bold text-right text-xs text-ourhouse-300 hover:underline"
          ><a href="#">What is a Custom Attribute?</a></span
        >
      </div>
    </div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 border-b border-gray-200">You're logged in!</div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import BreezeButton from "@/Components/Button.vue";

export default {
  data() {
    return {
      dropdownOpen: false,
    };
  },
  components: {
    BreezeAuthenticatedLayout,
    Head,
    BreezeButton,
  },
  props: {
    properties: Object,
  },
  methods: {
    
  },
  watch: {
    
  },
  computed: {
    price() {
      return;
    },
    user() {
      return this.$page.props.auth.user;
    },
   
  },
};
</script>


<style>
/* Animations */
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}

/* Slide-in-up animation*/
.slide-in-up-enter-active, .slide-in-up-leave-active {
  transition: all .5s;
  transform: translateY(0);
}
.slide-in-up-enter, .slide-in-up-leave-to {
  opacity: 0;
  transform: translateY(20px);
}

/* Slide-in-right animation*/
.slide-in-right-enter-active, .slide-in-right-leave-active {
  transition: all .5s;
  transform: translateX(0);
}
.slide-in-right-enter, .slide-in-right-leave-to {
  opacity: 0;
  transform: translateX(20px);
}

/* Slide-in-left animation*/
.slide-in-left-enter-active, .slide-in-left-leave-active {
  transition: all .5s;
  transform: translateX(0);
}
.slide-in-left-enter, .slide-in-left-leave-to {
  opacity: 0;
  transform: translateX(-20px);
}

/* Scale animation*/
.scale-enter-active, .scale-leave-active {
  transition: all .5s;
  transform: scale(1);
}
.scale-enter, .scale-leave-to {
  opacity: 0;
  transform: scale(0);
}

/* Rotate animation*/
.rotate-enter-active, .rotate-leave-active {
  transition: all .5s;
  transform: scale(1) rotate(-360deg);
}
.rotate-enter, .rotate-leave-to {
  opacity: 0;
  transform: scale(0) rotate(360deg);
}
</style>