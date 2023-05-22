<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Task from './Partials/Task.vue';

defineProps({
    tasks: {
        type: Object
    }
});
</script>

<template>
    <Head title="Tasks" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tasks</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto">
                <Task :task="tasks"/>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
