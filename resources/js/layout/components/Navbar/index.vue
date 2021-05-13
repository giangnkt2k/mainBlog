<template>
  <div>
    <b-navbar v-if="$store.getters.roles[0] !=='user' && $store.getters.roles.length > 0 " toggleable="lg">

      <b-navbar-brand @click.prevent.stop="$emit('toggle')">
        <i id="toggle-menu" class="icofont-navigation-menu" />
      </b-navbar-brand>

      <b-navbar-toggle target="nav-collapse">
        <template #default="{ expanded }">
          <b-icon v-if="expanded" icon="chevron-bar-up" />
          <b-icon v-else icon="chevron-bar-down" />
        </template>
      </b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav id="text-name">
          {{ $t(title) }}
        </b-navbar-nav>

        <b-navbar-nav class="ml-auto">

          <LangSelector class="m-2" />

          <b-dropdown text="Block Level Dropdown" block class="m-2">
            <template #button-content>
              <b-icon icon="person-circle" font-scale="1.0" class="icon-user" /><span>{{ $t('navbar.usersettings') }}</span>
            </template>
            <b-dropdown-item class="text" :disabled="routePath==='/dashboard/profile'" @click="$router.push('/dashboard/profile')">
              {{ $t('profile.title') }}
            </b-dropdown-item>
            <b-dropdown-item class="text">Settings</b-dropdown-item>
            <b-dropdown-item class="text" @click="logout">Logout</b-dropdown-item>
          </b-dropdown>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
    <!-- user -->
    <div v-if="$store.getters.roles[0] !=='admin'">
      <b-navbar toggleable="lg" fixed="top" :class="navBarUser" class="main-header header-fixed-default" type="dark" @scroll="handleScroll">
        <b-navbar-brand href="#">GiangNKT</b-navbar-brand>

        <b-navbar-toggle target="nav-collapse" />

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav>
            <b-nav-item @click="$router.push('/portfolio')">Portfolio</b-nav-item>
            <b-nav-item href="#">Post</b-nav-item>
          </b-navbar-nav>

          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto">

            <b-nav-item-dropdown right>
              <!-- Using 'button-content' slot -->
              <template #button-content>
                <em>User</em>
              </template>
              <b-dropdown-item href="#">Profile</b-dropdown-item>
              <b-dropdown-item @click="login">Sign In</b-dropdown-item>
              <b-dropdown-item @click="logout">Sign Out</b-dropdown-item>
            </b-nav-item-dropdown>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>
  </div>

</template>

<script>
import LangSelector from '../LangSelector/index';

export default {
  name: 'Navbar',
  components: {
    LangSelector,
  },
  data() {
    return {
      title: this.$route.meta.title,
      ok: true,
      navBarUser: 'navUser',
    };
  },
  computed: {
    routeChange() {
      return this.$route;
    },
    routePath() {
      return this.$route.path;
    },
  },
  watch: {
    routeChange() {
      this.title = this.$route.meta.title;
    },
  },
  created(){
    window.addEventListener('scroll', this.handleScroll);
  },
  destroyed(){
    window.removeEventListener('scroll', this.handleScroll);
  },
  methods: {
    async logout() {
      await this.$store.dispatch('user/logout');
      this.$router.push(`/`);
    },
    async login() {
      await this.$store.dispatch('user/login');
      this.$router.push(`/login?redirect=${this.$route.fullPath}`);
    },
    handleScroll(event) {
      // console.log(event);navBarUser
      if (window.scrollY > 1.9){
        this.navBarUser = 'sticky';
      } else {
        this.navBarUser = 'navUser';
      }
    },
  },
};
</script>

<style>
body {
    line-height: 1.5;
    font-size: 15px;
    color: #333;
}
.navbar{
    border-bottom: 1px solid #dee4ec;
    width: 100%;
    top: 0;
    position: sticky;
    z-index: 999;
}
.sticky {
  background-image: linear-gradient(-29deg,#616d86,#1f1c2c)!important;
  z-index: 999;
  border: hidden;
  font-weight: 400;
  width: 100%;
  box-shadow: 0 0 4px rgb(0 0 0 / 14%),0 4px 8px rgb(0 0 0 / 28%);
  padding: 0px !important;

  transition: all .5s ease-in-out;
}
.navUser{
  background: #00000000;
  /* background-image: #343a4008 !important; */
  margin: 0 auto;
  border: none !important;
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  right: 0;
  padding: 22px 0;
  transition: all .5s ease-in-out;
  -webkit-transition: all .5s ease-in-out;
}
.navbar .nav-link{
    color: #5b6e88 !important;
}

.navbar a i{
    color: #5b6e88;
    font-size: 20px;
}

@media(max-width: 768px){
    .navbar-dark .navbar-toggler {
        border-color:transparent;
    }
}

#text-name {
    font-size: 21px;
}

.text a {
    color: black;
    text-decoration: none;
}

#selectStore {
    width: 200px;
}

#selectApp {
    width: 250px;
    margin-right: 10px;
}

.icon-user {
  margin-right: 5px;
}

.item-nav {
  margin-left: 10px;
  margin-right: 10px;
}

.display-full {
  display: flex;
}

i#toggle-menu {
  color: #000;
}

button.navbar-toggler {
  background: #052C50 99%;
}

button.navbar-toggler > svg {
  color: white;
}

button.navbar-toggler:focus {
  outline: none;
}

</style>

