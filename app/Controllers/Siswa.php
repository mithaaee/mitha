<?php
    namespace App\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\BaseCollector;

class Siswa extends BaseController
{
    public function index()
    {
        echo 'Halo ini adalah controller Siswa';
    }

    public function nama()
    {
        echo "ini adalah method nama di conttroller Siswa";
    }
    public function profil()
    {
        echo 'ini adalah method profil di conttroller Siswa';
    }
}

?>