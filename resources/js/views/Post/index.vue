<template>
  <div>
    <div class="container">
      <b-modal
        ref="create"
        hide-footer
        :title="title_modal"
        size="xl"
      >
        <b-row>
          <b-col>
            <div>
              <b-form-group label="Tag" label-for="tags-with-dropdown">
                <b-form-tags id="tags-with-dropdown" v-model="value_tag" no-outer-focus class="mb-2">
                  <template #default="{ tags, disabled, addTag, removeTag }">
                    <ul v-if="tags.length > 0" class="list-inline d-inline-block mb-2">
                      <li v-for="tag in tags" :key="tag" class="list-inline-item">
                        <b-form-tag
                          :title="tag"
                          :disabled="disabled"
                          variant="info"
                          @remove="removeTag(tag)"
                        >{{ tag }}</b-form-tag>
                      </li>
                    </ul>

                    <b-dropdown size="sm" variant="outline-secondary" block menu-class="w-100">
                      <template #button-content>
                        <b-icon icon="tag-fill" /> Choose tags
                      </template>
                      <b-dropdown-form @submit.stop.prevent="() => {}">
                        <b-form-group
                          label="Search tags"
                          label-for="tag-search-input"
                          label-cols-md="auto"
                          class="mb-0"
                          label-size="sm"
                          :description="searchDesc_tag"
                          :disabled="disabled"
                        >
                          <b-form-input
                            id="tag-search-input"
                            v-model="search_tag"
                            type="search"
                            size="sm"
                            autocomplete="off"
                          />
                        </b-form-group>
                      </b-dropdown-form>
                      <b-dropdown-divider />
                      <b-dropdown-item-button
                        v-for="option in availableOptions_tag"
                        :key="option"
                        @click="onOptionClick({ option, addTag })"
                      >
                        {{ option }}
                      </b-dropdown-item-button>
                      <b-dropdown-text v-if="availableOptions_tag.length === 0">
                        There are no tags available to select
                      </b-dropdown-text>
                    </b-dropdown>
                  </template>
                </b-form-tags>
              </b-form-group>
            </div>
          </b-col>
          <b-col>
            <div>
              <b-form-group label="Category" label-for="tags-with-dropdown">
                <b-form-tags id="tags-with-dropdown" v-model="value_categories" no-outer-focus class="mb-2">
                  <template #default="{ tags, disabled, addTag, removeTag }">
                    <ul v-if="tags.length > 0" class="list-inline d-inline-block mb-2">
                      <li v-for="tag in tags" :key="tag" class="list-inline-item">
                        <b-form-tag
                          :title="tag"
                          :disabled="disabled"
                          variant="info"
                          @remove="removeTag(tag)"
                        >{{ tag }}</b-form-tag>
                      </li>
                    </ul>

                    <b-dropdown size="sm" variant="outline-secondary" block menu-class="w-100">
                      <template #button-content>
                        <b-icon icon="tag-fill" /> Choose categories
                      </template>
                      <b-dropdown-form @submit.stop.prevent="() => {}">
                        <b-form-group
                          label="Search tags"
                          label-for="tag-search-input"
                          label-cols-md="auto"
                          class="mb-0"
                          label-size="sm"
                          :description="searchDesc_categories"
                          :disabled="disabled"
                        >
                          <b-form-input
                            id="tag-search-input"
                            v-model="search_categories"
                            type="search"
                            size="sm"
                            autocomplete="off"
                          />
                        </b-form-group>
                      </b-dropdown-form>
                      <b-dropdown-divider />
                      <b-dropdown-item-button
                        v-for="option in availableOptions_categories"
                        :key="option"
                        @click="onOptionClick({ option, addTag })"
                      >
                        {{ option }}
                      </b-dropdown-item-button>
                      <b-dropdown-text v-if="availableOptions_categories.length === 0">
                        There are no tags available to select
                      </b-dropdown-text>
                    </b-dropdown>
                  </template>
                </b-form-tags>
              </b-form-group>
            </div>
          </b-col>
        </b-row>
        <b-card>
          <b-form-group
            id="input-group-title"
            label="Title"
            label-for="current-title"
          >
            <b-form-input
              id="current-title"
              v-model="title"
              required
              placeholder="Title"
            />
          </b-form-group>
        </b-card>
        <b-card>
          <ckeditor v-model="body" />
        </b-card>
        <div v-if="createOrUpdate === 'create'">
          <b-button size="sm" class="mr-2" @click="handleCreate()">
            Create
          </b-button>
        </div>
        <div v-if="createOrUpdate === 'update'">
          <b-button size="sm" class="mr-2" @click="handleEdit()">
            Update
          </b-button>
        </div>
      </b-modal>
      <b-modal
        ref="detail"
        hide-footer
        title="Detail Post"
        size="xl"
      >
        <div v-html="body" />
      </b-modal>
      <b-modal
        ref="delete"
        hide-footer
        title="Delete Post"
      >
        <b-card>
          <h1>Xóa nhé?</h1>
          <b-button size="sm" class="mr-2" @click="handleDelete(id)">
            OK
          </b-button>
        </b-card>
      </b-modal>
      <b-card border-variant="primary" style="max-height: 940px;">
        <b-button size="sm" class="mr-2" @click="openCreate()">
          Create
        </b-button>
        <b-table
          sticky-header
          :items="items"
          :fields="fields"
          striped
          head-variant="light"
          responsive
          bordered
          :outlined="false"
          :small="false"
          class="display-table"
          :fixed="false"
          foot-variant="light"
        >
          <template #cell(option)="row">
            <b-button size="sm" class="mr-2" @click="openDetailPopUp(row.item)">
              Details
            </b-button>

            <b-button size="sm" class="mr-2" @click="openUpdatePopUp(row.item.id)">
              Update
            </b-button>

            <b-button size="sm" class="mr-2" @click="openDeletePopUp(row.item.id)">
              Delete
            </b-button>
          </template>
        </b-table>
        <center>
          <b-pagination
            v-model="pagination.currentPage"
            class="pagianation"
            :total-rows="pagination.total_row"
            :per-page="pagination.perPage"
            aria-controls="my-table"
          />
        </center>
      </b-card>
    </div>
  </div>
