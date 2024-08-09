<template>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Editar Profesor</h1>
                <form @submit.prevent="update">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" v-model="teacher.name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" v-model="teacher.email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" v-model="teacher.password">
                    </div>
                    <div class="form-group">
                        <label for="born_date">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="born_date" v-model="teacher.born_date">
                    </div>
                    <div class="form-group">
                        <label for="subject">Materia:</label>
                        <input type="text" class="form-control" id="subject" v-model="teacher.subject">
                    </div>
                    <div class="form-group">
                        <label for="graduated_institution">Institución de Graduación:</label>
                        <input type="text" class="form-control" id="graduated_institution" v-model="teacher.graduated_institution">
                    </div>
                    <div class="form-group">
                        <label for="graduation_date">Fecha de Graduación:</label>
                        <input type="date" class="form-control" id="graduation_date" v-model="teacher.graduation_date">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <router-link to="/show/teacher">Regresar</router-link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "editTeacher",
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
    mounted() {
        this.editTeacher();
    },
    methods: {
        async editTeacher() {
            try {
                const teacherId = this.$route.params.id;
                console.log(`Requesting teacher with ID: ${teacherId}`);
                const response = await this.axios.get(`/api/teacher/${teacherId}`);
                console.log(response);
                const { name, email, password, born_date, subject, graduated_institution, graduation_date } = response.data;
                this.teacher = { name, email, password, born_date, subject, graduated_institution, graduation_date };
            } catch (error) {
                console.error('Error fetching teacher:', error);
            }
        },
        async update() {
            try {
                const teacherId = this.$route.params.id;
                const response = await this.axios.put(`/api/teacher/${teacherId}`, this.teacher);
                console.log(response.data);
                this.$router.push({ name: "showTeacher" });
            } catch (error) {
                console.error('Error updating teacher:', error);
            }
        }
    }
}
</script>
