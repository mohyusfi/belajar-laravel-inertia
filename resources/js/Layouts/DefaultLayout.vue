<script setup>
// import { Link, Head } from '@inertiajs/vue3'; already use in global component

</script>

<template>
    <div>
        <Head>
            <meta
                head-key="description"
                name="description"
                content="This Is description of My app"
                />
        </Head>
        <div class="layout">
            <header class="flex-row justify-items-center bg-gray-600 text-white text-center">
                <h1>My App</h1>
                <div class="flex w-[20%] py-5 justify-around">
                    <Link class="cursor-pointer" :href="route('home')">Home</Link>
                    <Link class="cursor-pointer" :href="route('counter')">Counter</Link>
                    <Link class="cursor-pointer" :href="route('post')">Post</Link>
                    <Link class="cursor-pointer" :href="route('register')">Register</Link>
                    <Link class="cursor-pointer" :href="route('login')">Login</Link>
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
