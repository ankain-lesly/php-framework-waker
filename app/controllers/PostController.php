<?php

namespace App\Controllers;

use App\Middlewares\AuthMiddleware;
use App\Models\Post;
use App\Models\Topic;
use Devlee\WakerORM\Services\Library;
use Devlee\WakerORM\Services\Session;
use Devlee\WakerRouter\Request;
use Devlee\WakerRouter\Response;
use Devlee\WakerRouter\Router;

/**
 * Generated Controller
 */
class PostController
{
  public function __construct()
  {
    Router::setLayout('layouts/UserLayout');
    AuthMiddleware::isAdmin();
  }

  // Index
  public function Index(Request $req, Response $res)
  {
    $data = [
      'topics' => (new Topic())->findCount()['count'],
      'posts' => (new Post())->findCount()['count'],
    ];
    $res->render('user/home', 'My App', ['stats' => $data]);
  }
  // Index
  public function ManagePost(Request $req, Response $res)
  {
    $id = $req->params('post_id');
    $topic = new Topic();
    $post = new Post();

    if ($req->isPost() && !$id) return $this->handleCreate($req, $res);
    if ($req->isPost() && $id) return $this->handleUpdate($req, $res, $id);

    $data = [];
    $error  = [];

    if ($id) {
      // $data = $post->findOne(['post_id' => $id]);
      $data = $post->findOneJoin([$topic], ['topic_id'], ['post_id' => $id], [[], ['topic', 'topic_id']]);
      // $data = $post->findOneJoin([$topic], ['topic_id'], ['post_id' => $id]);

      if (!$data) {
        // $error[] = "Error getting posts";
        echo "Error getting posts";
      }
    }

    $topics = $topic->findAll(select: ['topic', 'topic_id']);

    $res->render('user/create', 'Create new post', ['topics' => $topics['data'] ?? [], 'post' => $data]);
  }

  // 
  private function handleCreate(Request $req, Response $res)
  {
    $post = new Post();
    $data = $req->body();

    $data['slug'] = $this->generateSlug($data['title']);
    $data['user_id'] = (new Session())->get('user')['user_id'];
    $data['post_id'] = Library::generateToken();

    if ($post->create($data)) {
      $res->redirect('/?post-created=noted');
    }
  }
  private function handleUpdate(Request $req, Response $res, string $id)
  {
    $id = $req->params('post_id');
    $post = new Post();
    $data = $req->body();

    if ($post->update($data, ['post_id' => $id])) {
      $res->redirect('/app?post-updated=noted');
    }
  }

  public function generateSlug(string $slug): string
  {
    $slug = str_replace(" ", "-", $slug);
    return strtolower($slug . "-" . Library::generateToken(4));
  }
}
