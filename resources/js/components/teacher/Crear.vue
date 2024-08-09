<template>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Crear Profesor</h1>
                <form @submit.prevent="createTeacher">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" v-model="teacher.name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" v-model="teacher.email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" v-model="teacher.password" required>
                    </div>
                    <div class="form-group">
                        <label for="born_date">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="born_date" v-model="teacher.born_date" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Materia:</label>
                        <input type="text" class="form-control" id="subject" v-model="teacher.subject" required>
                    </div>
                    <div class="form-group">
                        <label for="graduated_institution">Institución de Graduación:</label>
                        <input type="text" class="form-control" id="graduated_institution" v-model="teacher.graduated_institution" required>
                    </div>
                    <div class="form-group">
                        <label for="graduation_date">Fecha de Graduación:</label>
                        <input type="date" class="form-control" id="graduation_date" v-model="teacher.graduation_date" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <router-link to="/show/teacher">Regresar</router-link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "createTeacher",
    data() {
        return {
            teacher: {
                name: "",
                email: "",
                password: "",
                born_date: "",
                subject: "",
                graduated_institution: "",
                graduation_date: ""
            }
        }
    },
    methods: {
        async createTeacher() {
            try {
                const response = await this.axios.post('/api/teacher', this.teacher);
                console.log(response.data); // Usar response.data
                this.$router.push({ name: "showTeacher" });
            } catch (error) {
                console.error('Error status:', error.response.status);
                console.error('Error data:', error.response.data);
                console.error('Error headers:', error.response.headers);
            }
        }
    }
}
</script>
