<template>
    <AuthenticatedLayout>
        <div class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                v-for="quote in props?.quotes"
                :key="quote.id"
                class="bg-white rounded-2xl shadow-md p-4 relative flex flex-col justify-between"
            >
                <p class="text-gray-800 text-lg font-medium mb-4">
                "{{ quote.quote }}"
                </p>
                <div class="text-sm text-gray-500 mb-2">
                — {{ quote.author || 'Unknown' }}
                </div>
        
                <div class="mt-auto text-right">
                <button
                    @click="sendQuote(quote.id)"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm"
                >
                    Send to Subscribers
                </button>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
  
<script setup>
import axios from 'axios'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

// ✅ Use object syntax for props
const props = defineProps({
    quotes: Object
});

const sendQuote = async (id) => {
    try {
        await axios.post(`/quotes/${id}/send`)
        alert('Quote sent successfully!')
    } catch (err) {
        console.error(err)
        alert('Something went wrong!')
    }
}
</script>
  