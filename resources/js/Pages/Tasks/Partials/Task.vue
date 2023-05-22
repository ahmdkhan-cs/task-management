<script setup>
defineProps({
    task: {
        type: Object
    }
})

const formatDate = (d) => {
    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    const date = new Date(d);
    return `${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}`;
}
</script>

<template>
    <div class="max-w-lg my-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="px-6 my-3 text-gray-900 flex justify-between align-center">
                <p class="font-bold cursor-pointer">{{ task.title }}</p>
                <font-awesome-icon :class="{
                        'text-red-500' : task.priority === 3, 
                        'text-yellow-500' : task.priority === 2, 
                        'text-green-500' : task.priority === 1, 
                    }" icon="fa-solid fa-flag" />
            </div>
            <div class="px-6 my-3 text-gray-700 text-base">
                <p>{{ task.project.project_name }}</p>
            </div>
            <hr>
            <div class="px-6 my-3 text-gray-700 text-sm">
                <p class="text-right"><span class="text-gray_900 font-bold">Due Date:</span> {{ formatDate(task.due_date) }}</p>
            </div>
            <hr>
        </div>
    </div>
</template>
