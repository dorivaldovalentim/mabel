<template>
  <main>
		<router-view></router-view>
  </main>
</template>

<script>
import './../static/css/fonts.css';
import './../static/css/style.css';
import MenuComponent from "../components/MenuComponent.vue";
export default {
  components: { MenuComponent },
};
</script>

<style>
</style>