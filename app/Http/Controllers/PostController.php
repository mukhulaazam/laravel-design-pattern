<?php

namespace App\Http\Controllers;

use App\Repositories\PostInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $posts;

    public function __construct(PostInterface $postInterface)
    {
        $this->posts = $postInterface;
    }

    public function index()
    {
        return $this->posts->index();
    }

    public function store(Request $request)
    {
        return $this->posts->store($request->all());
    }

    public function edit($id)
    {
        return $this->posts->edit($id);
    }

    public function update($id, Request $request)
    {
        return $this->posts->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->posts->destroy($id);
    }
}
