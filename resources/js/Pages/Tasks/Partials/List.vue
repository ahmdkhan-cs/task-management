<script setup>
import { computed, onMounted } from 'vue';
import Task from './Task.vue';
const props = defineProps({
    tasks: {
        type: Object
    },
    list: {
        type: String
    },
    status: {
        type: Number
    }
});

const filteredTasks = computed(() => {
    return props.tasks.filter((task) => {
        return task.status === props.status;
    });
});


</script>

<template>
    <div class="max-w-md my-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <p class="bg-gray-500 text-white text-center w-36 rounded-full mb-4">{{ list }}</p>
            <hr>
            <div class="h-96 overflow-y-scroll tasks-container">
                <Task v-for="(task, index) in filteredTasks" :key="index" :task="task" />
            </div>
        </div>
    </div>
</template>
