<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Topic;
use App\Models\User;
use Devlee\PHPMVCCore\Services\Session;
use Devlee\PHPRouter\Request;
use Devlee\PHPRouter\Response;

/**
 * Generated Controller
 */
class MainController
{
  public function __construct()
  {
  }

  // Index
  public function Index(Request $req, Response $res)
  {
    $page = $req->query('page') ?: 1;
    $post = new Post();

    $data = $post->findAllJoin(
      [new Topic(), new User()],
      ['topic_id', 'user_id'],
      select: [[], [], ['name']],
      options: [
        'cur_page' => $page,
        'per_page' => 5,
      ]
    );
    $res->render('home', 'Our Blog', [
      'paginator' => $data['paginator'],
      'posts' => $data['data'] ?? [], 'topics' => (new Topic())->findAll(select: ['topic', 'topic_id'])['data'] ?? []
    ]);
  }

  // Read a post
  public function Read(Request $req, Response $res)
  {
    $slug = $req->params('slug');
    $post = new Post();

    $data = $post->findOneJoin(
      [new Topic(), new User()],
      ['topic_id', 'user_id'],
      ['slug' => $slug],
      [[], [], ['name']]
    );

    if (!$data) $res->redirect('/?invalid-post');

    $res->render('read', $data['title'], ['post' => $data, 'user' => (new Session)->get('user')]);
  }

  // Handle Search
  public function Search(Request $req, Response $res)
  {
    $search = $req->query('search');
    $post = new Post();
    $topic = new Topic();

    if ($search)
      $data = [
        'posts' => $post->searchJoin([new Topic, new User()], ['topic_id', 'user_id'], ['title' => $search, 'body' => $search])['data'] ?? [],
        'topics' => $topic->search(['topic' => $search])['data'] ?? []
      ];
    else
      $data = [];

    $res->render('search', 'Search Our BLog', $data);
  }
}
