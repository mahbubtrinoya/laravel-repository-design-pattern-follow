<?php

namespace App\Repository;
use App\Repository\Interfaces\ContactRepositoryInterface;
use App\Models\contact_list_model;

class ContactRepository implements ContactRepositoryInterface
{


    public function all()
    {
        // TODO: Implement all() method.
        return contact_list_model::paginate(3);
    }
    public function store($data)
    {
       //You can use this format
        $Contact = new contact_list_model();
        $Contact->firstname = $data['firstname'];
        $Contact->lastname = $data['lastname'];
        $Contact->number = $data['number'];
        $Contact->email = $data['email'];
        $Contact->save();

        //Or use this format
       // contact_list_model::create($data);
    }

    public function find($id)
    {
        ///This is main find
       return contact_list_model::where('id',$id)->first();
    }

    public function update($data, $id)
    {
        //This is like main you can say same that's why iam reuse only call $this->find($id); see the below code
       // $Contact = contact_list_model::where('id',$id)->first();
        $Contact = $this->find($id);
        $Contact->firstname = $data['firstname'];
        $Contact->lastname = $data['lastname'];
        $Contact->number = $data['number'];
        $Contact->email = $data['email'];
        $Contact->save();
    }
    public function delete($id)
    {
        //This is like main you can say same that's why iam reuse only call $this->find($id); see the below code
        // $Contact = contact_list_model::where('id',$id)->first();
        $Contact = $this->find($id);
        $Contact->delete();

    }
}
