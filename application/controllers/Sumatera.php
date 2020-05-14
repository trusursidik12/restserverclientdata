<?php
use chriskacerguis\RestServer\RestController;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Sumatera extends RestController {

    public function aqmdata_post()
    {
        $id_stasiun = $this->post('id_stasiun');
        $waktu = $this->post('waktu');
        $aqmdata = $this->sumatera_m->get($id_stasiun, $waktu);
        if($aqmdata){
            $update = $this->sumatera_m->update_aqmdata($id_stasiun, $waktu);
            if($update){
                $this->response(array('response' => 'success', 'aqmdata' => 'Data Berhasil diupdate' ), 201);
            } else {
                $this->response(array('response' => 'fail', 502));
            }
        } else {
            $insert = $this->sumatera_m->add_aqmdata();
            if($insert){
                $aqmdata = $this->sumatera_m->get($id_stasiun, $waktu);
                $this->response(array('response' => 'success', 'aqmdata' => 'Data Berhasil ditambah' ), 201);
            }else{
                $this->response(array('response' => 'fail', 502));
            }
        }
    }

}
