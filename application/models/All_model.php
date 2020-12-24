<?php 
use GuzzleHttp\Client;

class All_model extends CI_model {
    private $_client;
    public function __construct(){
        $this->_client = new Client([
            'base_uri' => 'http://localhost/MyShoes/index.php/all'
        ]);
    }
    public function getAll()
    {
        // return $this->db->get('tulungagung')->result_array();
        $response = $this->_client->request('GET','all');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }


    public function tambahData()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jenis" => $this->input->post('jenis', true),
            "warna" => $this->input->post('warna', true),
            "ukuran" => $this->input->post('ukuran', true),
            "harga" => $this->input->post('harga', true),
        ];
        // $this->db->insert('tulungagung', $data);
        $response = $this->_client->request('POST','all',[
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function getId($id)
    {
        // return $this->db->get_where('tulungagung', ['id' => $id])->row_array();
        $response = $this->_client->request('GET','all',[
            'query' => [
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function hapusData($id)
    {
        // $this->db->delete('tulungagung', ['id' => $id]);
        $response = $this->_client->request('DELETE','all',[
            'form_params' => [
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
    }

    public function ubahData()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jenis" => $this->input->post('jenis', true),
            "warna" => $this->input->post('warna', true),
            "ukuran" => $this->input->post('ukuran', true),
            "harga" => $this->input->post('harga', true),
            "id" => $this->input->post('id', true)
        ];
        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('tulungagung', $data);
        $response = $this->_client->request('PUT','all',[
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

}