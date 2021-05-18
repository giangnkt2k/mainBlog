<template>
  <div class="hp_main">
    <b-aspect aspect="16:9" class="hp_main">
      <!-- open -->
      <div>
        <div class="opening" @mousemove="move">
          <b-row>
            <b-col>
              <p class="logo-1 po">
                Wellcome
              </p>
              <p class="logo-1 po">
                Everyone
              </p>
            </b-col>
            <b-col>
              <b-img src="http://dexam-vue.ui-lib.com/img/v3-header.635efe8e.svg" class="red" :style="{transform: transale}" style="height: 100%;" />
            </b-col>
          </b-row>
        </div>
      </div>
      <div class="container pt-5 mt-4 mt-sm-0 pt-sm-6 pt-md-7 pb-lg-7">
        <!-- post -->
        <b-row>
          <div class="silde">
            <b-carousel
              id="carousel-fade"
              style="text-shadow: 0px 0px 2px #000"
              fade
              indicators
              controls
            >
              <b-carousel-slide
                img-src="https://lh3.googleusercontent.com/YOvnW0skqeW_OexOuSNIgf_fgyMo4wCzHPosN_Fv8_me5GpzdiLOMH3GQdNGTcQPV5MI7mgEimXQpsDWIM97h2rVbVjqohzy0Jb0Fxlqdmp7NThQXqNo8MrUPvFxPC7PWgNL8s4bBKcRdrIgCUGtszZ0trGnexYAqUbF4FHGluQeDwNYRmAtGbNtbtJTFSzY4lwFma5_MfqrGN_CZ9AZOok0rpZMXA0F99FlOcQdoStfvoBOO8c5ABkfP6BTRYsYrzb_0TrdTzMl6Ov-uCKRXV7ChrNZRLA8Ii1aWubGf0PSxwHj8EK6PbcsfHky3SNpgHN7qJLT9jZCXzu16h3XdTTIkF6JsOUmhZ8YqKPfI4aq2rDuGpRHTu8bg5pj5V5vI0HtWuvVAPzcdDSsCPTM-DiUXcshJQcZWh6tbQMwSJkaOmQ47CCcpZ18FZeM3A-8brEU7xMeB9R7KtLzKicoC8XfM3pMtRMw5ceQD3-vJ69upqXd3M4ztSsBxq_7L_znWkQhX09VHu_miX6DnjjAfa9mt57JwPhKiVH4A1ziMWWillW5IWR3mIxb48QGCzDkLj3DLvebQuGo3MaIoMP4lGvhorgVH9MZYFOeLMJeK3G3Jpx-5kEcP9fFUg9N3PJ0KEMqL8URVFx7emm4t08O5gXU_82jImbd8S_bxbMy9ekHTx8DTCfjI2rIxABmmQ39C_fEvCmrBcPpXH4eprLBoiQ=w1908-h1272-no?authuser=0"
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
              <b-carousel-slide
                img-src="https://lh3.googleusercontent.com/eKTE9uIt8m7HKHhdXCCM-lW2K6VdXdykARnlXYBBxo3bH5bwCFRotS3_DfgNZm3Ada-q7-wRfEeVrnd8eUk49ahgBxDEvxVFLnjBq2i5FVoVBuzTOQ51J-ThDWGhGR4piyYEGEfuPt1A3mw9Ou89kLbotRKvjXnQ-VCY-ymr2fCBlu-aZ2DQltUGYwb-I_gXskx9HvzLWIGVvY-Gx5lUOh3SwR0Qp-6zECrOlavqiotIV27lhAyNNJmHj22Aw7W_RcjTNHTNfgh37No-kLFCnmL-UsFKHIeNuN7segISaL5_T2T2DICNhKQ0jRQdvCV6y4CjKqbQjryZT3q0f7WB6LWgfFyp8qVMzfAxO2_c4l97VrFdA1dh9nxRGxt1Pn2_cDM6B6oR5kseywq5EaEImZHzgjZncGAMtC4cCj8lHlBO2qswz4EWdbgC7wqNELsgEwA-UT2VvXC-IoXqXKE1RlaesucUEWtkMcIwePmQjYu3CGVi8CgKAeJWh4-nIG31W9opZIs88NqVthVLr3OJemI033EVnBKUQ43cBVsDPJyG5w1ZMpSC3m-EFQpAnu9DVFW2dNQiWKkFUZEdky82ipFtPm3E4yOPh2gjeNTFXAIC9fnwA1znFoOqv0TiLcEnxvnvhwQOXDI7i25NUHLk4XQNqcByC5W3oo4w0DUnhuW5MecevK4kzGhBHLITIRV2JaVLu2c2zMuLfH2Aka4PpLg=w1908-h1272-no?authuser=0"
              />
              <b-carousel-slide
                img-src="https://lh3.googleusercontent.com/MHJA8J_vrQWfdYT8lsM8Ft5HJQpYQ0WGWMG1RrPzjvIl8XJVPG8Trnc2eNDohFEYmSmBaJVZM3gQGarfjg2NBY955un1Vkw6T2ceJ915rjhNieJZ1MzxtYlVhakHQ8DCOZgnsLLX8c1o6QLnZfx35CHXv8jInau-zxcs7UqWxIufH-2xjocWe7BGR_IlQpbZnjcl0oVzuOgx3w27jHSA_-SF_qqwNzSuPfITdyjoUu_9n0T7jpriL4GYhr1gkooHJDuqP7aZHZqHVLPdqGjYbyrlu5SbqqDJhaSnEooP5V7r_FjKfLjR0_njjL-cW-6s3CcineTIxK1vFGLG7OE_sn1PXXmMLH2ie-vjw_0mm1nzSW_Nb-a2hwCMRKNW7bm-F7CiUGwTiH7LSavB58TWnIzXL7ArSBnl2O_e-GnaJ_9YUeQMXcG7Hw2vkreJyJ55AxoRF-4X3Zf0maB05jHKQSQ2Q5pgO3XfpGGC0VhNhj3KXsg0jOGocivjYkMmyfr7cr_WHceqA2jIREF-aCbCeLKYDiKgR3MbLLR8JaCy1MX_-KrQq6buIqXaesRUsEzAQKRoHy_uv2JMMVC1itsFb8gZi9KKwvRS9AIkVnQL8dG0WQqLJmFnClWzs3wpHPx-NNe2NHGtz2CGQAnlbEgQC7DMtEOX9ly7STOeEjpwjSSjXxKAzA5UU9_kJ0b73CrZ76faRKbAu5PEe_rzKgS8hmo=w1908-h1272-no?authuser=0"
              />
            </b-carousel>
          </div>
          <br>
          <b-col sm="8">
            <div>
              <b-card-group
                columns
                style="column-count: 2;"
              >
                <div v-for="item in posts" :key="item.id" class="block">
                  <b-card
                    border-variant="light"
                    :header="item.title"
                    header-bg-variant="dark"
                    header-text-variant="white"
                    class="porta"
                  >
                    <b-img thumbnail fluid :src="item.picture" :alt="item.title" />
                    <div class="d-flex w-100 justify-content-between">
                      <!-- <h5 class="mb-1">{{ item.title }} </h5> -->
                      <small>3 days ago</small>
                    </div>
                    <p class="mb-1 body_post" v-html="item.body" />
                    <b-button size="sm" class="mr-2" @click="openDetailPopUp(item.id)">
                      See Detail
                    </b-button>
                  </b-card>
                </div></b-card-group>
              <center>
                <b-pagination
                  v-model="pagination.currentPage"
                  class="pagianation"
                  :total-rows="pagination.total_row"
                  :per-page="pagination.perPage"
                  aria-controls="my-table"
                />
              </center>
            </div>
            <br>

          </b-col>
          <b-col sm="4">
            <b-card-group deck>
              <b-card thumbnail img-src="https://lh3.googleusercontent.com/f6R5Jyh_iFbilUfzcNKZQ8rgOmZjzz2ao1XQG0OgYPiTx45XS4Jv8JyZfmKf6IrBViqVRvUOm_oYn7ipgIp8Zb8d9baJ8fVB9s0_v7-rjvPi7oVabcM_MLG9uxd2zCX5fNcKOl6_zGbN-LH5c7r7vzvXBTsfZVN3zQhq-Vp1HQXWdZLH2mKJ_BKqLqn_p8yczgzlvOaxzIMY4WEyX1vT5b87EGpGDjSuitu30GPCDrQ-elJ1eaJY2F2wNSBOSaU7Nlxka91qpL6Ilw-rwsoKBauaKUmtnUtoeqhJPAcHDJu-U_IfDQIvI-WKghtxYRefPH-R6T9nj2PnghjqnVz9ScuGqk_fyw6P2RByRhsndAll_mq4Fk3cr2QD6uDmz0yUtI4FydN3yD5APE68ErO6wHNltopqp4s_3JcGUc1ddOlpO_FmsAqDcae_dfkT4AnrkIc8sxeUjhD1d3wtS4d5zzrecNbyHeOuiWeJ29m_ygBSosVZnYJKsdUyHXy6ngO5CLv5Fye1ZhsMbHXdf2wi3TBgsz6YMeAyip7vEiEtvKy53qgg6pKD4IyAht-ViOeIR_a6YZNEyFVn4nmX8mWvtir03odcUO8xOwG1zR-xH6L4ITvdLsthz3Zj7OwcbTWff4niI6sPG1delMeHiG6s9iCA4HWOH89PdTifMPfwHlYjoq3UTDNtBkd1SrJXDEiQo3DbKtP-PDJk30rEYm_Mp_w=w1454-h969-no?authuser=0" img-alt="Card image" img-top>
                <b-card-text>
                  Sống hết mình đi các bạn!
                </b-card-text>
              </b-card>
            </b-card-group>
            <!-- <b-card-group deck class="card-deck1">
              <b-card no-body bg-variant="dark" text-variant="white" class="text-center" header="Tags">

                <b-list-group flush>
                  <div v-for="item in tags" :key="item.id">
                    <b-list-group-item href="#">{{ item.name }}</b-list-group-item>
                  </div>
                </b-list-group>

              </b-card>
            </b-card-group> -->
            <b-card-group deck class="card-deck1">
              <b-card no-body bg-variant="dark" text-variant="white" header="Categories">

                <b-list-group flush>
                  <div v-for="item in categories" :key="item.id">
                    <b-list-group-item href="#">{{ item.name }}</b-list-group-item>
                  </div>
                </b-list-group>

              </b-card>
            </b-card-group>
          </b-col>
        </b-row>
        <br>
      </div>
      <!-- footer -->
      <footer>
        <div _ngcontent-gvr-c39="" class="svg-border-rounded text-dark">
          <svg _ngcontent-gvr-c39="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path _ngcontent-gvr-c39="" d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg></div>
        <div class="foot">
          <b-row>
            <b-col cols="4">
              <h3>Contact me</h3>
              <b-button size="lg" variant="secondary" class="mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </b-button>
              <b-button size="lg" variant="secondary" class="mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                </svg>
              </b-button>
              <b-button size="lg" variant="secondary" class="mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                  <path d="M6.552 6.712c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888.008-.488-.36-.888-.816-.888zm2.92 0c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888s-.36-.888-.816-.888z" />
                  <path d="M13.36 0H2.64C1.736 0 1 .736 1 1.648v10.816c0 .912.736 1.648 1.64 1.648h9.072l-.424-1.48 1.024.952.968.896L15 16V1.648C15 .736 14.264 0 13.36 0zm-3.088 10.448s-.288-.344-.528-.648c1.048-.296 1.448-.952 1.448-.952-.328.216-.64.368-.92.472-.4.168-.784.28-1.16.344a5.604 5.604 0 0 1-2.072-.008 6.716 6.716 0 0 1-1.176-.344 4.688 4.688 0 0 1-.584-.272c-.024-.016-.048-.024-.072-.04-.016-.008-.024-.016-.032-.024-.144-.08-.224-.136-.224-.136s.384.64 1.4.944c-.24.304-.536.664-.536.664-1.768-.056-2.44-1.216-2.44-1.216 0-2.576 1.152-4.664 1.152-4.664 1.152-.864 2.248-.84 2.248-.84l.08.096c-1.44.416-2.104 1.048-2.104 1.048s.176-.096.472-.232c.856-.376 1.536-.48 1.816-.504.048-.008.088-.016.136-.016a6.521 6.521 0 0 1 4.024.752s-.632-.6-1.992-1.016l.112-.128s1.096-.024 2.248.84c0 0 1.152 2.088 1.152 4.664 0 0-.68 1.16-2.448 1.216z" />
                </svg>
              </b-button>
            </b-col>
            <b-col cols="4" />
            <b-col cols="4">
              <div>
                <p class="copyRight">
                  © Copyright 2021 GiangNKT</p>
              </div></b-col>
          </b-row>
        </div>
      </footer>
    </b-aspect>
    <b-modal
      ref="singlePost"
      hide-footer
      :title="post.title"
      size="xl"
    >
      <div>
        <b-img :src="post.picture" fluid alt="Responsive image" />
      </div>
      <br>
      <div v-html="post.body" />
    </b-modal>
  </div>
