<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "third_party/dompdf/autoload.php";

use Dompdf\Dompdf;

class SertifikatController extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('userModels');
        $this->load->model('SertifikatModels');
    }

    public function Insert(){
        
        $data = array(
            'no_surat_penilaian' => $this->input->post('no_surat_penilaian'),
            'idUser' => $this->input->post('id_user'),
            'kedisiplinan' => $this->input->post('kedisiplinan'),
            'tanggung_jawab' => $this->input->post('tanggung_jawab'),
            'kerapihan' => $this->input->post('kerapihan'),
            'komunikasi' => $this->input->post('komunikasi'),
            'pemahaman_pekerjaan' => $this->input->post('pemahaman_pekerjaan'),
            'manajemen_waktu' => $this->input->post('manajemen_waktu'),
            'kerjasama_tim' => $this->input->post('kerjasama_tim'),
            'tgl_dibuat' => $this->input->post('tgl_dibuat')
        );

        $query = $this->SertifikatModels->InsertData('penilaian', $data);

        if($query){
            $this->session->set_Flashdata('success', 'suratSuccess');
            redirect('Administrator');
        }else{
            $this->session->set_Flashdata('error', 'Gagal Membuat Surat Balasan');
            redirect('Administrator');
        }



    }

    public function GetDataPenilaian(){
        $hasil = $this->SertifikatModels->getDataPenilaian();
   
        $data = [];
        $no = 1;
        
        foreach($hasil as $result){
            
                $row = array();
                $row[] = $no++;
                $row[] = $result->no_surat_penilaian;
                $row[] = $result->nim;
                $row[] = $result->namaLengkap;
                $row[] = $result->jurusan; 
                $row[] = $result->asalSekolah;
                $row[] = $result->tgl_dibuat;
                $row[] = " <div class='d-flex'>
                            <a target='_blank' href='http://localhost/wika_intern/Administrator/DetailPenilaian?idPenilaian=$result->id_penilaian'><i class='fa-solid fa-download'></i></a>
                            <button type='button' onclick='lihatSertifikat($result->id_penilaian, 2)' class='btn btn-secondary m-1'><i class='fa-solid fa-eye'></i></button>
                            <button type='button' onclick='lihatSertifikat($result->id_penilaian, 3)' class='btn btn-success m-1'><i class='fa-solid fa-pen-to-square'></i></button>
                        ";

                $data[] = $row;
        } 

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->SertifikatModels->count_all_data(),
            "recordsFiltered" => $this->SertifikatModels->count_filtered_data(),
            "data" => $data,
        );
        // <button type='button' onclick='lihatSertifikat($result->id_penilaian, 1)' class='btn btn-primary m-1'><i class='fa-solid fa-download'></i></button>
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function GetEdit(){
        
        $id = $this->input->post('id');

        $this->db->select('penilaian.*, user.nim, user.namaLengkap, user.jurusan, user.asalSekolah');
        $this->db->from('penilaian');
        $this->db->join('user', 'user.id = penilaian.idUser', 'left');
        $this->db->where('penilaian.id_penilaian', $id);
        $query = $this->db->get()->row_array();

        $response = array(
            'status' => 200,
            'getSertifikat' => $query,
            // 'getDivisi' => $this->db->get('divisi')->result(),
        );

        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

}