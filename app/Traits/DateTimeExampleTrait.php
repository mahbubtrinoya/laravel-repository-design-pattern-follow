<?php

namespace App\Traits;

trait DateTimeExampleTrait {

    public function DateTimeConversation ($Val){

        return date('d-m-Y h:i: A',strtotime($Val));

    }
}
