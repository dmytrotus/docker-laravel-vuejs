<template>
    <fragment>
      <div v-for="product in products" :key="product.id" class="card col-md-4 mb-4 shadow-sm p-0 mb-1">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">{{ product.title }}</h4>
        </div>
        <div class="card-body">
          <h3>Product ID: {{ product.id }}</h3>
          <h1 class="card-title pricing-card-title">${{ product.price.price }}</h1>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Buy</button>
        </div>
      </div>
    </fragment>
</template>

<script>
    export default {
        data() {
            return {
              products: {},
            }
        },
        methods: {
            getProducts(){
                axios.get('/api/products')
                     .then((response)=>{
                        console.log(response.data.data.data)
                       this.products = response.data.data.data
                     })
            }
        },
        created() {
            this.getProducts()
        }
    }
</script>
