<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Sekre extends Controller
{
  public function __construct()
  {
    $client = new \Google_Client();
    $client->setApplicationName('SIF with Google SpreadSheets');
    $client->setScopes(\Google_Service_Sheets::SPREADSHEETS);
    $client->setAccessType('offline');
    $client->setAuthConfig(base_path() . '/credential-sheets.json');

    $this->service = new \Google\Service\Sheets($client);
    // sifv9 sheets
    $this->sheetID = '1AnumQfxYg2qyNr4b0vNMqJyKnIA3zY_Uv_mk-IfzPG4';
    // masterdata
    // $sheetID = '1xpfy6TCaTfvjIJvTVws6o9-l0XqnDftrpCy3ZoXJM38';

    // $range = 'Sekpim_Risalah_Rapat!A104:Q104';

    // $this->url_api_dosen = 'https://gateway.telkomuniversity.ac.id/b5f34c2db0d36b68ef987a1a23f50ccb/7/0/0/0/0/0/dosen';
    // $this->url_api_tpa = 'https://gateway.telkomuniversity.ac.id/b5f34c2db0d36b68ef987a1a23f50ccb/7/0/0/0/0/0/tpa';

    // surat tugas
    $this->EXCEL_INDEX_NO_SURAT = 1;
    $this->EXCEL_INDEX_DESKRIPSI = 2;
    $this->EXCEL_INDEX_MITRA = 3;
    $this->EXCEL_INDEX_TGL_PENETAPAN = 4;
    $this->EXCEL_INDEX_TGL_PMULAI = 5;
    $this->EXCEL_INDEX_TGL_PSELESAI = 6;
    $this->EXCEL_INDEX_ST_KD = 7; // index cell KODE DOSEN di excel surat tugas (st)
    $this->EXCEL_INDEX_NAMA_KD = 8; // index cell NAMA YANG DITUGASKAN di excel surat tugas (st)
    $this->EXCEL_INDEX_EVIDENCE = 9;

    // surat keputusan
    $this->EXCEL_INDEX_NO_SK = 1;
    $this->EXCEL_INDEX_EVIDENCE = 2;
    $this->EXCEL_INDEX_JUDUL_SK = 3;
    $this->EXCEL_INDEX_TGL_PMULAI = 4;
    $this->EXCEL_INDEX_TGL_PSELESAI = 5;
    $this->EXCEL_INDEX_TGL_PENETAPAN = 6;
    $this->EXCEL_INDEX_JABATAN = 7;
    $this->EXCEL_INDEX_NAMA_KD = 8; // index cell NAMA YANG DITUGASKAN di excel SK (st)
    $this->EXCEL_INDEX_SK_KD = 9; // index cell KODE DOSEN di excel SK (st)

    // notula
    $this->EXCEL_INDEX_TGL = 1;
    $this->EXCEL_INDEX_JENIS_RAPAT = 2;
    $this->EXCEL_INDEX_AGENDA = 3;
    $this->EXCEL_INDEX_EVIDENCE = 9;
  }

  public function index()
  {
    // get the data (notula + buku ajar) from excel -------------------------------------
    $range = 'buku_ajar';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_BA = $response->getValues();

    $range = 'Sekpim_Risalah_Rapat';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_NOTULA = $response->getValues();

    // get the data (surat tugas + sk) from excel -------------------------------------
    $range = 'Sekpim_Surat_Tugas';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_ST = $response->getValues();

    $range = 'Sekpim_SK';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_SK = $response->getValues();

    $EXCEL_CELL_INDEX = 1; // 1 for skipping the header + check if the cell is in valid length
    $EXCEL_INDEX_ST_KD = 7; // index cell KODE DOSEN di excel surat tugas (st)
    $EXCEL_INDEX_SK_KD = 9; // index cell KODE DOSEN di excel surat keputusan (sk)

    // hitung buku ajar dan notula ------------------------------------
    $total_ba = 0;
    for ($i = 1; $i < sizeof($EXCEL_VALUE_BA); $i++) {
      // if for skipping 'Tahun 20xx'
      if (sizeof($EXCEL_VALUE_BA[$i]) > 1) {
        // 1 disini itu index untuk skipping the header
        if ($EXCEL_VALUE_BA[$i][1] != null) {
          $total_ba += 1;
        }
      }
    }

    $total_notula = 0;
    for ($i = 1; $i < sizeof($EXCEL_VALUE_NOTULA); $i++) {
      // if for skipping 'Tahun 20xx'
      if (sizeof($EXCEL_VALUE_NOTULA[$i]) > 1) {
        // 1 disini itu index untuk skipping the header
        if ($EXCEL_VALUE_NOTULA[$i][1] != null) {
          $total_notula += 1;
        }
      }
    }

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
      'title'         => 'Dashboard Sekretariat',
      'total_st'      => $total_st,
      'kode_dosen'    => $kode_dosen,
      'st_dosen'      => $st_dosen,
      'total_sk'      => $total_sk,
      'sk_dosen'      => $sk_dosen,
      'total_ba'      => $total_ba,
      'total_notula'  => $total_notula,
      'last_sync'     => env('LAST_SYNC'),
      'tgl_mulai'     => '2017-01-01',
      'tgl_selesai'   => date('Y-m-d'),
      'bread_item' => 'Sekretariat',
      'bread_item_active' => 'Dashboard',
    ]);
  }

  public function index_filtered(Request $request)
  {
    $periode_mulai = strtotime($request->periode_mulai);
    $periode_selesai = strtotime($request->periode_selesai);

    // get the data (notula + buku ajar) from excel -------------------------------------
    $range = 'buku_ajar';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_BA = $response->getValues();

    $range = 'Sekpim_Risalah_Rapat';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_NOTULA = $response->getValues();

    // get the data (surat tugas + sk) from excel -------------------------------------
    $range = 'Sekpim_Surat_Tugas';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_ST = $response->getValues();

    $range = 'Sekpim_SK';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE_SK = $response->getValues();

    $EXCEL_CELL_INDEX = 1; // 1 for skipping the header + check if the cell is in valid length
    $EXCEL_INDEX_ST_KD = 7; // index cell KODE DOSEN di excel surat tugas (st)
    $EXCEL_INDEX_SK_KD = 9; // index cell KODE DOSEN di excel surat keputusan (sk)

    // hitung buku ajar dan notula ------------------------------------
    $total_ba = 0;
    for ($i = 1; $i < sizeof($EXCEL_VALUE_BA); $i++) {
      // filter the data
      // if for skipping 'Tahun 20xx'
      if (sizeof($EXCEL_VALUE_BA[$i]) > 1) {
        // 1 disini itu index untuk skipping the header
        if ($EXCEL_VALUE_BA[$i][1] != null) {
          $total_ba += 1;
        }
      }
    }

    $total_notula = 0;
    for ($i = 1; $i < sizeof($EXCEL_VALUE_NOTULA); $i++) {
      // if for skipping 'Tahun 20xx'
      if (sizeof($EXCEL_VALUE_NOTULA[$i]) > 1) {
        // 1 disini itu index untuk skipping the header
        // 1 di strtotime = index tgl
        if ($EXCEL_VALUE_NOTULA[$i][1] != null && $periode_mulai <= strtotime($EXCEL_VALUE_NOTULA[$i][1])) {
          $total_notula += 1;
        }
      }
    }

    // hitung st dan sk + raw kode dosen st dan sk ------------------------------------
    $total_st = 0;
    // 'raw' is dirty data (not sorted, straight from excel)
    $raw_kode_dosen = [];
    for ($i = 2; $i < sizeof($EXCEL_VALUE_ST); $i++) {
      if (sizeof($EXCEL_VALUE_ST[$i]) > $EXCEL_INDEX_ST_KD) {
        // filter the data, 5 = index periode mulai, 6 = index periode selesai
        if ($periode_mulai < strtotime($EXCEL_VALUE_ST[$i][5]) && $periode_selesai > strtotime($EXCEL_VALUE_ST[$i][6])) {
          if ($EXCEL_VALUE_ST[$i][$EXCEL_CELL_INDEX] != null) {
            $total_st += 1;
          }
          if ($EXCEL_VALUE_ST[$i][$EXCEL_INDEX_ST_KD] != '-' && $EXCEL_VALUE_ST[$i][$EXCEL_INDEX_ST_KD] != '') {
            $raw_kode_dosen[] = trim(str_replace("\t", "", $EXCEL_VALUE_ST[$i][$EXCEL_INDEX_ST_KD]), " ");
          }
        }
      }
    }

    $total_sk = 0;
    for ($i = 2; $i < sizeof($EXCEL_VALUE_SK); $i++) {
      if (sizeof($EXCEL_VALUE_SK[$i]) > $EXCEL_INDEX_SK_KD) {
        // filter the data, 4 = index periode mulai, 5 = index periode selesai
        if ($periode_mulai < strtotime($EXCEL_VALUE_SK[$i][4]) && $periode_selesai > strtotime($EXCEL_VALUE_SK[$i][5])) {
          if ($EXCEL_VALUE_SK[$i][$EXCEL_CELL_INDEX] != null) {
            $total_sk += 1;
          }
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
      'title'         => 'Dashboard Sekretariat',
      'total_st'      => $total_st,
      'kode_dosen'    => $kode_dosen,
      'st_dosen'      => $st_dosen,
      'total_sk'      => $total_sk,
      'sk_dosen'      => $sk_dosen,
      'total_ba'      => $total_ba,
      'total_notula'  => $total_notula,
      'last_sync'     => env('LAST_SYNC'),
      'tgl_mulai'     => $request->periode_mulai,
      'tgl_selesai'   => $request->periode_selesai,
      'bread_item' => 'Sekretariat',
      'bread_item_active' => 'Dashboard',
    ]);
  }

  public function st()
  {
    // get the data (surat tugas) from excel -------------------------------------
    $range = 'Sekpim_Surat_Tugas';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE = $response->getValues();

    // hitung st + get st --------------------------------------------
    $surat_tugas = [];
    $total_st = 0;
    for ($i = 2; $i < sizeof($EXCEL_VALUE); $i++) {
      // if for skipping 'Tahun 20xx'
      // 1 itu index untuk skipping the header
      if (sizeof($EXCEL_VALUE[$i]) > $this->EXCEL_INDEX_ST_KD) {
        if ($EXCEL_VALUE[$i][1] != null) {
          $total_st += 1;
          $surat_tugas[] = [
            'no_surat'  => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_NO_SURAT],
            'deskripsi' => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_DESKRIPSI],
            'mitra'     => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_MITRA],
            'evidence'  => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_EVIDENCE],
            'periode_mulai'     => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL_PMULAI],
          ];
        }
      }
    }

    return view('sekre.surat_tugas.table', [
      'title'         => 'Surat Tugas',
      'surat_tugas'   => $surat_tugas,
      'total_st'      => $total_st,
      'last_sync'     => env('LAST_SYNC'),
      'tgl_mulai'     => '2017-01-01',
      'tgl_selesai'   => date('Y-m-d'),
      'bread_item' => 'Sekretariat',
      'bread_item_active' => 'Data Surat Tugas',
    ]);
  }

  public function st_detail($deskripsi)
  {
    // get the data (surat tugas) from excel -------------------------------------
    $range = 'Sekpim_Surat_Tugas';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE = $response->getValues();

    // search st + get st --------------------------------------------
    $found = false;
    $surat_tugas = [];
    $daftar_anggota = [];
    for ($i = 2; $i < sizeof($EXCEL_VALUE); $i++) {
      // if for skipping 'Tahun 20xx'
      if (sizeof($EXCEL_VALUE[$i]) > $this->EXCEL_INDEX_ST_KD) {
        if ($EXCEL_VALUE[$i][$this->EXCEL_INDEX_DESKRIPSI] == $deskripsi) {

          $surat_tugas[] = [
            'no_surat'          => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_NO_SURAT],
            'deskripsi'         => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_DESKRIPSI],
            'mitra'             => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_MITRA],
            'tgl_penetapan'     => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL_PENETAPAN],
            'periode_mulai'     => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL_PMULAI],
            'periode_selesai'   => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL_PSELESAI],
            'evidence'          => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_EVIDENCE],
            'kode_dosen'        => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_ST_KD],
            'nama_lengkap'      => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_NAMA_KD],
          ];

          for ($x = $i + 1; $EXCEL_VALUE[$x][$this->EXCEL_INDEX_DESKRIPSI] == null; $x++) {
            $daftar_anggota[] = [
              'kode_dosen' => $EXCEL_VALUE[$x][$this->EXCEL_INDEX_ST_KD],
              'nama_lengkap' => $EXCEL_VALUE[$x][$this->EXCEL_INDEX_NAMA_KD]
            ];
          }

          $found = true;
        }
      }

      if ($found) {
        break;
      }
    }

    return view('sekre.surat_tugas.detail', [
      'title' => 'Surat Tugas',
      'surat_tugas' => $surat_tugas,
      'daftar_anggota' => $daftar_anggota,
      'bread_item' => 'Sekretariat',
      'bread_item_active' => 'Detail Surat Tugas',
    ]);
  }

  public function tes()
  {
    return view('sekre.surat_tugas.tes');
  }

  public function sk()
  {
    // get the data (SK) from excel -------------------------------------
    $range = 'Sekpim_SK';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE = $response->getValues();

    // hitung sk + get sk --------------------------------------------
    $surat_keputusan = [];
    $total_sk = 0;
    for ($i = 2; $i < sizeof($EXCEL_VALUE); $i++) {
      // if for skipping 'Tahun 20xx'
      // 1 itu index untuk skipping the header
      if (sizeof($EXCEL_VALUE[$i]) > $this->EXCEL_INDEX_SK_KD) {
        if ($EXCEL_VALUE[$i][1] != null) {
          $total_sk += 1;
          $surat_keputusan[] = [
            'no_surat'  => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_NO_SK],
            'judul_sk'  => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_JUDUL_SK],
            'evidence'  => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_EVIDENCE],
            'periode_mulai'     => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL_PMULAI],
          ];
        }
      }
    }

    return view('sekre.surat_keputusan.table', [
      'title'             => 'Surat Keputusan',
      'surat_keputusan'   => $surat_keputusan,
      'total_sk'          => $total_sk,
      'last_sync'         => env('LAST_SYNC'),
      'tgl_mulai'         => '2017-01-01',
      'tgl_selesai'       => date('Y-m-d'),
      'bread_item' => 'Sekretariat',
      'bread_item_active' => 'Data Surat Keputusan',
    ]);
  }

  public function sk_detail($judul_sk)
  {

    // get the data (SK) from excel -------------------------------------
    $range = 'Sekpim_SK';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE = $response->getValues();

    // search sk + get sk --------------------------------------------
    $found = false;
    $surat_keputusan = [];
    $daftar_anggota = [];
    for ($i = 2; $i < sizeof($EXCEL_VALUE); $i++) {
      // if for skipping 'Tahun 20xx'
      if (sizeof($EXCEL_VALUE[$i]) > $this->EXCEL_INDEX_SK_KD) {
        // preg_replace => for cleaning up the string
        if (preg_replace('/\s+/', '', $EXCEL_VALUE[$i][$this->EXCEL_INDEX_JUDUL_SK]) == preg_replace('/\s+/', '', $judul_sk)) {

          $surat_keputusan[] = [
            'no_surat'          => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_NO_SK],
            'evidence'          => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_EVIDENCE],
            'judul_sk'          => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_JUDUL_SK],
            'periode_mulai'     => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL_PMULAI],
            'periode_selesai'   => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL_PSELESAI],
            'tgl_penetapan'     => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL_PENETAPAN],
            'jabatan'           => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_JABATAN],
            'nama_lengkap'      => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_NAMA_KD],
            'kode_dosen'        => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_SK_KD],
          ];

          for ($x = $i + 1; $EXCEL_VALUE[$x][$this->EXCEL_INDEX_JUDUL_SK] == null; $x++) {
            $daftar_anggota[] = [
              'jabatan'       => $EXCEL_VALUE[$x][$this->EXCEL_INDEX_JABATAN],
              'nama_lengkap'  => $EXCEL_VALUE[$x][$this->EXCEL_INDEX_NAMA_KD],
              'kode_dosen'    => $EXCEL_VALUE[$x][$this->EXCEL_INDEX_SK_KD],
            ];
          }

          $found = true;
        }
      }

      if ($found) {
        break;
      }
    }

    // dd($daftar_anggota);


    return view('sekre.surat_keputusan.detail', [
      'title'             => 'Surat Keputusan',
      'surat_keputusan'   => $surat_keputusan,
      'daftar_anggota'    => $daftar_anggota,
      'bread_item' => 'Sekretariat',
      'bread_item_active' => 'Detail Surat Keputusan',
    ]);
  }

  public function notula()
  {
    // get the data from excel -------------------------------------
    $range = 'Sekpim_Risalah_Rapat';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);

    $EXCEL_VALUE = $response->getValues();

    // hitung notula + get notula --------------------------------------------
    $notula = [];
    $total_notula = 0;
    // iterate the data
    for ($i = 1; $i < sizeof($EXCEL_VALUE); $i++) {
      // if for skipping 'Tahun 20xx'
      if (sizeof($EXCEL_VALUE[$i]) > 1) {
        // 1 disini itu index untuk skipping the header
        if ($EXCEL_VALUE[$i][1] != null) {
          $total_notula += 1;
          $notula[] = [
            'tanggal'       => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL],
            'jenis_rapat'   => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_JENIS_RAPAT],
            'agenda'        => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_AGENDA],
            'evidence'      => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_EVIDENCE],
          ];
        }
      }
    }

    return view('sekre.notula.table', [
      'title'    => 'Notula',
      'notula'   => $notula,
      'total_notula' => $total_notula,
      'last_sync' => env('LAST_SYNC'),
      'tgl_mulai'     => '2017-01-01',
      'tgl_selesai'   => date('Y-m-d'),
      'bread_item' => 'Sekretariat',
      'bread_item_active' => 'Data Notula',
    ]);
  }

  public function notula_detail($agenda)
  {
    // get the data (SK) from excel -------------------------------------
    $range = 'Sekpim_Risalah_Rapat';
    $response = $this->service->spreadsheets_values->get($this->sheetID, $range);
    $EXCEL_VALUE = $response->getValues();

    // search sk + get sk --------------------------------------------
    $found = false;
    $notula = [];
    for ($i = 1; $i < sizeof($EXCEL_VALUE); $i++) {
      // if for skipping 'Tahun 20xx'
      if (sizeof($EXCEL_VALUE[$i]) > 1) {
        // preg_replace => for cleaning up the string
        if (preg_replace('/\s+/', '', $EXCEL_VALUE[$i][$this->EXCEL_INDEX_AGENDA]) == preg_replace('/\s+/', '', $agenda)) {
          // dd('yes');
          $notula[] = [
            'tanggal'       => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_TGL],
            'jenis_rapat'   => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_JENIS_RAPAT],
            'agenda'        => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_AGENDA],
            'evidence'      => $EXCEL_VALUE[$i][$this->EXCEL_INDEX_EVIDENCE],
          ];

          $found = true;
        }
      }

      if ($found) {
        break;
      }
    }

    return view('sekre.notula.detail', [
      'title'  => 'Notula',
      'notula' => $notula,
      'bread_item' => 'Sekretariat',
      'bread_item_active' => 'Detail Notula',
    ]);
  }
}
