<?php
require_once '../includes/conexao.php';

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/global.css">
    <title>Document</title>
</head>
<body>

<header>
    <div class="menu">
      <a href="" class="link-menu">COLEÇÃO</a>
      <a href="" class="link-menu">PERSONALIZAÇÃO</a>
    </div>
    <a href="" id="logo">
        <img id="img-logo" src="../assets/images/logo/moscoso.png" alt="">
    </a>
    <div class="icons">
      <a href="">
        <img src="../assets/images/icons/person_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt="">
      </a> 
      <a href="" >
        <img src="../assets/images/icons/favorite_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt="">
      </a>  
      <a href="">
        <img src="../assets/images/icons/shopping_bag_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt="">
      </a> 
      <a href="">
        <img src="../assets/images/icons/search_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt="">
      </a> 
    </div>
</header>
<div>
  <div id="capa">
    <span class="text-capa">LOJA ONLINE</span>
  </div>
</div>
<nav id="navbar-example2" class="navbar navegador">
<a class="navbar-brand " href="#">Navbar</a>
    <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading1">First</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading2">Second</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="#scrollspyHeading3">Third</a>
            </li>
            <li>
                <a class="dropdown-item" href="#scrollspyHeading4">Fourth</a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="#scrollspyHeading5">Fifth</a>
            </li>
        </ul>
            </li>
    </ul>
</nav>

