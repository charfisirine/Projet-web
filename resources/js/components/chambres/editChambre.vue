<template>
Chambre
    <div>
    <h3 class="text-center">Edit Chambre</h3>
    <div class="row">
    <div class="col-md-6">

    <form @submit.prevent="updateChambre">
            <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control"  v-model="chambre.type">
            </div>

            <div class="form-group">
            <label>Disponibilité</label>
            <input type="text" class="form-control" id="Disponibilite" v-model="chambre.Disponibilite">
            </div>
            <div class="form-group">
            <label>Description Chambre</label>
            <input type="text" class="form-control"  v-model="chambre.descriptionchambre">
            </div>

            <div class="form-group">
            <label>Numero Chambre</label>
            <input type="number" class="form-control"  v-model="chambre.numchambre">
            </div>

            <div class="form-group">
            <label>Prix par nuit</label>
            <input type="number" class="form-control" id="prixnuit" v-model="chambre.prixnuit">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
    </div>
    </div>
    </template>

    <script setup>
    import axios from 'axios';
    import { useRouter,useRoute } from 'vue-router';
    const router = useRouter() ;
    const route = useRoute();
    import { ref, onMounted } from 'vue';
    const chambre = ref({});
    const fetchChambre= async()=> {
    await axios
    .get(`http://localhost:8000/api/chambres/${route.params.id}`)
    .then((res) => {chambre.value = res.data;})
    .catch((err) => {console.error(err)})
    }
    const updateChambre= async()=> {await axios
    .patch(`http://localhost:8000/api/chambres/${route.params.id}`, chambre.value)
    .then(() => {
    router.push('/listchambre');
    })
    .catch((err) => {console.error(err)})
    }

    onMounted(async() => {
    await fetchChambre();
    });
    </script>