</template>

<script>
import { getCategories } from '@/api/categories_API';
import { getTag } from '@/api/tags_API';
import { getPost, getOnePost } from '@/api/post_API';
export default {
  data() {
    return {
      categories: [],
      tags: [],
      posts: [],
      pagination: {
        perPage: 3,
        currentPage: 1,
        total_row: 10,
      },
      post: {
        title: '',
        picture: '',
        body: '',
      },
      title_modal: '',
      x: 0,
      y: 0,
      transale: '',
    };
  },
  created(){
    this.getListCategories();
    this.getListTags();
    this.getListPost();
  },
  methods: {
    move(e){
      this.transale = 'translate3d(' + -e.clientX * 0.1 + 'px,' + -e.clientY * 0.1 + 'px, 0px)';
    },
    async getListCategories(){
      await getCategories()
        .then((res) => {
          this.categories = res;
        });
    },
    async getListTags(){
      await getTag()
        .then((res) => {
          this.tags = res;
        });
    },
    async getListPost(){
      var page = this.pagination.currentPage;
      await getPost({
        homepage: 'yes',
        page: page,
      })
        .then((res) => {
          this.posts = res.data;
          this.pagination.currentPage = res.meta.current_page;
          this.pagination.perPage = res.meta.per_page;
          this.pagination.total_row = res.meta.total;
        });
    },
    async openDetailPopUp(item){
      await getOnePost(item)
        .then((res) => {
          this.post.title = res.title;
          this.post.picture = res.picture;
          this.post.body = res.body;
        });
      this.$refs['singlePost'].show();
    },
  },
};
</script>

