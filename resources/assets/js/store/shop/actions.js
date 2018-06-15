export const loadProducts = ({ commit }) => {
  axios.get('/api/products')
    .then((response) => {
      commit('LOAD_PRODUCTS', response.data);
        // console.log(response);
    })
    .catch((error) => {
      console.log('Error loading products');
      console.log(error);
      console.log(error.response);
    })
}

export const addItemToCart = ({ commit }, item) => {
  if (item.inventory > 0)
    commit('ADD_TO_CART', item.id);
}

export const removeItemFromCart = ({ commit }, item) => {
  commit('REMOVE_FROM_CART', item);
}
