<script setup>
defineProps({
    message: String
});
</script>

<template>
    <div class="container">
        <h1 class="text-2xl font-bold text-red-600">Welcome to Inertia.js</h1>
        <p>{{ message }}</p>
    </div>
</template>

<style>
.container {
    text-align: center;
    margin-top: 50px;
}
</style>
