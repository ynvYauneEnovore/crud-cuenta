<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import New from '@/Components/New.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>

                <h2 class="font-semibold text-xl text-white">
                new :
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <New />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
