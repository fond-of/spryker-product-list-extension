<?php

namespace FondOfSpryker\Zed\ProductListExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductListResponseTransfer;
use Generated\Shared\Transfer\ProductListTransfer;

interface ProductListPreDeletePluginInterface
{
    /**
     * Specification:
     * - Executes plugins before a product list is deleted.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductListTransfer $productListTransfer
     *
     * @return \Generated\Shared\Transfer\ProductListResponseTransfer
     */
    public function execute(ProductListTransfer $productListTransfer): ProductListResponseTransfer;
}
