<?php
// PAGINATOR
function PaginatorMain(int $pages, int $current, string $hash_tag)
{
  if ($pages <= 1) return;
?>
  <div class="grid-pagination">
    <div class="container">
      <ul class="pagination-lists flex gap-x pb-1">
        <?php
        $previous = $current - 1;
        $next = $current + 1;
        ?>
        <li class="<?= $previous > 0 ?  '' : 'hidden' ?>">
          <a href="<?= $previous > 0 ? uri("$previous$hash_tag") : 'javascript:void(null)' ?>" class="paginate prev inactive">
            <i class=" fas fa-angle-left"></i>
          </a>
        </li>

        <?php for ($i = 1; $i <= $pages; $i++) { ?>
          <li>
            <a href="<?= uri("$i$hash_tag") ?>" class="paginate<?= $i === $current ? ' active' : '' ?>"> <?= $i ?> </a>
          </li>
        <?php } ?>
        <!-- <li>
          <span class="extend">...</span>
        </li> -->
        <li class="<?= $next <= $pages ? '' : 'hidden' ?>">
          <a href="<?= $next <= $pages ? uri("$next$hash_tag") : 'javascript:void(null)' ?>" class="paginate next inactive">
            <i class="fas fa-angle-right"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
<?php }

function uri(string $tag)
{
  $uri = $_SERVER['REQUEST_URI'];

  // $uri = "search/v?query=car";
  // $uri = "search/v?query=car&page=4#recent";
  // $uri = "search/v?page=2#recent";
  // $uri = "search/v";

  $pos = strpos($uri, '?page=');
  if ($pos) return substr($uri, 0, $pos) . "?page=" . $tag;

  $pos = strpos($uri, '&page=');
  if ($pos) return substr($uri, 0, $pos) . "&page=" . $tag;

  $pos = strpos($uri, '?');
  if ($pos) return $uri . "&page=" . $tag;

  return $uri . "?page=" . $tag;
}
