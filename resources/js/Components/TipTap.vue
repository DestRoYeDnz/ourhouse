<template>
    <div class="editor" >
        <div class="menubar flex items-center justify-start">
                <div v-for="actionName in activeButtons" :key='actionName'>
                 <div v-if="actionName === 'bold'"
                    class="menubar__button"
                    :class="{ 'is-active': editor.isActive('bold') }"
                    @click="editor.chain().focus().toggleBold().run()"
                >
                    <span class="w-12 bg-green-300  px-1 py-0.5 rounded-lg border border-green-400 font-bold">BOLD</span>
                </div>
                <div
                    v-if="actionName === 'italic'"
                    class="menubar__button"
                    :class="{ 'is-active': editor.isActive('italic') }"
                    @click="editor.chain().focus().toggleItalic().run()"
                >
                    <span class="ml-1 w-12 bg-blue-300  px-1 py-0.5 rounded-lg border border-blue-400 font-bold">ITALIC</span>
                </div>

                <div
                    v-if="actionName === 'strike'"
                    class="menubar__button"
                    :class="{ 'is-active': editor.isActive('strike') }"
                    @click="editor.chain().focus().toggleStrike().run()"
                >
                    <span class="ml-1 w-12 bg-orange-300  px-1 py-0.5 rounded-lg border border-orange-400 font-bold">STRIKE</span>
                </div>


                <div
                    v-if="actionName === 'code'"
                    class="menubar__button"
                    :class="{ 'is-active': editor.isActive('code') }"
                    @click="editor.chain().focus().toggleCode().run()"
                >
                    <span class="ml-1 w-12 bg-purple-300  px-1 py-0.5 rounded-lg border border-purple-400 font-bold">&lt; ></span>
                </div>

                <div
                    v-if="actionName === 'h1'"
                    class="menubar__button"
                    :class="{
                        'is-active': editor.isActive('heading', { level: 1 }),
                    }"
                    @click="
                        editor.chain().focus().toggleHeading({ level: 1 }).run()
                    "
                >
                    <span class="ml-1 w-12 bg-purple-300  px-1 py-0.5 rounded-lg border border-purple-400 font-bold">H1</span>
                </div>

                <div
                    v-if="actionName === 'h2'"
                    class="menubar__button"
                    :class="{
                        'is-active': editor.isActive('heading', { level: 2 }),
                    }"
                    @click="
                        editor.chain().focus().toggleHeading({ level: 2 }).run()
                    "
                >
                    <span class="ml-1 w-12 bg-purple-300  px-1 py-0.5 rounded-lg border border-purple-400 font-bold">H2</span>
                </div>

                <div
                    v-if="actionName === 'h3'"
                    class="menubar__button"
                    :class="{
                        'is-active': editor.isActive('heading', { level: 3 }),
                    }"
                    @click="
                        editor.chain().focus().toggleHeading({ level: 3 }).run()
                    "
                >
                    <span class="ml-1 w-12 bg-purple-300  px-1 py-0.5 rounded-lg border border-purple-400 font-bold">H3</span>
                </div>



                <div
                    v-if="actionName === 'orderedList'"
                    class="menubar__button"
                    :class="{ 'is-active': editor.isActive('orderedList') }"
                    @click="editor.chain().focus().toggleOrderedList().run()"
                >
                    <span class="ml-1 w-12 bg-purple-300  px-1 py-0.5 rounded-lg border border-purple-400 font-bold">ORDERED LIST</span>
                </div>

                <div
                    v-if="actionName === 'horizontalRule'"
                    class="menubar__button"
                    @click="editor.chain().focus().setHorizontalRule().run()"
                >
                    <span class="ml-1 w-12 bg-purple-300  px-1 py-0.5 rounded-lg border border-purple-400 font-bold">HR</span>
                </div>

                <div
                    v-if="actionName === 'undo'"
                    class="menubar__button"
                    @click="editor.chain().focus().undo().run()"
                >
                    <span class="ml-1 w-12 bg-purple-300  px-1 py-0.5 rounded-lg border border-purple-400 font-bold">UNDO</span>
                </div>

                <div
                    v-if="actionName === 'redo'"
                    class="menubar__button"
                    @click="editor.chain().focus().redo().run()"
                >
                    <span class="ml-1 w-12 bg-purple-300  px-1 py-0.5 rounded-lg border border-purple-400 font-bold">REDO</span>
                </div>
            </div>
        </div>
        <hr class='mt-2'>
        <editor-content
            class="hover:border focus:border hover:border-gray-200 focus:border-gray-200 prose prose-sm sm:prose lg:prose-lg xl:prose-2xl mt-4 px-2 text-left rounded-lg focus:outline-none "
            :editor="editor"
        />
    </div>
</template>

<script>
import { Editor, EditorContent } from "@tiptap/vue-3";
import StarterKit from "@tiptap/starter-kit";

export default {
    name: "Editor",
    components: {
        EditorContent,
    },
    props: {
        initialContent: {
            type: String,
            required: true,
            default: "",
        },
        activeButtons: {
            type: Array,
            validator: function (list) {
                for (let el of list) {
                    // The value must match one of these strings
                    if (
                        [
                            "bold",
                            "italic",
                            "strike",
                            "code",
                            "h1",
                            "h2",
                            "h3",
                            "bulletList",
                            "orderedList",
                            "blockquote",
                            "codeBlock",
                            "horizontalRule",
                            "undo",
                            "redo",
                        ].indexOf(el) === -1
                    ) {
                        return -1;
                    }
                }
                return 1;
            },
            default: () => ["bold", "italic"],
        },
    },
    emits: ["update"],
    data() {
        return {
            html: "",
            json: "",
            editor: null,
        };
    },
    created() {
        this.editor = new Editor({
            content: this.initialContent,
            extensions: [StarterKit],
        });

        this.html = this.editor.getHTML();
        this.json = this.editor.getJSON();

        this.editor.on("update", () => {
            this.html = this.editor.getHTML();
            this.json = this.editor.getJSON();
            this.$emit("update", this.html);
        });
    },
    beforeUnmount() {
        this.editor.destroy();
    },
};
</script>

<style scoped>

</style>
