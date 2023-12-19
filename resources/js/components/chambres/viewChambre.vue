<template>

    <div class="container mt-4">

      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card border-0">
            <div class="card-body p-1">
              <div class="table-responsive">
                <table class="table table-sm align-items-center table-bordered mb-0">
                  <thead>
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
                    <tr v-for="chambre in chambres" :key="chambre.id">
                      <td class="text-xs font-weight-bold mb-0">{{ chambre.type }}</td>
                      <td class="align-middle text-center text-sm">{{ chambre.Disponibilite }}</td>
                      <td class="text-xs font-weight-bold mb-0">{{ chambre.descriptionchambre }}</td>
                      <td class="align-middle text-center text-sm">{{ chambre.numchambre }}</td>
                      <td class="align-middle text-center text-sm">{{ chambre.prixnuit }}</td>
                      <td class="text-xs font-weight-bold mb-0"><button class="btn btn-warning mx-2">Modifier</button></td>
                      <td class="text-xs font-weight-bold mb-0"><button class="btn btn-danger mx-2" @click="deleteChambre(chambre.id)">Supprimer</button></td>
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
  /* Ajoutez vos styles spécifiques ici si nécessaire */
  .container {
    margin-top: 20px;
  }
  </style>
