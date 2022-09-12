<?php

function upload($files, $path) {
    $CI =& get_instance();
    $config['upload_path'] = $path;
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = '10000';
    // $config['max_height'] = '768';
    $config['encrypt_name'] = TRUE;
    $CI->load->library('upload', $config);

    $images = array();

    foreach ($files as $key => $image) {
        $_FILES['image']['name']= $image['name'];
        $_FILES['image']['type']= $image['type'];
        $_FILES['image']['tmp_name']= $image['tmp_name'];
        $_FILES['image']['error']= $image['error'];
        $_FILES['image']['size']= $image['size'];
        $CI->upload->initialize($config);
        if ($CI->upload->do_upload('image')) {
            $filename = $CI->upload->data('raw_name').$CI->upload->data('file_ext');
            return $filename;
        } 
        // else {
        //     echo $CI->upload->display_errors();
        // }
    }

}

 ?>
