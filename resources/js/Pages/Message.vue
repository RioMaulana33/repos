<script>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia'; // Pastikan ini menggunakan @inertiajs/inertia
// Jika menggunakan Vue 3, ganti dengan:
// import { Inertia } from '@inertiajs/inertia-vue3';

export default {
  name: 'Message',
  setup() {
    const form = ref({
      nama: '',
      pesan: ''
    });

    const submitForm = () => {
      Inertia.post('/messages', form.value, {

        onError: (errors) => {
          console.log(errors);
        }
      });
    };

    return { form, submitForm };
  }
};
</script>


<template>
    <div>
      <h1>Formulir Pesan</h1>
      <form @submit.prevent="submitForm">
        <div>
          <label for="nama">Nama:</label>
          <input v-model="form.nama" type="text" id="nama" name="nama" required />
        </div>
        <div>
          <label for="pesan">Pesan:</label>
          <textarea v-model="form.pesan" id="pesan" name="pesan" required></textarea>
        </div>
        <button type="submit">Kirim</button>
      </form>
    </div>
  </template>

  