<template>
    <div class="row">
        <div class="col-12 mb-2">
            <router-link :to="{ name: 'createStudent' }" class="btn btn-success">Nuevo Alumno</router-link>
        </div>
    </div>
    <div class="margin-20">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="student in students" :key="student.id">
                    <td>{{ student.id }}</td>
                    <td>{{ student.name }}</td>
                    <td>{{ student.email }}</td>
                    <td>
                        <router-link :to="{name: 'editStudent', params: { id: student.id }}"
                            class="btn btn-info">edit</router-link>
                        <button type="button" @click="borrarAlumno(student.id)" class="btn btn-danger">del</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'students',
    data() {
        return {
            students: [],
        }
    },
    mounted() {
        this.loadStudents();
    },
    methods: {
        async loadStudents() {
            try {
                const response = await axios.get(`/api/student`)
                console.log(response);
                this.students = response.data;
            } catch (error) {
                console.log(error);
            }
        },
        async borrarAlumno(id) {
            if (confirm("¿Confirma eliminar al Alumno?")) {
                try {
                    await axios.delete(`/api/student/${id}`);
                    this.loadStudents();  // Recargar la lista de alumnos
                } catch (error) {
                    console.log(error);
                }
            }
        }
    }
}
</script>
