<?php

namespace App\Tenant;

use App\Models\Tenant;

class ManagerTenant
{
    public function subdomain()
    {
        $piecesHost = explode('.', request()->getHost());

        return $piecesHost[0];
    }

    public function tenant()
    {
        $subdomain = $this->subdomain();

        return Tenant::where('subdomain', $subdomain)->first();
    }
}