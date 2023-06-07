<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import List from './Partials/List.vue';

defineProps({
    tasks: {
        type: Object
    },
    statuses: {
        type: Object
    }
});

const getListName = (status) => {
    if(status === 1){
        return "Pending";
    }else if(status === 2){
        return "In Progress";
    }else{
        return "Completed";
    }
}

</script>

<template>
    <Head title="Tasks" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tasks</h2>
        </template>

        <div class="flex justify-center">
            <div v-for="(status, index) in statuses" :key="index" class="max-w-7xl">
                <List :list="getListName(status.status)" :status="status.status" :tasks="tasks" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
