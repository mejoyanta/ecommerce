import vue from "vue";
window.Vue = vue;
import Axios from "axios";
window.axios = Axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import Swal from "sweetalert2";
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: "top-start",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: false,
    onOpen: toast => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    }
});

window.Toast = Toast;

window.Fire = new Vue();

Vue.filter("imgSrcUrl", img => {
    return "/frontsite/assets/img/products/" + img;
});
Vue.filter("modalCategoryUrl", id => {
    return "/collections/" + id;
});
Vue.filter("modalBrandUrl", id => {
    return "/brands/" + id;
});
Vue.filter("productUrl", item => {
    return `/product/${item.id}/details`;
});
const app = new Vue({
    el: "#app",
    data: {
        cart: [],
        qty: 1,
        isProductModalShow: false,
        modalProduct: [],
        productDetails: 1
    },
    created() {
        this.getCart();
        Fire.$on("loadCart", () => {
            this.getCart();
        });
    },
    methods: {
        getCart() {
            axios.get("/cart-info").then(res => {
                this.cart = res.data;
            });
        },
        addItemToCart(id) {
            axios.post(`/cart/${id}/add`, { quantity: 1 }).then(res => {
                Fire.$emit("loadCart");
                Toast.fire({
                    icon: "success",
                    title: res.data.message
                });
                return;
            });
        },
        removeItemFromCart(item) {
            axios.delete("/cart/" + item.id).then(res => {
                if (res.data.status === "success") {
                    Fire.$emit("loadCart");
                    Toast.fire({
                        icon: "success",
                        title: res.data.message
                    });
                    return;
                }
            });
        },
        showProductModal(product) {
            this.modalProduct = product;
            this.isProductModalShow = true;
            this.qty = 1;
        },
        productModalClose() {
            this.modalProduct = [];
            this.isProductModalShow = false;
            this.qty = 1;
        },
        productFormSubmit(id) {
            console.log(id);
            axios.post(`/cart/${id}/add`, { quantity: this.qty }).then(res => {
                this.qty = 1;
                Fire.$emit("loadCart");
                Toast.fire({
                    icon: "success",
                    title: res.data.message
                });
                return;
            });
        },
        increaseCart(item) {
            axios.put("/cart-increase/" + item.id).then(res => {
                Fire.$emit("loadCart");
            });
        },
        decriseCart(item) {
            if (item.quantity <= 1) {
                Toast.fire({
                    icon: "info",
                    title: "Minimum quantity is 1"
                });
            }
            axios.put("/cart-decrese/" + item.id).then(res => {
                Fire.$emit("loadCart");
            });
        }
    }
});
