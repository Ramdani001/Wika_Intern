<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('userModels');
        $this->load->model('serverSideModels');
    }
    
    public function Dashboard(){
        $this->userModels->security();

        $this->load->view('templates/pages/Dashboard');
    }

    public function JobDesc(){

        $this->userModels->security();

        $this->db->select('jobdesc.*, user.namaLengkap');
        $this->db->from('jobdesc');
        $this->db->join('user', 'user.id = jobdesc.id_user', 'left');
        $this->db->order_by('created_at', 'DESC');
        $jobdesc = $this->db->get()->result();
        
        $data = [
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'getUser' => $this->db->get('user')->result(),
            'jobdesc' => $jobdesc,
        ];
        $this->load->view('templates/pages/JobDesc', $data);
    }

    public function InserJob(){
        $this->userModels->security();

        // Status Job

        // Done
        // In Progress
        // Pending
        // Rejected

        $data = [
            'id_user' => $this->input->post('id_user', 'true'),
            'judul_job' => htmlspecialchars($this->input->post('judulJob', 'true')),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', 'true')),
            'status_job' => "Pending",
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s')
        ];

        $insert = $this->db->insert('jobdesc', $data);

        redirect('/administrator');
    }

    public function detailJob(){
        $this->userModels->security();

        $idUser = $this->input->post('e');

        $this->db->select('jobdesc.*, user.namaLengkap');
        $this->db->from('jobdesc');
        $this->db->join('user', 'user.id = jobdesc.id_user');
        $this->db->where('jobdesc.id', $idUser);
        $data = $this->db->get()->row();


        $response = array(
            'status' => 200,
            'data' => $data
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function Sertifikat(){
        $this->userModels->security();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/pages/Sertifikat');
    }

    public function Intership(){
        $this->userModels->security();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['divisi'] = $this->db->get('divisi')->result();

        $this->load->view('templates/pages/Intership', $data);
    }

    
    public function Penempatan(){
        $this->userModels->security();


        $data = array(
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'Divisi' => $this->db->get('divisi')->result(),
        );

        $this->load->view('templates/pages/Penempatan', $data);
    }

    public function updateUser(){
        $this->userModels->security();

        $nim = $this->input->post('nim');
        $data = array(
            'nim' => $this->input->post('nim'),
            'namaLengkap' => $this->input->post('namaLengkap'),
            'email' => $this->input->post('email'),
            'noTelp' => $this->input->post('noTelp'),
            'asalSekolah' => $this->input->post('asalSekolah'),
            'jurusan' => $this->input->post('jurusan'),
            'divisi' => $this->input->post('divisi'),
            'isActive' => $this->input->post('status')
        );

        $this->db->where('nim', $nim);
        $query = $this->db->update('user', $data);

        if($query){
            $this->session->set_Flashdata('message', 'Berhasil Update');

            redirect('Administrator');
        }{
            $data2 = array(
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'Divisi' => $this->db->get('divisi')->result(),
            );
            $this->session->set_Flashdata('message', 'Gagal Update');
    
            $this->load->view('templates/pages/Penempatan', $data2);
            
        }

    }

// Delete   
// $this->db->where('id', $id);
// $this->db->delete('mytable');

    public function getIntership(){
        $this->userModels->security();

        $hasil = $this->serverSideModels->getDataTable();
        
        $data = [];
        $no = $_POST['start'] + 1;

        foreach($hasil as $result){
            
            if($result->roleId == 3){
                $row = array();
                $row[] = $no++;
                $row[] = $result->nim;
                $row[] = $result->namaLengkap;
                $row[] = $result->asalSekolah;
                // $row[] = $result->jurusan;
                $row[] = $result->namaDivisi;
                $row[] = ($result->isActive != 1) ? "Tidak Aktif" : "Aktif";
                $row[] = "<button type='button' onclick='modalDetail($result->nim)' class='btn btn-primary'>Detail</button>"; 

                $data[] = $row;
            }        
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->serverSideModels->count_all_data(),
            "recordsFiltered" => $this->serverSideModels->count_filtered_data(),
            "data" => $data,
        );

        $this->output->set_content_type('application/json')->set_output(json_encode($output));


    }

    public function getDataUser(){
        $this->userModels->security();

        $hasil = $this->serverSideModels->getDataTable();
        $filterGet = $this->input->get('Kehadiran');
        
        $data = [];
        $no = $_POST['start'] + 1;

        if($filterGet == 'Kehadiran'){
            foreach($hasil as $result){
            
                if($result->isActive != 0 && $result->roleId != 1 && $result->roleId != 2){
                    $row = array();
                    $row[] = $no++;
                    $row[] = $result->nim;
                    $row[] = $result->namaLengkap;
                    $row[] = $result->asalSekolah;
                    // $row[] = $result->jurusan;
                    $row[] = $result->namaDivisi;
                    $row[] = ($result->isActive != 1) ? "Tidak Aktif" : "Aktif";
                    $row[] = "<button type='button' onclick='modalDetail($result->id)' class='btn btn-primary'>Absen</button>";
    
                    $data[] = $row;
                }
            }
        }else{
            
            foreach($hasil as $result){
                
                if($result->isActive != 1 && $result->roleId != 1 && $result->roleId != 2){
                    $row = array();
                    $row[] = $no++;
                    $row[] = $result->nim;
                    $row[] = $result->namaLengkap;
                    $row[] = $result->asalSekolah;
                    // $row[] = $result->jurusan;
                    $row[] = $result->namaDivisi;
                    $row[] = ($result->isActive != 1) ? "Tidak Aktif" : "Aktif";
                    $row[] = "<button type='button' onclick='modalDetail($result->nim)' class='btn btn-primary'>Detail</button>";

                    $data[] = $row;
                }
            }
        }


        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->serverSideModels->count_all_data(),
            "recordsFiltered" => $this->serverSideModels->count_filtered_data(),
            "data" => $data,
        );

        $this->output->set_content_type('application/json')->set_output(json_encode($output));


    }

    public function detailUser(){
        $this->userModels->security();
        $status = $this->input->get('Kehadiran');
        
        if($status == 'Kehadiran'){
            $idUser = $this->input->post('e');

            $this->db->select('user.*');
            $this->db->from('user');
            $this->db->where('user.id', $idUser);
            $data = $this->db->get()->row();

        }else{
            $idUser = $this->input->post('e');

            $this->db->select('user.*, divisi.idDivisi');
            $this->db->from('user');
            $this->db->join('divisi', 'divisi.idDivisi = user.divisi');
            $this->db->where('user.nim', $idUser);
            $data = $this->db->get()->row();
        }


        $response = array(
            'status' => 200,
            'data' => $data
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function Kehadiran(){
        $this->userModels->security();

        $data = [
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/pages/Kehadiran', $data);
    }
 
    public function Today(){
        $this->userModels->security();


        $data = [
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/pages/Today', $data);
    }

    public function Progres(){
        $this->userModels->security();

        $this->db->select('jobdesc.*, user.namaLengkap');
        $this->db->from('jobdesc');
        $this->db->join('user', 'user.id = jobdesc.id_user', 'left');
        $jobdesc = $this->db->get()->result();
        
        $data = [
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'getUser' => $this->db->get('user')->result(),
            'jobdesc' => $jobdesc,
        ];

        $this->load->view('templates/pages/Progres', $data);
    }
    
    public function Progreschild(){ 
        $idUser = $this->input->post('iduser');

        $this->db->select('jobdesc.*, user.namaLengkap, user.nim');
        $this->db->from('jobdesc');
        $this->db->join('user', 'user.id = jobdesc.id_user');
        $this->db->where('jobdesc.id', $idUser);
        $query = $this->db->get()->row();

        $data = array(
            'status' => 200,
            'getJob' => $query
        );

        $this->load->view('templates/pages/Progreschild', $data);
    }

    public function Evaluasi(){
        $this->userModels->security();
        $this->db->select('jobdesc.*, user.namaLengkap, user.nim');
        $this->db->from('jobdesc');
        $this->db->join('user', 'user.id = jobdesc.id_user', 'left');
        $jobdesc = $this->db->get()->result();
        
        $data = [
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'getUser' => $this->db->get('user')->result(),
            'jobdesc' => $jobdesc,
        ];

        $this->load->view('templates/pages/EvaluasiPage', $data);
    }

    public function Galeri(){
        $this->userModels->security();  
        $this->load->view('templates/pages/GaleriPage');
    }

    public function SuratBalasan(){
        $this->userModels->security();

        $query = $this->db->get('divisi')->result();

        $data = array(
            'divisi' => $query
        );

        $this->load->view('templates/pages/SuratBalasan', $data);
    }
    
    public function viewSurat(){
        $this->userModels->security();

        $this->load->view('templates/pages/ViewSurat');
    }

    public function ProfilePage(){
        $this->userModels->security();

        $this->load->view('templates/pages/ProfilePage');
    }

}