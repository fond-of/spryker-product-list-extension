<?php

namespace FondOfSpryker\Zed\ProductListExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductListTransfer;

interface ProductListPreDeletePluginInterface
{
    /**
     * Specification:
     * - Plugin is triggered after product list object is deleted.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductListTransfer $productListTransfer
     *
     * @return void
     */
    public function execute(ProductListTransfer $productListTransfer): void;
}
