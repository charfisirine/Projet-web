<template>
    <div>
    <div class="py-6">
    <table class="table table-striped shadow">
    <thead>
    <tr>
    <th>type</th>
    <th>Disponibilité</th>
    <th>Description Chambre</th>
    <th>Numero Chambre</th>
    <th>Prix par nuit</th>
    <th>Modifier</th>
    <th>Supprimer</th>
    </tr>
    </thead>
    <tbody>
    <tr v-for="chambre in chambres" :key="chambre.id">
        <td>{{ chambre.type }}</td>
        <td>{{ chambre.Disponibilite }}</td>
        <td>{{ chambre.descriptionchambre }}</td>
        <td>{{ chambre.numchambre }}</td>
        <td>{{ chambre.prixnuit }}</td>
        <td><button class="btn btn-warning mx-2">Modifier</button></td>
        <td><button class="btn btn-danger mx-2" @click="deletechambre(chambre.id)">Supprimer</button></td>
    </tr>
    </tbody>
    </table>

    </div>
    </div>
    </template>
    <script setup>
    // Import des utilitaires depuis Vue
    import { ref, onMounted } from 'vue';
    import axios from 'axios';

    // Création d'une variable réactive pour stocker les données des chambres
    const chambres = ref([]);

    // Fonction asynchrone pour récupérer les données des chambres depuis l'API
    const getchambres = async () => {
        try {
            // Requête GET pour récupérer les données des chambres depuis l'API
            const response = await axios.get("http://localhost:8000/api/chambres");

            // Mise à jour de la variable réactive avec les données récupérées
            chambres.value = response.data;

            // Affichage des données récupérées dans la console
            console.log(chambres.value);
        } catch (error) {
            // Gestion des erreurs en cas de problème avec la requête
            console.log(error);
        }
    };

    // Hook onMounted pour exécuter une action lorsque le composant est monté
    onMounted(() => {
        // Appel de la fonction pour récupérer les chambres lors du montage du composant
        getchambres();
    });

    // Fonction pour supprimer une chambre en fonction de son ID
    const deletechambre = async (id) => {
        try {
            // Requête DELETE pour supprimer une chambre spécifique en fonction de son ID
            await axios.delete(`http://localhost:8000/api/chambres/${id}`);

            // Après la suppression, récupérer à nouveau les chambres pour mettre à jour la liste
            getchambres();
        } catch (error) {
            // Gestion des erreurs en cas de problème avec la requête de suppression
            console.log(error);
        }
    };
    </script>

    <style lang="scss" scoped>
    </style>
