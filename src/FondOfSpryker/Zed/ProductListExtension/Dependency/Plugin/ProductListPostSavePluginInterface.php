<?php

namespace FondOfSpryker\Zed\ProductListExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductListResponseTransfer;
use Generated\Shared\Transfer\ProductListTransfer;

interface ProductListPostSavePluginInterface
{
    /**
     * Specification:
     * - Plugin is triggered after product list object is saved.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductListTransfer $productListTransfer
     *
     * @return \Generated\Shared\Transfer\ProductListResponseTransfer
     */
    public function postSave(ProductListTransfer $productListTransfer): ProductListResponseTransfer;
}
