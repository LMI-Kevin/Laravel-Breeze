<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    username: '',
    password: ''
})

const login = () => {
    form.post(route('login'));
}
</script>
<template>
    <h1>Login</h1>
    <form @submit.prevent="login">
        <input type="text" v-model="form.username" />
        <input type="password" v-model="form.password" />
        <button>Login</button>
    </form>
</template>