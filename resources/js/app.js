import './bootstrap';
// Importa la función `createApp` desde Vue. Esta función se usa para crear una instancia de la aplicación Vue.
import { createApp } from 'vue';

// Importa el componente principal de la aplicación, que generalmente es el punto de entrada para la UI de Vue.
import App from './components/App.vue';

// Importa Axios, una biblioteca para hacer solicitudes HTTP.
import axios from 'axios';

// Importa `VueAxios`, un plugin que facilita el uso de Axios dentro de los componentes Vue.
import VueAxios from 'vue-axios';

// Importa las funciones necesarias para configurar el enrutador de Vue.
import { createRouter, createWebHistory } from 'vue-router';

// Importa las rutas definidas en otro archivo. Estas rutas determinan qué componente se muestra según la URL.
import routes from './routes/routes';

// Crea una nueva instancia de la aplicación Vue usando el componente `App` como punto de entrada.
const app = createApp(App);

// Configura Axios como un plugin para que esté disponible en todos los componentes Vue a través de `this.$axios`.
app.use(VueAxios, axios);

// Crea y configura una instancia de Vue Router. Esta instancia maneja la navegación entre diferentes vistas de la aplicación.
const router = createRouter({
    history: createWebHistory(), // Usa el modo de historial del navegador para las URLs (sin el símbolo '#').
    routes, // Asigna las rutas importadas al enrutador.
});

// Agrega el enrutador a la instancia de Vue para que pueda ser usado en la aplicación.
app.use(router);

// Monta la aplicación Vue en el elemento HTML con id "app". Esto inicializa la aplicación y la inserta en el DOM.
app.mount('#app');
