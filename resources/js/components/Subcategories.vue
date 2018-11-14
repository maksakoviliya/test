<template>
  <div>
    <h2>{{ slug }}</h2>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-4 pb-4" v-for="subcat in subcats" :key="subcat.id">
        <div class="card">
          <img class="card-img-top" src="" alt="">
          <div class="card-body">
            <router-link :to="{ name: 'category', params: {slug: subcat.slug} }" class="card-link font-weight-bold">{{ subcat.name }}</router-link>
            <p class="card-text">{{ subcat.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        success: '',
        slug: '',
        subcats: []
      }
    },
    watch: {
      // при изменениях маршрута запрашиваем данные снова
      '$route': 'fetchData'
    },
    methods: {
      fetchData () {
        this.slug = this.$route.params.slug
        axios.get('/api/categories/' + this.slug)
        .then(response => {
          // handle success
          this.subcats = response.data.subcats
          this.success = response.data.success
        })
        .catch(error => {
          // handle error
          console.log(error);
        })
      }
    },
    mounted() {
      this.fetchData()
    }
  }
</script>