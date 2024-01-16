<template>
    <div>
      <!-- Titre -->
      <h3 class="text-center mt-4 mb-4">Modifier Réservation</h3>

      <!-- Formulaire -->

      <div class="row justify-content-center register-w3 ">
        <div class="col-md-6">
          <form @submit.prevent="updateReservation" class="border p-4 form-background">
            <div class="row">
                            <div class="col-lg-6 form-group">
                        <label for="hotelID" class="form-label">Nom hotel</label>
                        <select class="form-control" id="hotelID" v-model="reservation.hotelID" required="">
                        <option v-for="hotel in hotels" :key="hotel.id" :value="hotel.id">{{ hotel.nomhotel }}</option>
                        </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-select" id="type" v-model="reservation.type" required="">
                                <option value="Simple">Simple</option>
                                <option value="Double">Double</option>
                                <option value="Suite">Suite</option>
                                <option value="Familiale">Familiale</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" placeholder="Nom" v-model="reservation.nom" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="prenom" class="form-label">Prenom</label>
                                 <input type="text" class="form-control" id="prenom" placeholder="Prenom" v-model="reservation.prenom" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" v-model="reservation.email" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="numero_tel" class="form-label">Numero telephone</label>
                                <input type="number" class="form-control" id="numero_tel" placeholder="Phone Number" v-model="reservation.numero_tel" required="">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group date-plu">
                                <label for="date_debut" class="form-label">Date Debut</label>
                                <input type="date" class="form-control" id="date_debut" required="" v-model="reservation.date_debut">
                            </div>
                            <div class="col-lg-6 form-group date-plu">
                                <label for="date_fin" class="form-label">Date Fin</label>
                                <input type="date" class="form-control" id="date_fin" required="" v-model="reservation.date_fin">
                            </div>

                        </div>
                     
                        <div class="col-12 form-group">
                            <label for="nombre_personnes" class="form-label">Nombre personnes</label>
                            <input type="number" class="form-control" id="nombre_personnes" v-model="reservation.nombre_personnes">
                        </div>

                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" v-model="reservation.message"></textarea>
                        </div> <br>
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
  const reservation = ref({});
  const hotels = ref([]);

  const fetchHotels = async () => {
    try {
      const response = await axios.get("http://localhost:8000/api/hotels");
      hotels.value = response.data;
    } catch (error) {
      console.error("Erreur lors de la récupération de la liste des hôtels", error);
    }
  };

  const fetchReservation = async () => {
    try {
      const response = await axios.get(`http://localhost:8000/api/reservations/${route.params.id}`);
      reservation.value = response.data;
    } catch (error) {
      console.error(error);
    }
  };

  const updateReservation = async () => {
    try {
      await axios.patch(`http://localhost:8000/api/reservations/${route.params.id}`, reservation.value);
      router.push('/listereservation');
    } catch (error) {
      console.error(error);
    }
  };

  onMounted(async () => {
    await fetchHotels();
    await fetchReservation();
  });
  </script>
  <style scoped>
  
  
  .register-w3 {
    background: url('../../../assets/images/mer.jpg') center center/cover no-repeat;
    padding: 120px; /* Ajustez la valeur de la marge intérieure selon vos besoins */

}
 
   </style>
