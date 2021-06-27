<template>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Identificador</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(entity, index) in entities" :key="index">
          <th scope="row">
            {{ entity.id }}
          </th>
          <td>{{ entity.name }}</td>
          <td>{{ entity.identifier }}</td>
          <td><a :href="'entity/' + entity.id">Ver</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
  props: ["entities"],
};
</script>