<?php

namespace App\Http\Controllers\API\People;

use App\Http\Controllers\Controller;
use App\Models\Person;

class GetSinglePersonController extends Controller
{
    public function __invoke($person)
    {
        return Person::complete()->find($person);
    }
}
