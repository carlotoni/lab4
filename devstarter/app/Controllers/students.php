<?php
namespace App\Controllers;
use App\Models\StudentModel;
use CodeIgniter\Controller;

class Students extends Controller
{
    public function index()
    {
        $model = new StudentModel();

        $model->findAll();
    }

    public function show($id)
    {
        $model = new StudentModel();

        $model->find($id);
    }
}