<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('ViewSuratModels');
    }
    public function index(){
        $email = $this->session->userdata('email');
        $data['title'] = 'Intership';
        $data['user'] = $this->db->get_where('user', ['email' => $email])->row_array();
       
        if(empty($email)){
            $this->load->model('userModels');
            $this->userModels->security();    
        }

        if(!empty($email)){
            $this->load->view('templates/header', $data);
            $this->load->view('administrator/index', $data);
            $this->load->view('templates/footer');
        }else{
            echo '<script> console.log("Session Kosong"); </script>';
            redirect('/');
        }
    }

    public function Kehadiran(){
        
        $id_user = $this->input->post('id_user', 'true');
        $status = $this->input->post('status', 'true');
        $alasan = $this->input->post('alasan', 'true');
        
        $cekData = $this->db->get_where('kehadiran', ['id_user' => $id_user])->row_array();
        // var_dump($cekData);
        // die();
        if(empty($cekData)){
            if($status == "Hadir"){
                $data = [
                    'id_user' => $id_user,
                    'status' => $status,
                    'alasan' => $alasan,
                    'hadir' => 1,
                    'tidakHadir' => 0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ];
            }else{
                $data = [
                    'id_user' => $id_user,
                    'status' => $status,
                    'alasan' => $alasan,
                    'hadir' => 0,
                    'tidakHadir' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ];
            }

            $query = $this->db->insert('kehadiran', $data);

            if($query){
                $this->session->set_Flashdata('message', 'Berhasil Update Kehadiran');
                redirect('Administrator');
            }else{
                $this->session->set_Flashdata('message', 'Gagal Update Kehadiran');
                redirect('Administrator');
            }

        }else{
            
            
                if($status == "Tidak Hadir"){
                    $data = [
                        'id_user' => $id_user,
                        'status' => $status,
                        'alasan' => $alasan,
                        'hadir' => $cekData['hadir'] + 0,
                        'tidakHadir' => $cekData['tidakHadir'] + 1,
                        'created_at' => $cekData['created_at'],
                        'update_at' => date('Y-m-d H:i:s'),
                    ];
                }else{
                    $data = [
                        'id_user' => $id_user,
                        'status' => $status,
                        'alasan' => $alasan,
                        'hadir' => $cekData['hadir'] + 1,
                        'tidakHadir' => $cekData['tidakHadir'] + 0,
                        'created_at' => $cekData['created_at'],
                        'update_at' => date('Y-m-d H:i:s'),
                    ];
                }
            

            $this->db->where('id_user', $id_user);
            $query = $this->db->update('kehadiran', $data);

            if($query){
                $this->session->set_Flashdata('message', 'Berhasil Update Kehadiran');
                redirect('Administrator');
            }else{
                $this->session->set_Flashdata('message', 'Gagal Update Kehadiran');
                redirect('Administrator');
            }


        }


    }

    public function getDataAbsen(){
        $this->load->model('userModels');
        $this->load->model('KehadiranModels');
        $this->userModels->security();
 
        $hasil = $this->KehadiranModels->getTableAbsen();
       
        $data = [];
        $no = 1;
        
            foreach($hasil as $result){

                if($result->isActive == 1 ){
                    $row = array();
                    $row[] = $no++;
                    $row[] = $result->nim;
                    $row[] = $result->namaLengkap;
                    $row[] = $result->status;
                    // $row[] = $result->jurusan;
                    $row[] = $result->alasan;
                    $row[] = $result->hadir;
                    $row[] = $result->tidakHadir;
                    $row[] = $result->update_at;
                    
                    $data[] = $row;
                }
                // $row[] = "<button type='button' onclick='modalDetail($result->id_user)' class='btn btn-primary'>Detail</button>";
    
            }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->KehadiranModels->count_all_data(),
            "recordsFiltered" => $this->KehadiranModels->count_filtered_data(),
            "data" => $data,
        );

        $this->output->set_content_type('application/json')->set_output(json_encode($output));

    }

    public function updateJobdesc(){
        $idJob = $this->input->post('idJob');

        $cekData = $this->db->get_where('jobdesc', ['id' => $idJob])->row_array();
        
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'judul_job' => $this->input->post('judulJob'),
            'deskripsi' => $this->input->post('deskripsi1'),
            'status_job' => $this->input->post('statusJob'),
            'progresDeskripsi' => $this->input->post('progresDeskripsi'),
            'created_at' => $cekData['created_at'],
            'update_at' => date('Y-m-d H:i:s'),
        );

        $this->db->where('id', $idJob);
        $query = $this->db->update('jobdesc', $data);

        if($query){
            $this->session->set_Flashdata('message', 'Berhasil Update Job Description');
            redirect('Administrator');
        }else{
            $this->session->set_Flashdata('message', 'Gagal Update Job Description');
            redirect('Administrator');
        }

    }

    public function detailProgres(){
        // var_dump($this->input->post());
        // die();

        $this->db->select('jobdesc.*, user.namaLengkap');
        $this->db->from('jobdesc');
        $this->db->join('user', 'user.id = jobdesc.id_user');
        $this->db->where('jobdesc.id', $this->input->post('iduser'));
        $data = $this->db->get()->row();


        $response = array(
            'status' => 200,
            'data' => $data
        );

        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));

    }

    public function EvaluasiUpdate(){
        // var_dump($this->input->post());
        // die();

        $idJob = $this->input->post('idJob');

        $cekData = $this->db->get_where('jobdesc', ['id' => $idJob])->row_array();
        
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'judul_job' => $this->input->post('judulJob'),
            'deskripsi' => $this->input->post('deskripsi1'),
            'status_job' => $this->input->post('statusJob'),
            'deskripsi' => $this->input->post('deskripsi'),
            'progresDeskripsi' => $this->input->post('deskripsiProgres'),
            'evaluasi' => $this->input->post('evaluasi'),
            'created_at' => $cekData['created_at'],
            'update_at' => date('Y-m-d H:i:s'),
        );

        $this->db->where('id', $idJob);
        $query = $this->db->update('jobdesc', $data);

        if($query){
            $this->session->set_Flashdata('message', 'Berhasil Update Job Description');
            redirect('Administrator');
        }else{
            $this->session->set_Flashdata('message', 'Gagal Update Job Description');
            redirect('Administrator');
        }

        die();
    }

    public function InsertSuratBalasan(){

        $SPemohon = $this->input->post('statusPemohon');
        $asalSekolah = $this->input->post('asalSekolahPemohon');

        if($SPemohon == "Mahasiswa" || $SPemohon == "Siswa"){
            if($SPemohon == "Mahasiswa") {
                $kpdYth = "Rektor ".$asalSekolah." " ;
            }else{
                $kpdYth = "Kepala Sekolah ".$asalSekolah." " ;
            }
        }
        
        // Upload File/Gambar
        $config['upload_path'] = './assets/img/QrCode';
        $config['allowed_types'] = 'gif|jpg|png|PNG|jpeg';
        $config['max_size']     = '600000';
        $config['max_width'] = '10240';
        $config['max_height'] = '10000';

        // // Memuat library Upload
        $this->load->library('upload', $config);

        // $ttd = $_FILES['ttd_digital']['name'];

        if ($this->upload->do_upload('ttd_digital')) {
            $upload_data = $this->upload->data();
            $ttd = $upload_data['file_name'];
            
        } else {
            $error = $this->upload->display_errors();
            echo "Gagal mengunggah file: " . $error;
        }


        
        $data = array(
            'nomorSuratBalasan' => $this->input->post('nomorSuratBalasan'),
            'asalSekolahPemohon' => $kpdYth,
            'tglDibuat' => $this->input->post('tglDibuat'),
            'nomorSuratMou' => $this->input->post('nomorSuratMou'),
            'tglSuratMou' => $this->input->post('tglSuratMou'),
            'statusPemohon' => $SPemohon,
            'jumlahPemohon' => $this->input->post('jumlahPemohon'),
            
            'namaPemohon1' => $this->input->post('namaPemohon1'),
            'nim1' => $this->input->post('nim1'),
            'jurusan1' => $this->input->post('jurusan1'),
            
            'namaPemohon2' => $this->input->post('namaPemohon2'),
            'nim2' => $this->input->post('nim2'),
            'jurusan2' => $this->input->post('jurusan2'),
            
            'namaPemohon3' => $this->input->post('namaPemohon3'),
            'nim3' => $this->input->post('nim3'),
            'jurusan3' => $this->input->post('jurusan3'),
            
            'namaPemohon4' => $this->input->post('namaPemohon4'),
            'nim4' => $this->input->post('nim4'),
            'jurusan4' => $this->input->post('jurusan4'),
            
            'namaPemohon5' => $this->input->post('namaPemohon5'),
            'nim5' => $this->input->post('nim5'),
            'jurusan5' => $this->input->post('jurusan5'),

            'statusSurat' => $this->input->post('statusSurat'),
            'tglMulai' => $this->input->post('tglMulai'),
            'tglAkhir' => $this->input->post('tglAkhir'),
            'divisi' => $this->input->post('divisi'),
            'namaPembimbing' => $this->input->post('namaPembimbing'),

            'ttd_digital' => $ttd
            
        );
        $query = $this->db->insert('suratbalasan', $data);

        if($query){
            $this->session->set_Flashdata('success', 'suratSuccess');
            redirect('Administrator');
        }else{
            $this->session->set_Flashdata('error', 'Gagal Membuat Surat Balasan');
            redirect('Administrator');
        }

    }

    public function GetDataSurat(){
        $hasil = $this->ViewSuratModels->getDataSurat();
   
        $data = [];
        $no = 1;
        
        foreach($hasil as $result){
            
                $row = array();
                $row[] = $no++;
                $row[] = $result->nomorSuratBalasan;
                $row[] = $result->asalSekolahPemohon;
                $row[] = $result->jumlahPemohon;
                $row[] = $result->statusSurat;
                $row[] = $result->namaDivisi;
                $row[] = $result->tglDibuat;
                $row[] = "<button type='button' onclick='lihatSurat($result->idSurat)' class='btn btn-primary'>Lihat</button>";

                $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->ViewSuratModels->count_all_data(),
            "recordsFiltered" => $this->ViewSuratModels->count_filtered_data(),
            "data" => $data,
        );
      
        $this->output->set_content_type('application/json')->set_output(json_encode($output));

    }

    public function DetailSurat(){

        $this->db->select('suratBalasan.*, divisi.namaDivisi');
        $this->db->from('suratBalasan');
        $this->db->join('divisi', 'divisi.idDivisi = suratBalasan.divisi', 'left');
        $this->db->where('suratBalasan.idSurat', $this->input->post('idSurat'));
        $query = $this->db->get()->result();

        $data = [
            'title'=> "Surat Balasan",
            'data' => $query,
        ];
        $this->load->view('templates/pages/DetailSurat', $data);
    }

}