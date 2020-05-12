<?php
use chriskacerguis\RestServer\RestController;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Sukoharjo extends RestController {

    public function cemsdata_post()
    {
        $id_stasiun = 'CEMS_RUM';
        $waktu = $this->post('waktu');
        $aqmdata = $this->sukoharjo_m->get_cems($id_stasiun, $waktu);
        if($aqmdata){
            $update = $this->sukoharjo_m->update_cemsdata($id_stasiun, $waktu);
            if($update){
                $this->response(array('response' => 'success', 'aqmdata' => 'Data Berhasil diupdate' ), 201);
            } else {
                $this->response(array('response' => 'fail', 502));
            }
        } else {
            $insert = $this->sukoharjo_m->add_cemsdata();
            if($insert){
                $aqmdata = $this->sukoharjo_m->get_cems($id_stasiun, $waktu);
                $this->response(array('response' => 'success', 'aqmdata' => 'Data Berhasil ditambah' ), 201);
            }else{
                $this->response(array('response' => 'fail', 502));
            }
        }
    }

    public function camsdata_post()
    {
        $id_stasiun = $this->post('id_stasiun');
        $waktu = $this->post('waktu');
        $aqmdata = $this->sukoharjo_m->get_cems($id_stasiun, $waktu);
        if($aqmdata){
            $update = $this->sukoharjo_m->update_camsdata($id_stasiun, $waktu);
            if($update){
                $this->response(array('response' => 'success', 'aqmdata' => 'Data Berhasil diupdate' ), 201);
            } else {
                $this->response(array('response' => 'fail', 502));
            }
        } else {
            $insert = $this->sukoharjo_m->add_camsdata();
            if($insert){
                $aqmdata = $this->sukoharjo_m->get_cems($id_stasiun, $waktu);
                $this->response(array('response' => 'success', 'aqmdata' => 'Data Berhasil ditambah' ), 201);
            }else{
                $this->response(array('response' => 'fail', 502));
            }
        }
    }

    public function rumdata_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->sukoharjo_m->get_rumdata();
        } else {
            $data = $this->sukoharjo_m->get_rumdata($id);
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

    public function gupitdata_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->sukoharjo_m->get_gupitdata();
        } else {
            $data = $this->sukoharjo_m->get_gupitdata($id);
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

    public function plesandata_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->sukoharjo_m->get_plesandata();
        } else {
            $data = $this->sukoharjo_m->get_plesandata($id);
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

    public function cemsrumdata_get()
    {

        $id = $this->get('id');

        if ($id === null) {
            $data = $this->sukoharjo_m->get_rumcemsdata();
        } else {
            $data = $this->sukoharjo_m->get_rumcemsdata($id);
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
