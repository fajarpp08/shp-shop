<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <!-- Navbar -->
        <Navbar />
        <!-- Navbar End -->


        <!-- Sidebar -->
        <Sidebar />
        <!-- Sidebar End-->
        <main class="p-4 md:ml-64 h-auto pt-20">

            <slot />
            <!-- slot guna nya sama seperti yield di blade.php -->
        </main>
    </div>
</template>

<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Navbar from '../Components/Navbar.vue'
import Sidebar from '../Components/Sidebar.vue'

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>