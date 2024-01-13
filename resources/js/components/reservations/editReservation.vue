<template>
    <div>
      <!-- Titre -->
      <h3 class="text-center mt-4 mb-4">Modifier Chambre</h3>
  
      <!-- Formulaire -->
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form @submit.prevent="updateChambre" class="border p-4">
            <!-- Champ Type -->
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <select class="form-select" v-model="chambre.type">
                <option value="Simple">Simple</option>
                <option value="Double">Double</option>
                <option value="Suite">Suite</option>
                <option value="Familiale">Familiale</option>
              </select>
            </div>
  
            <!-- Champ Disponibilité -->
            <div class="mb-3">
              <label for="Disponibilite" class="form-label">Disponibilité</label>
              <select class="form-select" v-model="chambre.Disponibilite">
                <option value="Disponible">Disponible</option>
                <option value="Non disponible">Non disponible</option>
              </select>
            </div>
  
            <!-- Champ Description Chambre -->
            <div class="mb-3">
              <label for="descriptionchambre" class="form-label">Description Chambre</label>
              <input type="text" class="form-control" v-model="chambre.descriptionchambre">
            </div>
  
            <!-- Champ Numero Chambre -->
            <div class="mb-3">
              <label for="numchambre" class="form-label">Numero Chambre</label>
              <input type="number" class="form-control" v-model="chambre.numchambre">
            </div>
  
            <!-- Champ Prix par nuit -->
            <div class="mb-3">
              <label for="prixnuit" class="form-label">Prix par nuit</label>
              <input type="number" class="form-control" id="prixnuit" v-model="chambre.prixnuit">
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
  const chambre = ref({});
  
  // Fonction pour récupérer les données de la chambre
  const fetchChambre = async () => {
    try {
      const response = await axios.get(`http://localhost:8000/api/chambres/${route.params.id}`);
      chambre.value = response.data;
    } catch (error) {
      console.error(error);
    }
  };
  
  // Fonction pour mettre à jour les informations de la chambre
  const updateChambre = async () => {
    try {
      await axios.patch(`http://localhost:8000/api/chambres/${route.params.id}`, chambre.value);
      router.push('/listchambre');
    } catch (error) {
      console.error(error);
    }
  };
  
  // Récupérer les données de la chambre au chargement du composant
  onMounted(async () => {
    await fetchChambre();
  });
  </script>
  