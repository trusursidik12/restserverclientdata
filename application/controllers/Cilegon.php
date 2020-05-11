<?php
use chriskacerguis\RestServer\RestController;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Cilegon extends RestController {

    public function __construct()
    {
    	parent::__construct();
    }

    public function aqmdata_post()
    {
        if($this->cilegon_m->add_aqmsdata() > 0){
            $this->response([
                    'status'    => true,
                    'data'      => 'Data Berhasil Ditambah'
                ], 200);
        }else{
            $this->response([
                    'status'    => false,
                    'message'   => 'Data Tidak Ditemukan'
                ], 404);
        }
    }

    public function pcidata_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->cilegon_m->get_pcidata();
        } else {
            $data = $this->cilegon_m->get_pcidata($id);
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

    public function pciispu_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->cilegon_m->get_pciispu();
        } else {
            $data = $this->cilegon_m->get_pciispu($id);
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

    public function simpangtigadata_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->cilegon_m->get_simpangtigadata();
        } else {
            $data = $this->cilegon_m->get_simpangtigadata($id);
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

    public function simpangtigaispu_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->cilegon_m->get_simpangtigaispu();
        } else {
            $data = $this->cilegon_m->get_simpangtigaispu($id);
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

    public function merakdata_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->cilegon_m->get_merakdata();
        } else {
            $data = $this->cilegon_m->get_merakdata($id);
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

    public function merakispu_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->cilegon_m->get_merakispu();
        } else {
            $data = $this->cilegon_m->get_merakispu($id);
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

    public function ciwandandata_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->cilegon_m->get_ciwandandata();
        } else {
            $data = $this->cilegon_m->get_ciwandandata($id);
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

    public function ciwandanispu_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->cilegon_m->get_ciwandanispu();
        } else {
            $data = $this->cilegon_m->get_ciwandanispu($id);
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


}
