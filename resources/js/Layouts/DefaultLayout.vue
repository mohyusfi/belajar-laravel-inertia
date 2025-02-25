<template>
    <div class="layout">
        <!-- Header -->
        <header class="header">
            <h1>My App</h1>
        </header>

        <!-- Konten utama -->
        <main class="content">
            <slot />
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
