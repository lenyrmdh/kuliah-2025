<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class DataPegawaiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/data-pegawais",
     *     summary="Ambil daftar pegawai",
     *     tags={"Data Pegawai"},
     *     @OA\Response(
     *         response=200,
     *         description="Berhasil ambil data pegawai"
     *     )
     * )
     */
    public function index()
    {
        return DataPegawai::all();
    }
}
