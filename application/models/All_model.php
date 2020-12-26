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
        $response = $this->_client->request('GET','all',[
            'query' => [
                'API_TOKEN' => '123456'
            ]
        ]);
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
            'API_TOKEN' => '123456'
        ];

        $response = $this->_client->request('POST','all',[
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function getId($id)
    {
        $response = $this->_client->request('GET','all',[
            'query' => [
                'API_TOKEN' => '123456',
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function hapusData($id)
    {
       $response = $this->_client->request('DELETE','all',[
            'form_params' => [
                'API_TOKEN' => '123456',
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
            "id" => $this->input->post('id', true),
            'API_TOKEN' => '123456'
        ];
        
        $response = $this->_client->request('PUT','all',[
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

}