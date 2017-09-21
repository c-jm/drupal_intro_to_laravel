<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;


class PeopleController extends Controller
{
    public function show($id)
    {
        $person = Person::find($id);

        return $person;

    }

    public function create() 
    {
        $parameters = request()->all();

        return Person::create($parameters);
    }

    public function index()
    {
        $result = Person::all();

        return $result;
    }
}
