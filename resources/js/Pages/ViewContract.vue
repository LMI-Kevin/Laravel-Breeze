<script setup>
import AppLayout from '@/Pages/Layouts/AppLayout.vue'
import { useForm } from '@inertiajs/vue3'

defineOptions({
    layout: AppLayout
})

const props = defineProps({
    contract: Array,
    brands: Array,
    details: Array
})

const form = useForm({
    pwp: props.contract[0].pwp,
    brand: props.contract[0].brand,
    brand_name: props.contract[0].brand_name,
    details: props.contract[0].details,
    detail_name: props.contract[0].detail_name,
    name: props.contract[0].name,
    start_date: props.contract[0].start_date,
    end_date: props.contract[0].end_date,
    deliverables: props.contract[0].deliverables,
    terms: props.contract[0].terms,
    amount: props.contract[0].amount,
    number_of_kols: props.contract[0].number_of_kols,
    number_of_posts: props.contract[0].number_of_posts,
    status: props.contract[0].status,
    date_fulfilled: props.contract[0].date_fulfilled,
    date_forwarded: props.contract[0].date_forwarded,
    remarks: props.contract[0].remarks,
})

</script>
<template>
    <div class="m-6 p-6 shadow-md">
        <form>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label>PWP:</label>
                    <input type="text" v-model="form.pwp" class="w-full rounded" />
                </div>

                <div class="flex flex-col">
                    <label>Brand:</label>
                    <select v-model="form.brand" class="rounded">
                        <option v-for="brand in brands" :value="brand.id" >{{ brand.brand }}</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Details:</label>
                    <select v-model="form.details" class="rounded">
                        <option v-for="detail in details" :value="detail.id" >{{ detail.detail }}</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label>Name:</label>
                    <input type="text" v-model="form.name" class="w-full rounded" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Start Date:</label>
                    <input type="date" v-model="form.start_date" class="w-full rounded" />
                </div>

                <div class="flex flex-col">
                    <label>End Date:</label>
                    <input type="date" v-model="form.end_date" class="w-full rounded" />
                </div>
            </div>

            <div class="flex flex-col mt-3">
                <label>Deliverables:</label>
                <textarea class="rounded" v-model="form.deliverables"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Terms:</label>
                    <input type="text" class="rounded" v-model="form.terms" />
                </div>
    
                <div class="flex flex-col">
                    <label>Amount:</label>
                    <input type="number" class="rounded" v-model="form.amount" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Number of KOLs:</label>
                    <input type="number" class="rounded" v-model="form.number_of_kols" />
                </div>
                
                <div class="flex flex-col">
                    <label>Number of Posts:</label>
                    <input type="number" class="rounded" v-model="form.number_of_posts" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Status:</label>
                    <input type="text" v-model="form.status" class="w-full rounded" />
                </div>

                <div class="flex flex-col">
                    <label>Date Fulfilled:</label>
                    <input type="date" v-model="form.date_fulfilled" class="w-full rounded" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="flex flex-col">
                    <label>Date Forwarded:</label>
                    <input type="date" v-model="form.date_forwarded" class="w-full rounded" />
                </div>

                <div class="flex flex-col">
                    <label>Remarks:</label>
                    <input type="text" v-model="form.remarks" class="w-full rounded" />
                </div>
            </div>
        </form>
    </div>
</template>