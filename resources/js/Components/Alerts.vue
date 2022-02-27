<template>
  <div
    v-if="!user.email_verified_at"
    class="inline-flex overflow-hidden w-full bg-white rounded-lg shadow-md"
  >
    <div class="flex justify-center items-center w-12 bg-yellow-500">
      <svg
        class="w-6 h-6 text-white fill-current"
        viewBox="0 0 40 40"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"
        ></path>
      </svg>
    </div>

    <div class="px-4 py-2 -mx-3 w-full">
      <div class="flex items-center justify-between mx-3">
        <div>
          <span class="font-bold text-yellow-500">Verify Email</span>
          <p class="text-sm text-gray-600">Please verify your email.</p>
        </div>
        <div class="flex flex-col">
          <BreezeButton
            @click="resendVerification"
            class="bg-yellow-500 text-yellow-200 hover:bg-yellow-600"
          >
            Resend Email
          </BreezeButton>
          <span
            @click="messageModalOpen = !messageModalOpen"
            class="
              font-bold
              float-right
              text-xs text-ourhouse-400
              hover:underline
            "
            ><a href="#">Dismiss for now</a></span
          >
        </div>
      </div>
    </div>
  </div>


  <div 
    v-if="!properties"
    class="inline-flex overflow-hidden w-full bg-white rounded-lg shadow-md mt-4 mb-4"
  >
    <div class="flex justify-center items-center w-12 bg-blue-500">
      <svg
        class="w-6 h-6 text-white fill-current"
        viewBox="0 0 40 40"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"
        ></path>
      </svg>
    </div>

    <div class="px-4 py-2 -mx-3 w-full">
      <div class="flex items-center justify-between mx-3">
        <div>
          <span class="font-bold text-blue-400">You dont have any properties</span>
          <p class="text-sm text-gray-600">Go and add your first property</p>
        </div>
        <div class="flex flex-col">
          <Link  href="/properties"  class="cursor-pointer py-2 px-4 text-center bg-blue-500 rounded-md text-white text-sm hover:bg-blue-600">
            Add your first Property
          </Link>
          
        </div>
      </div>
    </div>
  </div>
  
</template>

<script>
import BreezeButton from "@/Components/Button.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        BreezeButton,
        Link
    },
  props: {
    user: Object,
    properties: Object,
  },
  methods: {
    resendVerification() {
      this.$inertia.post("/email/verification-notification", this.form);
    },
    routeIs(route){

    },
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
