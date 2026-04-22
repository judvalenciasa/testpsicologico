<?php

namespace App\Http\Controllers;

use App\Application\Statistics\StatisticsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StatisticsController extends Controller
{
    public function __construct(private readonly StatisticsService $statisticsService)
    {
    }

    public function index(): View
    {
        $this->authorizeAdministrator();

        return view('private.estadisticas');
    }

    public function indexGeneral(): View
    {
        $this->authorizeAdministrator();

        return view('private.estadisticas_generales');
    }

    public function data(Request $request): JsonResponse
    {
        $this->authorizeAdministrator();

        $filters = [
            'year' => $request->query('year') ? (int) $request->query('year') : null,
            'user_id' => $request->query('user_id') ? (int) $request->query('user_id') : null,
        ];

        return response()->json($this->statisticsService->buildDashboard($filters));
    }

    public function dataGeneral(Request $request): JsonResponse
    {
        $this->authorizeAdministrator();

        $filters = [
            'year' => $request->query('year') ? (int) $request->query('year') : null,
            'presentation_1' => $request->query('presentation_1') ? (string) $request->query('presentation_1') : null,
            'presentation_2' => $request->query('presentation_2') ? (string) $request->query('presentation_2') : null,
        ];

        return response()->json($this->statisticsService->buildGeneralDashboard($filters));
    }

    private function authorizeAdministrator(): void
    {
        $user = auth()->user();

        abort_unless($user && (bool) $user->es_administrador, 403);
    }
}

