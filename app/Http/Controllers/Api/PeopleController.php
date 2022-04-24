<?php

namespace App\Http\Controllers\Api;

use App\Models\People;
use App\Services\Section\People\PeopleService;
use App\Services\Response\ResponseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PeopleController extends ApiController
{
    /**
     * PeopleController constructor.
     * @param PeopleService $service
     */
    public function __construct(PeopleService $service)
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
                'items' => $this->service->getPeople()->toArray()
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
     * @param People $person
     * @return JsonResponse
     */
    public function store(Request $request, People $person): JsonResponse
    {
        //
        $person = $this->service->store($request, $person);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $person->toArray()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param People $person
     * @return JsonResponse
     */
    public function update(Request $request, People $person): JsonResponse
    {
        //
        $person = $this->service->store($request, $person);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $person->toArray()
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param People $person
     * @return JsonResponse
     */
    public function show(People $person): JsonResponse
    {
        //
        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $person->toArray()
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
