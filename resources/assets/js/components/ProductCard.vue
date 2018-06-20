<template>

    <div class="card">
        <img class="card-img-top"
             :src="product.image"
        >


        <div class="card-body">
            <h5 class="card-title">  {{ product.name }} </h5>
            <p class="card-text">
                {{product.description.substring(0,100) }} ...
            </p>
            <p>
                {{ product.price  }} &nbsp; - &nbsp;
                Stock: {{product.inventory}}
            </p>



            <!--<a href="#" class="btn btn-primary"-->
               <!--v-if="product.inventory > 0"-->
               <!--@click="addToCart(product)"-->
            <!--&gt;Add to Cart</a>-->


            <form v-on:submit.prevent="addToCart(product)" action="" method="POST">
                <!--{{ csrf_field() }}-->
                <input type="hidden" name="id" :value="product.id">
                <input type="hidden" name="name" :value="product.name">
                <input type="hidden" name="price" :value="product.price">
                <button type="submit" class="button button-plain">Add to Cart</button>
            </form>



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
                name: '',
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
