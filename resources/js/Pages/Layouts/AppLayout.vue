<script setup>

import { Link } from '@inertiajs/vue3'

</script>
<template>
    <header>
        <div class="flex w-full bg-gray-900 text-white p-4 justify-between">
            <nav class="flex gap-3">
                <Link :href="route('dashboard')">Dashboard</Link>
                <Link :href="route('contracts')">Contracts</Link>
            </nav>
            <Link :href="route('logout')" method="POST">Logout</Link>
        </div>
    </header>
    <main>
        <div class="flex justify-center">
            <slot />
        </div>
    </main>
</template>