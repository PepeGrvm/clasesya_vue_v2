
const Mostrar_Teacher = () => import('../components/teacher/Mostrar.vue')
const Editar_Teacher = () => import('../components/teacher/Editar.vue')
const Crear_Teacher = () => import('../components/teacher/Crear.vue')
const Index_Teacher = () => import('../components/teacher/IndexTeacher.vue')

export const teacherRoutes = [
    {
        name: 'homeTeacher',
        path: '/home/teacher',
        component: Index_Teacher,
    },
    {
        name: 'createTeacher',
        path: '/create/teacher',
        component: Crear_Teacher,
    },
    {
        name: 'showTeacher',
        path: '/show/teacher',
        component: Mostrar_Teacher,
    },
    {
        name: 'editTeacher',
        path: '/teacher/:id',
        component: Editar_Teacher,
    }
]
