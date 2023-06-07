<script setup>

defineProps({
    task: {
        type: Object
    }
});

const colors = [
    'bg-red-500',
    'bg-green-500',
    'bg-blue-500',
    'bg-orange-500',
    'bg-purple-500',
];

const getColor = (id) => {
    return colors[id - 1];
}

const formatDate = (d) => {
    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    const date = new Date(d);
    return `${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}`;
}
</script>

<template>
    <div class="w-full my-4">
        <div class="bg-white overflow-hidden shadow-md border sm:rounded-lg">
            <div class="px-6 my-3 text-gray-900 flex justify-between items-center">
                <p class="font-bold cursor-pointer">{{ task.title }}</p>
                <font-awesome-icon :class="{
                        'text-red-500' : task.priority === 3, 
                        'text-yellow-500' : task.priority === 2, 
                        'text-green-500' : task.priority === 1, 
                    }" icon="fa-solid fa-flag" />
            </div>
            <div class="px-6 my-3 text-gray-700 text-base">
                <p :class="`${getColor(task.project.id)} text-white text-center w-24 rounded-full`">{{ task.project.project_name }}</p>
            </div>
            <hr>
            <div class="flex justify-between items-center px-6 my-3 text-gray-700 text-sm">
                <div class="flex items-center gap-2">
                    <img :src="`../storage/${task.assignee.image}`" alt="assignee-img" class="w-10 h-10 rounded-full">
                    <p class="text-gray-900 font-bold">{{ task.assignee.name }}</p>
                </div>
                <p class="text-right"><span class="text-gray-900 font-bold">Due Date:</span> {{ formatDate(task.due_date) }}</p>
            </div>
            <hr>
        </div>
    </div>
</template>
