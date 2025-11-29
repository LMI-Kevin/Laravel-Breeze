<script setup>
import AppLayout from '@/Pages/Layouts/AppLayout.vue'
import { useForm } from '@inertiajs/vue3'

defineOptions({
    layout: AppLayout
})

const props = defineProps({
    contract: Array
})

const form = useForm({
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

const submitForm = () => {
    form.post(route('store-post'));
}

</script>
<template>
    <div class="m-6 p-6 shadow-md flex w-1/2">
        <form class="w-full" @submit.prevent="submitForm">
            <div class="w-full">
                <label class="w-full">PWP:</label>
                <input type="text" class="w-full" v-model="form.pwp" disabled />
            </div>

            <div class="w-full">
                <label class="w-full">Name:</label>
                <input type="text" class="w-full" v-model="form.name" />
            </div>

            <div class="w-full">
                <label class="w-full">Tiktok Username:</label>
                <input type="text" class="w-full" v-model="form.tiktok" />
            </div>

            <div class="w-full">
                <label class="w-full">Signed MOA:</label>
                <input type="text" class="w-full" v-model="form.moa" />
            </div>

            <div v-for="(post, index) in props.contract[0].number_of_posts">
                <div class="w-full">
                    <label class="w-full">Posting:</label>
                    <input type="text" class="w-full" v-model="form.posting[index].posting" />
                </div>

                <div class="w-full">
                    <label class="w-full">Date Posted:</label>
                    <input type="date" class="w-full" v-model="form.posting[index].date_posted" />
                </div>
            </div>
            <button class="">Add Post</button>
        </form>
    </div>
</template>