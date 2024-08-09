<template>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Editar Alumno</h1>
                <form @submit.prevent="update">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" v-model="student.name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" v-model="student.email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" v-model="student.password">
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
    name: "edit-Student",
    data() {
        return {
            student: {
                name: "",
                email: "",
                password: ""
            }
        }
    },
    mounted() {
        this.editStudent();
    },
    methods: {
        async editStudent() {
            try {
                const studentId = this.$route.params.id;
                console.log(`Requesting student with ID: ${studentId}`);
                const response = await this.axios.get(`/api/student/${studentId}`);
                console.log(response);
                const { name, email, password } = response.data;
                this.student = { name, email, password }; // Asegúrate de que 'student' esté definido adecuadamente en tu componente.
            } catch (error) {
                console.error('Error fetching student:', error);
            }
        }
        ,
        async update() {
            this.axios.put(`/api/student/${this.$route.params.id}`, this.student)
                .then(response => {
                    console.log(response.data);
                    this.$router.push({
                        name: "showStudent"
                    });
                    console.log(response.data);
                })
                .catch(error => {
                    console.error(error);
                })
        }
    }
}
</script>
