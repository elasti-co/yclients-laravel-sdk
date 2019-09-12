<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\Company;

class Staff extends Request
{
    use Company;

    /**
     * @return \Illuminate\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function request()
    {
        return $this->requestApi("staff/{$this->company_id}");
    }
}
