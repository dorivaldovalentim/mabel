<template>
  <section class="portfolio-page">
    <div class="portfolio-container">
      <div class="row">
        <div
          class="portfolio-item p-0 m-0 col-lg-3 col-md-4 col-sm-6 col-12 bg-danger"
          v-for="(portfolio, index) in 16"
          v-bind:key="index"
        >
          Olá
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style lang="scss">
@import "./../static/scss/responsive.scss";
$height: 100vh / 4;

.portfolio-page {
  .portfolio-item {
    @include extra-large {
      height: calc(100vh / 4);
    }
    @include large {
      height: $height;
			width: $height;
    }
    @include medium {
      height: calc(100vh / 4);
    }
    @include small {
      height: calc(100vh / 4);
    }
    @include extra-small {
      height: calc(100vh / 4);
    }
  }
}
</style>