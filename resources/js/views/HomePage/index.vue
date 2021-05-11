<template>
  <div class="hp_main">
    <b-aspect aspect="16:9" class="hp_main">
      <div>
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
              <div v-for="item in posts" :key="item.id">

                <b-list-group-item href="#" class="flex-column align-items-start">
                  <b-row>
                    <b-col cols="3">
                      <b-img thumbnail fluid :src="item.picture" :alt="item.title" />
                    </b-col>
                    <b-col cols="9">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ item.title }} </h5>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1 body_post" v-html="item.body" />
                      <b-button size="sm" class="mr-2" @click="openDetailPopUp(item.id)">
                        See Detail
                      </b-button>
                    </b-col>
                  </b-row>
                </b-list-group-item>

                <br>
              </div>
              <b-pagination
                v-model="pagination.currentPage"
                class="pagianation"
                :total-rows="pagination.total_row"
                :per-page="pagination.perPage"
                aria-controls="my-table"
              />
            </b-card>
          </b-card-group></b-col>
        <b-col sm="4">
          <b-card-group deck>
            <b-card thumbnail img-src="https://lh3.googleusercontent.com/f6R5Jyh_iFbilUfzcNKZQ8rgOmZjzz2ao1XQG0OgYPiTx45XS4Jv8JyZfmKf6IrBViqVRvUOm_oYn7ipgIp8Zb8d9baJ8fVB9s0_v7-rjvPi7oVabcM_MLG9uxd2zCX5fNcKOl6_zGbN-LH5c7r7vzvXBTsfZVN3zQhq-Vp1HQXWdZLH2mKJ_BKqLqn_p8yczgzlvOaxzIMY4WEyX1vT5b87EGpGDjSuitu30GPCDrQ-elJ1eaJY2F2wNSBOSaU7Nlxka91qpL6Ilw-rwsoKBauaKUmtnUtoeqhJPAcHDJu-U_IfDQIvI-WKghtxYRefPH-R6T9nj2PnghjqnVz9ScuGqk_fyw6P2RByRhsndAll_mq4Fk3cr2QD6uDmz0yUtI4FydN3yD5APE68ErO6wHNltopqp4s_3JcGUc1ddOlpO_FmsAqDcae_dfkT4AnrkIc8sxeUjhD1d3wtS4d5zzrecNbyHeOuiWeJ29m_ygBSosVZnYJKsdUyHXy6ngO5CLv5Fye1ZhsMbHXdf2wi3TBgsz6YMeAyip7vEiEtvKy53qgg6pKD4IyAht-ViOeIR_a6YZNEyFVn4nmX8mWvtir03odcUO8xOwG1zR-xH6L4ITvdLsthz3Zj7OwcbTWff4niI6sPG1delMeHiG6s9iCA4HWOH89PdTifMPfwHlYjoq3UTDNtBkd1SrJXDEiQo3DbKtP-PDJk30rEYm_Mp_w=w1454-h969-no?authuser=0" img-alt="Card image" img-top>
              <b-card-text>
                Sống hết mình đi các bạn!
              </b-card-text>
            </b-card>
          </b-card-group>
          <b-card-group deck>
            <b-card no-body header="Tags">

              <b-list-group flush>
                <div v-for="item in tags" :key="item.id">
                  <b-list-group-item href="#">{{ item.name }}</b-list-group-item>
                </div>
              </b-list-group>

            </b-card>
          </b-card-group>
          <b-card-group deck>
            <b-card no-body header="Categories">

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
      <!-- footer -->
      <footer>
        <div class="foot">
          <b-row>
            <b-col cols="4">
              <center>
                <!-- insert map -->
                <!-- using a responsive iframe -->
                <div class="responsive-map-container">
                  <!-- place the iframe code between here... -->
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d931.1784728038649!2d105.78082212925166!3d21.004102901120508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x31345352cf1903af%3A0xb4800e4a2b41a6eb!2zTmfDtSAyIMSQ4bqhaSBM4buZIFRoxINuZyBMb25nLCBN4buFIFRyw6wsIE5hbSBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!3m2!1d21.004295!2d105.7815727!4m5!1s0x31345352c785f743%3A0x3bea251b5eca4ad0!2zQ8ahIFPhu58gQ8ahIEtow60gWHXDom4gQ2hpLCAyMCDEkENUMDgsIE3hu4UgVHLDrCwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!3m2!1d21.0039083!2d105.78119509999999!5e0!3m2!1svi!2s!4v1619711772503!5m2!1svi!2s"
                    width="425"
                    height="350"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    loading="lazy"
                    class="iframe"
                  />
                  <!-- ... and here -->
                </div>
                <!-- /insert map -->
              </center>
            </b-col>
            <b-col cols="4">
              <center>
                <div class="responsive-map-container">
                  <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=54" alt="Image 1" />
                </div>
              </center>
            </b-col>
            <b-col cols="4">
              <div class="responsive-map-container">
                <b-card header="Card with list group">
                  <b-list-group>
                    <b-list-group-item href="#" variant="dark">Cras justo odio</b-list-group-item>
                    <b-list-group-item href="#" variant="dark">Dapibus ac facilisis in</b-list-group-item>
                    <b-list-group-item href="#" variant="dark">Vestibulum at eros</b-list-group-item>
                  </b-list-group>

                  <p class="card-text mt-2">
                    Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum
                    consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur
                    mollit voluptate est in duis laboris ad sit ipsum anim Lorem.
                  </p>
                </b-card>
              </div>

            </b-col>
          </b-row>
        </div>
      </footer>
    </b-aspect>
    <b-modal
      ref="singlePost"
      hide-footer
      :title="title_modal"
      size="xl"
    >
      <h3>{{ post.title }}</h3>
      <div>
        <b-img :src="post.picture" fluid alt="Responsive image" />
      </div>
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
    };
  },
  created(){
    this.getListCategories();
    this.getListTags();
    this.getListPost();
  },
  methods: {
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
  padding: 5px;
}
.hp_main{
  margin: 0 auto;
}
</style>
