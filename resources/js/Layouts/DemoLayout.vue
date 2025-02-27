<script setup>

import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div class="layout">
        <!-- Header -->
        <header class="flex-row justify-items-center bg-green-600 text-white text-center">
            <h1>My App</h1>
            <div class="flex w-[20%] py-5 justify-around">
                <Link class="cursor-pointer" href="/">Home</Link>
                <Link class="cursor-pointer" href="/counter">Counter</Link>
            </div>
        </header>

        <!-- Konten utama -->
        <main class="content">
            <slot></slot>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <p>© 2025 My App</p>
        </footer>
    </div>
</template>

<style scoped>
.layout {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.header {
    background: #333;
    color: white;
    padding: 10px;
    text-align: center;
}

.content {
    flex: 1;
    padding: 20px;
}

.footer {
    background: #333;
    color: white;
    padding: 10px;
    text-align: center;
}
</style>
