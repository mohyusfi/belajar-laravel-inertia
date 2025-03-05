<script setup>
import { useForm } from '@inertiajs/vue3';


const form = useForm({
    title: null,
    description: null,
    picture: null,
});

const getFile = (e) => {
    form.picture = e.target.files[0];
    // console.log(e.target.files);
};

const submit = () => {
    form.post('/post', {
        preserveScroll: true
    });
    console.log(form);
};

</script>

<template>
    <div class="flex justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-4 text-center">Create Post</h2>
            <form @submit.prevent="submit">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium">Title</label>
                    <input
                        type="text"
                        id="title"
                        name="title"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
                        v-model="form.title">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium">Description</label>
                    <textarea
                        id="description"
                        name="description"
                        rows="4"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"
                        v-model="form.description"></textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-medium">Image</label>
                    <input
                        type="file"
                        id="image"
                        name="image"
                        class="mt-1 block w-full border border-gray-300 rounded-lg file:px-4 file:py-2 file:bg-blue-500 file:text-white file:border-none file:rounded-lg hover:file:bg-blue-600"
                        @input="getFile">
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>
</template>