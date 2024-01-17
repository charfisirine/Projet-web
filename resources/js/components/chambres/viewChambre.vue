<template>
    <div class="background-container d-flex align-items-center">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card border-0">
              <div class="card-body p-1">
                <div class="table-responsive">
                  <table class="table table-bordered mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="align-middle">Type</th>
                        <th class="align-middle">Disponibilité</th>
                        <th class="align-middle">Description Chambre</th>
                        <th class="align-middle">Numero Chambre</th>
                        <th class="align-middle">Prix par nuit</th>
                        <th class="align-middle text-center text-sm">Modifier</th>
                        <th class="align-middle text-center text-sm">Supprimer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="(chambre, index) in chambres" :key="chambre.id" :class="{ 'table-primary': index % 2 === 0, 'table-light': index % 2 !== 0 }">
                        <td class="text-xs font-weight-bold mb-0">{{ chambre.type }}</td>
                        <td class="align-middle text-center text-sm">{{ chambre.Disponibilite }}</td>
                        <td class="text-xs font-weight-bold mb-0">{{ chambre.descriptionchambre }}</td>
                        <td class="align-middle text-center text-sm">{{ chambre.numchambre }}</td>
                        <td class="align-middle text-center text-sm">{{ chambre.prixnuit }}</td>
                        <td class="text-xs font-weight-bold mb-0">
                          <router-link :to="'/editchambre/' + chambre.id">
                            <i class="bi bi-pencil-square text-warning"></i>
                          </router-link>
                        </td>
                        <td class="text-xs font-weight-bold mb-0">
                          <button @click="deleteChambre(chambre.id)" class="btn btn-danger mx-2">
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

  const chambres = ref([]);

  const getchambres = async () => {
    try {
      const response = await axios.get("http://localhost:8000/api/chambres");
      chambres.value = response.data;
      console.log(chambres.value);
    } catch (error) {
      console.error(error);
    }
  };

  onMounted(() => {
    getchambres();
  });

  const deleteChambre = async (id) => {
    try {
      await axios.delete(`http://localhost:8000/api/chambres/${id}`);
      getchambres();
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
