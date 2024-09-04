<template>
    <div class="container">
      <Navbar />
      <div class="content">
        <p>Kopok</p>
      </div>
      <Footer />
      <ScrollTop />
    </div>
  </template>
  
  <script setup>
  import Navbar from 'Pages/Components/Navbar.vue';
  import Footer from 'Pages/Components/Footer.vue';
  import ScrollTop from 'Pages/Components/ScrollTop.vue';
  </script>
  
  <style scoped>
  .container {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Memastikan container setidaknya setinggi viewport */
  }
  
  .content {
    flex: 1; /* Membuat konten mengisi ruang yang tersisa antara Navbar dan Footer */
    margin-bottom: 20rem;
  }
  
  footer {
    padding: 1rem; /* Sesuaikan padding footer */
    text-align: center; /* Tengah footer */
  }
  </style>
  