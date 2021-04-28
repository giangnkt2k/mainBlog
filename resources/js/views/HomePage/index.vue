<template>
  <div>
    <div>
      <b-navbar toggleable="lg" type="light">
        <b-navbar-brand href="#">GiangNKT</b-navbar-brand>

        <b-navbar-toggle target="nav-collapse" />

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav>
            <b-nav-item href="#">Portfolio</b-nav-item>
            <b-nav-item href="#">Post</b-nav-item>
          </b-navbar-nav>

          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto">
            <b-nav-form>
              <b-form-input size="sm" class="mr-sm-2" placeholder="Search" />
              <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
            </b-nav-form>

            <b-nav-item-dropdown right>
              <!-- Using 'button-content' slot -->
              <template #button-content>
                <em>User</em>
              </template>
              <b-dropdown-item href="#">Profile</b-dropdown-item>
              <b-dropdown-item href="#">Sign In</b-dropdown-item>
              <b-dropdown-item href="#">Sign Out</b-dropdown-item>
            </b-nav-item-dropdown>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>
    <div>
      <b-carousel
        id="carousel-fade"
        style="text-shadow: 0px 0px 2px #000"
        fade
        indicators
        img-width="1024"
        img-height="480"
      >
        <b-carousel-slide
          img-src="https://picsum.photos/1024/480/?image=14"
        />
        <b-carousel-slide
          img-src="https://picsum.photos/1024/480/?image=11"
        />
        <b-carousel-slide
          img-src="https://picsum.photos/1024/480/?image=13"
        />
      </b-carousel>
    </div>
    <!-- post -->
    <br>
    <b-row>
      <b-col sm="8">
        <b-card-group deck>
          <b-card
            border-variant="secondary"
            header="Post new"
            header-bg-variant="primary"
            header-text-variant="white"
            align="center"
          >
            <b-card img-src="https://placekitten.com/300/300" img-alt="Card image" img-left class="mb-3">
              <b-card-text>
                Some quick example text to build on the card and make up the bulk of the card's content.
              </b-card-text>
            </b-card>
          </b-card>
        </b-card-group></b-col>
      <b-col sm="4">
        <b-card-group deck>
          <b-card img-src="https://placekitten.com/1000/300" img-alt="Card image" img-top>
            <b-card-text>
              Some quick example text to build on the card and make up the bulk of the card's content.
            </b-card-text>
          </b-card>
        </b-card-group>
        <b-card-group deck>
          <b-card no-body header="Tags">
            <b-list-group flush>
              <b-list-group-item href="#">Cras justo odio</b-list-group-item>
              <b-list-group-item href="#">Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item href="#">Vestibulum at eros</b-list-group-item>
            </b-list-group>
          </b-card>
        </b-card-group>
        <b-card-group deck>
          <b-card no-body header="Categories">
            <b-list-group flush>
              <b-list-group-item href="#">Cras justo odio</b-list-group-item>
              <b-list-group-item href="#">Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item href="#">Vestibulum at eros</b-list-group-item>
            </b-list-group>
          </b-card>
        </b-card-group>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import { getCategories } from '@/api/categories_API';
export default {
  data() {
    return {
      categories: [],
    };
  },
  created(){
    this.getListCategories();
  },
  methods: {
    async getListCategories(){
      await getCategories()
        .then((res) => {
          this.categories = res;
        });
    },
  },
};
</script>

<style>

</style>
