<?php
    include_once("templates/header.php");

if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>

    <main id="post-container">
        <div class="cpntent-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container"><img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>"></div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sit molestias sint vitae, libero aperiam nulla, itaque dolorum incidunt minima harum dignissimos delectus explicabo ex cum quidem nam maxime? Incidunt.
            Perferendis, autem. Maiores quia, maxime, voluptatibus quidem cum tenetur temporibus quod rerum dolorum perspiciatis similique, ducimus deserunt. Sapiente saepe similique tenetur dolorem? Amet illo, commodi quaerat eos nisi aliquam vel.
            Inventore quod voluptate quas, expedita libero nihil explicabo porro quia enim atque repellat velit ex totam ad eum ullam odit ea repellendus voluptatum minima repudiandae aspernatur, ipsa corrupti iste. Quam.
            Natus quas exercitationem facere, ab debitis, eaque eius deleniti consequatur mollitia iure hic dicta placeat asperiores velit ratione? Culpa deleniti nisi rem aspernatur dolorum? Deserunt at optio explicabo magni tempora!
            Magni quo et exercitationem amet sunt placeat dolorem tenetur aut, id numquam inventore. Officiis nihil aut delectus illo, ullam, fugit dolorem debitis mollitia alias nisi aliquam totam, quod quasi corrupti.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, ipsa error totam cupiditate nulla recusandae expedita illum, magnam, voluptatibus provident officia magni incidunt debitis? Alias fuga expedita nulla commodi consectetur?
            Maiores, ullam. Sequi in voluptas vitae quo, excepturi nam? Recusandae adipisci velit sit minus porro, ipsum et? Odio, maxime voluptatem fugiat ratione error sunt earum provident corporis doloribus animi ab.
            Molestiae ad hic repudiandae consequatur. Dolorum ea quia voluptatum esse aperiam perferendis dignissimos quaerat veritatis quasi non accusantium at laudantium nobis, molestiae consequuntur porro quo iusto repudiandae animi id. Laudantium?
            Ab nostrum repellat obcaecati molestiae fuga tempora atque eaque voluptatum expedita blanditiis, ad placeat earum veritatis aliquid libero est inventore pariatur harum odit facilis praesentium maiores, vel iusto ea? Fugiat.
            Necessitatibus totam exercitationem ex autem ea est laborum iste sunt corrupti. Numquam totam quasi vel odit, inventore atque, voluptatem, est dicta at repellat eaque veritatis asperiores sit ab vero ratione.</p>
        </div>
    </main>
    <aside class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
<?php
    include_once("templates/footer.php");
?> 
