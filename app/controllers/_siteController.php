<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Post;
use Devlee\WakerRouter\Request;
use Devlee\WakerRouter\Response;
use Devlee\WakerRouter\Router;

class SiteController
{
  // public Post $PostObj;
  // public Category $CategoryObj;

  public function __construct()
  {
    // $this->PostObj = new Post();
    // $this->CategoryObj = new Category();
  }

  public function Home(Request $req, Response $res)
  {
    $res->render("home", title: "Welcome to blogger");
  }

  public function About(Request $req, Response $res)
  {
    // $res->setPageTitle('About Us');
    $data = array(
      [
        'title' => "How we made it this far",
        'body' =>

        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ea totam culpa natus officia alias ut et recusandae facere, aperiam at iste mollitia sint placeat dicta nisi? Explicabo reprehenderit adipisci",
        'title' => "We move on",
      ], [
        'body' =>

        "aperiam odit sunt veritatis tempore inventore aspernatur, excepturi, odio reiciendis! Dolores voluptatum veniam commodi quaerat illo modi magni quis. Obcaecati."
      ]
    );
    $res->render("about", ['data' => $data], 'About Us');
  }
  public function Contact(Request $req, Response $res)
  {
    // $res->setPageTitle('Contact us');
    if ($req->isPost()) {
      echo ('Data send succ...');
      echo '</br>';
      $res->render("contact", $req->query(), "Thanks for contacting us");
    }
    $res->render("contact", $req->query(), "Contact Us");
  }
  public function Blog(Request $req, Response $res)
  {
    Router::setLayout('LayoutOne');

    $data = (new Post())->findAllJoin(
      [new Category()],
      ['category_id']
    );

    $res->render("blog", $data, 'Blogger');
  }
  public function Article(Request $req, Response $res)
  {
    Router::setLayout('LayoutOne');
    $id = $req->params('post_id');

    $data = (new Post)->findOneJoin(
      [new Category()],
      ['category_id'],
      ['id' => $id]
    );

    if ($id) {
      $res->render("blog", $data, "Reading.. " . $id);
    }
  }
  function getPosts(?int $id = null)
  {
    $data = array(
      'data' => [
        [
          'title' => "How we made it this far",
          'body' =>
          "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ea totam culpa natus officia alias ut et recusandae facere, aperiam at iste mollitia sint placeat dicta nisi? Explicabo reprehenderit adipisci",
          'title' => "We move on",
        ], [
          'title' => "Change the system far",
          'body' =>
          "aperiam odit sunt veritatis tempore inventore aspernatur, excepturi, odio reiciendis! Dolores voluptatum veniam commodi quaerat illo modi magni quis. Obcaecati."
        ],
        [
          'title' => "How we made it this far",
          'body' =>
          "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ea totam culpa natus officia alias ut et recusandae facere, aperiam at iste mollitia sint placeat dicta nisi? Explicabo reprehenderit adipisci",
          'title' => "We move on",
        ], [
          'title' => "Grow together",
          'body' =>
          "aperiam odit sunt veritatis tempore inventore aspernatur, excepturi, odio reiciendis! Dolores voluptatum veniam commodi quaerat illo modi magni quis. Obcaecati."
        ],
        [
          'title' => "How to write proper code!",
          'body' => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore provident praesentium vitae, ab voluptatum dignissimos porro debitis obcaecati velit molestiae modi tempora vero? Rem magnam nam accusamus itaque eum, error iusto quasi, molestias fugiat hic natus! Maxime est officia, saepe ab atque fuga impedit. Quas dolorum aspernatur asperiores. Dignissimos commodi sit deleniti blanditiis 

            rerum voluptatem expedita ipsa ullam, corrupti ex rem saepe dolores sint labore, repudiandae quisquam recusandae cumque ducimus! Hic dolorem inventore sunt, iusto omnis sapiente fuga obcaecati sit sequi neque voluptas at culpa harum. Repellendus ipsum odit consequuntur nobis tenetur ea porro assumenda! Quas delectus accusamus dignissimos illo quibusdam error, porro, sapiente quia sequi cupiditate numquam, aspernatur illum quis odio impedit. Illum dolore blanditiis facilis hic aliquam 

            numquam corporis qui quos, ad culpa sequi nemo, animi libero vitae aspernatur quam nobis est nostrum beatae, accusamus maiores iusto! Ea officiis enim ipsa possimus, placeat blanditiis doloribus eveniet consectetur magni."

        ]
      ]
    );
    if ($id) {
      $id = $id - 1 ?? 0;
      $data = $data['data'][$id] ?? [];
      $data['post_id'] = $id;
      return $data;
    }

    return $data;
  }
}
