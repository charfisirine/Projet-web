<template>
    <div>
        <br>
      <h3 style="text-align: center;">Dashboard Admin</h3>
      <br>

      <div class="row justify-content-center">
        <div class="col-md-2">
          <router-link to="/Addhotel" class="nav-item nav-link">
            <div class="square">
              <strong style="font-size: 0,1px;">Ajouter Hotel</strong>
            </div>
          </router-link>
        </div>

        <div class="col-md-2">
          <router-link to="/listhotel" class="nav-item nav-link">
            <div class="square">
              <strong style="font-size: 0,1px;">Liste des Hotels</strong>
            </div>
          </router-link>
        </div>

        <div class="col-md-2">
          <router-link to="/Addchambre" class="nav-item nav-link">
            <div class="square">
              <strong style="font-size: 0,1px;">Ajouter Chambre</strong>
            </div>
          </router-link>
        </div>

        <div class="col-md-2">
          <router-link to="/listchambre" class="nav-item nav-link">
            <div class="square">
              <strong style="font-size: 0,1px;">Liste des Chambres</strong>
            </div>
          </router-link>
        </div>

        <div class="col-md-2">
          <router-link to="/listereservation" class="nav-item nav-link">
            <div class="square">
              <strong style="font-size: 0,1px;">Liste des Reservations</strong>
            </div>
          </router-link>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  </script>

  <style scoped>
  /* Style pour les carrés */
  .square {
    width: 100%; /* La largeur est maintenant de 100%, chaque carré occupe la moitié de la largeur de la colonne */
    height: 200px; /* Remplacez la hauteur par celle que vous souhaitez */
    background-color: #3498db; /* Couleur de fond du carré, remplacez par la couleur que vous souhaitez */
    margin: 10px; /* Marge autour du carré, ajustez selon vos besoins */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white; /* Couleur du texte dans le carré, ajustez selon vos besoins */
    font-weight: bold;
  }
  </style>
