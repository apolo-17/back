<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Trabajador Registrado</div>

          <div class="card-body">
            <div>
              <img
                :src="'../storage/' + employee.photo_url"
                class="img-thumbnail"
                alt=""
              />
            </div>
            <label>Nombre</label>
            <div class="alert alert-secondary mb-2">{{ employee.name }}</div>

            <label>Apellidos</label>
            <div class="alert alert-secondary mb-2">
              {{ employee.last_name }}
            </div>

            <label>DNI</label>
            <div class="alert alert-secondary mb-2">{{ employee.dni }}</div>

            <label>Fecha de nacimiento</label>
            <div class="alert alert-secondary mb-2">
              {{ employee.born_date }}
            </div>

            <label>Dirección</label>
            <div class="alert alert-secondary mb-2">{{ employee.address }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["employee"],
};
</script>