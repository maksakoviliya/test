<template>
	<div class="list-group" v-if="!success">
		<router-link :to="{ name: 'category', params: {slug: category.slug} }" v-for="category in categories" :key="category.id"
									class="list-group-item list-group-item-action">
			{{ category.name }}
		</router-link>
	</div>
</template>
<script>
export default {
    data () {
      return {
        success: '',
        categories: []
      }
    },
    mounted() {
        this.fetchData()
    },
    methods: {
        fetchData() {
            axios.get('/api/categories')
            .then(response => {
                // handle success
                this.categories = response.data.categories
                this.success = response.data.success
            })
            .catch(error => {
                // handle error
                console.log(error);
            })
        }
    }

  }
</script>
