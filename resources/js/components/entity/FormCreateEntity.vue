<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Agregar Trabajador</div>
          <div class="card-body">
            <form @submit.prevent="addEntity">
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
              <label>Identificador</label>
              <input
                type="text"
                class="form-control mb-2"
                placeholder="identificador"
                v-model="form.identifier"
              />
              <div
                class="alert alert-danger"
                v-if="errors && errors.identifier"
              >
                {{ errors.identifier[0] }}
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
  data() {
    return {
      form: {
        name: "",
        identifier: "",
      },
      errors: {},
    };
  },

  methods: {
    addEntity() {
      this.errors = {};
      axios
        .post("/entity", this.form)
        .then((response) => {
          window.location.href = response.data.entity_id;
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