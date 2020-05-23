<!-- Modal Start -->
<div v-if="isProductModalShow" class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button @click="productModalClose" type="button" class="close custom-close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true"><i class="dl-icon-close"></i></span>
                </button>
                <div class="row">
                    <div class="col-md-6">
                        <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1"
                            data-slick-options='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "prevArrow": "dl-icon-left",
                            "nextArrow": "dl-icon-right"
                        }'>
                            <div class="product-image" v-for="(image, index) in modalProduct.images" :key="index">
                                <div class="product-image--holder">
                                    <a :href="modalProduct|productUrl">
                                        <img :src="image.lg_img|imgSrcUrl" :alt="modalProduct.title"
                                            :class="index === 0 ? 'primary-image': 'secondary-image'">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="modal-box product-summary">
                            <h3 class="product-title mb--15">@{{modalProduct.title}}</h3>
                            <span class="product-price-wrapper mb--20">
                                <span class="money">TK @{{ modalProduct.discounted_price }}</span>
                                <span class="product-price-old" v-if="modalProduct.discount > 0">
                                    <span class="money">TK @{{ modalProduct.price }}</span>
                                </span>
                            </span>
                            <p class="product-short-description mb--25 mb-md--20">
                                @{{modalProduct.sort_desc}}
                            </p>
                            <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">

                                <form @submit.prevent="productFormSubmit(modalProduct.id)"
                                    class="form--action mb--30 mb-sm--20">
                                    <div class="product-action flex-row align-items-center">
                                        <div class="d-flex product-input-box-style">
                                            <button class="btn btn-style-1" type="button" @click.prevent="qty--"
                                                :disabled="qty < 2">-</button>
                                            <output>@{{qty}}</output>
                                            <button class="btn btn-style-1" type="button" @click.prevent="qty++"
                                                :disabled="qty>=modalProduct.storage">+</button>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-style-1 btn-large add-to-cart">
                                                Add To Cart
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product-extra mb--30 mb-md--20">
                                <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near you</a>
                                <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and return</a>
                            </div>
                            <div
                                class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column flex-sm-row flex-column">
                                <div class="product-meta">
                                    <span class="posted_in font-size-12">Categories:
                                        <a
                                            :href="modalProduct.category.id|modalCategoryUrl">@{{ modalProduct.category.name }}</a>
                                    </span>
                                    <span class="posted_in font-size-12">Brands:
                                        <a
                                            :href="modalProduct.brand.id|modalBrandUrl">@{{ modalProduct.brand.name }}</a>
                                    </span>
                                </div>
                                <div class="product-share-box">
                                    <span class="font-size-12">Share With</span>
                                    <!-- Social Icons Start Here -->
                                    <ul class="social social-small">
                                        <li class="social__item">
                                            <a href="facebook.com" class="social__link">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="twitter.com" class="social__link">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="plus.google.com" class="social__link">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="plus.google.com" class="social__link">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Social Icons End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->