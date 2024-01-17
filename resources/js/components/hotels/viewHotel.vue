<template>
    <div class="background-container d-flex align-items-center">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card border-0">
              <div class="card-body p-1">
                <div class="table-responsive">
                  <table class="table table-bordered mb-0 table-spaced">
                    <thead class="thead-light">
                      <tr>
                        <th class="align-middle text-center">Nom Hotel</th>
                        <th class="align-middle text-center">Image Hotel</th>
                        <th class="align-middle text-center">Description</th>
                        <th class="align-middle text-center">Numéro de téléphone</th>
                        <th class="align-middle text-center">Adresse</th>
                        <th class="align-middle text-center">Prix par nuit</th>
                        <th class="align-middle text-center">Modifier</th>
                        <th class="align-middle text-center">Supprimer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="(hotel, index) in hotels" :key="hotel.id" :class="{ 'table-primary': index % 2 === 0, 'table-light': index % 2 !== 0 }">
                        <td class="align-middle text-center">{{ hotel.nomhotel }}</td>
                        <td class="align-middle text-center">
                          <img :src="hotel.imagehotel" alt="Image Hotel" class="img-thumbnail">
                        </td>
                        <td class="align-middle text-center">{{ hotel.description }}</td>
                        <td class="align-middle text-center">{{ hotel.numtelephone }}</td>
                        <td class="align-middle text-center">{{ hotel.adresse }}</td>
                        <td class="align-middle text-center">{{ hotel.prixnuit }}</td>
                        <td class="align-middle text-center">
                          <router-link :to="'/edithotel/' + hotel.id">
                            <i class="bi bi-pencil-square text-warning"></i>
                          </router-link>
                        </td>
                        <td class="align-middle text-center">
                          <button @click="deleteHotel(hotel.id)" class="btn btn-danger btn-sm mx-2">
                            <i class="bi bi-trash"></i>
                          </button>
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
  /* Resetting default body margin and padding */
  body {
    margin: 0;
    padding: 0;
  }

  /* Adjusting styles for the background container */
  .background-container {
    height: 100vh;
    background-image: url('../../../assets/images/back.jpg');
    background-size: cover;
    background-position: center;
  }

  /* Centering the content vertically using flexbox */
  .d-flex {
    display: flex;
  }

  .align-items-center {
    align-items: center;
  }

  /* Style for the images in the "Image Hotel" column */
  .img-thumbnail {
    max-width: 100px;
    max-height: 100px;
  }

  /* Additional adjustments specific to Bootstrap or other styles can be added here */

  /* Style for alternating row colors */
  .table-primary {
    background-color: #cce5ff;
  }

  .table-light {
    background-color: #f2f2f2;
  }

  /* Style for icons */
  .bi {
    font-size: 1.5rem;
    vertical-align: middle;
  }
  </style>
