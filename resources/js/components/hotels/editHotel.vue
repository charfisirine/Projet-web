<template>
    <div>
      <!-- Titre -->
      <h3 class="text-center mt-4 mb-4">Modifier hotel</h3>
  
      <!-- Formulaire -->
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form @submit.prevent="updateHotel" class="border p-4">
        
            <div class="mb-3">
              <label for="nomhotel" class="form-label">Nom Hotel</label>
              <input type="text" class="form-control" v-model="hotel.nomhotel">
            </div>

            <div class="mb-3">
              <label for="imagehotel" class="form-label">Image Hotel</label>
              <input type="text" class="form-control" v-model="hotel.imagehotel">
            </div>
           
            <div class="mb-3">
              <label for="description" class="form-label">Description </label>
              <input type="text" class="form-control" v-model="hotel.description">
            </div>
  
            <div class="mb-3">
              <label for="numtelephone" class="form-label">Numéro de téléphone</label>
              <input type="number" class="form-control" v-model="hotel.numtelephone">
            </div>

            <div class="mb-3">
              <label for="adresse" class="form-label">Adresse</label>
              <input type="text" class="form-control" v-model="hotel.adresse">
            </div>
         
            <div class="mb-3">
              <label for="prixnuit" class="form-label">Prix par nuit</label>
              <input type="number" class="form-control" id="prixnuit" v-model="hotel.prixnuit">
            </div>
  
            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import axios from 'axios';
  import { useRouter, useRoute } from 'vue-router';
  import { ref, onMounted } from 'vue';
  
  const router = useRouter();
  const route = useRoute();
  const hotel = ref({});
  
  const fetchHotel = async () => {
    try {
      const response = await axios.get(`http://localhost:8000/api/hotels/${route.params.id}`);
      hotel.value = response.data;
    } catch (error) {
      console.error(error);
    }
  };
  
  const updateHotel = async () => {
    try {
      await axios.patch(`http://localhost:8000/api/hotels/${route.params.id}`, hotel.value);
      router.push('/listhotel');
    } catch (error) {
      console.error(error);
    }
  };
  
  onMounted(async () => {
    await fetchHotel();
  });
  </script>
  