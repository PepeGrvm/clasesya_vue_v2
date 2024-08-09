<template>
    <div class="row">
        <div class="col-12 mb-2">
            <router-link :to="{ name: 'createTeacher' }" class="btn btn-success">Nuevo Profesor</router-link>
        </div>
    </div>
    <div class="margin-20">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Institución de egreso</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="teacher in teachers" :key="teacher.id">
                    <td>{{ teacher.id }}</td>
                    <td>{{ teacher.name }}</td>
                    <td>{{ teacher.email }}</td>
                    <td>{{ teacher.subject }}</td>
                    <td>{{ teacher.graduated_institution }}</td>
                    <td>
                        <router-link :to="{name: 'editTeacher', params: { id: teacher.id }}"
                            class="btn btn-info">edit</router-link>
                        <button type="button" @click="borrarProfesor(teacher.id)" class="btn btn-danger">del</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'teachers',
    data() {
        return {
            teachers: [],
        }
    },
    mounted() {
        this.loadTeachers();
    },
    methods: {
        async loadTeachers() {
            try {
                const response = await axios.get(`/api/teacher`)
                console.log(response);
                this.teachers = response.data;
            } catch (error) {
                console.log(error);
            }
        },
        async borrarProfesor(id) {
            if (confirm("¿Confirma eliminar al Alumno?")) {
                try {
                    await axios.delete(`/api/teacher/${id}`);
                    this.loadTeachers();  // Recargar la lista de alumnos
                } catch (error) {
                    console.log(error);
                }
            }
        }
    }
}
</script>
