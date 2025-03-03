<script setup>
import { computed, reactive, ref } from 'vue';
// import DemoLayout from '@/Layouts/DemoLayout.vue';
import Button from '@/Components/Button.vue';

defineProps({
    initialCount: Number,
});

// defineProps(["errors", "appName", "message", "auth"]);


// defineOptions({ layout: DefaultLayout });

const count = ref(0);
const isFocus = ref(false);
const data = reactive({
    fullName: null,
});

const increment = () => {
    count.value++;
};

const handleFocus = (event) => {
    isFocus.value = true;
    // console.log(isFocus.value);
};




// const getFullName = () => {
//     console.log(data.fullName);
//     return data.fullName;
// };
const getFullName = computed(() => {
    console.log(data.fullName);
    return data.fullName;
});
</script>

<template>

    <Head title="Counter - ">
        <meta head-key="description" name="description" content="This Is description of Counter - My app" />
    </Head>

    <div class="counter-container">
        <h2>Counter: {{ count }}</h2>
        <Button @click="increment" type="submit" class="rounded-full mt-2">Tambah</Button>
    </div>

    <form @submit.prevent="save">
        <h1 class="text-lg capitalize mb-3">FullName : {{ getFullName }}</h1>
        <label for="fullName" class="cursor-pointer">full Name</label>
        <input
            type="text"
            name="fullName"
            id="fullName"
            v-model="data.fullName"
            class="ms-2 w-[0px] transition-all duration-[.5s] rounded-md"
            :class="{'w-[200px] px-3 py-1 outline-amber-700 border-2 border-amber-700' : isFocus}"
            @focus="handleFocus">
        <br>
        <button
        type="submit"
        class="border-green-500 border-2 rounded-md px-4 py-1 cursor-pointer bg-green-300 hover:bg-green-500 transition-all duration-[.3s]"
        >save</button>
    </form>
</template>

<style scoped>
.counter-container {
    text-align: center;
}
</style>
