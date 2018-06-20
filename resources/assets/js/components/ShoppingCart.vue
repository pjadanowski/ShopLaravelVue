<template>
    <div id="cart-container">
        <div class="" style="text-align:center">Your Cart</div>

        <div class="card">
            <div class="list-group">
                <li class="media" v-for="item in items">
                    <img class="mr-3"
                         :src="item.image"
                         :key="item.name"
                         :height="50"
                    >

                    <div class="media-body">
                        <h5 class="mt-0 mb-1">{{ item.name }}</h5>
                        Quantity: {{ item.quantity }} &nbsp; - &nbsp;{{ item.price  }}


                        <button type="button" class="close" aria-label="Close"
                                @click="removeItem(item)"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </li>
            </div>

            <shopping-cart-totals></shopping-cart-totals>


            <button class="btn btn-outline-success"
                    v-if="item_count > 0"
                    @click.native.stop="checkout()"
            >
                Check out
            </button>


        </div>

        <!--<s-checkout-dialog v-model="checkoutDialog">-->
        <!--</s-checkout-dialog>-->

    </div>
</template>


<script>
    export default {

        data() {
            return {
                checkoutDialog: false,
            }
        },

        computed: {
            items() {
                return this.$store.getters.cartItems
            },
            item_count() {
                return this.$store.getters.cartItemCount
            },
        },

        methods: {

            removeItem(item) {
                this.$store.dispatch('removeItemFromCart', item);
            },

            checkout() {
                this.checkoutDialog = true;
            }

        },


    }
</script>

<style scoped>
    #cart-container{
        /*display: flex;*/
        width: 350px;
        position: fixed;
        margin-left: auto;
    }
</style>