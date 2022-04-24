<?php

namespace App\Http\Controllers\Api;

use App\Models\Films;
use App\Services\Response\ResponseService;
use App\Services\Section\Film\FilmService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FilmController extends ApiController
{
    /**
     * FilmController constructor.
     * @param FilmService $service
     */
    public function __construct(FilmService $service)
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
                'items' => $this->service->getFilms()->toArray()
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
     * @param Films $film
     * @return JsonResponse
     */
    public function store(Request $request, Films $film): JsonResponse
    {
        //
        $film = $this->service->store($request, $film);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $film->toArray()
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Films $film
     * @return JsonResponse
     */
    public function show(Films $film): JsonResponse
    {
        //
        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $film->toArray()
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
     * @param Films $film
     * @return JsonResponse
     */
    public function update(Request $request, Films $film): JsonResponse
    {
        //
        $film = $this->service->store($request, $film);

        return ResponseService::sendJsonResponse(
            true,
            [
                'item' => $film->toArray()
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
