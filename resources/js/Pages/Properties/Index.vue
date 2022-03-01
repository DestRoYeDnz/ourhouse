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
        <div class="mt-7 overflow-x-auto min-h-128">
          <div class="grid grid-cols-12 rounded-lg overflow-hidden">
            <div
              class="
                p-4
                font-semibold
                text-white
                col-span-2
                bg-ourhouse-300
                h-12
              "
            >
              Title
            </div>
            <div
              class="
                p-4
                font-semibold
                text-white
                col-span-2
                bg-ourhouse-300
                h-12
              "
            >
              Address
            </div>
            <div
              class="
                p-4
                font-semibold
                text-white
                col-span-1
                bg-ourhouse-300
                h-12
              "
            >
              Bedrooms
            </div>
            <div
              class="
                p-4
                font-semibold
                text-white
                col-span-1
                bg-ourhouse-300
                h-12
              "
            >
              Bathrooms
            </div>
            <div
              class="
                p-4
                font-semibold
                text-white
                col-span-1
                bg-ourhouse-300
                h-12
              "
            >
              House Area
            </div>
            <div
              class="
                p-4
                font-semibold
                text-white
                col-span-1
                bg-ourhouse-300
                h-12
              "
            >
              Land Area
            </div>
            <div
              class="
                p-4
                font-semibold
                text-white
                col-span-1
                bg-ourhouse-300
                h-12
              "
            >
              Price
            </div>
            <div
              class="
                p-4
                font-semibold
                text-white
                col-span-3
                bg-ourhouse-300
                h-12
              "
            >
              Your Custom Fields
            </div>
          </div>

          <div>
            <div
              v-for="row in properties"
              :key="row.id"
              class="grid grid-cols-12 overflow-hidden"
            >
              <div class="font-semibold col-span-2 p-2 bg-white">
                <div
                  class="
                    flex
                    items-center
                    justify-start
                    text-sm text-left
                    leading-none
                    text-gray-600
                    ml-2
                  "
                >
                  <span class="font-bold text-lg tracking-wide">{{
                    row.title
                  }}</span>
                  <a :href="row.source_url" target="_BLANK">
                    <svg class="w-4 h-4 ml-2" fill="none">
                      <path
                        d="M6.667 9.333a2.333 2.333 0 0 0 3.333 0l2.667-2.666a2.357 2.357 0 0 0-3.334-3.334L9 3.667"
                        stroke="#3B82F6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M9.333 6.667a2.333 2.333 0 0 0-3.333 0L3.333 9.333a2.357 2.357 0 0 0 3.334 3.334L7 12.333"
                        stroke="#3B82F6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                </div>
              </div>
              <div class="p-4 font-semibold col-span-2 bg-white">
                {{ row.address }}
              </div>
              <div class="p-4 font-semibold col-span-1 bg-white">
                {{ row.bedrooms }}
              </div>
              <div class="p-4 font-semibold col-span-1 bg-white">
                {{ row.bathrooms }}
              </div>
              <div class="p-4 font-semibold col-span-1 bg-white">
                {{ row.house_area }} m<sup>2</sup>
              </div>
              <div class="p-4 font-semibold col-span-1 bg-white">
                {{ row.land_area }} m<sup>2</sup>
              </div>
              <div class="p-4 font-bold col-span-1 bg-white text-ourhouse-500">
                {{ "$" + formatCurrency(row.price) }}
              </div>

              <div class="p-4 font-semibold col-span-3 bg-white">
                <div class="text-sm leading-none text-gray-600 ml-2">
                  <div>
                    <div
                      class="leading-6 flex flex-col"
                      v-for="cf in custom_fields"
                      :key="cf.id"
                    >

                      <div v-if="cf.type == 'value'">
                        <div
                          class="
                            flex
                            items-start
                            relative
                            font-bold
                            text-xs
                            rounded-md
                            text-white
                            px-0.5
                            py-0.5
                            mb-1
                            mr-2
                            
                          "
                          :style="'background-color: ' + cf.color"
                        >
                          <span
                            class="flex-shrink-0 font-base text-xs ml-4 mt-1.5"
                            >{{ cf.name }}:</span
                          >

                          <input type="text"
                            :style="'background-color: ' + cf.color"
                            class="
                              ml-4
                              block
                              w-full
                              px-2
                              py-1
                              text-xs text-white
                              transition
                              rounded-md 
                              ease-in-out
                              m-0.5 
                              border
                            border-white

                            "
                          />
                        </div>
                      </div>



                      <div v-if="cf.type == 'dropdown'">
                        <div
                          class="
                            flex
                            items-start
                            relative
                            font-bold
                            text-xs
                            rounded-md
                            text-white
                            px-0.5
                            py-0.5
                            mb-1
                            mr-2
                          "
                          :style="'background-color: ' + cf.color"
                        >
                          <span
                            class="flex-shrink-0 font-base text-xs ml-4 mt-1.5"
                            >{{ cf.name }}:</span
                          >

                          <select
                            :style="'background-color: ' + cf.color"
                            class="
                              ml-4
                              form-select
                              appearance-none
                              block
                              w-full
                              px-2
                              py-1
                              text-xs text-white
                              transition
                              ease-in-out
                              rounded-md
                              m-0
                              border
                            border-white
                              appearance: none;
                              focus:text-white-700 focus:outline-none
                            "
                          >
                            <option selected>...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                        </div>
                      </div>

                      <div v-if="cf.type == 'boolean'">
                        <div
                          class="
                            flex
                            items-start
                            relative
                            font-bold
                            text-xs
                            rounded-md
                            text-white
                            px-0.5
                            py-0.5
                            mb-1
                            mr-2
                            
                          "
                          :style="'background-color: ' + cf.color"
                        >
                          <span
                            class="flex-shrink-0 font-base text-xs ml-4 mt-1.5"
                            >{{ cf.name }}:</span
                          >
                          <div
                            class="relative flex justify-end flex-shrink-0 text-xs mr-0  w-full"
                            >
                            <span class="radio absolute right-12 h-12">
                              <input class='bg-gray-200 text-gray-700 text-xs' label="....." type="radio" id="unselected" name="result" value="" checked>
                              <input class='bg-gray-200 text-gray-700 text-xs' label="Yes" type="radio" id="yes" name="result" value="yes">
                              <input class='bg-gray-200 text-gray-700 text-xs' label="No" type="radio" id="no" name="result" value="no">
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
    getValue(row, slug) {
      return row;
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

.radio {
	padding: 4px;
	border-radius: 3px;
	position: relative;
}

.radio input {
	width: auto;
	height: 100%;
	appearance: none;
	outline: none;
	cursor: pointer;
	border-radius: 2px;
	padding: 4px 8px;
	font-size: 14px;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
		"Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
		"Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
	transition: all 100ms linear;
}

.radio input:checked {
	background-image: linear-gradient(180deg, #95d891, #74bbad);
	color: #fff;
	box-shadow: 0 1px 1px #0000002e;
	text-shadow: 0 1px 0px #79485f7a;
}

.radio input:before {
	content: attr(label);
	display: inline-block;
	text-align: center;
	width: 100%;
}

</style>