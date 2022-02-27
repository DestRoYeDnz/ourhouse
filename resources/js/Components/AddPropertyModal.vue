<template>
  <TransitionRoot :show="modalActive" as="template">
    <Dialog as="div" @close="closeModal">
      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="min-h-screen px-4 text-center">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0"
            enter-to="opacity-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100"
            leave-to="opacity-0"
          >
            <DialogOverlay class="fixed inset-0" />
          </TransitionChild>

          <span class="inline-block h-screen align-middle" aria-hidden="true">
            &#8203;
          </span>

          <TransitionChild
            as="template"
            enter="duration-500 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <div
              class="
                inline-block
                w-full
                max-w-2xl
                p-6
                my-8
                overflow-hidden
                text-left
                align-middle
                transition-all
                transform
                bg-white
                shadow-xl
                rounded-2xl
                border-2 border-ourhouse-300
              "
            >
              <DialogTitle
                as="h3"
                class="text-xl font-semibold leading-6 text-gray-900"
              >
                Add a new Property
              </DialogTitle>
              <div class="mt-6">
                <div class="relative flex flex-col  items-center mb-4">
                  <p>https://www.trademe.co.nz/a/property/residential/sale/auckland/waitakere-city/massey/listing/3485774070</p>
                  <input
                    v-model="url"
                    class="
                      w-full
                      py-2
                      border border-gray-200
                      rounded-md
                      pl-2
                      bg-gray-50
                      focus:bg-white
                      focus:ring-ourhouse-500
                      focus:ring-2
                      focus:ring-offset-2
                      focus:ring-opacity-90
                      focus:outline-none
                    "
                    type="text"
                    placeholder="Paste URL"
                  />
                </div>

                <label class="flex items-center mt-1" for="terms">
                  <span
                    v-if="isUrl && !data.length > 0"
                    class="text-xs text-gray-500"
                  >
                    LOADING
                  </span>
                  <span
                    v-if="!isUrl && data.length > 0"
                    class="text-xs text-gray-500"
                    >Please paste a URL from Trademe or One Roof</span
                  >
                </label>
                <div v-if="isUrl">
                  <section class="antialiased px-4">
                    <div class="flex flex-col justify-center h-full">
                      <!-- Table -->
                      <div class="w-full max-w-2xl mx-auto bg-white">
                        <div class="p-3">
                          <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                              <tbody class="text-sm divide-y divide-gray-100">
                                <tr v-for="row in data" :key="row.id">
                                  <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">
                                      <img
                                        class="w-12 h-12"
                                        :src="'/img/' + row.source + '.png'"
                                      />
                                    </div>
                                  </td>
                                  <td class="p-2 whitespace-nowrap">
                                    <div
                                      class="
                                        text-left
                                        font-medium
                                        text-ourhouse-500
                                      "
                                    >
                                      &nbsp;
                                    </div>
                                  </td>
                                </tr>
                                <tr v-for="row in data" :key="row.id">
                                  <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">
                                      <div class="flex items-center">
                                        <span class="font-bold text-xl">{{
                                          row.title
                                        }}</span>
                                        <a
                                          :href="row.source_url"
                                          target="_BLANK"
                                        >
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            viewBox="0 0 16 16"
                                            fill="none"
                                            class="ml-2"
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
                                    </div>
                                  </td>
                                  <td class="p-2 whitespace-nowrap">
                                    <div
                                      class="
                                        text-left
                                        font-medium
                                        text-ourhouse-500
                                      "
                                    >
                                      &nbsp;
                                    </div>
                                  </td>
                                </tr>


                                <tr v-for="row in data" :key="row.id">
                                  <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">
                                      {{ row.address }}
                                    </div>
                                  </td>
                                  <td class="p-2 whitespace-nowrap">
                                    <div
                                      class="
                                        text-left
                                        font-medium
                                        text-ourhouse-500
                                      "
                                    >
                                      &nbsp;
                                    </div>
                                  </td>
                                </tr>


                                <tr v-for="row in data" :key="row.id">
                                  <td class="p-2 whitespace-nowrap">
                                    <div
                                      class="flex items-center justify-start w-full"
                                    >
                                      <div
                                        class="flex items-center justify-between"
                                      >
                                        <div>
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            class="w-8 h-8 mr-4"
                                            xml:space="preserve"
                                          >
                                            <path
                                              d="M482 233.539V117.007c0-49.626-40.374-90-90-90h-94.5c-5.523 0-10 4.477-10 10s4.477 10 10 10H392c38.598 0 70 31.402 70 70v106.005a73.657 73.657 0 0 0-24-4.017h-2v-57.333c0-21.321-17.346-38.667-38.667-38.667H284.667c-11.358 0-21.586 4.924-28.667 12.747-7.081-7.823-17.309-12.747-28.667-12.747H114.667C93.346 122.995 76 140.341 76 161.661v57.333h-2c-8.4 0-16.468 1.427-24 4.017V117.007c0-38.598 31.402-70 70-70h96.5c5.523 0 10-4.477 10-10s-4.477-10-10-10H120c-49.626 0-90 40.374-90 90V233.54c-18.188 13.495-30 35.12-30 59.456v128c0 5.523 4.477 10 10 10h20v44c0 5.523 4.477 10 10 10h54.012c5.523 0 10-4.477 10-10v-44h303.976v44c0 5.523 4.477 10 10 10H472c5.523 0 10-4.477 10-10v-44h20c5.523 0 10-4.477 10-10v-128c0-24.337-11.812-45.962-30-59.457zm-216-71.878c0-10.293 8.374-18.667 18.667-18.667h112.667c10.293 0 18.667 8.374 18.667 18.667v57.333H266v-57.333zm-170 0c0-10.293 8.374-18.667 18.667-18.667h112.667c10.293 0 18.667 8.374 18.667 18.667v57.333H96v-57.333zM84.012 464.995H50v-34h34.012v34zm377.988 0h-34.012v-34H462v34zm30-102H91.921c-5.523 0-10 4.477-10 10s4.477 10 10 10H492v28h-19.758c-.081-.002-.16-.012-.242-.012h-54.012c-.082 0-.161.01-.242.012H94.254c-.081-.002-.16-.012-.242-.012H40c-.082 0-.161.01-.242.012H20v-118c0-29.776 24.224-54 54-54h364c29.776 0 54 24.224 54 54v70z"
                                            />
                                            <path
                                              d="M263.07 29.935c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21 1.07-7.07 2.93-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07 4.44 2.93 7.07 2.93 5.21-1.07 7.07-2.93 2.93-4.43 2.93-7.07c0-2.63-1.07-5.211-2.93-7.07zM59.15 365.924a10.076 10.076 0 0 0-7.07-2.93c-2.64 0-5.21 1.07-7.07 2.93s-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07c1.86 1.86 4.44 2.93 7.07 2.93s5.21-1.07 7.07-2.93c1.86-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07z"
                                            />
                                          </svg>
                                        </div>
                                        <div>{{ row.bedrooms }}</div>
                                      </div>
                                      <div
                                        class="
                                          flex
                                          items-center
                                          justify-between
                                        "
                                      >
                                        <div class='ml-8'>
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            class="w-8 h-8 mr-4"
                                            xml:space="preserve"
                                          >
                                            <path
                                              d="M482 233.539V117.007c0-49.626-40.374-90-90-90h-94.5c-5.523 0-10 4.477-10 10s4.477 10 10 10H392c38.598 0 70 31.402 70 70v106.005a73.657 73.657 0 0 0-24-4.017h-2v-57.333c0-21.321-17.346-38.667-38.667-38.667H284.667c-11.358 0-21.586 4.924-28.667 12.747-7.081-7.823-17.309-12.747-28.667-12.747H114.667C93.346 122.995 76 140.341 76 161.661v57.333h-2c-8.4 0-16.468 1.427-24 4.017V117.007c0-38.598 31.402-70 70-70h96.5c5.523 0 10-4.477 10-10s-4.477-10-10-10H120c-49.626 0-90 40.374-90 90V233.54c-18.188 13.495-30 35.12-30 59.456v128c0 5.523 4.477 10 10 10h20v44c0 5.523 4.477 10 10 10h54.012c5.523 0 10-4.477 10-10v-44h303.976v44c0 5.523 4.477 10 10 10H472c5.523 0 10-4.477 10-10v-44h20c5.523 0 10-4.477 10-10v-128c0-24.337-11.812-45.962-30-59.457zm-216-71.878c0-10.293 8.374-18.667 18.667-18.667h112.667c10.293 0 18.667 8.374 18.667 18.667v57.333H266v-57.333zm-170 0c0-10.293 8.374-18.667 18.667-18.667h112.667c10.293 0 18.667 8.374 18.667 18.667v57.333H96v-57.333zM84.012 464.995H50v-34h34.012v34zm377.988 0h-34.012v-34H462v34zm30-102H91.921c-5.523 0-10 4.477-10 10s4.477 10 10 10H492v28h-19.758c-.081-.002-.16-.012-.242-.012h-54.012c-.082 0-.161.01-.242.012H94.254c-.081-.002-.16-.012-.242-.012H40c-.082 0-.161.01-.242.012H20v-118c0-29.776 24.224-54 54-54h364c29.776 0 54 24.224 54 54v70z"
                                            />
                                            <path
                                              d="M263.07 29.935c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21 1.07-7.07 2.93-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07 4.44 2.93 7.07 2.93 5.21-1.07 7.07-2.93 2.93-4.43 2.93-7.07c0-2.63-1.07-5.211-2.93-7.07zM59.15 365.924a10.076 10.076 0 0 0-7.07-2.93c-2.64 0-5.21 1.07-7.07 2.93s-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07c1.86 1.86 4.44 2.93 7.07 2.93s5.21-1.07 7.07-2.93c1.86-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07z"
                                            />
                                          </svg>
                                        </div>
                                        <div>{{ row.bathrooms }}</div>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="p-2 whitespace-nowrap">
                                    <div
                                      class="
                                        text-left
                                        font-medium
                                        text-ourhouse-500
                                      "
                                    >
                                      &nbsp;
                                    </div>
                                  </td>
                                </tr>




                                <tr>
                                  <td class="p-2 whitespace-nowrap">
                                    <div
                                      class="flex items-center justify-start w-full"
                                    >
                                      <div
                                        class="flex items-center justify-between"
                                      >
                                        <div>
                                          <svg class='w-8 h-8 mr-4' viewBox="0 0 491.312 491.312" style="enable-background:new 0 0 491.312 491.312" xml:space="preserve"><path d="M0 0v491.312h491.312L0 0zm384 451.312v24h-32v-40h-16v40h-32v-24h-16v24h-32v-40h-16v40h-32v-24h-16v24h-32v-40h-16v40h-32v-24H96v24H64v-40H48v40H16v-40h24v-16H16v-32h40v-16H16v-32h24v-16H16v-32h40v-16H16v-32h24v-16H16v-32h40v-16H16v-32h24v-16H16v-32h40v-16H16V38.624l436.688 436.688H400v-24h-16z"/><path d="M80 411.312h128v-16H96V231.76l163.552 163.552H224v16h74.176L80 193.136z"/></svg>
                                        </div>
                                        <div>{{ data.house_area }}</div>
                                      </div>
                                      <div
                                        class="
                                          flex
                                          items-center
                                          justify-between
                                        "
                                      >
                                      
                                        <div class='ml-8'>
                                          <svg class='w-8 h-8 mr-4' viewBox="0 0 491.312 491.312" style="enable-background:new 0 0 491.312 491.312" xml:space="preserve"><path d="M0 0v491.312h491.312L0 0zm384 451.312v24h-32v-40h-16v40h-32v-24h-16v24h-32v-40h-16v40h-32v-24h-16v24h-32v-40h-16v40h-32v-24H96v24H64v-40H48v40H16v-40h24v-16H16v-32h40v-16H16v-32h24v-16H16v-32h40v-16H16v-32h24v-16H16v-32h40v-16H16v-32h24v-16H16v-32h40v-16H16V38.624l436.688 436.688H400v-24h-16z"/><path d="M80 411.312h128v-16H96V231.76l163.552 163.552H224v16h74.176L80 193.136z"/></svg>
                                        </div>
                                        <div>{{ data.land_area }}</div>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="p-2 whitespace-nowrap">
                                    <div
                                      class="
                                        text-left
                                        font-medium
                                        text-ourhouse-500
                                      "
                                    >
                                      &nbsp;
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <button
                  @click="processUrl"
                  class="
                    w-full
                    px-4
                    py-2
                    mt-12
                    font-bold
                    text-white
                    uppercase
                    bg-ourhouse-500
                    rounded-md
                    hover:bg-ourhouse-600
                    font-heading
                  "
                >
                  Save Property
                </button>
              </div>
              <div class="mt-4">
                <button
                  type="button"
                  class="
                    w-full
                    px-4
                    py-2
                    mt-2
                    font-bold
                    text-white
                    uppercase
                    bg-ourhouse-500
                    rounded-md
                    hover:bg-ourhouse-600
                    font-heading
                  "
                  @click="closeModal"
                >
                  Nevermind
                </button>
              </div>
            </div>
          </TransitionChild>
        </div>
                                        <div class="post-tags mb-4">
                                    <strong>Tags : </strong>
                                    <!-- @foreach($post->tags as $tag) -->
                                        <span class="badge badge-info">1`2`121`2</span>
                                    <!-- @endforeach -->
                                </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script>
import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogOverlay,
  DialogTitle,
} from "@headlessui/vue";

export default {
  name: "addPropertyModal",
  data() {
    return {
      url: "",
      isUrl: false,
      data: [],
    };
  },
  components: {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogOverlay,
    DialogTitle,
  },
  props: ["modalActive"],
  methods: {
    closeModal() {
      this.$emit("close");
    },
    verifyUrl(url) {
      var regEx = /www.trademe.co.nz/;
      if (regEx.test(url)) {
        this.data = [
          {
            id: "02d09abc-5112-4baf-a079-6d41fbda9fb4",
            user_id: 1,
            unique_id: "6aeacaee54a0b7cced946a71f00f790cfcb99ddd",
            source_url: "http://tromp.com/",
            source: "trademe",
            title: "Borer-Stokes",
            address: "84635 Elinore Corner Apt. 402\nRosaleefurt, MN 24643",
            region: "10",
            price: "153137",
            bedrooms: 6,
            bathrooms: 2,
            house_area: 80,
            land_area: 1083,
            vendor: "0",
            agent_name: "Krista Purdy I",
            agent_phone: "1-682-953-2211",
            agent_email: "geoffrey41@gmail.com",
            created_at: "2022-02-26T01:32:30.000000Z",
            updated_at: "2022-02-26T01:32:30.000000Z",
          },
        ];
        this.isUrl = true;
      }
    },
    processUrl() {},
  },
  watch: {
    url(val) {
      this.verifyUrl(val);
    },
  },
};
</script>