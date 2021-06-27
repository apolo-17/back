/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('form-create-employee', require('./components/employee/FormCreateEmployee.vue').default);
Vue.component('show-employee', require('./components/employee/ShowEmployee.vue').default);
Vue.component('index-employee', require('./components/employee/IndexEmployee.vue').default);

Vue.component('form-create-entity', require('./components/entity/FormCreateEntity.vue').default);
Vue.component('index-entity', require('./components/entity/IndexEntity.vue').default);
Vue.component('show-entity', require('./components/entity/ShowEntity.vue').default);

Vue.component('form-create-job-title', require('./components/jobTitle/FormCreateJobTitle.vue').default);
Vue.component('index-job-title', require('./components/jobTitle/IndexJobTitle.vue').default);
Vue.component('show-job-title', require('./components/jobTitle/ShowJobTitle.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
