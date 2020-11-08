<template>
	<div>
		<ProductsSearch
		@searchphrase="searchProducts" />
		<div class="mb-3 text-center row">
		  <ProductsList
		  v-bind:products="products"
		  />
		</div>
	</div>
</template>

<script>
import ProductsSearch from './ProductsSearch';
import ProductsList from './ProductsList';

export default {
		components: {
		    ProductsSearch,
		    ProductsList
		},
		methods: {
			searchProducts(searchphrase){
              axios.post('/api/products', {searchphrase: searchphrase})
                     .then((response)=>{
                     	//console.log(response.data.data.data)
                        this.products = response.data.data.data
                     })
            },
            getProducts(){
                axios.get('/api/products')
                     .then((response)=>{
                        //console.log(response.data.data.data)
                       this.products = response.data.data.data
                     })
            }
		},
		data() {
            return {
              products: {},
            }
        },
        mounted() {
        	this.getProducts();
        }
    }
</script>