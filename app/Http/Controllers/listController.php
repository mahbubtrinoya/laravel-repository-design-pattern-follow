<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_list_model;
use App\Repository\Interfaces\ContactRepositoryInterface;
use App\Traits\DateTimeExampleTrait;



class listController extends Controller
{
    //
     use DateTimeExampleTrait;
     private $ContactRepository;
     public function __construct(ContactRepositoryInterface $ContactRepository)
     {
         $this->ContactRepository=$ContactRepository;
     }


    public function index(){

    $ContactLists = $this->ContactRepository->all();

    return view('list',['ContactLists'=>$ContactLists]);
    }

    public function CreateContact(){

        return view('create_contact');

    }
    public function ContactStore(Request  $Req){



   $data = $Req->validate([
    'firstname' => 'required|max:60',
    'lastname' => 'required|max:60',
    'number' => 'required|unique:contact_list',
    'email' => 'required|unique:contact_list'
    ]);
   $this->ContactRepository->store($data);

   return redirect('/')->withSuccess('Contact name has been added successfully');

    }

    public function ContactEdit($id){

        $Contact = $this->ContactRepository->find($id);
        return view ('edit_contact',['Contact'=>$Contact]);
    }

    public function ContactUpdate(Request $Req ,$id){

         $this->ContactRepository->update($Req->all(),$id);
        return redirect('/')->withSuccess('Contact has been updated successfully');
      }

      public function ContactDelete($id){
        $this->ContactRepository->delete($id);
          return redirect('/')->withSuccess('Contact  has been delete successfully');
      }


      ///Traits
    public function datetarit(){
        echo $Today = date('Y-m-d h:i:s')."<br/>";
        echo $this->DateTimeConversation($Today);
    }

}
