<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehicles;
use App\Services\Response\ResponseService;
use App\Services\Section\Vehicle\VehicleService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VehicleController extends ApiController
{
    /**
     * VehicleController constructor.
     * @param VehicleService $service
     */
    public function __construct(VehicleService $service)
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
                'items' => $this->service->getVehicles()->toArray()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Vehicles $vehicle
     * @return JsonResponse
     */
    public function store(Request $request, Vehicles $vehicle): JsonResponse
    {
        //
        $vehicle = $this->service->store($request, $vehicle);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $vehicle->toArray()
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Vehicles $vehicle
     * @return JsonResponse
     */
    public function show(Vehicles $vehicle): JsonResponse
    {
        //
        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $vehicle->toArray()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Vehicles $vehicle
     * @return JsonResponse
     */
    public function update(Request $request, Vehicles $vehicle): JsonResponse
    {
        //
        $vehicle = $this->service->store($request, $vehicle);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $vehicle->toArray()
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        //
    }
}
