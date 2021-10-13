<template>
  <section class="portfolio-page">
    <div class="portfolio-container">
      <div class="row mx-0" style="width: 100%">
        <router-link
          :to="{ name: 'portfolio.show', params: { id: portfolio.id } }"
          class="
            portfolio-item
            col-lg-3 col-md-4 col-sm-6 col-12
            px-0
            text-white
          "
          v-for="(portfolio, index) in portfolios"
          v-bind:key="index"
        >
          <div class="portfolio-item-container d-flex">
            <img
              :src="portfolio.file"
              alt=""
              v-if="portfolio.file_type == 'image'"
            />
            <video
              :src="portfolio.file"
              alt=""
              v-if="portfolio.file_type == 'video'"
              autoplay
              muted
              loop
            ></video>
            <div
              class="content d-flex justify-content-center align-items-center"
            >
              <span class="title">{{ portfolio.name }}</span>
            </div>
          </div>
        </router-link>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      portfolios: [],
    };
  },

  mounted() {
    axios
      .get("./api/portfolios")
      .then((response) => {
        this.portfolios = response.data.portfolios;
      })
      .catch((error) => console.log(error));
  },
};
</script>

<style lang="scss">
@import "./../static/scss/responsive.scss";

.portfolio-page {
  .portfolio-item {
    min-height: 200px;
    text-decoration: none;

    .portfolio-item-container {
      width: 100%;
      height: 100%;
      overflow: hidden;
      position: relative;

      video,
      img {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        object-fit: cover;
        transition: all 500ms;
      }

      &:hover {
        .content {
          opacity: 1;
        }

        video, img {
          transform: scale(1.3) rotate(10deg);
        }
      }

      .content {
        opacity: 0;
        z-index: 10;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        transition: all 500ms;

        .title {
          font-size: 20pt;
        }
      }
    }
  }
}
</style>