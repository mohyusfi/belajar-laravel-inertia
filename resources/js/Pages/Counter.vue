<script setup>
import { ref } from 'vue';
// import DemoLayout from '@/Layouts/DemoLayout.vue';
import Button from '@/Components/Button.vue';

defineProps({
    initialCount: Number,
});

// defineOptions({ layout: DefaultLayout });

const count = ref(0);

const increment = () => {
    count.value++;
};
</script>

<template>
    <Head title="Counter - ">
        <meta
            head-key="description"
            name="description"
            content="This Is description of Counter - My app"
            />
    </Head>
    <div class="counter-container">
        <h2>Counter: {{ count }}</h2>
        <Button @click="increment" type="submit" class="rounded-full mt-2">Tambah</Button>
    </div>
</template>

<style scoped>

.counter-container {
    text-align: center;
}
</style>
