<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Sekre extends Controller
{
  public function __construct()
  {
    $client = new \Google_Client();
    $client->setApplicationName('Tes Laravel with Google SpreadSheets');
    $client->setScopes(\Google_Service_Sheets::SPREADSHEETS);
    $client->setAccessType('offline');
    $client->setAuthConfig(base_path() . '/credential-sheets.json');

    $this->service = new \Google\Service\Sheets($client);
    // sifv9 sheets
    $this->sheetID = '1AnumQfxYg2qyNr4b0vNMqJyKnIA3zY_Uv_mk-IfzPG4';
    // masterdata
    // $sheetID = '1xpfy6TCaTfvjIJvTVws6o9-l0XqnDftrpCy3ZoXJM38';

    // $range = 'Sekpim_Risalah_Rapat!A104:Q104';

    $this->url_api_dosen = 'https://gateway.telkomuniversity.ac.id/b5f34c2db0d36b68ef987a1a23f50ccb/7/0/0/0/0/0/dosen';
    $this->url_api_tpa = 'https://gateway.telkomuniversity.ac.id/b5f34c2db0d36b68ef987a1a23f50ccb/7/0/0/0/0/0/tpa';
  }

  public function index()
  {
    // get the data (surat tugas + sk) from excel -------------------------------------
    $range = 'Sekpim_Surat_Tugas';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_ST = $response->getValues();

    $range = 'Sekpim_SK';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_SK = $response->getValues();

    // dd(sizeof($EXCEL_VALUE_SK[168]));

    $EXCEL_CELL_INDEX = 1; // for skipping the header
    $EXCEL_INDEX_ST_KD = 7; // index cell KODE DOSEN di excel surat tugas (st)
    $EXCEL_INDEX_SK_KD = 9; // index cell KODE DOSEN di excel surat keputusan (sk)

    // hitung st dan sk + raw kode dosen st dan sk ------------------------------------
    $total_st = 0;
    // 'raw' is dirty data (not sorted, straight from excel)
    $raw_kode_dosen = [];
    for ($i = 2; $i < sizeof($EXCEL_VALUE_ST); $i++) {
      if (sizeof($EXCEL_VALUE_ST[$i]) > $EXCEL_INDEX_ST_KD) {
        if ($EXCEL_VALUE_ST[$i][$EXCEL_CELL_INDEX] != null) {
          $total_st += 1;
        }
        if ($EXCEL_VALUE_ST[$i][$EXCEL_INDEX_ST_KD] != '-' && $EXCEL_VALUE_ST[$i][$EXCEL_INDEX_ST_KD] != '') {
          $raw_kode_dosen[] = trim(str_replace("\t", "", $EXCEL_VALUE_ST[$i][$EXCEL_INDEX_ST_KD]), " ");
        }
      }
    }

    $total_sk = 0;
    for ($i = 2; $i < sizeof($EXCEL_VALUE_SK); $i++) {
      if (sizeof($EXCEL_VALUE_SK[$i]) > $EXCEL_INDEX_SK_KD) {
        if ($EXCEL_VALUE_SK[$i][$EXCEL_CELL_INDEX] != null) {
          $total_sk += 1;
        }
      }
    }

    // remove duplicate
    $clean_kode_dosen = (array_unique($raw_kode_dosen));
    // sort the array
    sort($clean_kode_dosen);

    // hitung st dan sk per-dosen --------------------------------------------------
    $kode_dosen = [];
    $st_dosen = [];
    $sk_dosen = [];

    foreach ($clean_kode_dosen as $value) {
      // $x = jumlah surat tugas per-dosen, $y = jumlah sk per-dosen
      $x = 0;
      $y = 0;
      $kode_dosen[] = $value;

      for ($i = 2; $i < sizeof($EXCEL_VALUE_ST); $i++) {
        if (sizeof($EXCEL_VALUE_ST[$i]) > $EXCEL_INDEX_ST_KD) {
          if ($value == $EXCEL_VALUE_ST[$i][$EXCEL_INDEX_ST_KD]) {
            $x++;
          }
        }
      }

      for ($i = 2; $i < sizeof($EXCEL_VALUE_SK); $i++) {
        if (sizeof($EXCEL_VALUE_SK[$i]) > $EXCEL_INDEX_SK_KD) {
          if ($value == $EXCEL_VALUE_SK[$i][$EXCEL_INDEX_SK_KD]) {
            $y++;
          }
        }
      }

      $st_dosen[] = $x;
      $sk_dosen[] = $y;
    }

    return view('sekre.dashboard', [
      'title' => 'Dashboard Sekpim',
      'total_st' => $total_st,
      'kode_dosen' => $kode_dosen,
      'st_dosen' => $st_dosen,
      'total_sk' => $total_sk,
      'sk_dosen' => $sk_dosen,
    ]);

    // return view('sekre.dashboard');
  }
}
