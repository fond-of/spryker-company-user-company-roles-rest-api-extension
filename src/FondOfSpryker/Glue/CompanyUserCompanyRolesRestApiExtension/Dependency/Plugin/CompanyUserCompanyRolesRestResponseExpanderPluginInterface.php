<?php

namespace FondOfSpryker\Glue\CompanyUserCompanyRolesRestApiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;

interface CompanyUserCompanyRolesRestResponseExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the Rest Response
     *
     * @api
     *
     * @param \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface $restResponse
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function expand(
        RestResponseInterface $restResponse
    ): RestResponseInterface;
}
