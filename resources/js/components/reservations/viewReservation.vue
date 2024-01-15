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
                      <th class="align-middle">Nom hotel </th>
                      <th class="align-middle">type</th>
                      <th class="align-middle">Nom</th>
                      <th class="align-middle">Prenom</th>
                      <th class="align-middle">Email</th>
                      <th class="align-middle">Numero telephone</th>
                      <th class="align-middle">Date Debut</th>
                      <th class="align-middle">Date Fin</th>
                      <th class="align-middle">Nombre personnes</th>
                      <th class="align-middle">Message</th>
                      <th class="align-middle text-center text-sm">Modifier</th>
                      <th class="align-middle text-center text-sm">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="reservation in reservations" :key="reservation.id">
                      <td class="text-xs font-weight-bold mb-0">{{ reservation.hotelID }}</td>
                      <td class="text-xs font-weight-bold mb-0">{{ reservation.type }}</td>
                      <td class="align-middle text-center text-sm">{{ reservation.nom }}</td>
                      <td class="align-middle text-center text-sm">{{ reservation.prenom }}</td>
                      <td class="align-middle text-center text-sm">{{ reservation.email }}</td>
                      <td class="align-middle text-center text-sm">{{ reservation.numero_tel }}</td>
                      <td class="align-middle text-center text-sm">{{ reservation.date_debut }}</td>
                      <td class="align-middle text-center text-sm">{{ reservation.date_fin }}</td>
                      <td class="align-middle text-center text-sm">{{ reservation.nombre_personnes }}</td>
                      <td class="align-middle text-center text-sm">{{ reservation.message }}</td>
                      <td class="text-xs font-weight-bold mb-0">  <router-link :to="'/editreservation/' + reservation.id" class="btn btn-warning mx-2">Modifier</router-link></td>
                      <td class="text-xs font-weight-bold mb-0"><button class="btn btn-danger mx-2" @click="deleteReservation(reservation.id)">Supprimer</button></td>
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

  const reservations = ref([]);

  const getreservations = async () => {
    try {
      const response = await axios.get("http://localhost:8000/api/reservations");
      reservations.value = response.data;
      console.log(reservation.value);
    } catch (error) {
      console.error(error);
    }
  };

  onMounted(() => {
    getreservations();
  });

  const deleteReservation = async (id) => {
    try {
      await axios.delete(`http://localhost:8000/api/reservations/${id}`);
      getreservations();
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
