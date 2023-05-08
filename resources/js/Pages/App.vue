<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import App from '@/Components/App.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>

                <h2 class="font-semibold text-xl text-white">
                Apps
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <App />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
