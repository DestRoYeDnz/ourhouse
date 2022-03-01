<template>
  <Head title="My Properties" />

  <BreezeAuthenticatedLayout>
    <vue3-snackbar top right :duration="4000"></vue3-snackbar>

    <div class="flex items-start justify-between mb-8">
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
          <table class="w-full">
            <TransitionGroup name="table" tag="tbody">
              <tr
                v-for="property in properties"
                :key="property.id"
                class="
                  w-full
                  pt-4
                  border-b border-ourhouse-600
                  flex flex-col flex-no
                  wrap
                  lg:table-row
                  sm:rounded-none
                  mb-2
                  sm:mb-0
                "
              >
                <td class="align-top p-2 text-left font-bold flex">
                  <div class='text-3xl lg:text-2xl tracking-wider'>{{ property.title }}</div>
                </td>
                <td class="align-top p-2 text-left font-semibold flex">
                  {{ property.address }}
                </td>
                <td class="align-top p-2 text-left lg:text-center border-b border-gray-300 flex">
                  <span>{{ property.bedrooms}}</span>
                  <span class="pl-2"> bedrooms.</span>
                </td>
                <td class="align-top p-2 text-left lg:text-center border-b border-gray-300 flex">
                  <span>{{ property.bathrooms}}</span>
                  <span class="pl-2"> bathrooms.</span>
                </td>
                <td class="align-top p-2 text-left lg:text-center border-b border-gray-300 flex">
                  <span class="pr-4">House:</span>
                  <span>{{ property.house_area}} </span>
                  <span class="pl-2"> <span>m<sup>2</sup></span></span>
                </td>
                <td class="align-top p-2 text-left lg:text-center border-b border-gray-300 flex">
                  <span class="pr-4">Land:</span>
                  <span>{{ property.land_area }}</span>
                  <span class="">
                  <span>m<sup>2</sup></span></span
                  >
                </td>
                <td class="align-top p-2 text-left lg:text-center border-b border-gray-300">
                  <span class='font-bold tracking-wider'>{{ "$" + formatCurrency(property.price) }}</span>
                </td>
                <td class="align-top p-2 text-left lg:text-center border-b border-gray-300">
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
                          class="flex-shrink-0 font-base text-xs ml-4 mt-1.5 w-24 min-w-24 text-left"
                          >{{cf.name}}:</span
                        >

                        <input
                          type="text"
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
                            border border-white
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
                          class="flex-shrink-0 font-base text-xs ml-4 mt-1.5  w-24 min-w-24  text-left"
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
                            font-bold
                            leading-wide
                            border border-white
                            appearance:
                            none;
                            focus:text-white-700 focus:outline-none
                          "
                        >
                          <option selected>Select a value for {{cf.name}}</option>
                          <option v-for="(row, index) in getCustomFieldValue(cf.value)" :key="index" :value="row">{{row}}</option>
                        </select>
                      </div>
                    </div>



                   <div v-if="cf.type == 'boolean'">
                      <div
                        class="
                          flex
                          justify-between
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
                        :style="'background-color: ' + cf.color">
                        <span
                          class="flex-shrink-0 font-base text-xs ml-4 mt-1.5 w-24 min-w-24 text-left">
                          {{cf.name}}:
                          </span>
                        <div
                          class="
                            relative
                            flex
                            justify-end
                            flex-shrink-0
                            text-xs
                            mr-0
                            w-48
                          "
                        >
                          <span class="radio">
                            <input
                              class="bg-white text-gray-700 text-xs"
                              label="Yes"
                              type="radio"
                              id="yes"
                              name="result"
                              value="yes"
                            />
                            <input
                              class="bg-white text-gray-700 text-xs"
                              label="No"
                              type="radio"
                              id="no"
                              name="result"
                              value="no"
                              checked
                            />
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </TransitionGroup>
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
    getCustomFieldValue(json){
      const obj = JSON.parse(json);
      return obj;
    },
    getComplementaryColor(color = "") {
      const colorPart = color.slice(1);
      const ind = parseInt(colorPart, 16);
      let iter = ((1 << (4 * colorPart.length)) - 1 - ind).toString(16);
      while (iter.length < colorPart.length) {
        iter = "0" + iter;
      }
      return "#" + iter;
    },
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