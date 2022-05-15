<?php
/**
 * Variables:
 *
 * @var $arParams array
 * @var $itemIds array
 * @var $price array
 */

    // php code

    // if (!empty($arParams['LABEL_PROP_POSITION'])) {
    // php code
?>
    <div  id="<?=$itemIds['ID']?>" itemscope itemtype="http://schema.org/Product">
        <div class="" id="<?=$itemIds['BIG_SLIDER_ID']?>">
            <div class="
                    <?=($arParams['IMAGE_RESOLUTION'] === '1by1' ? 'product-item-detail-slider-block-square' : '')?>"
                 data-entity="images-slider-block">
                <div class="" data-entity="images-container"></div>
            </div>
        </div>

        <div class="" id="<?=$itemIds['PRICE_ID']?>">
            <?=$price['PRINT_RATIO_PRICE']?>
        </div>

        <div data-entity="main-button-container">
            <div id="<?=$itemIds['BASKET_ACTIONS_ID']?>" >

                <a class="btn" id="<?=$itemIds['ADD_BASKET_LINK']?>"
                   href="javascript:void(0);">
                    <span><?=$arParams['MESS_BTN_ADD_TO_BASKET']?></span>
                </a>

            </div>
        </div>
    </div>

<?  // if ($haveOffers) {
    // php code
?>
    <script>
        // script code
    </script>
<?
    // php code
