<?php

namespace Domain\Invoices\DataTransferObjects;

class CreateInvoiceData
{

    public string $description;
    public int $itemAmount;
    public int $itemPrice;
    public int $vatPercentage;
    public int $totalPriceExculdingVat;
    public int $totalPriceIncludingVat;


    // the rest of the class that contains the static constructor
    // should be the same as the one in the bookings namespace

}
