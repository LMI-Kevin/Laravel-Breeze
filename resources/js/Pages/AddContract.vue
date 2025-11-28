<script setup>
import AppLayout from '@/Pages/Layouts/AppLayout.vue'
import { useForm, router } from '@inertiajs/vue3'

defineOptions({
    layout: AppLayout,
})

const props = defineProps({
    brands: Array,
    details: Array
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

const submitContract = () => {
    form.post(route('submit-contract'))
}

</script>
<template>
    <div class="m-6 p-6 rounded shadow-md">
        <h1 class="text-2xl font-bold">Add Contract</h1>
        <form class="mt-3" @submit.prevent="submitContract">
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label class="">PWP:</label>
                    <input type="text" class="rounded" v-model="form.pwp" />
                </div>
                
                <div class="flex flex-col">
                    <label class="">Brand:</label>
                    <select class="rounded" v-model="form.brand">
                        <option></option>
                        <option v-for="brand in brands" :value="brand.id">{{ brand.brand }}</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Details</label>
                    <select class="rounded" v-model="form.details">
                        <option></option>
                        <option v-for="detail in details" :value="detail.id">{{ detail.detail }}</option>
                    </select>
                </div>
                
                <div class="flex flex-col">
                    <label>Name</label>
                    <input type="text" class="rounded" v-model="form.name" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Start Date</label>
                    <input type="date" class="rounded" v-model="form.start_date" />
                </div>
                
                <div class="flex flex-col">
                    <label>End Date</label>
                    <input type="date" class="rounded" v-model="form.end_date" />
                </div>
            </div>

            <div class="flex flex-col mt-3">
                <label>Deliverables</label>
                <textarea class="rounded" v-model="form.deliverables"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Terms</label>
                    <input type="text" class="rounded" v-model="form.terms" />
                </div>
    
                <div class="flex flex-col">
                    <label>Amount</label>
                    <input type="number" class="rounded" v-model="form.amount" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Number of KOLs</label>
                    <input type="number" class="rounded" v-model="form.number_of_kols" />
                </div>
                
                <div class="flex flex-col">
                    <label>Number of Posts</label>
                    <input type="number" class="rounded" v-model="form.number_of_posts" />
                </div>
            </div>

            <button class="w-full p-2 bg-gray-500 text-white rounded mt-3">Add Contract</button>
        </form>
    </div>
</template>