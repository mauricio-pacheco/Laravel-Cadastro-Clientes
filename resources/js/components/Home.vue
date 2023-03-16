<template>
    <div>
      <h1>Componente VUE JS!</h1>
      <h2>{{ devName }}</h2>
    </div>
</template>

<script>
  export default {
    setup: () => ({
      devName: "Maurício Pacheco",
    }),
  };
</script>

<style scoped>
/* CSS Here! */
</style>
