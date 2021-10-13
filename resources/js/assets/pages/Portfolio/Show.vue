<template>
  <section class="single-portfolio-page">
    <div class="container">
      <div class="back-section d-flex align-items-center py-4">
        <a href="#" @click.prevent.stop="$router.back()" class="btn-link">&lt;</a>
        <h2 class="mx-2 mb-0">{{ portfolio.name }}</h2>
      </div>

      <div class="row justify-content-between">
        <div class="col-md-6">
          <img
            :src="'/' + portfolio.file"
            alt=""
            v-if="portfolio.file_type == 'image'"
          />
          <video
            :src="'/' + portfolio.file"
            controls
            v-if="portfolio.file_type == 'video'"
          ></video>
        </div>

        <div class="col-md-5">
          <p>Cliente: {{ portfolio.client }}</p>
          <p>Tipo de portfólio: {{ portfolio.type }}</p>
          <p>
            Duração:
            {{
              portfolio.begins_at && portfolio.ends_at
                ? portfolio.begins_at + " - " + portfolio.ends_at
                : "não definida"
            }}
          </p>
          <p>{{ portfolio.description }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      id: this.$route.params.id,
      portfolio: {},
    };
  },

  mounted() {
    axios
      .get("/api/portfolios/show/" + this.id)
      .then((response) => {
        console.log(response);
        this.portfolio = response.data.portfolio;
      })
      .catch((error) => console.log(error));
  },
};
</script>

<style lang="scss">
.single-portfolio-page {
  .back-section {
    a {
      font: {
        size: 20pt;
        weight: bold;
      }
    }
  }

  video,
  img {
    width: 100%;
  }
}
</style>