<script setup>
import { reactive } from 'vue';

defineProps({
    title: String
});

const form = reactive({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    console.log('submit');
    console.log(form);
};

</script>

<template>

    <Head :title="title"></Head>
    <h1 class="text-4xl font-bold">Page register</h1>
    <form class="mt-6" @submit.prevent="submit">
        <div class="mb-6">
            <label>Name</label>
            <input type="text" v-model="form.name" class="border-2 rounded-md ms-2 px-3 py-1">
        </div>
        <div class="mb-6">
            <label>Email</label>
            <input type="text" v-model="form.email" class="border-2 rounded-md ms-2 px-3 py-1">
        </div>
        <div class="mb-6">
            <label>Password</label>
            <input type="text" v-model="form.password" class="border-2 rounded-md ms-2 px-3 py-1">
        </div>
        <div class="mb-6">
            <label>Confirm Password</label>
            <input type="text" v-model="form.password_confirmation" class="border-2 rounded-md ms-2 px-3 py-1">
        </div>
        <button class="border-2 px-3 py-2 rounded-2xl">Register</button>
    </form>
</template>