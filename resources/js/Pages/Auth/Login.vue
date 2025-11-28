<script setup>
import { Link, useForm } from '@inertiajs/vue3'
import GuestLayout from '@/Pages/Layouts/GuestLayout.vue'

defineOptions({
    layout: GuestLayout
})

const form = useForm({
    username: '',
    password: ''
})

const login = () => {
    form.post(route('login'));
}
</script>
<template>
    <div class="shadow-md p-6">
        <h1 class="text-2xl font-bold">Login</h1>
        <form @submit.prevent="login" class="my-2">
            <div class="my-3">
                <label>Username</label>
                <input type="text" v-model="form.username" class="w-full rounded" />
            </div>
            <div class="my-3">
                <label>Password</label>
                <input type="password" v-model="form.password" class="w-full rounded" />
            </div>
            <div>
                <button class="w-full bg-gray-700 p-2 rounded text-white">Login</button>
            </div>
        </form>
        <Link :href="route('register')" class="bg-gray-400 p-2 flex w-full justify-center rounded text-white">Register</Link>
    </div>
</template>