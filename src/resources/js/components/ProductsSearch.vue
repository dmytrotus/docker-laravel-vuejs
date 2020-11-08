<template>
<div class="col-12">
	<form @submit.prevent="onSubmit">
		<div class="form-group row">
	    	<input type="text" v-model="searchphrase" placeholder="Enter the Title of the product" class="form-control mb-1">
	      <button type="submit" class="btn btn-sm btn-primary m-auto w-75">Search</button>
	  	</div>
  </form>
</div>
</template>

<script>
export default {
	methods: {
		onSubmit() {
			//console.log(this.searchphrase)
			this.getProducts({searchphrase: this.searchphrase})
		},

		getProducts(data){
	            axios.post('/api/products', data)
		                 .then((response)=>{
		                    //console.log(response.data.data.data)
		                   this.$emit('new-products', response.data.data.data);
		                 })
	        }
	},
	data() {
		return {
			searchphrase: ''
		}
	}
}
</script>