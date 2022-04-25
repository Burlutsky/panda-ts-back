<?php

namespace App\Http\Controllers\Api;

use App\Models\Species;
use App\Services\Response\ResponseService;
use App\Services\Section\Specie\SpecieService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SpecieController extends ApiController
{
    /**
     * SpecieController constructor.
     * @param SpecieService $service
     */
    public function __construct(SpecieService $service)
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
                'items' => $this->service->getSpecies()->toArray()
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
     * @param Species $specie
     * @return JsonResponse
     */
    public function store(Request $request, Species $specie): JsonResponse
    {
        //
        $specie = $this->service->store($request, $specie);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $specie->toArray()
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Species $specie
     * @return JsonResponse
     */
    public function show(Species $specie): JsonResponse
    {
        //
        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $specie->toArray()
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
     * @param Species $specie
     * @return JsonResponse
     */
    public function update(Request $request, Species $specie): JsonResponse
    {
        //
        $specie = $this->service->store($request, $specie);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $specie->toArray()
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id): Response
    {
        //
    }
}
