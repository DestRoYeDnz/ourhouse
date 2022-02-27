<script setup>
defineProps(['message']);
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-ourhouse-600">
            {{ message }}
        </p>
    </div>
</template>
