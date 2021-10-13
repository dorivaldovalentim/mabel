<template>
  <div>
		<router-view></router-view>
  </div>
</template>

<script>
import MenuComponent from "../components/MenuComponent.vue";

export default {
  components: { MenuComponent },

  mounted() {
    console.log('Ola');
  }
};
</script>

<style>
</style>