</template>

<script>
import { createPost, getPost, getOnePost, updatePost, deletePost } from '@/api/post_API';
import { getTag } from '@/api/tags_API';
import { getCategories } from '@/api/categories_API';
import { MakeToast } from '@/utils/toast_message';
export default {
  data() {
    return {
      fields: ['id', 'title', 'option'],
      items: [],
      category: {
        id: '',
        name: '',
      },
      options_tag: [],
      lisTagDefault: [],
      ListCategoriesDefault: [],
      options_categories: [],
      search_tag: '',
      search_categories: '',
      value_tag: [],
      value_categories: [],
      title: '',
      body: '',
      id: '',
      pagination: {
        perPage: 3,
        currentPage: 1,
        total_row: 10,
      },
      createOrUpdate: '',
      title_modal: '',

    };
  },
  computed: {
    isCurrentPageChange() {
      return this.pagination.currentPage;
    },
    criteria_tag() {
      // Compute the search criteria
      return this.search_tag.trim().toLowerCase();
    },
    criteria_categories() {
      // Compute the search criteria
      return this.search_categories.trim().toLowerCase();
    },
    availableOptions_tag() {
      const criteria = this.criteria_tag;
      // Filter out already selected options
      const options = this.options_tag.filter(opt => this.value_tag.indexOf(opt) === -1);
      if (criteria) {
        // Show only options that match criteria
        return options.filter(opt => opt.toLowerCase().indexOf(criteria) > -1);
      }
      // Show all options available
      return options;
    },
    availableOptions_categories() {
      const criteria = this.criteria_categories;
      // Filter out already selected options
      const options = this.options_categories.filter(opt => this.value_categories.indexOf(opt) === -1);
      if (criteria) {
        // Show only options that match criteria
        return options.filter(opt => opt.toLowerCase().indexOf(criteria) > -1);
      }
      // Show all options available
      return options;
    },
    searchDesc_categories() {
      if (this.criteria_categories && this.availableOptions_categories.length === 0) {
        return 'There are no tags matching your search criteria';
      }
      return '';
    },
    searchDesc_tag() {
      if (this.criteria_tag && this.availableOptions_tag.length === 0) {
        return 'There are no tags matching your search criteria';
      }
      return '';
    },
  },
  watch: {
    isCurrentPageChange() {
      this.getListPost();
    },
  },
  created(){
    this.getListTag();
    this.getListCategories();
    this.getListPost();
  },
  methods: {
    onOptionClick({ option, addTag }) {
      addTag(option);
      this.search = '';
    },
    async getListCategories(){
      await getCategories()
        .then((res) => {
          this.ListCategoriesDefault = res;
          var option_categories = [];
          this.options_categories = res.filter(name_tag => {
            option_categories.push(name_tag.name);
            return option_categories;
          });
          this.options_categories = option_categories;
        });
    },
    async getListTag(){
      await getTag()
        .then((res) => {
          this.lisTagDefault = res;
          for (let i = 0; i < res.length; i++){
            this.options_tag.push(res[i].name);
          }
        });
    },
    async getListPost(){
      var page = this.pagination.currentPage;
      await getPost({ page: page })
        .then((res) => {
          this.items = res.data;
          this.pagination.currentPage = res.meta.current_page;
          this.pagination.perPage = res.meta.per_page;
          this.pagination.total_row = res.meta.total;
        });
    },
    openDetailPopUp(item){
      this.category.id = item.id;
      this.category.name = item.name;
      this.$refs['detail'].show();
    },
    async openUpdatePopUp(item){
      this.title_modal = 'Edit Post';
      this.resetFeild();
      this.createOrUpdate = 'update';
      await getOnePost(item)
        .then((res) => {
          this.title = res.title;
          this.body = res.body;
          this.id = item;
          for (let i = 0; i < res.tags.length; i++){
            this.value_tag.push(res.tags[i].name);
          }
          for (let i = 0; i < res.categories.length; i++){
            this.value_categories.push(res.categories[i].name);
          }
          this.$refs['create'].show();
        });
    },
    resetFeild(){
      this.title = '';
      this.body = '';
      this.value_tag = [];
      this.value_categories = [];
      this.id = '';
    },
    openCreate(){
      this.resetFeild();
      this.title_modal = 'Create Post';
      this.createOrUpdate = 'create';
      this.$refs['create'].show();
    },
    openDeletePopUp(value){
      this.id = value;
      this.$refs['delete'].show();
    },
    handleEdit(){
      var listTagClone = [];
      var listCategoriesClone = [];
      this.lisTagDefault.filter(tag => {
        for (let i = 0; i < this.value_tag.length; i++) {
          if (this.value_tag[i] === tag.name) {
            listTagClone.push(tag.id);
            return listTagClone;
          }
        }
      });
      this.ListCategoriesDefault.filter(cate => {
        for (let i = 0; i < this.value_tag.length; i++) {
          if (this.value_categories[i] === cate.name) {
            listCategoriesClone.push(cate.id);
            return listCategoriesClone;
          }
        }
      });
      var params = updatePost({
        title: this.title,
        body: this.body,
        categories: listCategoriesClone,
        tags: listTagClone,
      }, this.id);
      params.then(() => {
        this.resetFeild();
        this.getListPost();
        this.$refs['create'].hide();
        MakeToast({
          variant: 'success',
          title: 'Thành công',
          content: 'Cập nhật tag thành công',
          toaster: 'b-toaster-bottom-center',
        });
      });
    },
    async handleCreate(){
      var listTagClone = [];
      var listCategoriesClone = [];
      this.lisTagDefault.filter(tag => {
        for (let i = 0; i < this.value_tag.length; i++) {
          if (this.value_tag[i] === tag.name) {
            listTagClone.push(tag.id);
            return listTagClone;
          }
        }
      });
      this.ListCategoriesDefault.filter(cate => {
        for (let i = 0; i < this.value_tag.length; i++) {
          if (this.value_categories[i] === cate.name) {
            listCategoriesClone.push(cate.id);
            return listCategoriesClone;
          }
        }
      });
      await createPost({
        title: this.title,
        body: this.body,
        categories: listCategoriesClone,
        tags: listTagClone,
      })
        .then(() => {
          this.getListTag();
          this.$refs['create'].hide();
          MakeToast({
            variant: 'success',
            title: 'Thành công',
            content: ' Tạo post thành công',
            toaster: 'b-toaster-bottom-center',
          });
          this.title = '';
          this.body = '';
          this.value_categories = [];
          this.value_tag = [];
        });
    },
    async handleDelete(value){
      await deletePost(value)
        .then(() => {
          this.getListPost();
          this.$refs['delete'].hide();
          MakeToast({
            variant: 'success',
            title: 'Thành công',
            content: ' Xóa tag thành công',
            toaster: 'b-toaster-bottom-center',
          });
        });
    },
  },
};
</script>

<style>
.container{
  margin-top: 10px;
}
.btn{
  margin: 5px;
}
.table{
  width: 100%;
  justify-content: center;
}
.display-table {
  width: 95%;
  height: 550px;
  overflow: auto;
  margin: 0 auto;
  text-align: center;
}
.pagianation {
    display: flex;
    justify-content: center;
    vertical-align: middle;
    margin-top: 20px;
  }
</style>
