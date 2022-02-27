<template>
  <Head title="My Properties" />

  <BreezeAuthenticatedLayout>
    <vue3-snackbar top right :duration="4000"></vue3-snackbar>

    <div class="flex items-top justify-between mb-8">
      <div class="mt-2 text-3xl font-medium text-gray-700">
        Custom Attributes
      </div>
      <div class="flex flex-col">
        
      </div>
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
            <label
              for="email-address"
              class="block text-lg font-medium text-gray-700"
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
            <div v-if="errors.slug == 'validation.unique'">
              <div class="-m-2 text-center">
              <div class="p-2 mt-4">
                <div class="inline-flex items-center bg-white leading-none text-ourhouse-600 rounded-full p-2 text-teal text-sm mb-8">
                  <span class="inline-flex bg-ourhouse-600 text-white rounded-full h-6 px-3 justify-center items-center">Duplicate</span>
                  <span class="text-left px-2">Please choose another 'Custom Attribute Name', As it already exists.</span>
                </div>
              </div>
            </div>
            </div>


            <div class="grid space-x-2 space-y-2 grid-cols-3 p-2 border mt-2 border-gray-200 rounded"> 
              <div
                @click="custom_field = 'Internet Connection'"
                class="
                w-auto
                ml-2 
                mt-2
                  cursor-pointer
                  bg-purple-600
                  rounded-lg
                  font-bold
                  text-xs
                  px-4
                  py-2
                  text-white
                  tracking-wide
                  shadow-lg
                ">
                Internet Connection
              </div>
              <div
                @click="custom_field = 'Crime Rate'"
                class="
                  cursor-pointer
                  bg-green-600
                  rounded-lg
                  font-bold
                  text-xs
                  px-4
                  py-2
                  text-white
                  tracking-wide
                  shadow-lg
                ">
                Crime Rate
              </div>
               <div
                @click="custom_field = 'Natural Disaster'"
                class="
                  cursor-pointer
                  bg-blue-600
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
                @click="custom_field = 'Internet Connection Type'"
                class="
                w-auto
                  cursor-pointer
                  bg-orange-600
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
                Internet Connection Type
              </div>
              <div
              @click="custom_field = 'School Zone'"
                class="
                  cursor-pointer
                  bg-yellow-400
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
            </div>

            <BreezeButton class="w-auto text-white mt-4" @click="submit"> Create </BreezeButton>
          </div>
          <div class="w-full md:w-1/3 h-full border-l border-black p-4">
          <ul>
              <li 
              v-for="row in custom_fields"
              :style="dynamicStyle"
              :key="row.id">
              <div class='w-1/2 relative group mb-2'>
                <div :style="'background-color: ' + row.color" class=' duration-200 group-hover:pl-8 rounded-md px-2 py-1 pl-4 font-bold text-white'>{{row.name}}</div>
                <div class="w-4 mr-2 opacity-0 group-hover:opacity-100 duration-200 absolute inset-0 bottom-0 flex justify-center items-center"><img class=" ring-stone-300 ml-2 mt-1" src='/img/color_wheel.svg' ></div>
               </div>
              </li>
           </ul> 
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
      custom_field: "",
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
        redComp: '', 
        greenComp: '', 
        blueComp: '',
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
    dynamicStyle(hex) {
      return {
          'backgroundColor' : hex
      };
    },
    submit() {
      let form = {
        name: this.custom_field,
        slug: this.slug
      }
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

  computed: {
    slug: function () {
      var slug = this.sanitizeTitle(this.custom_field);
      return slug;
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