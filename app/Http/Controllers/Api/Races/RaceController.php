<?php

namespace App\Http\Controllers\Api\Races;

use App\Http\Requests\Races\RaceRequest;
use App\Models\Races\Race;
use Orion\Http\Requests\Request;
use Orion\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @group Races
 */
class RaceController extends Controller
{
    protected $model = Race::class;

    protected $request = RaceRequest::class;

    /**
     * @inheritDoc
     *
     * @param Request $request
     * @param Race $race
     * @return void
     */
    protected function beforeSave(Request $request, Model $race)
    {
        $race->createdBy()->associate($request->user());
    }

    public function buildIndexFetchQuery(Request $request, array $requestedRelations): Builder
    {
        return $request->user()->races();
    }

    /**
     * Create a race.
     *
     * @bodyParam name string required
     * @bodyParam description string required
     * @bodyParam start_time Datatime required
     * @bodyParam distance_number float required
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
     * @bodyParam distance_number float required
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
