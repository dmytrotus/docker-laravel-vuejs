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
			//this.$emit('searchProducts', searchProducts({searchphrase: this.searchphrase}));

			this.$emit('searchphrase', this.searchphrase);
		}
	},
	data() {
		return {
			searchphrase: ''
		}
	}
}
</script>