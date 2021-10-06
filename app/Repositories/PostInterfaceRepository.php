<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Http\Client\Request;

class PostInterfaceRepository implements PostInterface
{

    public function index()
    {
        // TODO: Implement index() method.
        return Post::all();
    }

    public function store(array $data)
    {
        // TODO: Implement store() method.
        return Post::create($data);
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        return Post::find($id);
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
        return Post::find($id)->update($data);
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
         return Post::destroy($id);

    }
}
