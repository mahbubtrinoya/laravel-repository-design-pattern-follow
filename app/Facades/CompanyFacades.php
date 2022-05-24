<?php


namespace App\Facades;
use Illuminate\Support\Facades\Facade;



class CompanyFacades extends Facade
{
   protected static function getFacadeAccessor() {
       return 'Company';
}

}
