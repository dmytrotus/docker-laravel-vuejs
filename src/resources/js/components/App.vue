<template>
	<div>
		<ProductsSearch
		@new-products="products" />
		<div class="mb-3 text-center row">
		  <ProductsList
		  data="produsscts"
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
			products(products) {
				console.log(products)
			}
		}
    }
</script>