<?php include_once 'includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="zxx">
<?php include_once 'includes/header.php'; ?>
<body>
<div class="main-wrapper main-wrapper-2">
    <?php include_once 'includes/navbar.php'; ?>
    <!-- mini cart start -->
    <?php
    $vendor_uid = isset($_COOKIE['naiz_web_vendor_uid']) ? $_COOKIE['naiz_web_vendor_uid'] : '';
    if ($vendor_uid != '') {
        $title = 'Product Details';
        include_once 'includes/templates/header_content.php'; ?>

        <?php include_once 'includes/templates/product_detail_content.php'; ?>
        <!--        <div class="related-product-area pb-95">-->
        <!--            <div class="container">-->
        <!--                <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">-->
        <!--                    <h2>Related Products</h2>-->
        <!--                </div>-->
        <!--                <div class="related-product-active swiper-container">-->
        <!--                    <div class="swiper-wrapper">-->
        <!--                        <div class="swiper-slide">-->
        <!--                            <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">-->
        <!--                                <div class="product-img img-zoom mb-25">-->
        <!--                                    <a href="product-details.html">-->
        <!--                                        <img src="assets/images/product/product-1.png" alt="">-->
        <!--                                    </a>-->
        <!--                                    <div class="product-badge badge-top badge-right badge-pink">-->
        <!--                                        <span>-10%</span>-->
        <!--                                    </div>-->
        <!--                                    <div class="product-action-wrap">-->
        <!--                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i>-->
        <!--                                        </button>-->
        <!--                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"-->
        <!--                                                data-bs-target="#exampleModal">-->
        <!--                                            <i class="pe-7s-look"></i>-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                    <div class="product-action-2-wrap">-->
        <!--                                        <button class="product-action-btn-2" title="Add To Cart"><i-->
        <!--                                                    class="pe-7s-cart"></i> Add to cart-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product-content">-->
        <!--                                    <h3><a href="product-details.html">New Modern Sofa Set</a></h3>-->
        <!--                                    <div class="product-price">-->
        <!--                                        <span class="old-price">$25.89 </span>-->
        <!--                                        <span class="new-price">$20.25 </span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="swiper-slide">-->
        <!--                            <div class="product-wrap" data-aos="fade-up" data-aos-delay="400">-->
        <!--                                <div class="product-img img-zoom mb-25">-->
        <!--                                    <a href="product-details.html">-->
        <!--                                        <img src="assets/images/product/product-2.png" alt="">-->
        <!--                                    </a>-->
        <!--                                    <div class="product-action-wrap">-->
        <!--                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i>-->
        <!--                                        </button>-->
        <!--                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"-->
        <!--                                                data-bs-target="#exampleModal">-->
        <!--                                            <i class="pe-7s-look"></i>-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                    <div class="product-action-2-wrap">-->
        <!--                                        <button class="product-action-btn-2" title="Add To Cart"><i-->
        <!--                                                    class="pe-7s-cart"></i> Add to cart-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product-content">-->
        <!--                                    <h3><a href="product-details.html">New Modern Sofa Set</a></h3>-->
        <!--                                    <div class="product-price">-->
        <!--                                        <span>$50.25 </span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="swiper-slide">-->
        <!--                            <div class="product-wrap" data-aos="fade-up" data-aos-delay="600">-->
        <!--                                <div class="product-img img-zoom mb-25">-->
        <!--                                    <a href="product-details.html">-->
        <!--                                        <img src="assets/images/product/product-3.png" alt="">-->
        <!--                                    </a>-->
        <!--                                    <div class="product-badge badge-top badge-right badge-pink">-->
        <!--                                        <span>-10%</span>-->
        <!--                                    </div>-->
        <!--                                    <div class="product-action-wrap">-->
        <!--                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i>-->
        <!--                                        </button>-->
        <!--                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"-->
        <!--                                                data-bs-target="#exampleModal">-->
        <!--                                            <i class="pe-7s-look"></i>-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                    <div class="product-action-2-wrap">-->
        <!--                                        <button class="product-action-btn-2" title="Add To Cart"><i-->
        <!--                                                    class="pe-7s-cart"></i> Add to cart-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product-content">-->
        <!--                                    <h3><a href="product-details.html">Easy Modern Chair</a></h3>-->
        <!--                                    <div class="product-price">-->
        <!--                                        <span class="old-price">$45.00 </span>-->
        <!--                                        <span class="new-price">$40.00 </span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="swiper-slide">-->
        <!--                            <div class="product-wrap" data-aos="fade-up" data-aos-delay="800">-->
        <!--                                <div class="product-img img-zoom mb-25">-->
        <!--                                    <a href="product-details.html">-->
        <!--                                        <img src="assets/images/product/product-4.png" alt="">-->
        <!--                                    </a>-->
        <!--                                    <div class="product-action-wrap">-->
        <!--                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i>-->
        <!--                                        </button>-->
        <!--                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"-->
        <!--                                                data-bs-target="#exampleModal">-->
        <!--                                            <i class="pe-7s-look"></i>-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                    <div class="product-action-2-wrap">-->
        <!--                                        <button class="product-action-btn-2" title="Add To Cart"><i-->
        <!--                                                    class="pe-7s-cart"></i> Add to cart-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product-content">-->
        <!--                                    <h3><a href="product-details.html">Stylish Swing Chair</a></h3>-->
        <!--                                    <div class="product-price">-->
        <!--                                        <span>$30.25 </span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="swiper-slide">-->
        <!--                            <div class="product-wrap">-->
        <!--                                <div class="product-img img-zoom mb-25">-->
        <!--                                    <a href="product-details.html">-->
        <!--                                        <img src="assets/images/product/product-2.png" alt="">-->
        <!--                                    </a>-->
        <!--                                    <div class="product-badge badge-top badge-right badge-pink">-->
        <!--                                        <span>-10%</span>-->
        <!--                                    </div>-->
        <!--                                    <div class="product-action-wrap">-->
        <!--                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i>-->
        <!--                                        </button>-->
        <!--                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"-->
        <!--                                                data-bs-target="#exampleModal">-->
        <!--                                            <i class="pe-7s-look"></i>-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                    <div class="product-action-2-wrap">-->
        <!--                                        <button class="product-action-btn-2" title="Add To Cart"><i-->
        <!--                                                    class="pe-7s-cart"></i> Add to cart-->
        <!--                                        </button>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product-content">-->
        <!--                                    <h3><a href="product-details.html">New Modern Sofa Set</a></h3>-->
        <!--                                    <div class="product-price">-->
        <!--                                        <span class="old-price">$80.50 </span>-->
        <!--                                        <span class="new-price">$75.25 </span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <?php include_once 'includes/footer_bottom.php'; ?>
        <?php include_once 'includes/sidebar.php';
    } ?>
</div>
<!-- All JS is here -->
<?php include_once 'includes/footer.php'; ?>
</body>

</html>
