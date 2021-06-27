<template>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Importancia</th>
          <th scope="col">Es jefe ?</th>
          <th scope="col">Categoria</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(job, index) in job_titles" :key="index">
          <td>{{ job.name }}</td>
          <td>{{ job.importance }}</td>
          <td>{{ job.is_boss }}</td>
          <td>{{ job.category.name }}</td>
          <td><a :href="'job-title/' + job.id">Ver</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
  </div>
</template>
<script>
export default {
  props: ["job_titles"],
};
</script>