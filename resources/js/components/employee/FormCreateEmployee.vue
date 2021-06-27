<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Agregar Trabajador</div>

          <div class="card-body">
            <form @submit.prevent="addEmployee">
              <input
                type="text"
                class="form-control mb-2"
                placeholder="Nombre"
                v-model="form.name"
              />
              <div class="alert alert-danger" v-if="errors && errors.name">
                {{ errors.name[0] }}
              </div>

              <input
                type="text"
                class="form-control mb-2"
                placeholder="Apellidos"
                v-model="form.last_name"
              />
              <div class="alert alert-danger" v-if="errors && errors.last_name">
                {{ errors.last_name[0] }}
              </div>
              <input
                type="text"
                class="form-control mb-2"
                placeholder="DNI"
                v-model="form.dni"
              />
              <div class="alert alert-danger" v-if="errors && errors.dni">
                {{ errors.dni[0] }}
              </div>
              <input
                type="date"
                class="form-control mb-2"
                placeholder="Fecha de nacimiento"
                v-model="form.born_date"
              />
              <div class="alert alert-danger" v-if="errors && errors.born_date">
                {{ errors.born_date[0] }}
              </div>
              <input
                type="text"
                class="form-control mb-2"
                placeholder="Direccion"
                v-model="form.address"
              />
              <div class="alert alert-danger" v-if="errors && errors.address">
                {{ errors.address[0] }}
              </div>
              <input
                type="file"
                class="form-control mb-2"
                placeholder="Foto de perfil"
                accept="image/*"
                @change="uploadImage($event)"
              />
              <div class="alert alert-danger" v-if="errors && errors.photo_url">
                {{ errors.photo_url[0] }}
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
        last_name: "",
        dni: "",
        born_date: "",
        address: "",
        photo_url: null,
      },
      errors: {},
    };
  },
  methods: {
    uploadImage(event) {
      this.form.photo_url = event.target.files[0];
    },

    addEmployee() {
      this.errors = {};

      let form = new FormData();
      for (let key in this.form) {
        form.append(key, this.form[key]);
      }

      axios
        .post("/employee", form)
        .then((response) => {
          window.location.href = response.data.employee_id;
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