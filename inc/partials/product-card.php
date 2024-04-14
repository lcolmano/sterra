<div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo Store::get_slug($product->Rubro); ?>">
    <div class="featured__item">
        <div class="featured__item__pic set-bg" data-setbg="<?php echo Productos::getImage( $product->CodProducto ); ?>">
        <!-- <div class="product__discount__percent">-20%</div> -->
        <div class="product__code"><h5><?php echo 'COD: ' . $product->CodProducto; ?></h5></div>
            <form class="js-form-cart">
                <input type="hidden" name="id_product" value="<?php echo $product->Id_Producto; ?>">
                <input type="hidden" name="cod_product" value="<?php echo $product->CodProducto; ?>">
                <input type="hidden" name="name_product" value="<?php echo $product->Nombre; ?>">
                <input type="hidden" name="price_product" value="<?php echo number_format(Productos::PreVtaFinal($product->PreVtaFinal1), 2,',','.'); ?>">
                <input type="hidden" name="nota" value="">
                <input type="hidden" name="cant" value="1"> 
                <ul class="featured__item__pic__hover">
                <!--  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                    <li><a href="javascript:;" onclick="$(this).closest('form').submit();" title="Agregar al carrito"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </form>
        </div>
        <div class="featured__item__text">
            <span><?php echo $product->Rubro; ?></span>
            <h6><a href="detalle.php?id=<?php echo $product->CodProducto; ?>"><?php echo $product->Nombre; ?></a></h6>
            <p class="text-danger"><?php echo 'Precio Lista: <strong>$ '. number_format(Productos::PreVtaFinal($product->PreVtaFinal1), 2,',','.') . '</strong>'; ?></p>
            <form class="js-form-cart">
                <input type="hidden" name="id_product" value="<?php echo $product->Id_Producto; ?>">
                <input type="hidden" name="cod_product" value="<?php echo $product->CodProducto; ?>">
                <input type="hidden" name="name_product" value="<?php echo $product->Nombre; ?>">
                <input type="hidden" name="price_product" value="<?php echo number_format(Productos::PreVtaFinal($product->PreVtaFinal1), 2,',','.'); ?>">
                <div class="d-flex">
                    <textarea type="text" name="nota" class="product__details__note" placeholder="Agregar Nota"></textarea>
                </div>

                <div class="product__details__quantity mb-2">
                    <div class="quantity">
                        <div class="pro-qty">
                            <input type="number" name="cant" min="1" max="99999" value="1"> 
                        </div>
                    </div>
                </div>

                <input type="submit" class="primary-btn mb-2 add-to-cart" value="+ CARRITO">
            </form>
        </div>
    </div>
</div>