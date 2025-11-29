<script setup>
import AppLayout from '@/Pages/Layouts/AppLayout.vue'
import AddPosting from '@/Pages/AddPosting.vue'
import { useForm, Link } from '@inertiajs/vue3'

defineOptions({
    layout: AppLayout
})

const props = defineProps({
    contract: Array,
    brands: Array,
    details: Array,
    posts: Array
})

const contactForm = useForm({
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

const addForm = useForm({
    pwp: props.contract[0].pwp,
    detail: props.contract[0].detail_name,
    name: '',
    tiktok: '',
    moa: '',
    posting: Array.from({ length: props.contract[0].number_of_posts }, () => ({
        posting: '',
        date_posted: '',
    }))
})

const addPost = () => {
    addForm.post(route('store-post'), {
        onSuccess: () => {
            addPost.reset()
        }
    });
}

console.log(props.posts.length)

</script>
<template>
    <div class="w-full">
        <div class="m-6 p-6 shadow-md">
            <form>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label>PWP:</label>
                        <input type="text" v-model="contactForm.pwp" class="w-full rounded" />
                    </div>
    
                    <div class="flex flex-col">
                        <label>Brand:</label>
                        <select v-model="contactForm.brand" class="rounded">
                            <option v-for="brand in brands" :value="brand.id" >{{ brand.brand }}</option>
                        </select>
                    </div>
                </div>
    
                <div class="grid grid-cols-2 gap-4 mt-3">
                    <div class="flex flex-col">
                        <label>Details:</label>
                        <select v-model="contactForm.details" class="rounded">
                            <option v-for="detail in details" :value="detail.id" >{{ detail.detail }}</option>
                        </select>
                    </div>
    
                    <div class="flex flex-col">
                        <label>Name:</label>
                        <input type="text" v-model="contactForm.name" class="w-full rounded" />
                    </div>
                </div>
    
                <div class="grid grid-cols-2 gap-4 mt-3">
                    <div class="flex flex-col">
                        <label>Start Date:</label>
                        <input type="date" v-model="contactForm.start_date" class="w-full rounded" />
                    </div>
    
                    <div class="flex flex-col">
                        <label>End Date:</label>
                        <input type="date" v-model="contactForm.end_date" class="w-full rounded" />
                    </div>
                </div>
    
                <div class="flex flex-col mt-3">
                    <label>Deliverables:</label>
                    <textarea class="rounded" v-model="contactForm.deliverables"></textarea>
                </div>
    
                <div class="grid grid-cols-2 gap-4 mt-3">
                    <div class="flex flex-col">
                        <label>Terms:</label>
                        <input type="text" class="rounded" v-model="contactForm.terms" />
                    </div>
        
                    <div class="flex flex-col">
                        <label>Amount:</label>
                        <input type="number" class="rounded" v-model="contactForm.amount" />
                    </div>
                </div>
    
                <div class="grid grid-cols-2 gap-4 mt-3">
                    <div class="flex flex-col">
                        <label>Number of KOLs:</label>
                        <input type="number" class="rounded" v-model="contactForm.number_of_kols" />
                    </div>
                    
                    <div class="flex flex-col">
                        <label>Number of Posts:</label>
                        <input type="number" class="rounded" v-model="contactForm.number_of_posts" />
                    </div>
                </div>
    
                <div class="grid grid-cols-2 gap-4 mt-3">
                    <div class="flex flex-col">
                        <label>Status:</label>
                        <input type="text" v-model="contactForm.status" class="w-full rounded" />
                    </div>
    
                    <div class="flex flex-col">
                        <label>Date Fulfilled:</label>
                        <input type="date" v-model="contactForm.date_fulfilled" class="w-full rounded" />
                    </div>
                </div>
    
                <div class="grid grid-cols-2 gap-4 mt-3">
                    <div class="flex flex-col">
                        <label>Date Forwarded:</label>
                        <input type="date" v-model="contactForm.date_forwarded" class="w-full rounded" />
                    </div>
    
                    <div class="flex flex-col">
                        <label>Remarks:</label>
                        <input type="text" v-model="contactForm.remarks" class="w-full rounded" />
                    </div>
                </div>
            </form>
        </div>
        
        <div class="flex">
            <!-- <AddPosting /> -->
            <div class="w-1/3 m-6 p-6 shadow-md">
                <form class="w-full" @submit.prevent="addPost">
                    <div class="w-full">
                        <label class="w-full">PWP:</label>
                        <input type="text" class="w-full" v-model="addForm.pwp" disabled />
                    </div>
        
                    <div class="w-full">
                        <label class="w-full">Name:</label>
                        <input type="text" class="w-full" v-model="addForm.name" />
                    </div>
        
                    <div class="w-full">
                        <label class="w-full">Tiktok Username:</label>
                        <input type="text" class="w-full" v-model="addForm.tiktok" />
                    </div>
        
                    <div class="w-full">
                        <label class="w-full">Signed MOA:</label>
                        <input type="text" class="w-full" v-model="addForm.moa" />
                    </div>
        
                    <div v-for="(post, index) in props.contract[0].number_of_posts">
                        <div class="w-full">
                            <label class="w-full">Posting:</label>
                            <input type="text" class="w-full" v-model="addForm.posting[index].posting" />
                        </div>
        
                        <div class="w-full">
                            <label class="w-full">Date Posted:</label>
                            <input type="date" class="w-full" v-model="addForm.posting[index].date_posted" />
                        </div>
                    </div>
                    <button class="mt-4 p-2 bg-gray-300 rounded-full">Add Post</button>
                </form>
            </div>

            <div class="w-2/3 m-6 p-6 shadow-md">
                <table class="table-fixed w-full border-collapse border border-gray-300 overflow-hidden">
                    <thead>
                        <tr>
                            <th class="p-2 border border-gray-300">Name</th>
                            <th class="p-2 border border-gray-300">Tiktok Username</th>
                            <th class="p-2 border border-gray-300">Signed MOA</th>
                            <th class="p-2 border border-gray-300">Posting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="posting in props.posts">
                            <td class="p-2 border border-gray-300">{{ posting.name }}</td>
                            <td class="p-2 border border-gray-300">{{ posting.tiktok }}</td>
                            <td class="p-2 border border-gray-300 truncate">{{ posting.moa }}</td>
                            <td class="p-2 border border-gray-300">{{ posting.posting }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>