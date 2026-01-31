<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db
            ->where('is_deleted', 0)
            ->get('mahasiswa')
            ->result_array();
    }

    public function tambahDataTransaksiMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama_mahasiswa" => $this->input->post('nama_mahasiswa', true),
            "kamar" => $this->input->post('kamar', true),
            "no_hp" => $this->input->post('no_hp', true),
            "jenis_layanan" => $this->input->post('jenis_layanan', true),
            "berat_kg" => $this->input->post('berat_kg', true),
            "status" => $this->input->post('status', true),
            "metode_pembayaran" => $this->input->post('metode_pembayaran', true),
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataTransaksiMahasiswa($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->update('mahasiswa', ['is_deleted' => 1]);
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id_transaksi' => $id])->row_array();
    }

    // TAMBAHIN METHOD INI (METHOD BARU)
    public function editDataTransaksiMahasiswa()
    {
        $id = $this->input->post('id_transaksi', true);

        $data = [
            "nim" => $this->input->post('nim', true),
            "nama_mahasiswa" => $this->input->post('nama_mahasiswa', true),
            "kamar" => $this->input->post('kamar', true),
            "no_hp" => $this->input->post('no_hp', true),
            "jenis_layanan" => $this->input->post('jenis_layanan', true),
            "harga" => $this->input->post('harga_per_kg', true),
            "berat_kg" => $this->input->post('berat_kg', true),
            "total_harga" => $this->input->post('total_harga', true),
            "tanggal_masuk" => $this->input->post('tanggal_masuk', true),
            "tanggal_selesai" => $this->input->post('tanggal_selesai', true),
            "status" => $this->input->post('status', true),
            "metode_pembayaran" => $this->input->post('metode_pembayaran', true),
            "tanggal_pembayaran" => $this->input->post('tanggal_pembayaran', true),
            "catatan" => $this->input->post('catatan', true),
        ];

        $this->db->where('id_transaksi', $id);
        $this->db->update('mahasiswa', $data);
    }
}
