<style>
  body {
    background: #232323;
    color: #ececec;
  }
</style>
<?php
include_once "./Models.php";
include_once "../vendor/autoload.php";

use App\Model\Category;
use App\Model\Post;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$postObj = new Post();
$categoryObj = new Category();

$data = array(
  [
    'category_id' => 5,
    'body' => "How to cook"
  ],
  [
    'category_id' => 6,
    'body' => "Best stores to get groceries in 2024"
  ],
  [
    'category_id' => 1,
    'body' => "Gaming Gear in 2024"
  ],
  [
    'category_id' => 5,
    'body' => "Best spicies to use next week"
  ],
  [
    'category_id' => 3,
    'body' => "Play who made thing right at the end"
  ],
  [
    'category_id' => 3,
    'body' => "Top this players moves"
  ],
);

// foreach ($data as $postData) {
//   $postObj->loadData($postData);
//   var_dump($po..mmst->save());
//   echo '</br>';
// }

# Create
// $posts = $postObj->create([
//   'category_id' => 3,
//   'body' => "Build the ultimate experience"
// ]);

# Update
// $posts = $postObj->findOne(['id' => 8]);

// $update = [
//   'category_id' => 3,
//   'body' => "Getting started"
// ];
// $posts = $postObj->update($update, ['id' => 8]);

# Delete
// $posts = $postObj->delete(['id' => 9]);

# Find One
// $posts = $postObj->findOne(['id' => 4]);
// $posts = $postObj->findOne(['id' => 4], ['id', 'body']);

# Find All
// $posts = $postObj->findAll();
// $posts = $postObj->findAll(['category_id' => 3]);
// $posts = $postObj->findAll(
//   ['category_id' => 3],
//   ['id', 'body'],
//   ['order_by' => ['body', 'desc']]
// );

// $posts = $postObj->findAll(
//   ['category_id' => 3],
//   ['id', 'body'],
//   ['cur_page' => 1, 'per_page' => 2]
// );

# Find Count
// $posts = $postObj->findCount();

# Find One Join
// $posts = $postObj->findOneJoin(
//   [$categoryObj],
//   ['category_id'],
//   ['category_id' => 2, 'id' => 7],
//   [['title', 'body'], ['topic', 'created_on']]
//   // ['title', 'body']
// );

# Find All Join
// $posts = $postObj->findAllJoin(
//   [$categoryObj],
//   ['category_id'],
//   ['category_id' => 3],
//   // [],
//   // [['title', 'body'], ['topic', 'created_on']],
//   ['title', 'body'],
//   ['cur_page' => 1, 'per_page' => 3, 'order_by' => ['body', 'desc']]
// );

# Search
// $posts = $postObj->search(['id' => 3], ['body' => 'c', 'category_id' => 3], ['cur_page' => 1, 'per_page' => 2]);
// $posts = $postObj->search(
//   // where: ['category_id' => 3],
//   search: ['body' => 'c'],
//   pagination: ['cur_page' => 1, 'per_page' => 3, 'order_by' => ['body', 'desc']],
//   // pagination: ['cur_page' => 1, 'per_page' => 3]
// );

# Search Join
// $posts = $postObj->search(['id' => 3], ['body' => 'c', 'category_id' => 3], ['cur_page' => 1, 'per_page' => 2]);
$posts = $postObj->searchJoin(
  [$categoryObj],
  ['category_id'],
  // ['body' => 'c', 'title' => 'd'],
  ['body' => 'c'],
  // where: ['category_id' => 3],
  options: ['cur_page' => 1, 'per_page' => 5, 'order_by' => ['id', 'asc']],
  select: ['body', 'title']
);

echo '<pre>';
print_r($posts);
echo '</br>';
echo '</pre>';

echo '</br>';
echo "MVC CORE..";
