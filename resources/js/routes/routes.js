const Login = () => import('../components/Login.vue')
const Register = () => import('../components/Register.vue')

//Rutas Student
import { studentRoutes } from './studentRoutes'

//Rutas Teacher
import { teacherRoutes } from './teacherRoutes'


export const routes = [
    {
        name: 'login',
        path: '/login',
        component: Login,
    },
    {
        name: 'register',
        path: '/register',
        component: Register,
    },
    ...studentRoutes,
    ...teacherRoutes,
]
// Exporta las rutas como una exportación por defecto
export default routes;
