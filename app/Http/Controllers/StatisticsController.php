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

    public function data(Request $request): JsonResponse
    {
        $this->authorizeAdministrator();

        $filters = [
            'year' => $request->query('year') ? (int) $request->query('year') : null,
            'user_id' => $request->query('user_id') ? (int) $request->query('user_id') : null,
        ];

        return response()->json($this->statisticsService->buildDashboard($filters));
    }

    private function authorizeAdministrator(): void
    {
        $user = auth()->user();

        abort_unless($user && (bool) $user->es_administrador, 403);
    }
}

