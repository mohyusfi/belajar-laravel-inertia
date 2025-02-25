<script setup>
defineProps(['type']);
</script>

<template>
    <button :type="type || 'button'" class="btn">
        <slot/>
    </button>
</template>

<style scoped>
.btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
}
.btn:hover {
    background-color: #45a049;
}
</style>
