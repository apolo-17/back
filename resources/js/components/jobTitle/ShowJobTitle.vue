<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Entidad Registrada</div>

            <div class="card-body">
              <label>Nombre</label>
              <div class="alert alert-secondary mb-2">{{ job_title.name }}</div>

              <label>Nivel de importancia</label>
              <div class="alert alert-secondary mb-2">
                {{ job_title.importance }}
              </div>

              <label>Es jefe</label>
              <div class="alert alert-secondary mb-2">
                {{ job_title.is_boss ? "Si" : "No" }}
              </div>

              <label>categoria</label>
              <div class="alert alert-secondary mb-2">
                {{ job_title.category.name }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["job_title"],
};
</script>