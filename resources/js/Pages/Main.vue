<template>
  <div class="flex flex-col min-h-screen">
    <!-- Navbar -->
    <Navbar />

    <!-- Hero Section -->
    <div class="bg-blue-950 py-16 flex-grow">
      <div class="container mx-auto flex flex-col md:flex-row items-center px-6 h-full">
        <!-- Image Section -->
        <div class="md:w-1/2 flex justify-center md:justify-start mb-10 md:mb-0">
          <img src="/media/vector_main.png" alt="Image Description" class="w-96 h-96 object-contain">
        </div>

        <!-- Description Section -->
        <div class="md:w-1/2 text-white text-center md:text-left">
          <h2 class="text-4xl md:text-5xl font-bold mb-6">Website ii</h2>
          <p class="text-base md:text-base mb-8">Website ini adalah platform digital yang dirancang untuk menampilkan, dan menganalisis data sosial dalam berbagai bentuk.mempermudah pengguna untuk memahami informasi melalui data yang mudah dipahami, seperti grafik dan diagram.</p>
          <button class="bg-orange-600 hover:bg-orange-500 text-lg font-semibold py-3 px-6 rounded">Learn More</button>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow container mx-auto p-6 mt-6">
      <!-- Additional sections or content go here -->
    </div>

    <!-- Footer -->
    <Footer />

    <!-- Scroll to Top Button -->
    <ScrollTop />
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';
import Navbar from 'Pages/Components/Navbar.vue';
import Footer from 'Pages/Components/Footer.vue';
import ScrollTop from 'Pages/Components/ScrollTop.vue';

const isDarkMode = ref(false);

const setTheme = (theme) => {
  isDarkMode.value = theme === 'dark';
  document.body.classList.toggle('dark-mode', isDarkMode.value);
};

const themeIcon = computed(() => {
  return isDarkMode.value ? 'fas fa-moon' : 'fas fa-sun';
});

defineProps({
  canLogin: {
    type: Boolean,
    default: true,
  },
});
</script>

<style scoped>
/* Ensure the page can scroll if content overflows */
html, body {
  overflow-x: hidden; /* Prevent horizontal scroll */
}

.container {
  height: 100%; /* Ensure the container takes up full height */
}
</style>
