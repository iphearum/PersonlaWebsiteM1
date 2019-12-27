<?php
// FILE
class Files{
    public static function open($name_file){
        $data = json_decode(file_get_contents('storages/json/'.$name_file.'.json'), ture);
        return $data;
    }
}
// USER
class User{
    private $name;
    private $profile;
    private $skils;
    private $background;
    private $experiences;

    private $data_all;
    public function get_user(){
        $data_user = File::open('user_info');
        $this->name = $data_user["user_name"];
        $this->profile = $data_user["profile"];
        $this->skils = $data_user["skils"];
        $this->background = $data_user["background"];
        $this->experiences = $data_user["experiences"];
    }
    public function update_experience(){
        $data_ex = $this->data_all['experiences'];
        foreach ($data_ex as $key => $value) {
            # code...
        }
    }
    public function update_skil(){
        $data_ex = $this->data_all['skils'];
        foreach ($data_ex as $key => $value) {
            # code...
        }
    }
    public function update_background(){
        $data_ex = $this->data_all['background'];
        foreach ($data_ex as $key => $value) {
            # code...
        }
    }
    public function update_all(){
        $data_ex = $this->data_all['background'];
        foreach ($data_ex as $key => $value) {
            # code...
        }
    }
}
// PAGE
class Page{
    private $name = "START UP PAGE";
    public function aut_name($name_page){
        global $name;
        $this->name = $name_page;
    }
}
// INFORMATION
class Infor{
    private $data_all;
    private $data_experience;
    public function update(){
        $this->data_all = File::open('user_info');

    }
}

// $a = new Files();
// $k = $a->open("temp");
$temp = Files::open('temp');