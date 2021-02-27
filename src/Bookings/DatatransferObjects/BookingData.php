<?php

class BookingData
{

    public string $name;

    public Unit $unit;

    public Period $period;

    // this would return an object with all the data for the request.
    // this is kinda amazing.
    // it is called a static constructor
    public static function fromStoreRequest(BookingStoreRequest $request): BookingData {

        $dto = new self();

        $dto->name = $request->input('name');
        $dto->unit = Unit::findOrFail($request->input('unit_id'));
        $dto->period = Period::make(
            $request->input('date_start'),
            $request->input('date_end'),
        );

        return $dto;

    }

}
