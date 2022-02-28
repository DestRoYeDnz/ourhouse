<template>
  <Head title="My Properties" />

  <BreezeAuthenticatedLayout>
    <vue3-snackbar top right :duration="4000"></vue3-snackbar>

    <div class="flex items-top justify-between mb-8">
      <div class="mt-2 text-3xl font-medium text-gray-700">
        Custom Attributes
      </div>
      <div class="flex flex-col"></div>
    </div>
    <div class="inline-block overflow-hidden min-w-full rounded-lg">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div
          class="
            flex
            items-start
            justify-start
            space-x-4
            p-6
            border-b border-gray-200
          "
        >
          <div class="w-full md:w-2/3">
            <label class="block text-lg font-medium text-gray-700"
              >Custom field name</label
            >
            <input
              type="text"
              v-model="custom_field"
              class="
                mt-1
                focus:ring-indigo-500 focus:border-indigo-500
                block
                w-full
                shadow-sm
                sm:text-sm
                border-gray-300
                rounded-md
              "
            />

            <label class="block text-lg font-medium text-gray-700"
              >Field Type</label
            >
            <select
              v-model="custom_field_type"
              class="
                mt-1
                focus:ring-indigo-500 focus:border-indigo-500
                block
                w-full
                shadow-sm
                sm:text-sm
                border-gray-300
                rounded-md
              "
            >
              <option value="value">Single Value</option>
              <option value="dropdown">Dropdown</option>
              <option value="boolean">Yes / No</option>
              <option value="computed">Computed Value</option>
            </select>

            <div
              v-if="custom_field_type == 'dropdown'"
              class="mt-4 border border-gray-400 w-auto rounded p-4"
            >
              <div
                class="
                  flex
                  items-center
                  w-24
                  bg-green-500
                  text-white text-xs
                  font-semibold
                  rounded-md
                  shadow-md
                  py-1
                  px-2
                  text-center
                "
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4 text-white"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                  />
                </svg>
                <span @click="addRow()" class="cursor-pointer shadow-md"
                  >Add Fields</span
                >
              </div>
              <div>
                <ul>
                  <li v-for="(row, index) in rows" :key="index">
                    <input
                      v-model="op[index]"
                      class="
                        mt-1
                        focus:ring-indigo-500 focus:border-indigo-500
                        block
                        w-full
                        shadow-sm
                        sm:text-sm
                        border-gray-300
                        rounded-md
                      "
                      type="text"
                    />
                  </li>
                </ul>
              </div>
            </div>

            <label class="mt-2 block text-lg font-medium text-gray-700"
              >Color</label
            >
            <input
              type="color"
              v-model="color"
              class="
                mt-1
                focus:ring-indigo-500 focus:border-indigo-500
                block
                w-24
                shadow-sm
                sm:text-sm
                border-gray-300
                rounded-md
              "
            />

            <div v-if="errors.slug == 'validation.unique'">
              <div class="-m-2 text-center">
                <div class="p-2 mt-4">
                  <div
                    class="
                      inline-flex
                      items-center
                      bg-white
                      leading-none
                      text-ourhouse-600
                      rounded-full
                      p-2
                      text-teal text-sm
                      mb-8
                    "
                  >
                    <span
                      class="
                        inline-flex
                        bg-ourhouse-600
                        text-white
                        rounded-full
                        h-6
                        px-3
                        justify-center
                        items-center
                      "
                      >Duplicate</span
                    >
                    <span class="text-left px-2"
                      >Please choose another 'Custom Attribute Name', As it
                      already exists.</span
                    >
                  </div>
                </div>
              </div>
            </div>
            <div>These need to be updated for special-fields.</div>
            <div
              class="
                grid
                space-x-2 space-y-2
                grid-cols-5
                p-2
                border
                mt-2
                border-gray-200
                rounded
              "
            >
            
              <div
                @click="
                  custom_field = 'Internet Connection';
                  color = '#264653';
                "
                style="background-color: #264653"
                class="
                  w-auto
                  ml-2
                  mt-2
                  text-center
                  cursor-pointer
                  rounded-lg
                  font-bold
                  text-xs
                  px-4
                  py-2
                  text-white
                  tracking-wide
                  shadow-lg
                "
              >
                Internet Connection
              </div>
              <div
                @click="
                  custom_field = 'Crime Rate';
                  color = '#2a9d8f';
                "
                style="background-color: #2a9d8f"
                class="
                  cursor-pointer
                  rounded-lg
                  font-bold
                  text-xs
                  px-4
                  py-2
                  text-white
                  tracking-wide
                  shadow-lg
                "
              >
                Crime Rate
              </div>
              <div
                @click="
                  custom_field = 'Natural Disaster';
                  color = '#e9c46a';
                "
                style="background-color: #e9c46a"
                class="
                  cursor-pointer
                  rounded-lg
                  font-bold
                  text-xs
                  px-4
                  py-2
                  text-white
                  tracking-wide
                  shadow-lg
                "
              >
                Natural Disaster
              </div>

              <div
                @click="
                  custom_field = 'School Zone';
                  color = '#f4a261';
                "
                style="background-color: #f4a261"
                class="
                  cursor-pointer
                  font-bold
                  rounded-lg
                  text-xs
                  px-4
                  py-2
                  text-white
                  tracking-wide
                  shadow-lg
                "
              >
                School Zone
              </div>
              <div
                @click="
                  custom_field = 'Big Enough?';
                  color = '#e76f51';
                "
                style="background-color: #e76f51"
                class="
                  cursor-pointer
                  font-bold
                  rounded-lg
                  text-xs
                  px-4
                  py-2
                  text-white
                  tracking-wide
                  shadow-lg
                "
              >
                Big Enough?
              </div>
            </div>

            <BreezeButton class="w-auto text-white mt-4" @click="submit">
              Create
            </BreezeButton>
          </div>
          <div class="w-full md:w-1/3 h-full border-l border-black p-4">
            <transition-group class="list-group" name="list" tag="ol">
              <li
               class='relative'
                v-for="row in custom_fields"
                :style="dynamicStyle"
                :key="row.id"
              >
                <div class="w-1/2 relative group mb-2">
                  <div  :style="'background-color: ' + row.color" class='border border-gray-300 shadow-md absolute top-2 right-2 bg-gray-300 text-white text-xs rounded-md py-0.5 px-0.5'>
                    {{row.type.toProperCase()}}
                  </div>
                  <div
                    :style="'background-color: ' + row.color"
                    class="
                      duration-200
                      group-hover:pl-8
                      rounded-md
                      px-2
                      py-1
                      pl-4
                      font-bold
                      text-white
                      text-sm
                    "
                  >
                    <div class='text-sm'>
                      {{ row.name }} <br />
                    <pre>{{ row.value }}</pre>
                    </div>
                  </div>
                  <div
                    class="
                      w-4
                      mr-2
                      opacity-0
                      group-hover:opacity-100
                      duration-200
                      absolute
                      inset-0
                      bottom-0
                      flex
                      justify-center
                      items-center
                    "
                  >
                    <img
                      class="ring-stone-300 ml-2 mt-1"
                      src="/img/color_wheel.svg"
                    />
                  </div>
                </div>
              </li>
            </transition-group>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination.vue";
