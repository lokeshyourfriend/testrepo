<?php
declare (strict_types = 1);

namespace Test\GraphQL\Model\Resolver\GetCountNumberDays;

use Magento\Framework\GraphQl\Query\Resolver\IdentityInterface;

class Identity implements IdentityInterface
{
    /** @var string */
    private $cacheTag = "test_graphql_count_number_days";

    /**
     * Get PromoBanners identities from resolved data
     *
     * @param array $resolvedData
     * @return string[]
     */
    public function getIdentities(array $resolvedData): array
    {
        return [ $this->cacheTag ];
    }
}
