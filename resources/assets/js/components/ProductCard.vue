<template>

    <div class="card">
        <img class="card-img-top"
             :src="product.image"
        >


        <div class="card-body">
            <h5 class="card-title">  {{ product.title }} </h5>
            <p class="card-text">
                {{product.description.substring(0,100) }} ...
            </p>
            <p>
                {{ product.price  }} &nbsp; - &nbsp;
                Stock: {{product.inventory}}
            </p>



            <a href="#" class="btn btn-primary"
               v-if="product.inventory > 0"
               @click="addToCart(product)"
            >Add to Cart</a>

            <button class="btn btn-primary disabled"
                    v-if="product.inventory <= 0"
            >
                Sold out
            </button>
        </div>

    </div>

</template>

<script>
    export default {
        props: {
            product: {
                title: '',
                image: '',
                description: '',
                price: '',
                quantity: '',
            }
        },

        methods: {
            addToCart(item) {
                this.$store.dispatch('addItemToCart',item);
            }
        },

    }

</script>