import BreezeButton from "@/Components/Button.vue";
import DropdownMenu from "@/Components/DropdownMenu.vue";
import AddPropertyModal from "@/Components/AddPropertyModal.vue";
import MessageModal from "@/Components/MessageModal.vue";

export default {
  data() {
    return {
      rows: [],
      op: [],
      color: "#3397D7",
      custom_field: "",
      custom_field_type: "value",
      customFieldsModalOpen: false,
      messageModalOpen: false,
      addModalOpen: false,
      customeFieldsModalOpen: false,
      dropdown: false,
      title: "Why we require Email Verification",
      message:
        "Bacon ipsum dolor amet shankle kielbasa shank short loin andouille shoulder beef ribs biltong rump chuck meatball flank tri-tip. Pancetta meatball beef ribs short ribs frankfurter, leberkas shoulder landjaeger bacon. Frankfurter beef rump brisket pork. Pancetta picanha jerky andouille tri-tip ham hock burgdoggen corned beef pig beef ribs tail drumstick sirloin jowl brisket. ",
      customeFieldsModalOpenMessage: "Custom handlers",
      customeFieldsModalOpenTitle:
        "Bacon ipsum dolor amet shankle kielbasa shank short loin andouille shoulder beef ribs biltong rump chuck meatball flank tri-tip. Pancetta meatball beef ribs short ribs frankfurter, leberkas shoulder landjaeger bacon. Frankfurter beef rump brisket pork. Pancetta picanha jerky andouille tri-tip ham hock burgdoggen corned beef pig beef ribs tail drumstick sirloin jowl brisket. ",
      number: {
        decimal: ".",
        separator: ",",
        prefix: "$ ",
        suffix: " ",
        precision: 2,
        masked: false,
        redComp: "",
        greenComp: "",
        blueComp: "",
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
    MessageModal,
  },
  props: {
    custom_fields: Object,
    errors: Object,
  },
  methods: {
    addRow() {
      var elem = document.createElement("tr");
      this.rows.push({
        string: "",
      });
    },
    removeElement(index) {
      this.rows.splice(index, 1);
    },
    dynamicStyle(hex) {
      return {
        backgroundColor: hex,
      };
    },
    submit() {
      let form = {
        name: this.custom_field,
        slug: this.slug,
        color: this.color,
        type: this.custom_field_type,
      };

      if (
        this.custom_field_type == "value" ||
        this.custom_field_type == "dropdown"
      ) {
        form.value = JSON.stringify(this.op, null, 2);
      } else if (this.custom_field_type == "boolean") {
        form.value = JSON.stringify(["Yes", "No"], null, 2);
      }

      this.op = [];
      this.rows = [];

      this.$inertia.post("/property/custom-attributes", form);
    },
    formatCurrency(price) {
      let dollarUSLocale = Intl.NumberFormat("en-US");
      return dollarUSLocale.format(price);
    },
    sanitizeTitle(title) {
      console.log(title);
      var slug = "";
      // Change to lower case
      var titleLower = title.toLowerCase();
      // Letter "e"
      slug = titleLower.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, "e");
      // Letter "a"
      slug = slug.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, "a");
      // Letter "o"
      slug = slug.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, "o");
      // Letter "u"
      slug = slug.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, "u");
      // Letter "d"
      slug = slug.replace(/đ/gi, "d");
      // Trim the last whitespace
      slug = slug.replace(/\s*$/g, "");
      // Change whitespace to "-"
      slug = slug.replace(/\s+/g, "_");

      return slug;
    },
  },
  watch: {
    custom_field_type(val) {
      if (val == "value") {
        this.rows = [];
        this.op = [];
      }
    },
  },
  computed: {
    slug: function () {
      var slug = this.sanitizeTitle(this.custom_field);
      return slug;
    },
  },
};
</script>


<style>
.list-enter-active,
.list-leave-active {
  transition: all 0.5s ease;
}
.list-enter-from,
.list-leave-to {
  opacity: 0;
  transform: translateX(30px);
}

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