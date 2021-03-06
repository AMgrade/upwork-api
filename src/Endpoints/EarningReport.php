<?php

declare(strict_types = 1);

namespace McMatters\UpworkApi\Endpoints;

/**
 * Class EarningReport
 *
 * @package McMatters\UpworkApi\Endpoints
 */
class EarningReport extends Endpoint
{
    /**
     * @param int|string $providerReference
     * @param array $query
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function getByFreelancer($providerReference, array $query): array
    {
        return $this->requestJson(
            'get',
            "gds/finreports/v2/providers/{$providerReference}/earnings",
            ['query' => $query]
        );
    }

    /**
     * @param int|string $buyerTeamReference
     * @param array $query
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function getByBuyersTeam($buyerTeamReference, array $query): array
    {
        return $this->requestJson(
            'get',
            "gds/finreports/v2/buyer_teams/{$buyerTeamReference}/earnings",
            ['query' => $query]
        );
    }

    /**
     * @param $buyerCompanyReference
     * @param array $query
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function getByBuyersCompany(
        $buyerCompanyReference,
        array $query
    ): array {
        return $this->requestJson(
            'get',
            "gds/finreports/v2/buyer_companies/{$buyerCompanyReference}/earnings",
            ['query' => $query]
        );
    }
}
