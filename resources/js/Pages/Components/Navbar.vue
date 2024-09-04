<template>
  <nav :class="['bg-gray-900 p-4 shadow-lg transition-transform duration-300 ease-in-out', { 'translate-y-[-100%]': hideNav }]" ref="navbar">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between">
      <!-- Logo -->
      <div class="logo flex-shrink-0 mr-auto">
        <img src="/media/SociaLenzz.png" alt="SociaLens Logo" class="gambar h-6 w-auto" />
      </div>

      <!-- Navbar Links -->
      <div class="flex space-x-8 items-center mx-auto">
        <Link
          class="nav-button"
          :href="route('main')"
          :class="{ active: activeButton === 'Main' }"
          @click="setActiveButton('Main')"
        >
          Main
        </Link>
        <Link
          class="nav-button"
          :href="route('socialdata')"
          :class="{ active: activeButton === 'SocialData' }"
          @click="setActiveButton('SocialData')"
        >
          Social Data
        </Link>
        <Link
          class="nav-button"
          :href="route('analysis')"
          :class="{ active: activeButton === 'Analysis' }"
          @click="setActiveButton('Analysis')"
        >
          Analysis 
        </Link>
        <Link
          class="nav-button"
          :href="route('about')"
          :class="{ active: activeButton === 'About' }"
          @click="setActiveButton('About')"
        >
          About Us
        </Link>
      </div>

      <!-- Theme Toggle Dropdown -->
      <div class="relative group ml-auto">
        <button class="text-white hover:text-gray-400 transition flex items-center transform hover:scale-110">
          <i :class="themeIcon" class="fas fa-lg"></i>
        </button>
        <div class="absolute right-0 top-full mt-1 w-40 bg-gray-800 text-white rounded-lg shadow-lg z-10 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out">
          <button @click="() => setTheme('light')" class="flex items-center px-2 py-2 w-full hover:bg-gray-700 text-xs">
            <i class="fas fa-sun mr-2"></i> Light
          </button>
          <button @click="() => setTheme('dark')" class="flex items-center px-2 py-2 w-full hover:bg-gray-700 text-xs">
            <i class="fas fa-moon mr-2"></i> Dark
          </button>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { Link } from '@inertiajs/vue3';

const isDarkMode = ref(false);
const hideNav = ref(false);
const lastScrollY = ref(0);
const activeButton = ref('');

// Menyimpan state tombol yang aktif
const setActiveButton = (button) => {
  activeButton.value = button;
};

const setTheme = (theme) => {
  isDarkMode.value = theme === 'dark';
  document.body.classList.toggle('dark-mode', isDarkMode.value);
};

const themeIcon = computed(() => {
  return isDarkMode.value ? 'fas fa-moon' : 'fas fa-sun';
});

const handleScroll = () => {
  const currentScrollY = window.scrollY;
  hideNav.value = currentScrollY > lastScrollY.value && currentScrollY > 100;
  lastScrollY.value = currentScrollY;
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
nav {
  top: 0;
  left: 0;
  right: 0;
  position: sticky;
  z-index: 50;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Menambahkan shadow pada navbar */
  transition: transform 0.3s ease-in-out; /* Transisi halus saat navbar menyembunyikan */
}

.logo img {
  max-height: 1.5rem; /* Ukuran logo yang lebih kecil */
}

body:not(.dark-mode) {
  background-color: #f9fafb;
  color: #1f2937;

}

body.dark-mode {
  background-color: #1f2937;
  color: #f9fafb;
}

.nav-button {
  position: relative;
  padding: 0.75rem 1.5rem;
  border-radius: 0.375rem;
  font-size: 1.125rem;
  font-weight: 700;
  color: #d1d5db;
  background-color: transparent;
  overflow: hidden;
  transition: color 0.3s ease, background-color 0.3s ease;
}

.nav-button::before {
  content: '';
  position: absolute;
  bottom: 0px; /* Jarak antara teks dan garis */
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 3px; /* Ketebalan garis */
  background-color: #fbbf24; /* Warna garis */
  border-radius: 1.5px; /* Membuat ujung garis melengkung */
  transition: width 0.3s ease;
}

.nav-button:hover::before,
.nav-button.active::before {
  width: 70%; /* Sesuaikan lebar garis dengan panjang teks */
}

.nav-button:hover,
.nav-button.active {
  color: #ffffff; /* Warna teks saat tombol dihover atau aktif */
  background-color: transparent;
}

.hidden {
  display: none !important;
}
</style>
