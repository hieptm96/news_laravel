<?php

 function create_slug($string) {
    $search = array (
        '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
        '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
        '#(ì|í|ị|ỉ|ĩ)#',
        '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
        '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
        '#(ỳ|ý|ỵ|ỷ|ỹ)#',
        '#(đ)#',
        '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
        '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
        '#(Ì|Í|Ị|Ỉ|Ĩ)#',
        '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
        '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
        '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
        '#(Đ)#',
        "/[^a-zA-Z0-9\-\_]/",
        ) ;
    $replace = array (
        'a',
        'e',
        'i',
        'o',
        'u',
        'y',
        'd',
        'A',
        'E',
        'I',
        'O',
        'U',
        'Y',
        'D',
        '-',
        ) ;
    $string = preg_replace($search, $replace, $string);
    $string = preg_replace('/(-)+/', '-', $string);
    $string = strtolower($string);
    return $string;
}

function show_array($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function category_parent($data,$parent = 0,$str="--",$select = 0) {
    
    foreach($data as $item){
        $id = $item["id"];
        $name = $item["name"];
        $par = $item["parent_id"];
        if($par == $parent){
            if($select != 0 && $id == $select){
                echo "<option value='$id' selected='selected' >$str $name</option>";
            }else{
                echo "<option value='$id'>$str $name</option>";
            }
            category_parent($data,$id,$str."--",$select);
        }
        
    }
}

function show_comments_recursion($data, $parent = 0, $str = '') {
    if ($parent == 0) {
        $str += '<ul>';
    } else {
        $str += '<ul class="children">';
    }
    foreach ($data as $item) {
        if ($item["parent_id"] == $parent) {
            $str += '<li><div>';
            $str += '<div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>';
            $str += '<div class="commment-text-wrap">';
            $str += '<div class="comment-data">';
            $str += '<p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>';
            $str += '<div class="comment-text">' + $item["content"] + '</div>';
            $str += '</div>';
            $str += '</div>';
            show_comments_recursion($data,$item["id"],$str);
            $str += '</div></li>';
        } else {
            $str += "hiep";
        }
    }
    return $str;
}