<?php
use chriskacerguis\RestServer\RestController;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Jawatimur extends RestController {

    public function aqmdata_post()
    {
        $id_stasiun = $this->post('id_stasiun');
        $waktu = $this->post('waktu');
        $aqmdata = $this->jawatimur_m->get($id_stasiun, $waktu);
        if($aqmdata){
            $update = $this->jawatimur_m->update_aqmdata($id_stasiun, $waktu);
            if($update){
                $this->response(array('response' => 'success', 'aqmdata' => 'Data Berhasil diupdate' ), 201);
            } else {
                $this->response(array('response' => 'fail', 502));
            }
        } else {
            $insert = $this->jawatimur_m->add_aqmdata();
            if($insert){
                $aqmdata = $this->jawatimur_m->get($id_stasiun, $waktu);
                $this->response(array('response' => 'success', 'aqmdata' => 'Data Berhasil ditambah' ), 201);
            }else{
                $this->response(array('response' => 'fail', 502));
            }
        }
    }

    // public function surabayadata_get()
    // {

    //     $id = $this->get('id');

    //     if ($id === null) {
    //         $data = $this->jawatimur_m->get_surabayadata();
    //     } else {
    //         $data = $this->jawatimur_m->get_surabayadata($id);
    //     }

    //     if ($data) {
    //         $this->response([
    //                 'status'    => true,
    //                 'data'      => $data
    //             ], 200);
    //     } else {
    //         $this->response([
    //                 'status'    => false,
    //                 'message'   => 'Data Tidak Ditemukan'
    //             ], 404);
    //     }
    // }

    // public function surabayaispu_get()
    // {

    //     $id = $this->get('id');

    //     if ($id === null) {
    //         $data = $this->jawatimur_m->get_surabayaispu();
    //     } else {
    //         $data = $this->jawatimur_m->get_surabayaispu($id);
    //     }

    //     if ($data) {
    //         $this->response([
    //                 'status'    => true,
    //                 'data'      => $data
    //             ], 200);
    //     } else {
    //         $this->response([
    //                 'status'    => false,
    //                 'message'   => 'Data Tidak Ditemukan'
    //             ], 404);
    //     }
    // }

    // public function malangdata_get()
    // {

    //     $id = $this->get('id');

    //     if ($id === null) {
    //         $data = $this->jawatimur_m->get_malangdata();
    //     } else {
    //         $data = $this->jawatimur_m->get_malangdata($id);
    //     }

    //     if ($data) {
    //         $this->response([
    //                 'status'    => true,
    //                 'data'      => $data
    //             ], 200);
    //     } else {
    //         $this->response([
    //                 'status'    => false,
    //                 'message'   => 'Data Tidak Ditemukan'
    //             ], 404);
    //     }
    // }

    // public function malangispu_get()
    // {

    //     $id = $this->get('id');

    //     if ($id === null) {
    //         $data = $this->jawatimur_m->get_malangispu();
    //     } else {
    //         $data = $this->jawatimur_m->get_malangispu($id);
    //     }

    //     if ($data) {
    //         $this->response([
    //                 'status'    => true,
    //                 'data'      => $data
    //             ], 200);
    //     } else {
    //         $this->response([
    //                 'status'    => false,
    //                 'message'   => 'Data Tidak Ditemukan'
    //             ], 404);
    //     }
    // }


}
