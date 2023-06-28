<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // const Country = require('../models/Country');

// Controller function to retrieve all countries
// async function getAllCountries(req, res) {
//   try {
//     const countries = await Country.find();
//     res.json(countries);
//   } catch (error) {
//     res.status(500).json({ error: 'Internal server error' });
//   }
// }

// module.exports = {
//   getAllCountries,
// };

}


