<script setup>
import { useForm } from '@inertiajs/vue3'

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
    <h1>Register</h1>
    <form @submit.prevent="register">
        <label>Name:</label>
        <input type="text" v-model="form.name" />
        
        <label>Username:</label>
        <input type="text" v-model="form.username" />

        <label>Email:</label>
        <input type="email" v-model="form.email" />

        <label>Password:</label>
        <input type="password" v-model="form.password" />

        <label>Password Confirmation:</label>
        <input type="password" v-model="form.password_confirmation" />

        <button>Register</button>
    </form>
</template>