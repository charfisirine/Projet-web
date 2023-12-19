import Accueil from './components/accueil.vue';
import viewChambre from './components/chambres/viewChambre.vue';
import addChambre from './components/chambres/addChambre.vue';
import editChambre from './components/chambres/editChambre.vue';

export const routes = [
    {
    name: 'accueil',
    path: '/',
    component: Accueil
    },
    {
        name: viewChambre,
        path: '/listchambre',
        component: viewChambre
        }
        ,
    {
        name: addChambre,
        path: '/Addchambre',
        component: addChambre
        }
        ,
        {
            name: editChambre,
            path: '/editchambre/:id',
            component: editChambre
            }

    ];
