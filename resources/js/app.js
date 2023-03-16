import { createApp } from 'vue';
import Home from './components/Home.vue';
const app = createApp({});

//Registrando  o Componente
app.component('Home', Home);

//Elemento HTMl da Aplicação
app.mount('#app');

require('./bootstrap');
