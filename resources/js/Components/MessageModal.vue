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
                {{ title}}
              </DialogTitle>
              <div class="mt-6">
                <div class="relative flex items-center mb-4">
                  {{message}}
                </div>

                <div>
                  <section class="antialiased px-4">
                    <div class="flex flex-col justify-center h-full">
                      <!-- Table -->
                      <div class="w-full max-w-2xl mx-auto bg-white">
                        <div class="p-3">
                          <div class="overflow-x-auto">
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
                                CLOSE
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
            
          </TransitionChild>
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
  props: ["modalActive", "title", "message"],
  methods: {
    closeModal() {
      this.$emit("close");
    },
  }
};
</script>