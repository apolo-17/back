<template>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">DNI</th>
          <th></th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(employee, index) in employees" :key="index">
          <th scope="row">
            {{ employee.id }}
          </th>
          <td>{{ employee.name }}</td>
          <td>{{ employee.last_name }}</td>
          <td>{{ employee.dni }}</td>
          <td>
            <img
              :src="'../storage/' + employee.photo_url"
              class="rounded-circle profile"
              alt=""
            />
          </td>
          <td><a :href="'employee/' + employee.id">Ver</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ["employees"],
};
</script>
<style scoped>
.profile {
  width: 75px;
  height: 75px;
}
</style>