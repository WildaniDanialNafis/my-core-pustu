<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\BayiLahir;
use App\Models\Ibu;
use App\Models\IbuBersalin;
use App\Models\RingkasanKesehatan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return view('admin.layouts2.dashboard-main');
        }

        return view('admin.layouts2.template-table');
    }

    public function dataGrafik()
    {
        $now = now();
        $startOfMonth = $now->copy()->startOfMonth();
        $endOfMonth = $now->copy()->endOfMonth();
        $sixtyMonthsAgo = $now->copy()->subMonths(60);

        // Ibu hamil aktif = yang belum melahirkan dan belum punya bayi
        $ibuHamilAktif = Ibu::whereDoesntHave('ibuBersalin')
            ->whereDoesntHave('bayiLahir')
            ->count();

        // Balita aktif = usia <= 60 bulan
        $balitaAktif = Anak::where('tgl_lahir', '>=', $sixtyMonthsAgo)->count();

        // Persalinan bulan ini
        $persalinanBulanIni = IbuBersalin::whereBetween('tanggal_bersalin', [$startOfMonth, $endOfMonth])
            ->count();

        // Ibu risiko tinggi terpantau bulan ini (anamnesis / fisik)
        $riskTinggiBulanIni = Ibu::where(function ($query) use ($startOfMonth, $endOfMonth) {
            $query->whereHas('skriningPreeklampsia.preeklampsiaAnamnesis', function ($subQuery) use ($startOfMonth, $endOfMonth) {
                $subQuery->where('risiko', 'Risiko tinggi')
                    ->whereBetween('created_at', [$startOfMonth, $endOfMonth]);
            })->orWhereHas('skriningPreeklampsia.preeklampsiaFisik', function ($subQuery) use ($startOfMonth, $endOfMonth) {
                $subQuery->where('risiko', 'Risiko tinggi')
                    ->whereBetween('created_at', [$startOfMonth, $endOfMonth]);
            });
        })->count();

        // Cakupan layanan per hari di bulan ini
        // $cakupanPerHari = RingkasanKesehatan::selectRaw('DAY(tanggal_periksa) as hari, COUNT(*) as jumlah')
        //     ->whereBetween('tanggal_periksa', [$startOfMonth, $endOfMonth])
        //     ->groupBy('hari')
        //     ->orderBy('hari')
        //     ->pluck('jumlah', 'hari')
        //     ->toArray();

        $cakupanPerHari = RingkasanKesehatan::selectRaw("EXTRACT(DAY FROM tanggal_periksa)::int as hari, COUNT(*) as jumlah")
            ->whereBetween('tanggal_periksa', [$startOfMonth, $endOfMonth])
            ->groupBy('hari')
            ->orderBy('hari')
            ->pluck('jumlah', 'hari')
            ->toArray();

        $jumlahHari = $now->daysInMonth;
        $lineLabels = range(1, $jumlahHari);
        $lineData = [];
        foreach ($lineLabels as $hari) {
            $lineData[] = $cakupanPerHari[$hari] ?? 0;
        }

        // Data jenis kelamin bayi lahir
        $kelaminBayi = BayiLahir::selectRaw("jenis_kelamin, COUNT(*) as jumlah")
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->groupBy('jenis_kelamin')
            ->pluck('jumlah', 'jenis_kelamin')
            ->toArray();

        return response()->json([
            // Line chart data
            'lineLabels' => $lineLabels,
            'lineData' => $lineData,
            'labelX' => 'Tanggal',

            // Doughnut chart data
            'doughnutLabels' => ['Laki-laki', 'Perempuan', 'Tidak Bisa Ditentukan'],
            'doughnutData' => [
                $kelaminBayi['Laki-laki'] ?? 0,
                $kelaminBayi['Perempuan'] ?? 0,
                $kelaminBayi['Tidak Bisa Ditentukan'] ?? 0
            ],

            // Statistik
            'ibuHamilAktif' => $ibuHamilAktif,
            'balitaAktif' => $balitaAktif,
            'persalinanBulanIni' => $persalinanBulanIni,
            'riskTerpantau' => $riskTinggiBulanIni,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $usersPerMonth = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', Carbon::now()->year) // Ambil data hanya untuk tahun ini
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $users = 0;

        // Format ulang data agar sesuai dengan array bulan
        $earnings = [
            "labels" => ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "data" => []
        ];

        // Isi `data` sesuai jumlah pengguna per bulan
        for ($i = 1; $i <= 12; $i++) {
            $earnings['data'][] = $usersPerMonth[$i] ?? 0; // Jika tidak ada user di bulan tersebut, isi dengan 0
            $users += $usersPerMonth[$i] ?? 0;
        }

        return view('admin.pages.dashboard', [
            'earnings' => $earnings,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
