<template>
  <div>                
    <div class="relative select-none w-12 mr-2 leading-normal inline-block align-middle">
      <input v-bind:value="value" v-model="isToggleOn" v-on:change="$emit('input', $event.target.checked)" type="checkbox" name="1" id="1" class="hidden" />
      <label class="block overflow-hidden cursor-pointer bg-white border rounded-full h-6  shadow-inner" for="1"></label>
    </div>
    <label class="text-xs text-grey-dark" for="1">{{ `${ isToggleOn ? onText : offText }` }}</label>
</div>
</template>

<script>
export default {
  mounted () {
    this.isToggleOn = this.value
  },
  props: ['value', 'onText', 'offText'],
  data () {
    return {
      isToggleOn: false
    }
  }
}
</script>

<style>

</style>