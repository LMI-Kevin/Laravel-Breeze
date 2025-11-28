<script setup>
import AppLayout from '@/Pages/Layouts/AppLayout.vue'
import { useForm } from '@inertiajs/vue3'

defineOptions({
    layout: AppLayout,
})

const form = useForm({
    pwp: '',
    brand: '',
    details: '',
    name: '',
    start_date: '',
    end_date: '',
    deliverables: '',
    terms: '',
    amount: '',
    number_of_kols: '',
    number_of_posts: ''
})

</script>
<template>
    <div class="m-6 p-6 rounded shadow-md">
        <h1 class="text-lg font-bold">Add Contract</h1>
        <form class="mt-3">
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label class="">PWP</label>
                    <input type="text" class="" />
                </div>
                
                <div class="flex flex-col">
                    <label class="">Brand</label>
                    <select class="">
                        <option></option>
                        <option>Megan Beauty</option>
                        <option>Pretty Secret</option>
                        <option>Hairfix</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Details</label>
                    <select>
                        <option></option>
                        <option>Macro</option>
                        <option>Micro</option>
                        <option>UGC</option>
                        <option>Nano</option>
                    </select>
                </div>
                
                <div class="flex flex-col">
                    <label>Name</label>
                    <input type="text" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Start Date</label>
                    <input type="date" />
                </div>
                
                <div class="flex flex-col">
                    <label>End Date</label>
                    <input type="date" />
                </div>
            </div>

            <div class="flex flex-col mt-3">
                <label>Deliverables</label>
                <textarea></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Terms</label>
                    <input type="text" />
                </div>
    
                <div class="flex flex-col">
                    <label>Amount</label>
                    <input type="number" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Number of KOLs</label>
                    <input type="number" />
                </div>
                
                <div class="flex flex-col">
                    <label>Number of Posts</label>
                    <input type="number" />
                </div>
            </div>

            <button class="w-full p-2 bg-gray-500 text-white rounded mt-3">Add Contract</button>
        </form>
    </div>
</template>