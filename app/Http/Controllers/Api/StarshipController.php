<?php

namespace App\Http\Controllers\Api;

use App\Models\Starships;
use App\Services\Response\ResponseService;
use App\Services\Section\Starship\StarshipService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StarshipController extends ApiController
{
    /**
     * StarshipController constructor.
     * @param StarshipService $service
     */
    public function __construct(StarshipService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        //
        return ResponseService::sendJsonResponse(
            true,
            [
                'items' => $this->service->getStarships()->toArray()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Starships $starship
     * @return JsonResponse
     */
    public function store(Request $request, Starships $starship): JsonResponse
    {
        //
        $starship = $this->service->store($request, $starship);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $starship->toArray()
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Starships $starship
     * @return JsonResponse
     */
    public function show(Starships $starship): JsonResponse
    {
        //
        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $starship->toArray()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Starships $starship
     * @return JsonResponse
     */
    public function update(Request $request, Starships $starship): JsonResponse
    {
        //
        $starship = $this->service->store($request, $starship);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $starship->toArray()
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
