<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Entidad Registrada</div>

            <div class="card-body">
              <label>Nombre</label>
              <div class="alert alert-secondary mb-2">{{ entity.name }}</div>

              <label>Identificador</label>
              <div class="alert alert-secondary mb-2">
                {{ entity.identifier }}
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
  props: ["entity"],
};
</script>