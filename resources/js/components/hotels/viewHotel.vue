<template>
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card border-0">
            <div class="card-body p-1">
              <div class="table-responsive">
                <table class="table table-sm align-items-center table-bordered mb-0 table-spaced">
                  <thead>
                    <tr>
                      <th class="align-middle text-center text-sm">Nom Hotel</th>
                      <th class="align-middle text-center text-sm">Image Hotel</th>
                      <th class="align-middle text-center text-sm">Description</th>
                      <th class="align-middle">Numéro de téléphone</th>
                      <th class="align-middle">Adresse</th>
                      <th class="align-middle text-center text-lg">Prix par nuit</th> <!-- Augmentation de la taille -->
                      <th class="align-middle text-center text-sm">Modifier</th>
                      <th class="align-middle text-center text-sm">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="hotel in hotels" :key="hotel.id">
                      <td class="align-middle text-center text-sm">{{ hotel.nomhotel }}</td>
                      <td class="align-middle text-center text-sm">
                        <img :src="hotel.imagehotel" alt="Image Hotel" style="max-width: 100px; max-height: 100px;">
                      </td>
                      <td class="align-middle text-center text-sm">{{ hotel.description }}</td>
                      <td class="align-middle text-center text-sm">{{ hotel.numtelephone }}</td>
                      <td class="text-xs font-weight-bold mb-0">{{ hotel.adresse }}</td>
                      <td class="align-middle text-center text-lg">{{ hotel.prixnuit }}</td>
                      <td class="text-xs font-weight-bold mb-0">
                        <router-link :to="'/edithotel/' + hotel.id" class="btn btn-warning mx-2">Modifier</router-link>
                      </td>
                      <td class="text-xs font-weight-bold mb-0">
                        <button class="btn btn-danger mx-2" @click="deleteHotel(hotel.id)">Supprimer</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  
  const hotels = ref([]);
  
  const getHotels = async () => {
    try {
      const response = await axios.get("http://localhost:8000/api/hotels");
      hotels.value = response.data;
    } catch (error) {
      console.error(error);
    }
  };
  
  onMounted(() => {
    getHotels();
  });
  
  const deleteHotel = async (id) => {
    try {
      await axios.delete(`http://localhost:8000/api/hotels/${id}`);
      getHotels();
    } catch (error) {
      console.error(error);
    }
  };
  </script>
  
  <style lang="scss" scoped>
  /* Ajout de styles pour l'espacement autour du tableau */
  .table-spaced {
    margin-top: 20px; /* Ajoute de la marge en haut du tableau */
    margin-bottom: 20px; /* Ajoute de la marge en bas du tableau */
  }
  </style>
  