/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('vue2-animate/dist/vue2-animate.min.css');

window.Vue = require('vue');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('template-component', require('./components/admin/TemplateComponent.vue').default);
Vue.component('navlateral-component', require('./components/admin/NavLateralComponent.vue').default);
Vue.component('productos-component', require('./components/admin/ProductosComponent.vue').default);
Vue.component('navhorizontal-component', require('./components/admin/NavHorizontalComponent.vue').default);
Vue.component('categorias-component', require('./components/admin/CategoriasComponent.vue').default);
Vue.component('ventas-component', require('./components/admin/VentasComponent.vue').default);
Vue.component('usuarios-component', require('./components/admin/UsuariosComponent.vue').default);
Vue.component('proveedores-component', require('./components/admin/ProveedoresComponent.vue').default);
Vue.component('home-component', require('./components/admin/HomeComponent.vue').default);
Vue.component('pedidos-component', require('./components/admin/PedidosComponent.vue').default);

Vue.component('productos-user', require('./components/user/productosComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
