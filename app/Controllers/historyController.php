<?php

		namespace App\Controllers;
        use App\Models\TransaksiModel;

		class historyController extends BaseController
		{
            public function history()
        {
            // Peroleh data transaksi dan detail transaksi dari database
            $transactions = $this->TransaksiModel->getTransactionsByUser($username); // Gantikan $userId dengan ID user yang sedang aktif
            $data['transactions'] = $transactions;

            // Tampilkan view untuk halaman history belanja dengan data transaksi
            return view('history', $data);
        }

        public function getTransactionsByUser($userId)
        {
            // Query untuk mengambil data transaksi dan detail transaksi berdasarkan ID user
            $this->db->select('*');
            $this->db->from('transactions');
            $this->db->join('transaction_details', 'transactions.id = transaction_details.transaction_id');
            $this->db->where('transactions.user_id', $userId);
            $query = $this->db->get();

            return $query->result();
        }


        }