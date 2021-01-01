<?php

namespace App\Http\Controllers\Api;

use App\Models\Race;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;

/**
 * @group Races
 */
class RaceController extends Controller
{
    protected $model = Race::class;

    /**
     * Create a race.
     *
     * @bodyParam name string required
     * @bodyParam description string required
     * @bodyParam start_time Datatime required
     * @bodyparam distance_number float requried
     * @bodyParam distance_units string required
     */
    public function store(Request $request)
    {
        return parent::store($request);
    }

    /**
     * Update a race.
     *
     * @bodyParam name string required
     * @bodyParam description string required
     * @bodyParam start_time Datatime required
     * @bodyparam distance_number float requried
     * @bodyParam distance_units string required
     */
    public function update(Request $request, $key)
    {
        return parent::update($request, $key);
    }

    /**
     * Delete a race.
     *
     */
    public function delete(Request $request)
    {
        return parent::delete($request);
    }
}
