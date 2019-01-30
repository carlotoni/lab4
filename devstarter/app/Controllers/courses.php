<?php
namespace App\Controllers;
use App\Models\CourseModel;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Courses extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $model = new CourseModel();

        $std = $model->findAll();

        return $this->respond($std, 200);
    }

    public function show($id)
    {
        $model = new CourseModel();
        $std = $model->find($id);

        return $this->respond($std, 200);
    }
}