// studentRoutes.js
const Mostrar_Student = () => import('../components/student/Mostrar.vue')
const Editar_Student = () => import('../components/student/Editar.vue')
const Crear_Student = () => import('../components/student/Crear.vue')
const Index_Student = () => import('../components/student/IndexStudent.vue')

export const studentRoutes = [
    {
        name: 'homeStudent',
        path: '/home/student',
        component: Index_Student,
    },
    {
        name: 'createStudent',
        path: '/create/student',
        component: Crear_Student,
    },
    {
        name: 'showStudent',
        path: '/show/student',
        component: Mostrar_Student,
    },
    {
        name: 'editStudent',
        path: '/student/:id',
        component: Editar_Student,
    },

]
