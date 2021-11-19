<?php

class About
{

    public function index($nama = 'Fadhlu Ibnu', $pekerjaan = "Coding")
    {
        echo "Hallo, nama saya $nama seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}
