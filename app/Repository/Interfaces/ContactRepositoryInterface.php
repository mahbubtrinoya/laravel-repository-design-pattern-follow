<?php
namespace App\Repository\Interfaces;

Interface ContactRepositoryInterface {

public function all();
public function store($data);
public function find($id);
public function update($data,$id);
public function delete($id);

}
