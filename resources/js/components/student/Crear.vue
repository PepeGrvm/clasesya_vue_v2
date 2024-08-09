<template>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Crear Alumno</h1>
                <form @submit.prevent="createStudent">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" v-model="students.name" required>
                    </div>
                    <div class="form-group">
                        <label for="born_date">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="born_date" v-model="students.born_date" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" v-model="students.email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" v-model="students.password" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <router-link to="/show/student">Regresar</router-link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "createStudent",
    data() {
        return {
            students: {
                name: "",
                email: "",
                password: "",
                born_date: ""
            }
        }
    },
    methods: {
        async createStudent() {
            try {
                const response = await this.axios.post('/api/student', this.students);
                console.log(response.data); // Usar response.data
                this.$router.push({ name: "showStudent" });
            } catch (error) {
                console.error('Error status:', error.response.status);
                console.error('Error data:', error.response.data);
                console.error('Error headers:', error.response.headers);
            }
        }
    }

}
</script>