<section>
    <div class="container text-center">
  <div class="row">
    <div class="col-sm-2" style="background-color: red;">
      ita deserunt atque in eligendi recusandae. Labore eius rerum eveniet alias aut recusandae expedita cupiditate consectetur aliquid architecto laborum maiores, ea sequi molestias earum tempora, illum nesciunt, quae repellat! Facere quo voluptas molestias non deserunt qui maxime laudantium iure error quidem similique quos vel eos, dolores quasi officia labore nesciunt quaerat velit enim soluta praesentium? Neque ab tempore molestias modi quod totam omnis, inventore corporis cumque iure dolor ullam autem libero? Officiis eius ipsa possimus accusamus, autem consectetur voluptates culpa quam quod ducimus temporibus! Cum veritatis reiciendis omnis, debitis quod, necessitatibus, ratione facere ad quia autem facilis dolor? Perferendis ipsum labore, explicabo nihil accusamus libero! Unde nisi dolores architecto atque natus iste quasi modi iusto et quo illum, voluptatum beatae! Ipsa error debitis veritatis atque fugiat. 
    </div>
    <div class="col">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis placeat quaerat eos omnis temporibus ratione quos accusamus saepe, nulla itaque nesciunt minus amet dolor, sequi voluptate cumque expedita. Eius quaerat quibusdam aliquam omnis laudantium voluptatem, reprehenderit dolores aliquid debitis recusandae nostrum in cum adipisci suscipit accusamus. Veritatis, fuga odit ipsa eligendi tempore enim quisquam facere animi incidunt molestias recusandae provident libero neque nam, dolorum et. Culpa nemo labore libero molestiae architecto, provident ducimus laborum nisi. Nulla quos autem delectus tenetur. Rerum, minima! Eum ea at ratione molestias vitae totam mollitia obcaecati numquam dolorum atque eligendi cumque, hic distinctio est dolorem deserunt odio eius! Provident similique dolores ut quae reprehenderit quasi, totam unde ad officiis ab vero accusamus culpa. Cum quaerat inventore recusandae aperiam dolores corporis commodi cupiditate. Dolore, iste laborum. Est nemo nihil neque unde ducimus, quidem error quis possimus! Voluptate cumque consequuntur laborum distinctio tempore alias accusamus excepturi recusandae in deleniti, at assumenda ut perspiciatis beatae quidem vero repellat dolore iure nihil delectus officiis nemo error nobis! Nulla rem labore eum doloremque modi dolor nobis ab eaque itaque ducimus assumenda beatae in sunt vel quam ad, iste voluptates expedita dolorem deserunt neque at eveniet. Commodi quas aliquid incidunt unde placeat numquam earum repellat sit vitae ducimus iure cupiditate, odio, delectus deserunt vel, voluptate rem at laboriosam reprehenderit harum distinctio quos ullam consectetur quae! Tenetur voluptatem at id laudantium esse voluptatibus soluta modi obcaecati voluptates provident inventore assumenda nesciunt incidunt molestiae minus, maiores similique necessitatibus est harum aliquam! Velit nulla repellat, accusantium temporibus, consequatur nam hic a saepe harum ipsum dolorem. Odit praesentium eius quidem facere ea dolore repudiandae recusandae consequatur minima voluptatem, inventore rem unde asperiores iure sequi exercitationem modi deleniti eos ducimus error aperiam dolorum! Inventore magnam voluptas harum quis, amet nemo soluta illo, labore voluptatibus officia nihil consequuntur odio fugiat veniam reiciendis quidem provident explicabo, ex doloremque! Sunt ex veniam asperiores quam esse qui illo fugiat, voluptas doloribus a explicabo reprehenderit velit laudantium vitae autem vel reiciendis accusantium itaque eaque facere ratione laboriosam, non obcaecati. Omnis veritatis sapiente labore soluta reiciendis possimus alias, facere at neque eum est repudiandae velit maxime blanditiis error doloribus ex voluptatem aperiam tempora numquam quisquam nulla ullam! Voluptates id nesciunt unde ex a earum dicta, eligendi pariatur optio nihil veniam eveniet maxime in necessitatibus, aperiam expedita sequi alias dignissimos harum perferendis quibusdam! Ad magnam sequi quas quibusdam asperiores facilis eveniet adipisci illum, ut obcaecati enim voluptate, cum inventore perferendis sit id praesentium eaque tempore eum earum dolorum, sapiente quod! Deserunt nihil rerum illum maxime mollitia quae quidem soluta quisquam, quaerat cumque deleniti pariatur delectus reprehenderit ab atque cupiditate quam fugit officiis praesentium voluptatibus officia iste labore eos illo! Obcaecati commodi quas laborum odio incidunt dicta repellat expedita ipsum fuga veritatis vel itaque fugiat magnam doloribus reprehenderit maiores molestiae, sed labore, aut neque! Dignissimos dolorum nam consequuntur, ab nulla cum exercitationem ea quam accusamus aspernatur tempora dolor, quod dolores natus harum? Quibusdam dignissimos dolor repellat velit harum sunt quod quo autem fugit magnam!
    </div>
    <div class="col">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis aut ratione voluptas similique modi quas laboriosam, dolorum molestias sint ea blanditiis deleniti repellendus commodi error minima? Non autem quae consequatur similique suscipit, libero soluta corrupti repudiandae, illum facere dolores distinctio recusandae. Aut dolores tempora aliquid, cumque iure rerum libero quibusdam in, doloribus dicta expedita laborum cum consectetur labore. Eligendi ullam aperiam ipsam. Consectetur incidunt molestias temporibus veniam, soluta totam explicabo. Odio, pariatur porro dolore voluptatibus rem non nemo sed labore distinctio, sapiente ratione maiores explicabo dignissimos soluta debitis minus iste omnis! Deserunt similique eligendi eum velit quos aperiam obcaecati aspernatur voluptas dolores laborum assumenda maiores, pariatur consequatur, facilis soluta excepturi architecto vero quia exercitationem distinctio unde. Temporibus tempore, vitae at aliquid veniam eaque sint possimus incidunt deserunt exercitationem, soluta adipisci nam magni iusto quo, laboriosam fuga ipsum nobis? Sapiente voluptas, hic nemo dolor voluptatum fugiat error quis rerum blanditiis iure officiis cupiditate amet consequuntur cumque maiores optio nostrum exercitationem repudiandae. A incidunt ab explicabo inventore, molestias quo. Sapiente veritatis maxime, quia fugiat numquam nisi voluptatibus eum dolores quo pariatur cupiditate nobis illo saepe consequatur. Omnis pariatur ea quam saepe, sequi distinctio temporibus maxime eum possimus fuga explicabo suscipit iusto necessitatibus. Dolorem quam explicabo corrupti earum facilis porro voluptates libero, voluptatum temporibus iusto nobis dignissimos ipsum. Repellendus sunt nam perferendis id incidunt dolores praesentium. Blanditiis quibusdam doloribus obcaecati optio ab asperiores ducimus aliquam eaque quis qui adipisci, sunt unde laudantium perferendis dolore natus rem neque possimus sit iusto quos autem! Voluptatibus optio vero laborum modi corporis quis pariatur fugiat nobis? Laudantium, magnam quam culpa impedit natus, cumque sed dolores suscipit consequuntur facere eum. Officia quas eum, voluptate commodi ea error perspiciatis fuga. Quos, officiis, exercitationem accusamus dolorum, earum ipsam quaerat a dolorem ea tempora quidem quas nam consectetur. Provident non repellendus nisi fugiat eos autem pariatur qui, porro maxime molestiae, cumque sit iste aut consectetur modi. Ipsam rerum ullam ab. Saepe aut ad ducimus, soluta nostrum exercitationem tenetur quia natus consequuntur ipsa placeat porro incidunt laudantium eligendi perferendis unde alias magnam. Ut, ullam omnis. Mollitia consequuntur explicabo natus distinctio ipsum necessitatibus ratione tempora eius, numquam, dolor eveniet vel, blanditiis assumenda a sit perspiciatis dicta cum. Consequuntur soluta nemo cumque, reprehenderit harum eaque a? Commodi quis assumenda ullam fugiat iusto et eaque debitis voluptatum sapiente consectetur. Aliquam corrupti similique delectus recusandae repudiandae laborum necessitatibus dolor cum perferendis dicta omnis ducimus quas rem, ipsam illo veritatis reiciendis rerum incidunt architecto quasi quod quis. Eligendi commodi cumque, cupiditate et facere sequi optio hic, odio eum libero, harum eos? Tempore possimus, excepturi dicta provident ullam hic ducimus accusantium, pariatur iste assumenda laboriosam inventore suscipit. Recusandae illo saepe rem laborum velit officia a nostrum labore iste, placeat quia, eligendi asperiores pariatur itaque voluptatem nesciunt tenetur? Consectetur incidunt sunt dolorem cumque, molestias at excepturi aut perferendis expedita esse, itaque amet! Ducimus repudiandae itaque architecto fugit nesciunt ad, et fugiat ex ullam quibusdam accusantium, vel iure tempora delectus est expedita eos labore. Consequuntur repudiandae placeat sint rerum molestias!
    </div>
  </div>
</div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p>Footer Content</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>