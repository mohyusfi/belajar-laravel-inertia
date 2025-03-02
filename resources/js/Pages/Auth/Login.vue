<script setup>
import { reactive } from 'vue';
import { useForm, router } from '@inertiajs/vue3';

defineProps({
    title: String
});

const form = useForm({
    email: null,
    password: null,
});

const submit = () => {
    // router.post("/register", form);
    console.log(form);
    form.post("/login", {
        onError: () => form.reset("password"),
        preserveScroll: true
    });
};

</script>

<template>
    <Head :title="title"></Head>
    <h1 class="text-4xl font-bold">Page {{ title }}</h1>
    <form class="mt-6" @submit.prevent="submit">
        <div class="mb-6">
            <label>Email</label>
            <input type="text" v-model="form.email" class="border-2 rounded-md ms-2 px-3 py-1">
            <br>
            <small class="text-red-400">{{ form.errors.email  }}</small>
        </div>
        <div class="mb-6">
            <label>Password</label>
            <input type="text" v-model="form.password" class="border-2 rounded-md ms-2 px-3 py-1">
            <br>
            <small class="text-red-400">{{ form.errors.password  }}</small>
        </div>
        <button type="submit" class="border-2 px-3 py-2 rounded-2xl">Register</button>
    </form>
</template>