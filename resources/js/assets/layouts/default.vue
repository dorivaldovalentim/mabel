<template>
  <div>
    <transition
      name="custom-classes-transition"
      enter-active-class="animate__animated animate__slideInRight"
      leave-active-class="animate__animated animate__slideOutLeft"
      :duration="{ enter: 1000, leave: 1000 }"
    >
      <router-view></router-view>
    </transition>
  </div>
</template>

<script>
import MenuComponent from "../components/MenuComponent.vue";

export default {
  components: { MenuComponent },

  mounted() {
    console.log("Ola");
  },
};
</script>

<style>
</style>