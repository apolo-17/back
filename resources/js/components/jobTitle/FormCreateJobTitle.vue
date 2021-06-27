<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Agregar titulo de trabajador</div>
          <div class="card-body">
            <form @submit.prevent="addJobTitle">
              <label>Nombre</label>
              <input
                type="text"
                class="form-control mb-2"
                placeholder="Nombre"
                v-model="form.name"
              />
              <div class="alert alert-danger" v-if="errors && errors.name">
                {{ errors.name[0] }}
              </div>

              <label>Importancia</label>
              <select class="form-control mb-2" v-model="form.importance">
                <option v-for="importance in importances">
                  {{ importance }}
                </option>
              </select>
              <div
                class="alert alert-danger"
                v-if="errors && errors.importance"
              >
                {{ errors.is_boss[0] }}
              </div>

              <label>Es Jefe</label>
              <select class="form-control mb-2" v-model="form.is_boss">
                <option value="1">Si</option>
                <option value="2">No</option>
              </select>
              <div class="alert alert-danger" v-if="errors && errors.is_boss">
                {{ errors.is_boss[0] }}
              </div>

              <label>Categoria</label>
              <select class="form-control mb-2" v-model="form.category_id">
                <option
                  v-for="(category, index) in categories"
                  :key="index"
                  :value="category.id"
                >
                  {{ category.name }}
                </option>
              </select>
              <div class="alert alert-danger" v-if="errors && errors.is_boss">
                {{ errors.is_boss[0] }}
              </div>

              <button class="btn btn-primary" type="submit">Agregar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["categories", "importances"],
  data() {
    return {
      form: {
        name: "",
        importance: "",
        is_boss: "",
        category_id: "",
      },
      errors: {},
    };
  },

  methods: {
    addJobTitle() {
      this.errors = {};
      axios
        .post("/job-title", this.form)
        .then((response) => {
          window.location.href = response.data.job_title_id;
        })
        .catch((error) => {
          if (error.response.status === 422) {
            this.errors = error.response.data.errors;
          }
        });
    },
  },
};
</script>