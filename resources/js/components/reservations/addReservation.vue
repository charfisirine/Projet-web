<template>
    <div>
        <div class="col-md-6 offset-md-3 border rounded p-4 mt-2 shadow">
            <form @submit.prevent="addReservation">
            

            <div class="mb-3">
                <label for="hotelID" class="form-label"> Nom hotel </label>
                <!-- Utilisez une liste déroulante au lieu d'un champ texte -->
                <select class="form-control" id="hotelID" v-model="reservation.hotelID">
                    <option v-for="hotel in hotels" :key="hotel.id" :value="hotel.id">{{ hotel.nomhotel }}</option>
                </select>
            </div>

            <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" id="type" v-model="reservation.type">
                        <option value="Simple">Simple</option>
                        <option value="Double">Double</option>
                        <option value="Suite">Suite</option>
                        <option value="Familiale">Familiale</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="nom" class="form-label">Nom </label>
                    <input type="text" class="form-control" id="nom" v-model="reservation.nom">
                </div>

            

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="prenom" v-model="reservation.prenom">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" v-model="reservation.email">
                </div>

                <div class="mb-3">
                    <label for="numero_tel" class="form-label">Numero telephone</label>
                    <input type="number" class="form-control" id="numero_tel" v-model="reservation.numero_tel">
                </div>

                <div class="mb-3">
                    <label for="date_debut" class="form-label">Date Debut</label>
                    <input type="date" class="form-control" id="date_debut" v-model="reservation.date_debut">
                </div>
                
                <div class="mb-3">
                    <label for="date_fin" class="form-label">Date Fin</label>
                    <input type="date" class="form-control" id="date_fin" v-model="reservation.date_fin">
                </div>

               

                <div class="mb-3">
                    <label for="nombre_personnes" class="form-label">Nombre personnes</label>
                    <input type="number" class="form-control" id="nombre_personnes" v-model="reservation.nombre_personnes">
                </div>

                <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" v-model="reservation.message"></textarea>
                </div>




                <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                <router-link to="/listresrevation" class="btn btn-outline-danger mx-2">Cancel</router-link>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { useRouter } from 'vue-router';
import axios from 'axios';

const router = useRouter();

const hotels = ref([]);  // Ajoutez cette ligne pour stocker la liste des hôtels

const reservation = ref({
    hotelID: "",
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
onMounted(() => {
    document.title = 'Réserver';
    fetchHotels();
});

const addReservation = async () => {
    await axios.post("http://localhost:8000/api/resrevations/", resrevation.value)
        .then(() => (
            router.push('/listresrevation')
        ))
        .catch(err => console.log(err));
};

onMounted(() => {
    document.title = 'Réserver';
});
</script>

<style scoped>
  
</style>
