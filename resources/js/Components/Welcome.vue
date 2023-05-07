<template>
  <div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Monto</th>
          <th>Fecha de vencimiento</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="deuda in deudas" :key="deuda.id">
          <td>{{ deuda.id }}</td>
          <td>{{ deuda.nombre_deudor }}</td>
          <td>{{ deuda.descripcion }}</td>
          <td>{{ deuda.monto }}</td>
          <td>{{ deuda.fecha_vencimiento }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      deudas: [],
    };
  },
  mounted() {
    fetch('/deudas')
      .then(response => response.json())
      .then(data => {
        this.deudas = data;
      });
  },
};
</script>
