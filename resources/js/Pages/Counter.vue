<script setup>
import { ref } from 'vue';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';
import Button from '@/Components/Button.vue';

defineProps({
    initialCount: Number,
});

const count = ref(0);

const increment = () => {
    count.value++;
};
</script>

<template>
    <DefaultLayout>
        <div class="counter-container">
            <h2>Counter: {{ count }}</h2>
            <Button @click="increment">Tambah</Button>
        </div>
    </DefaultLayout>
</template>

<style scoped>
.counter-container {
    text-align: center;
}
</style>
