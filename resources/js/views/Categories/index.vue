<template>
  <div>
    <div class="container">
      <b-card>
        <b-button size="sm" class="mr-2 btn" @click="openCreatePopUp()">
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

            <b-button size="sm" class="mr-2" @click="openUpdatePopUp(row.item)">
              Update
            </b-button>

            <b-button size="sm" class="mr-2" @click="openDeletePopUp(row.item.id)">
              Delete
            </b-button>
          </template>
        </b-table>
      </b-card>
    </div>
    <!-- modal open detail -->
    <b-modal ref="detail" hide-footer title="Deatil Category">
      <b-card>
        <b-row class="mb-2">
          <b-col sm="3" class="text-sm-right"><b>ID:</b></b-col>
          <b-col>{{ category.id }}</b-col>
        </b-row>

        <b-row class="mb-2">
          <b-col sm="3" class="text-sm-right"><b>Name:</b></b-col>
          <b-col>{{ category.name }}</b-col>
        </b-row>
      </b-card>

    </b-modal>
    <!-- modal edit -->
    <b-modal
      ref="edit"
      hide-footer
      title="Edit Category"
    >
      <b-card>
        <b-form-group
          id="input-group-edit"
          label="Name"
          label-for="current-name"
        >
          <b-form-input
            id="current-name"
            v-model="category.name"
            required
            placeholder="Name"
          />
          <b-button size="sm" class="mr-2" @click="handleEdit(category)">
            Update
          </b-button>
        </b-form-group>
      </b-card>

    </b-modal>
    <!-- modal created -->
    <b-modal
      ref="create"
      hide-footer
      title="Create Category"
    >
      <b-card>
        <b-form-group
          id="input-group-create"
          label="Name"
          label-for="current-name"
        >
          <b-form-input
            id="current-name"
            v-model="category.name"
            required
            placeholder="Name"
          />
          <b-button size="sm" class="mr-2" @click="handleCreate(category.name)">
            Create
          </b-button>
        </b-form-group>
      </b-card>

    </b-modal>
    <!-- delete modal -->
    <b-modal
      ref="delete"
      hide-footer
      title="Deletags Category"
    >
      <b-card>
        <h1>Xóa nhé?</h1>
        <b-button size="sm" class="mr-2" @click="handleDelete(category.id)">
          OK
        </b-button>
      </b-card>

    </b-modal>
  </div>
</template>

<script>
import { createCategories, getCategories, updateCategories, deleteCategories } from '@/api/categories_API';
import { MakeToast } from '@/utils/toast_message';
export default {
  data() {
    return {
      fields: ['id', 'name', 'option'],
      items: [],
      category: {
        id: '',
        name: '',
      },
    };
  },
  created(){
    this.getListTag();
  },
  methods: {
    async getListTag(){
      await getCategories()
        .then((res) => {
          this.items = res;
        });
    },
    openDetailPopUp(item){
      this.category.id = item.id;
      this.category.name = item.name;
      this.$refs['detail'].show();
    },
    openUpdatePopUp(item){
      this.category.id = item.id;
      this.category.name = item.name;
      this.$refs['edit'].show();
      this.category.name = item.name;
    },
    openCreatePopUp(){
      this.$refs['create'].show();
    },
    openDeletePopUp(value){
      this.category.id = value;
      this.$refs['delete'].show();
    },
    handleEdit(value){
      var params = updateCategories({
        id: value.id,
        name: value.name,
      });
      params.then(() => {
        this.getListTag();
        this.$refs['edit'].hide();
        MakeToast({
          variant: 'success',
          title: 'Thành công',
          content: 'Cập nhật tag thành công',
          toaster: 'b-toaster-bottom-center',
        });
      });
    },
    async handleCreate(value){
      await createCategories({
        name: value,
      })
        .then(() => {
          this.getListTag();
          this.$refs['create'].hide();
          MakeToast({
            variant: 'success',
            title: 'Thành công',
            content: ' Tạo tag thành công',
            toaster: 'b-toaster-bottom-center',
          });
        });
    },
    async handleDelete(value){
      await deleteCategories(value)
        .then(() => {
          this.getListTag();
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
</style>
