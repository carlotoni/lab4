<?php
namespace App\Controllers;
use App\Models\StudentModel;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Students extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $model = new StudentModel();

        $std = $model->findAll();

        return $this->respond($std, 200);
    }

    public function show($id)
    {
        $model = new StudentModel();
        $std = $model->find($id);

        return $this->respond($std, 200);
    }
}