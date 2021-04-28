import Vue from 'vue';
import App from './views/App';
import router from '@/router';
import axios from 'axios';
import Vuex from 'vuex';
import VueAxios from 'vue-axios';
import i18n from '@/lang/index';
import store from '@/store';
import '@/permission';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import CKeditor from 'ckeditor4-vue';
import './assets/css/icofont.min.css';
import './assets/css/style.css';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
// import Butter from 'buttercms';
// const butter = Butter('your_api_token');
Vue.use(Vuex);
Vue.use(VueAxios, axios);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
Vue.use(CKeditor);

Vue.config.productionTip = false;

new Vue({
  el: '#app',
  i18n,
  router,
  store,
  render: h => h(App),
});
