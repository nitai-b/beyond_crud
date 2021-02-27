<?php

namespace Domain\Invoices\Actions;

use Domain\Clients\Models\Client;
use Domain\Invoices\DataTransferObjects\CreateInvoiceData;
use Domain\Invoices\Models\Invoice;

class CreateInvoiceAction
{

    private CalculateInvoicePricesAction $calculateInvoicePricesAction;

    public function __construct(
        CalculateInvoicePricesAction $calculateInvoicePricesAction
    )
    {
        $this->calculateInvoicePricesAction = $calculateInvoicePricesAction;
    }

    public function __invoke(Client $client, CreateInvoiceData $data): Invoice
    {
        $data = ($this->calculateInvoicePricesAction)($client, $data);
    }

}
