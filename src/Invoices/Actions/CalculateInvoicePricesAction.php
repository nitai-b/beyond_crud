<?php

namespace Domain\Invoices\Actions;

use Domain\Clients\Models\Client;

class CalculateInvoicePricesAction
{

    private CalculateInvoicePricesAction $calculateInvociePricesAction;
    private DetermineInvoiceNumberAction $determineInvoiceNumberAction;

    public function __construct(CalculateInvociePricesAction $calculateInvociePricesAction,
        DetermineInvoiceNumberAction $determineInvoiceNumberAction
    )
    {
        $this->calculateInvoicePricesAction = $calculateInvociePricesAction;
        $this->determineInvoiceNumberAction = $determineInvoiceNumberAction;
    }

    public function __invoke(
        Client $client,
        CreateInvoiceData $data
    ): CreateInvoiceData {

        // you can change the dto itself, but do so in an imutable way
        // or you can do somethign else with it
        // or you can calculate something or something...
    }
}
