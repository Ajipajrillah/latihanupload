<?php
class Profile extends CI_Controller{
    function index(){
       $this->load->view('profile_view');
    }
    function biodata(){
        $this->load->view('biodata_view');
    }
    function data($nama, $alamat, $nohp){
        $data = [
            'nama'     => $nama,
            'alamat'   => $alamat,
            'nohp'     => $nohp,
        ];
        $this->load->view('v_data_profile',$data);
    }
    function tambah_data(){
        $this->load->view('v_tambah_data');
    }
    function action_tambah_data(){
        $add = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('nohp'),
        ];
        $this->load->view('v_data_profile',$add);
    }
    function tampil_data(){
        $this->load->model('M_profile');
        $data ['profile']=$this->M_profile->tampil_data()->result();
        $this->load->view('v_tampil_data_profile',$data);
    }
    function tambah_data_profile(){
        $this->load->view('v_tambah_data_profile');
}
function update_data($id){
    $this->load->model('M_profile');
    $data['profile']=$this->M_profile->get_data_by_id($id)->row_array();
    $this->load->view('v_update_data',$data);
}
function action_tambah_data_profile(){
    $add =[
        'nama_siswa' =>$this->input->post('nama_siswa'),
        'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
        'alamat' =>$this->input->post('alamat'),
        'no_hp' =>$this->input->post('no_hp'),
    ];
    $this->db->insert('tbl_profile',$add);
    redirect('../profile/tampil_data');
}
function action_update_data(){
    $id = $this->input->post('id');
    $update =[
        'nama_siswa' =>$this->input->post('nama_siswa'),
        'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
        'alamat' =>$this->input->post('alamat'),
        'no_hp' =>$this->input->post('no_hp'),
    ];
    $this->db->update('tbl_profile',$update,['id'=>$id]);
    redirect('../profile/tampil_data');
    }
}
?>