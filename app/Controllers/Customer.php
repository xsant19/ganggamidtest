<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
    protected $customer;

    function __construct()
    {
        $this->customer = new CustomerModel();
    }

    public function index()
    {
        $data['customer'] = $this->customer->findAll();
        return view('customer/index', $data);
    }
    public function create()
    {
        return view('customer/create');
    }
    public function store()
    {
        if (!$this->validate([
            'code' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'barcode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your valid {field} address?'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} number?'
                ]
            ],
            'pengarang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field}?'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field}'
                ]
            ],
            'diskon_beli' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field}?'
                ]
            ],
            'diskon_jual' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} US Needed?'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} US Needed?'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} US Needed?'
                ]
            ],
            'distributor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} US Needed?'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->customer->insert([

            'code' => $this->request->getVar('code'),
            'barcode' => $this->request->getVar('barcode'),
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'keterangan' => $this->request->getVar('keterangan'),
            'harga' => $this->request->getVar('harga'),
            'diskon_beli' => $this->request->getVar('diskon_beli'),
            'diskon_jual' => $this->request->getVar('diskon_jual'),
            'kategori' => $this->request->getVar('kategori'),
            'penerbit' => $this->request->getVar('penerbit'),
            'distributor' => $this->request->getVar('distributor')
        ]);
        session()->setFlashdata('message', 'Tambah Data Buku Berhasil');
        return redirect()->to('/customer');
    }
    function edit($id)
    {
        $dataCustomer = $this->customer->find($id);
        if (empty($dataCustomer)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
        }
        $data['customer'] = $dataCustomer;
        return view('customer/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'code' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'barcode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your valid {field} address?'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} number?'
                ]
            ],
            'pengarang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field}?'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} or state'
                ]
            ],
            'diskon_beli' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field}?'
                ]
            ],
            'diskon_jual' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} US Needed?'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} US Needed?'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} US Needed?'
                ]
            ],
            'distributor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your {field} US Needed?'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->customer->update($id, [
            'code' => $this->request->getVar('code'),
            'barcode' => $this->request->getVar('barcode'),
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'keterangan' => $this->request->getVar('keterangan'),
            'harga' => $this->request->getVar('harga'),
            'diskon_beli' => $this->request->getVar('diskon_beli'),
            'diskon_jual' => $this->request->getVar('diskon_jual'),
            'kategori' => $this->request->getVar('kategori'),
            'penerbit' => $this->request->getVar('penerbit'),
            'distributor' => $this->request->getVar('distributor')
        ]);
        session()->setFlashdata('message', 'Update Data Customer Berhasil');
        return redirect()->to('/customer');
    }
    function delete($id)
    {
        $dataCustomer = $this->customer->find($id);
        if (empty($dataCustomer)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
        }
        $this->customer->delete($id);
        session()->setFlashdata('message', 'Delete Data Buku Berhasil');
        return redirect()->to('/customer');
    }
}
