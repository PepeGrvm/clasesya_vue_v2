<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <router-link class="nav-link" to="/">Inicio</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/cursos">Cursos</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/calendario">Calendario</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/ayuda">Ayuda</router-link>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item" v-if="!isAuthenticated">
              <router-link class="nav-link" to="/login">Iniciar sesión</router-link>
            </li>
            <li class="nav-item" v-if="!isAuthenticated">
              <router-link class="nav-link" to="/register">Registrarse</router-link>
            </li>
            <li class="nav-item" v-if="isAuthenticated">
              <a class="nav-link" href="#" @click="logout">Cerrar sesión</a>
            </li>
            <li class="nav-item dropdown" v-if="isAuthenticated">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ userName }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><router-link class="dropdown-item" to="/perfil">Mi Perfil</router-link></li>
                <li><router-link class="dropdown-item" to="/configuracion">Configuraciones</router-link></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </template>

  <script>
  export default {
    name: 'Navbar',
    data() {
      return {
        isAuthenticated: false, // Cambia según el estado de autenticación real
        userName: '' // Cambia según el nombre del usuario real
      };
    },
    methods: {
      logout() {
        // Aquí puedes implementar la lógica de cierre de sesión
        this.isAuthenticated = false;
        this.userName = '';
      }
    }
  };
  </script>

  <style scoped>
  /* Agrega estilos específicos para tu navbar aquí */
  </style>
