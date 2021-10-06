<?php

namespace App\Repositories;

interface PostInterface
{
    public function index();

    public function store(array $data);

    public function edit($id);

    public function update($id, array $data);

    public function destroy($id);
}
