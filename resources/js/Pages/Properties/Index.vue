<template>
  <Head title="My Properties" />

  <BreezeAuthenticatedLayout>
    <vue3-snackbar top right :duration="4000"></vue3-snackbar>

    <div class="flex items-center justify-between mb-8">
      <div class="mb-4 text-3xl font-medium text-gray-700">My Properties</div>
      <div>
        <BreezeButton @click="addModalOpen = !addModalOpen" class="w-full">
          Add a New Property
        </BreezeButton>
      </div>
    </div>
    <div class="inline-block overflow-hidden min-w-full rounded-lg">
      <section>
        <div class="mt-7 overflow-x-auto min-h-128 ">
        <div class="grid grid-cols-10 rounded-lg overflow-hidden mb-4">

          <div class="p-4 font-semibold text-white col-span-2 bg-ourhouse-300 h-12">Title</div>
          <div class="p-4 font-semibold text-white col-span-1 bg-ourhouse-300 h-12">Bedrooms</div>
          <div class="p-4 font-semibold text-white col-span-1 bg-ourhouse-300 h-12">Bathrooms</div>
          <div class="p-4 font-semibold text-white col-span-1 bg-ourhouse-300 h-12">House Area</div>
          <div class="p-4 font-semibold text-white col-span-1 bg-ourhouse-300 h-12">Land Area</div>
          <div class="p-4 font-semibold text-white col-span-1 bg-ourhouse-300 h-12">Price</div>
          <div class="p-4 font-semibold text-white col-span-3 bg-ourhouse-300 h-12">Custom Fields</div>



            <div class="p-4 font-semibold col-span-2 bg-white">Title</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Bedrooms</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Bathrooms</div>
            <div class="p-4 font-semibold col-span-1 bg-white">House Area</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Land Area</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Price</div>
            <div class="p-4 font-semibold col-span-3 bg-white">Custom Fields</div>


            <div class="p-4 font-semibold col-span-2 bg-white">Title</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Bedrooms</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Bathrooms</div>
            <div class="p-4 font-semibold col-span-1 bg-white">House Area</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Land Area</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Price</div>
            <div class="p-4 font-semibold col-span-3 bg-white">Custom Fields</div>

            <div class="p-4 font-semibold col-span-2 bg-white">Title</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Bedrooms</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Bathrooms</div>
            <div class="p-4 font-semibold col-span-1 bg-white">House Area</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Land Area</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Price</div>
            <div class="p-4 font-semibold col-span-3 bg-white">Custom Fields</div>

            <div class="p-4 font-semibold col-span-2 bg-white">Title</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Bedrooms</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Bathrooms</div>
            <div class="p-4 font-semibold col-span-1 bg-white">House Area</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Land Area</div>
            <div class="p-4 font-semibold col-span-1 bg-white">Price</div>
            <div class="p-4 font-semibold col-span-3 bg-white">Custom Fields</div>
        </div>


          <table class="w-full whitespace-nowrap mt-8" v-if="properties.length > 0">
            <thead>
              <tr class="
                  list-group-item
                  property-list-item
                  focus:outline-none
                  h-10
                  p-4
                  border
                  bg-white
                  border-gray-100
                  text-semibold
                  rounded
                  
                ">
                <td class="p-4 font-semibold">Title</td>
                <td class="p-4 font-semibold">Bedrooms</td>
                <td class="p-4 font-semibold">Bathrooms</td>
                <td class="p-4 font-semibold">House Area</td>
                <td class="p-4 font-semibold">Land Area</td>
                <td class="p-4  font-semibold">Price</td>
                <td class="p-4  font-semibold">Custom Fields</td>
              </tr>
            </thead>
            <transition-group name="property-table" tag="tbody">
              <tr
                v-for="property in properties"
                :key="property.id"
                tabindex="0"
                class="
                  list-group-item
                  property-list-item
                  focus:outline-none
                  h-10
                  border
                  bg-white
                  border-gray-100
                  rounded
                "
              >
                <td class="align-top pt-4 w-1/6">
                  <div class="flex items-start pl-5">
                    <p
                      class="
                        text-base
                        font-medium
                        leading-none
                        text-gray-700
                        mr-2
                      "
                    >
                      {{ property.title }}
                    </p>
                    <a :href="property.source_url" target="_BLANK">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                      >
                        <path
                          d="M6.66669 9.33342C6.88394 9.55515 7.14325 9.73131 7.42944 9.85156C7.71562 9.97182 8.02293 10.0338 8.33335 10.0338C8.64378 10.0338 8.95108 9.97182 9.23727 9.85156C9.52345 9.73131 9.78277 9.55515 10 9.33342L12.6667 6.66676C13.1087 6.22473 13.357 5.62521 13.357 5.00009C13.357 4.37497 13.1087 3.77545 12.6667 3.33342C12.2247 2.89139 11.6251 2.64307 11 2.64307C10.3749 2.64307 9.77538 2.89139 9.33335 3.33342L9.00002 3.66676"
                          stroke="#3B82F6"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M9.33336 6.66665C9.11611 6.44492 8.8568 6.26876 8.57061 6.14851C8.28442 6.02825 7.97712 5.96631 7.66669 5.96631C7.35627 5.96631 7.04897 6.02825 6.76278 6.14851C6.47659 6.26876 6.21728 6.44492 6.00003 6.66665L3.33336 9.33332C2.89133 9.77534 2.64301 10.3749 2.64301 11C2.64301 11.6251 2.89133 12.2246 3.33336 12.6666C3.77539 13.1087 4.37491 13.357 5.00003 13.357C5.62515 13.357 6.22467 13.1087 6.66669 12.6666L7.00003 12.3333"
                          stroke="#3B82F6"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </td>

                <td class="align-top pt-4 pl-2">
                  <div class="flex justify-start items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                      class="h-5 w-5"
                      xml:space="preserve"
                    >
                      <path
                        d="M482 233.539V117.007c0-49.626-40.374-90-90-90h-94.5c-5.523 0-10 4.477-10 10s4.477 10 10 10H392c38.598 0 70 31.402 70 70v106.005a73.657 73.657 0 0 0-24-4.017h-2v-57.333c0-21.321-17.346-38.667-38.667-38.667H284.667c-11.358 0-21.586 4.924-28.667 12.747-7.081-7.823-17.309-12.747-28.667-12.747H114.667C93.346 122.995 76 140.341 76 161.661v57.333h-2c-8.4 0-16.468 1.427-24 4.017V117.007c0-38.598 31.402-70 70-70h96.5c5.523 0 10-4.477 10-10s-4.477-10-10-10H120c-49.626 0-90 40.374-90 90V233.54c-18.188 13.495-30 35.12-30 59.456v128c0 5.523 4.477 10 10 10h20v44c0 5.523 4.477 10 10 10h54.012c5.523 0 10-4.477 10-10v-44h303.976v44c0 5.523 4.477 10 10 10H472c5.523 0 10-4.477 10-10v-44h20c5.523 0 10-4.477 10-10v-128c0-24.337-11.812-45.962-30-59.457zm-216-71.878c0-10.293 8.374-18.667 18.667-18.667h112.667c10.293 0 18.667 8.374 18.667 18.667v57.333H266v-57.333zm-170 0c0-10.293 8.374-18.667 18.667-18.667h112.667c10.293 0 18.667 8.374 18.667 18.667v57.333H96v-57.333zM84.012 464.995H50v-34h34.012v34zm377.988 0h-34.012v-34H462v34zm30-102H91.921c-5.523 0-10 4.477-10 10s4.477 10 10 10H492v28h-19.758c-.081-.002-.16-.012-.242-.012h-54.012c-.082 0-.161.01-.242.012H94.254c-.081-.002-.16-.012-.242-.012H40c-.082 0-.161.01-.242.012H20v-118c0-29.776 24.224-54 54-54h364c29.776 0 54 24.224 54 54v70z"
                      />
                      <path
                        d="M263.07 29.935c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21 1.07-7.07 2.93-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07 4.44 2.93 7.07 2.93 5.21-1.07 7.07-2.93 2.93-4.43 2.93-7.07c0-2.63-1.07-5.211-2.93-7.07zM59.15 365.924a10.076 10.076 0 0 0-7.07-2.93c-2.64 0-5.21 1.07-7.07 2.93s-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07c1.86 1.86 4.44 2.93 7.07 2.93s5.21-1.07 7.07-2.93c1.86-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07z"
                      />
                    </svg>
                    <p class="text-sm text-left  leading-none text-gray-600 ml-2">
                      {{ property.bedrooms }}
                    </p>
                  </div>
                </td>

                <td class="align-top pt-4 pl-2">
                  <div class="flex items-start">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                      class="h-5 w-5"
                      xml:space="preserve"
                    >
                      <path
                        d="M482 233.539V117.007c0-49.626-40.374-90-90-90h-94.5c-5.523 0-10 4.477-10 10s4.477 10 10 10H392c38.598 0 70 31.402 70 70v106.005a73.657 73.657 0 0 0-24-4.017h-2v-57.333c0-21.321-17.346-38.667-38.667-38.667H284.667c-11.358 0-21.586 4.924-28.667 12.747-7.081-7.823-17.309-12.747-28.667-12.747H114.667C93.346 122.995 76 140.341 76 161.661v57.333h-2c-8.4 0-16.468 1.427-24 4.017V117.007c0-38.598 31.402-70 70-70h96.5c5.523 0 10-4.477 10-10s-4.477-10-10-10H120c-49.626 0-90 40.374-90 90V233.54c-18.188 13.495-30 35.12-30 59.456v128c0 5.523 4.477 10 10 10h20v44c0 5.523 4.477 10 10 10h54.012c5.523 0 10-4.477 10-10v-44h303.976v44c0 5.523 4.477 10 10 10H472c5.523 0 10-4.477 10-10v-44h20c5.523 0 10-4.477 10-10v-128c0-24.337-11.812-45.962-30-59.457zm-216-71.878c0-10.293 8.374-18.667 18.667-18.667h112.667c10.293 0 18.667 8.374 18.667 18.667v57.333H266v-57.333zm-170 0c0-10.293 8.374-18.667 18.667-18.667h112.667c10.293 0 18.667 8.374 18.667 18.667v57.333H96v-57.333zM84.012 464.995H50v-34h34.012v34zm377.988 0h-34.012v-34H462v34zm30-102H91.921c-5.523 0-10 4.477-10 10s4.477 10 10 10H492v28h-19.758c-.081-.002-.16-.012-.242-.012h-54.012c-.082 0-.161.01-.242.012H94.254c-.081-.002-.16-.012-.242-.012H40c-.082 0-.161.01-.242.012H20v-118c0-29.776 24.224-54 54-54h364c29.776 0 54 24.224 54 54v70z"
                      />
                      <path
                        d="M263.07 29.935c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21 1.07-7.07 2.93-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07 4.44 2.93 7.07 2.93 5.21-1.07 7.07-2.93 2.93-4.43 2.93-7.07c0-2.63-1.07-5.211-2.93-7.07zM59.15 365.924a10.076 10.076 0 0 0-7.07-2.93c-2.64 0-5.21 1.07-7.07 2.93s-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07c1.86 1.86 4.44 2.93 7.07 2.93s5.21-1.07 7.07-2.93c1.86-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07z"
                      />
                    </svg>
                    <p class="text-sm leading-none text-gray-600 ml-2">
                      {{ property.bedrooms }}
                    </p>
                  </div>
                </td>
                <td class="align-top pt-4 pl-2">
                    <p class="text-sm leading-none text-gray-600 ml-2">
                      {{ property.house_area }} m<sup>2</sup>
                    </p>
                </td>

                <td class="align-top pt-4 pl-2">
                    <p class="text-sm leading-none text-gray-600 ml-2">
                      {{ property.land_area }} m<sup>2</sup>
                    </p>
                </td>

                <td class="align-top pt-4 pl-5">
                  <span class="font-bold">{{
                    "$" + formatCurrency(property.price)
                  }}</span>
                </td>


                <td class="align-top pt-4 pl-2">
                    <p class="text-sm leading-none text-gray-600 ml-2">
                      <ul>
                        <li class="leading-6" v-for="cf in custom_fields" :key='cf.id'>
                          <span class='font-bold text-xs'>{{cf.name}}:</span>
                          <span class='font-base text-xs'>{{ }}</span>
                        </li>
                      </ul>
                    </p>
                </td>
              </tr>
            </transition-group>
          </table>
        </div>
      </section>
    </div>
    <AddPropertyModal
      :modalActive="addModalOpen"
      @close="addModalOpen = false"
    />
  </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination.vue";
