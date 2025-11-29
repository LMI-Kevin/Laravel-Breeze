<script setup>
import AppLayout from '@/Pages/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

defineOptions({
    layout: AppLayout
})

const props = defineProps({
    contracts: Array
})

</script>
<template>
    <div class="m-6 p-6 shadow-md w-full">
        <Link :href="route('add-contract')" class="p-2 bg-gray-200 rounded-full">Add Contracts</Link>

        <table class="min-w-full table-auto mt-3">
            <thead>
                <tr class="bg-gray-700 text-white">
                    <th>PWP</th>
                    <th>Brand</th>
                    <th>Detail</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Date Fulfilled</th>
                    <th>Date Forwarded</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="contract in contracts" class="even:bg-gray-100 text-center hover:bg-gray-200">
                    <td><Link :href="route('view-contract', { 'contractId': contract.id })">{{ contract.pwp }}</Link></td>
                    <td>{{ contract.brand_name }}</td>
                    <td>{{ contract.detail_name }}</td>
                    <td>{{ contract.name }}</td>
                    <td>{{ contract.start_date }}</td>
                    <td>{{ contract.end_date }}</td>
                    <td>{{ contract.date_fulfilled }}</td>
                    <td>{{ contract.date_forwarded }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>