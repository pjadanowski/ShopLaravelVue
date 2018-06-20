<template>

    <div>

        Filter
        <input type="text"
               id="product-search"
               label="Search"
               v-model="filter">

        <div class="row">

            <div class="col-md-4 col-sm-12"
                v-for="item in filteredProducts"
                :key="item.id">

                <product-card :product="item"></product-card>

            </div>


        </div>


    </div>

</template>


<script>
    export default {

        data() {
            return {
                filter: '',
            };
        },

        computed: {
            products() { return this.$store.getters.products },

            filteredProducts() {
                return this.products.filter((product) => {
                    return (! this.filter.length )
                        || product.name.toLowerCase()
                            .includes(this.filter.toLowerCase())
                        || product.description.toLowerCase()
                            .includes(this.filter.toLowerCase());
                })
            }
        },

    }
</script>
