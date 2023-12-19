<template>
    <div className="col-md-6 offset-md-3 border rounded p-4 mt-2
    shadow">
        <form @submit.prevent="addChambre">
            <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" v-model="chambre.type">
            </div>
            <div class="mb-3">
            <label for="Disponibilite" class="form-label">Disponibilité</label>
            <input type="text" class="form-control" id="Disponibilite" v-model="chambre.Disponibilite">
            </div>
            <div class="mb-3">
            <label for="descriptionchambre" class="form-label">Description Chambre</label>
            <input type="text" class="form-control" id="descriptionchambre" v-model="chambre.descriptionchambre">
            </div>
            <div class="mb-3">
            <label for="numchambre" class="form-label">Numero Chambre</label>
            <input type="number" class="form-control" id="numchambre" v-model="chambre.numchambre">
            </div>
            <div class="mb-3">
            <label for="prixnuit" class="form-label">Prix par nuit</label>
            <input type="number" class="form-control" id="prixnuit" v-model="chambre.prixnuit">
            </div>

            <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
            <router-link to="/listchambre" class="btn btn-outline-danger mx-2">Cancel</router-link>

        </form>
    </div>
    </template>
    <script setup>

    import { ref } from "vue"
    import { useRouter } from 'vue-router';
    const router = useRouter()
    import axios from 'axios';


    const chambre=ref({
        type:"",
        Disponibilite:"",
        descriptionchambre:"",
        numchambre:0,
        prixnuit:0

    })
    const addChambre=async()=>{
    await
    axios.post("http://localhost:8000/api/chambres/",chambre.value)
    .then(() => (

    router.push('/listchambre')
    ))
    .catch(err => console.log(err))

    }
    </script>
    <style scoped>
    </style>
