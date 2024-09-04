<template>
  <button
    v-if="isVisible"
    @click="scrollToTop"
    class="scroll-to-top fixed bottom-4 right-4 text-white p-3 rounded-full shadow-lg"
  >
    <i class="fas fa-chevron-up scroll-icon"></i>
  </button>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
const isVisible = ref(false);

const handleScroll = () => {
  isVisible.value = window.scrollY > 100;
};

const scrollToTop = () => {
  window.scrollTo({ top: 0, behavior : 'smooth' });
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
.scroll-to-top {
  width: 50px;
  height: 50px;
  background-color: #fbbf24;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}

.scroll-icon {
  color: white; /* Pastikan warna ikon tetap putih */
  opacity: 1 !important; /* Pastikan ikon tetap terlihat */
  transition: none !important; /* Hapus semua transisi */
}

.scroll-icon:hover {
  opacity: 1 !important; /* Hindari perubahan pada hover */
  color: white !important; /* Pastikan warna tidak berubah */
}

.scroll-to-top:hover .scroll-icon {
  opacity: 1 !important;
}
</style>
