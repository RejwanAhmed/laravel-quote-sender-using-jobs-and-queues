<template>
    <AuthenticatedLayout>
        <div class="p-6">
            <h1 class="text-2xl font-bold mb-6 text-center">Subscribers List</h1>

            <div class="mx-auto max-w-4xl overflow-x-auto">
                <table class="w-full bg-white border rounded-lg shadow">
                    <thead>
                        <tr class="bg-gray-100 text-left text-sm uppercase tracking-wider text-gray-600">
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="subscriber in props.subscribers" :key="subscriber.id" class="border-t hover:bg-gray-50">
                        <td class="py-2 px-4">{{ subscriber.name }}</td>
                        <td class="py-2 px-4">{{ subscriber.email }}</td>
                        <td class="py-2 px-4">{{ formatDate(subscriber.created_at) }}</td>
                        </tr>
                        <tr v-if="props.subscribers.length === 0">
                        <td colspan="2" class="text-center py-4 text-gray-500">No subscribers found.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
  
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { defineProps } from 'vue'

const props = defineProps({
    subscribers: Array
})

const formatDate = (date) => {
  const d = new Date(date);

  const months = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];

  const day = d.getDate();
  const month = months[d.getMonth()];
  const year = d.getFullYear();

  let hours = d.getHours();
  const minutes = d.getMinutes().toString().padStart(2, '0');
  const ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12 || 12;

  return `${month} ${day}, ${year} ${hours}:${minutes} ${ampm}`;
};
</script>
  