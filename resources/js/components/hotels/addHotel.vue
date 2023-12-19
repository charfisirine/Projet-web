<template>
    <div className="col-md-6 offset-md-3 border rounded p-4 mt-2 shadow">
        <form @submit.prevent="addHotel">
            
         

            <div class="mb-3">
            <label for="nomhotel" class="form-label">Nom Hotel</label>
            <input type="text" class="form-control" id="nomhotel" v-model="hotel.nomhotel">
            </div>

            <div class="mb-3">
            <label for="imagehotel" class="form-label">Image Hotel</label>
            <input type="text" class="form-control" id="imagehotel" v-model="hotel.imagehotel">
            </div>

            <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" v-model="hotel.description">
            </div>

            <div class="mb-3">
            <label for="numtelephone" class="form-label">Numéro de téléphone</label>
            <input type="number" class="form-control" id="numtelephone" v-model="hotel.numtelephone">
            </div>

            <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" v-model="hotel.adresse">
            </div>

            <div class="mb-3">
            <label for="prixnuit" class="form-label">Prix par nuit</label>
            <input type="number" class="form-control" id="prixnuit" v-model="hotel.prixnuit">
            </div>

            <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
            <router-link to="/listhotel" class="btn btn-outline-danger mx-2">Cancel</router-link>

        </form>
    </div>
    </template>
    <script setup>

    import { ref } from "vue"
    import { useRouter } from 'vue-router';
    const router = useRouter()
    import axios from 'axios';


    const hotel=ref({
        nomhotel:"",
        imagehotel:"",
        description:"",
        numtelephone:"",
        adresse:"",
        prixnuit:0

    })
    const addHotel=async()=>{
    await
    axios.post("http://localhost:8000/api/hotels/",hotel.value)
    .then(() => (

    router.push('/listhotel')
    ))
    .catch(err => console.log(err))

    }
    </script>
    <style scoped>
    </style>
