<?php
use chriskacerguis\RestServer\RestController;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Indoor extends RestController {

    public function aqmdata_get()
    {

        $id_stasiun = $this->get('id_stasiun');

        if ($id_stasiun === null) {
            $data = $this->indoor_m->get_data();
        } else {
            $data = $this->indoor_m->get_data($id_stasiun);
        }

        if ($data) {
            $this->response([
                    'status'    => true,
                    'data'      => $data
                ], 200);
        } else {
            $this->response([
                    'status'    => false,
                    'message'   => 'Data Tidak Ditemukan'
                ], 404);
        }
    }

    public function aqmispu_get()
    {

        $id_stasiun = $this->get('id_stasiun');

        if ($id_stasiun === null) {
            $ispu = $this->indoor_m->get_ispu();
        } else {
            $ispu = $this->indoor_m->get_ispu($id_stasiun);
        }

        if ($ispu) {
            $this->response([
                    'status'    => true,
                    'data'      => $ispu
                ], 200);
        } else {
            $this->response([
                    'status'    => false,
                    'message'   => 'Data Tidak Ditemukan'
                ], 404);
        }
    }

}
