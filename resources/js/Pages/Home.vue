<script setup>
import DefaultLayout from "../Layouts/DefaultLayout.vue";


defineProps({
    message: String,
    post: Array,
    auth: Object
});

const content = "<h1>belajar inertia vue js</h1>";
const classMessage = "text-green-400";
const id = 'message';

const getImageUrl = picture => `storage/${picture}`;

</script>

<template>
    <!-- <div>{{ user }}</div> -->
    <Head title="Home - ">
        <meta
            head-key="description"
            name="description"
            content="This Is description of Home - My app"
            />
    </Head>
    <div class="container">
        <h1 class="text-2xl font-bold text-red-600">Welcome to Inertia.js</h1>
        <p v-bind:class="classMessage">{{ message }}</p>
        <div :id="id" :class="classMessage" v-html="content"></div>
        <div>{{ $page }}</div>
        <div>{{ auth.user.id ? auth.user.id : "" }}</div>
        <img :src="getImageUrl(post[0].picture)" alt="om.jpg">
        <button type="submit" class="mt-3 rounded-4xl bg-amber-400 p-2 cursor-pointer">Click Me</button>
    </div>
    <Link class="mt-[40em] block" href="/" preserve-scroll>Refresh</Link>
</template>

<style>
.container {
    text-align: center;
    margin-top: 50px;
}
</style>