<style>
.silde{
  margin-bottom: 10px;
}
@media only screen and (max-width: 3000px){
  .body_post{
  max-width: 1200px;
  overflow: hidden;
  text-overflow: ellipsis;
  line-height: 25px;
  -webkit-line-clamp: 5;
  height: 75px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
}
}
@media only screen and (max-width: 1366px){
.body_post{
  max-width: 600px;
  overflow: hidden;
  text-overflow: ellipsis;
  line-height: 25px;
  -webkit-line-clamp: 5;
  height: 75px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
}
}
img.card-img-left{
  width: 40%;
}
img.img-fluid.w-100.d-block{
  -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
}
.responsive-map-container{
  position: relative;
  padding-bottom: 65.25%;
  padding-top: 30px;
  height: 0;
  overflow: hidden;
}
.foot{
  background-color: #343a40;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.hp_main{
  margin: 0 auto;
}
.opening{
  background-image: url('http://dexam-vue.ui-lib.com/img/Bg_08.cbbf6fd1.png');
  padding: 20vh 0;
  background-size: cover;
  text-align: center;
  font-size: 42px;
  font-weight: 18px;
  color: #fff;
}
.opening  ::after{
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  position:absolute;
  top: 0;
  left: 0;
  background-color: #242425!important ;
  z-index: -1  ;
}
.red{
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  backface-visibility: hidden;
  display: block;
  overflow: hidden;
}
b-card b-card-group{
  margin-bottom: 5px ;
}
.card-deck1{
  margin-top: 5px;
  margin-bottom: 5px;
}
.page-item.active .page-link{
  background-color:#343a40 ;
  border-color:#343a40 ;
}
.pagination{
  justify-content: center;
}
:root {
  --shadow-color: #0b064b;
  --shadow-color-light: white;
}
.po {
  font-size: 65px;
  text-transform: uppercase;
  font-family: "Archivo Black", "Archivo", sans-serif;
  font-weight: normal;
  display: block;
  height: auto;
  text-align: center;
}
.topFoot{
  background-color: #343a40;
}
.logo-1 {
  color: white;
  animation: neon 3s infinite;
}
h3{
  color: #fff;
}

@keyframes neon {
  0% {
    text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
    0 0 3px var(--shadow-color-light), 0 0 10px var(--shadow-color-light), 0 0 20px var(--shadow-color-light),
    0 0 30px var(--shadow-color), 0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 70px var(--shadow-color), 0 0 100px var(--shadow-color), 0 0 200px var(--shadow-color);
  }
  50% {
    text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
    0 0 5px var(--shadow-color-light), 0 0 15px var(--shadow-color-light), 0 0 25px var(--shadow-color-light),
    0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 60px var(--shadow-color), 0 0 80px var(--shadow-color), 0 0 110px var(--shadow-color), 0 0 210px var(--shadow-color);
  }
  100% {
    text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
    0 0 3px var(--shadow-color-light), 0 0 10px var(--shadow-color-light), 0 0 20px var(--shadow-color-light),
    0 0 30px var(--shadow-color), 0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 70px var(--shadow-color), 0 0 100px var(--shadow-color), 0 0 200px var(--shadow-color);
  }
}
</style>
