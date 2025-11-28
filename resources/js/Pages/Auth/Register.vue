<script setup>
import { Link, useForm } from '@inertiajs/vue3'
import GuestLayout from '@/Pages/Layouts/GuestLayout.vue'

defineOptions({
    layout: GuestLayout
})

const form = useForm({
    name: '',
    username: '',
    email: '',
    password: '',
    password_confirmation: ''
})

const register = () => {
    form.post(route('register'));
}

</script>
<template>
    <div class="shadow-md p-6">
        <h1 class="text-2xl font-bold">Register</h1>
        <form @submit.prevent="register">
            <div class="my-3">
                <label>Name:</label>
                <input type="text" v-model="form.name" class="w-full rounded" />
            </div>
            
            <div class="my-3">
                <label>Username:</label>
                <input type="text" v-model="form.username" class="w-full rounded" />
            </div>
            
            <div class="my-3">
                <label>Email:</label>
                <input type="email" v-model="form.email" class="w-full rounded" />
            </div>
            
            <div class="my-3">
                <label>Password:</label>
                <input type="password" v-model="form.password" class="w-full rounded" />
            </div>

            <div class="my-3">
                <label>Password Confirmation:</label>
                <input type="password" v-model="form.password_confirmation" class="w-full rounded" />
            </div>
            
            <div>
                <button class="w-full bg-gray-700 p-2 text-white rounded">Register</button>
            </div>
        </form>
        <Link :href="route('login')" class="flex w-full justify-center bg-gray-400 text-white p-2 my-2 rounded">Login</Link>
    </div>
</template>