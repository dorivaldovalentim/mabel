<template>
  <div class="landing">
    <div class="container">
      <div class="container-content">
        <div class="container-logo">
          <img
            :src="getImage('logo_red_black_without_legend.png')"
            alt=""
            class="logo"
          />
        </div>

        <h1 class="container-title">Olá e seja <span>bem-vindo ❤</span></h1>
        <router-link :to="{ name: 'portfolio' }" class="container-start-button"
          >Começar</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>