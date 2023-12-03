<?php

    function btn($classes, $name, $id, $val){
        $craft ='<button class="'. $classes. '" id="' .$id. '" name="' .$name. '" >' .$val. '</button>';
        return $craft;
    }

    function btnSubmit($classes, $name, $id, $val){
        $craft ='<input type="submit" class="'. $classes. '" id="' .$id. '" name="' .$name. '" value="' .$val. '" />';
        return $craft;
    }