import BreezeButton from "@/Components/Button.vue";
import DropdownMenu from "@/Components/DropdownMenu.vue";
import AddPropertyModal from "@/Components/AddPropertyModal.vue";

export default {
  data() {
    return {
      addModalOpen: false,
      messageModalOpen: false,
      dropdown: false,
      number: {
        decimal: ".",
        separator: ",",
        prefix: "$ ",
        suffix: " ",
        precision: 2,
        masked: false,
      },
      form: {
        user: "",
      },
    };
  },
  components: {
    BreezeAuthenticatedLayout,
    Pagination,
    Head,
    BreezeButton,
    DropdownMenu,
    AddPropertyModal,
  },
  props: {
    properties: Object,
    custom_fields: Object,
  },
  methods: {
    formatCurrency(price) {
      let dollarUSLocale = Intl.NumberFormat("en-US");
      return dollarUSLocale.format(price);
    },
    resendVerification() {
      this.$inertia.post("/email/verification-notification", this.form);
    },
    openAddPropertyModal() {
      this.addModalOpen = true;
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
    getSlug() {
      return '';
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
.vue3-snackbar-message-title {
  font-size: 14px;
  font-weight: 700;
}
.property-table-item {
  transition: all 1s;
}
.property-table-item > * {
  transition: all 1s;
  overflow: hidden;
}
.property-table-enter {
  line-height: 0 !important;
}
.property-table-enter > * {
  padding-top: 0px !important;
  padding-bottom: 0px !important;
}
</style>