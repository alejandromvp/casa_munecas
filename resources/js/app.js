
require('./bootstrap');
import VueMoment from 'vue-moment';
import moment from 'moment';
import InputColorPicker from "vue-native-color-picker";
//import Buefy from 'buefy'
//import 'buefy/dist/buefy.css'

window.Vue = require('vue');
//Vue.use(Buefy);
Vue.use(InputColorPicker);
Vue.component('container', require('./components/main_component.vue').default);
Vue.component('nav-comp', require('./components/secciones/nav.vue').default);
Vue.component('slider-comp', require('./components/secciones/slider.vue').default);
Vue.component('section-comp', require('./components/secciones/section.vue').default);
Vue.component('footer-comp', require('./components/secciones/footer.vue').default);
Vue.component('home-page', require('./components/pages/home.vue').default);
Vue.component('about-page', require('./components/pages/about.vue').default);
Vue.component('contactanos-page', require('./components/pages/contactanos.vue').default);
Vue.component('servicios-page', require('./components/pages/servicios.vue').default);
Vue.component('formulario-page', require('./components/pages/formulario.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
