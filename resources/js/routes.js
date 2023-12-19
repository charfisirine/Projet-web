import Accueil from './components/accueil.vue';
import viewChambre from './components/chambres/viewChambre.vue';

export const routes = [
    {
    name: 'accueil',
    path: '/',
    component: Accueil
    },
    {
        name: viewChambre,
        path: '/chambre',
        component: viewChambre
        }
    ];
