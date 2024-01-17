<template>
    <form @submit.prevent="handleSubmit">
      <div class="card" style="width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">
            Montant à payer : {{ calculateTotalAmount() }} TND
          </h5>
          <br />
          <div class="card-text">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email" v-model="reservation.email" />
            </div>
            <br />
          </div>
          <div id="card-element"></div>
          <br />
          <button type="submit" class="btn btn-success">Procéder au paiement</button>
        </div>
      </div>
    </form>
  </template>
  
  <script setup>
  import { onMounted, ref } from 'vue';
  import { loadStripe } from '@stripe/stripe-js';
  import { useRouter } from 'vue-router';
  import axios from 'axios';
  
  const stripePromise = loadStripe('pk_test_51OM8VnKvVARc1yIHLzua9SzA2NWgdUjU5ZIR4D37sJ5HCeUDsFrsBq5xUjLBHHyWnrWegQ1vEFOWG18CPSYGfC8W00Ew2TlkoQ');
  const stripe = ref(null);
  let cardElement;
  
  const reservation = ref({
    hotelID: "",
    type: "",
    nom: "",
    prenom: "",
    email: "",
    numero_tel: "",
    date_debut: "",
    date_fin: "",
    nombre_personnes: "",
    message: ""
  });
  
  const hotels = ref([]);
  
  const router = useRouter();
  
  onMounted(async () => {
    stripe.value = await stripePromise;
    const elements = stripe.value.elements();
    cardElement = elements.create('card');
    cardElement.mount('#card-element');
    fetchHotels();
  });
  
  const calculateTotalAmount = () => {
    const selectedHotel = getSelectedHotel();
    const prixnuit = selectedHotel ? selectedHotel.prixnuit : 0;
    const nombrePersonnes = reservation.nombre_personnes;
  
    if (isNaN(prixnuit) || isNaN(nombrePersonnes)) {
      return 10;
    }
  
    // Assuming date_debut and date_fin are valid Date objects
    const dateDebut = new Date(reservation.date_debut);
    const dateFin = new Date(reservation.date_fin);
  
    // Calculate the number of nights
    const oneDay = 24 * 60 * 60 * 1000;
    const numberOfNights = Math.round(Math.abs((dateFin - dateDebut) / oneDay));
  
    // Calculate the total amount
    const totalAmount = prixnuit * nombrePersonnes * numberOfNights;
  
    return totalAmount;
  };
  
  const getSelectedHotel = () => {
    const selectedHotelId = reservation.hotelID;
    return hotels.value.find(hotel => hotel.id === selectedHotelId) || {};
  };
  
  const fetchHotels = async () => {
    try {
      const response = await axios.get("http://localhost:8000/api/hotels");
      hotels.value = response.data;
    } catch (error) {
      console.error("Erreur lors de la récupération de la liste des hôtels", error);
    }
  };
  
  const handleSubmit = async () => {
    // ... (unchanged)
  };
  </script>
  