<?php

namespace Domain\Invoices\Actions;

use Domain\Clients\Models\Client;
use Domain\Invoices\DataTransferObjects\CreateInvoiceData;

class DetermineInvoiceNumberAction
{
    public function __invoke(Client $client, CreateInvoiceAction $createInvoiceAction): CreateInvoiceData
    {

    }
}
