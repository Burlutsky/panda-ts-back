<?php

namespace App\Http\Controllers\Api;

use App\Models\Planets;
use App\Services\Response\ResponseService;
use App\Services\Section\Planet\PlanetService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlanetController extends ApiController
{
    /**
     * PlanetController constructor.
     * @param PlanetService $service
     */
    public function __construct(PlanetService $service)
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
                'items' => $this->service->getPlanets()->toArray()
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
     * @param Planets $planet
     * @return JsonResponse
     */
    public function store(Request $request, Planets $planet): JsonResponse
    {
        //
        $planet = $this->service->store($request, $planet);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $planet->toArray()
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Planets $planet
     * @return JsonResponse
     */
    public function show(Planets $planet): JsonResponse
    {
        //
        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $planet->toArray()
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
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
