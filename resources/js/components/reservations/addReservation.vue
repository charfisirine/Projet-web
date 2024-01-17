<template>
    <!-- booking form -->
    <div class="register-w3 py-5">
         <div class="container py-xl-5 py-lg-3">
             <h3 class="tittle text-center text-bl font-weight-bold">Réservez-vous</h3>
             <div class="comment-top mt-5">
                 <div class="comment-bottom mobamuinfo_mail_grid_right">
                     <form class="formulaire" @submit.prevent="addReservation">
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
 
                         <router-link :to="{name: 'Payment'}" > <button type="submit" class="btn btn-outline-primary btn-reserve">Réservez</button>
                        </router-link>
                        <router-link to="/" class="btn btn-outline-danger mx-2">Cancel</router-link>
                 </form>
 
                 </div>
             </div>
         </div>
     
     </div>
     <!-- //booking form -->
 
   </template>
 
   <script setup>
   import { ref, onMounted } from "vue";
   import { useRouter } from 'vue-router';
   import axios from 'axios';
 
   const router = useRouter();
 
   const hotels = ref([]);
 
   const reservation = ref({
       hotelID: "",
       type: "",
       nom: "",
       prenom: "",
       email: "",
       numero_tel: "",
       date_debut: "",
       date_fin: "",
       chambreID: "",
       nombre_personnes: "",
       message: ""
   });
 
   const fetchHotels = async () => {
       try {
           const response = await axios.get("http://localhost:8000/api/hotels");
           hotels.value = response.data;
       } catch (error) {
           console.error("Erreur lors de la récupération de la liste des hôtels", error);
       }
   };
 
   const addReservation = async () => {
       try {
           await axios.post("http://localhost:8000/api/reservations/", reservation.value);
           router.push('/listereservation');
       } catch (err) {
           console.log(err);
       }
   };
 
   onMounted(() => {
       document.title = 'Réserver';
       fetchHotels();
   });
   </script>
 
   <style scoped>
  .btn-reserve {
     padding: 8px 12px !important;
   }
   .register-w3 {
     background: url('../../../assets/images/back.jpg') center center/cover no-repeat;
     padding: 300px; /* Ajustez la valeur de la marge intérieure selon vos besoins */
   }
   .comment-bottom{
     background: rgb(149, 197, 253);
   }
 .container{
     padding-top: 0.1px;
 }
 
   </style>
 