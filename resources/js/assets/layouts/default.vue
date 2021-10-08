<template>
  <main>
    <menu-component />
		<router-view></router-view>
  </main>
</template>

<script>
import MenuComponent from "../components/MenuComponent.vue";
export default {
  components: { MenuComponent },
};
</script>

<style>
</style>