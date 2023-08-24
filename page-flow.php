<?php get_header("page"); ?>

<div class="flow__fv">
  <div class="flow__fv__inner">
    <div class="flow__fv__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow-fv.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow-fv.png" media="(min-width:768px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow-fv-sp.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-fv-sp.png" width="1366px" height="942px" alt="FLOW">
      </picture>
    </div>
    <h2 class="page-title">
      <span>F</span><span>L</span><span>O</span><span>W</span>
    </h2>
  </div>
</div>

<div class="flow__contents">
  <div class="flow__contents__inner">
    <h2 class="flow__contents__title sliceTextFadeUp">あなたの理想ができるまで。</h2>
    <p class="flow__contents__text sliceTextFadeUp">until your dream is achieved.</p>
  </div>
</div>

<div class="flow__list">
  <div class="flow__list__inner">
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">01</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">INQUIRY</h3>
          <p class="flow__list__sub">お問い合わせ</p>
          <p class="flow__list__text">新築、リノベーションなど暮らしに関する事があればまずはmail、お電話でご相談ください。</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">02</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">HEARING</h3>
          <p class="flow__list__sub">ヒアリング</p>
          <p class="flow__list__text">日程をお伺いし、実際にお会いしてお話を伺います。<br>
どんな暮らしをイメージしているのか、趣味、家族、将来の事など…計画を伺いつつ、同時に私たち、TOKUのコンセプトや家づくりの流れ、資金計画の事などをお伝えします。<br>
資金計画では、家、土地、その他の諸費用、引っ越し、家具など、総合的な予算のバランスを検討していきます。</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">03</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">FIELD SURVEY</h3>
          <p class="flow__list__sub">現地調査</p>
          <p class="flow__list__text">検討している土地、気になる土地などがあればその土地と周囲の環境など現地を調査し、周囲の水道や排水、この場所にはどんな家を建てる事ができるのか？など建築に関する条件などを役所に行って調べます。<br>
『まだ土地も決まっていない』という相談も大丈夫です。私たちが土地探しからお手伝いいたします。実はその方が、土地を選ぶポイントやお得に土地を購入するためのコツなどもあるので、お気軽に相談ください。
</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">04</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">HOUSING LOAN</h3>
          <p class="flow__list__sub">住宅ローン仮審査</p>
          <p class="flow__list__text">「家のイメージはあるけども実際にかかる金額はどれくらいかかるのか？」「住宅ローンをどれくらいの金額で申し込むべきなのか」など、資金計画を元にいくら借りられるか？ではなく、いくら返済出来るか？を考え、借入金額を設定し、金融期間へ住宅ローンの仮審査を行います。
</p>
        </div>
      </div>
    </div>
    <div class="flow__bg__01 flow__bg">
    <?php 
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'iPhone') !== false || strpos($user_agent, 'iPad') !== false || strpos($user_agent, 'iPod') !== false) {
?>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-bg-01.png" width="1368px" height="1286px" alt="製図">
<?php 
} 
?>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">05</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">BASE PLAN CREATION</h3>
          <p class="flow__list__sub">ベースプラン作成</p>
          <p class="flow__list__text">描いている暮らしかた、将来の事も考え、敷地にあったベースプランを提案します。</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">06</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">PROVISIONAL CONTRACT</h3>
          <p class="flow__list__sub">仮契約（設計お申込み）</p>
          <p class="flow__list__text">ベースプランにご納得して頂ければ仮契約（設計申込み）を締結します。<br>
ここから詳細設計や仕様を決めていきます。この時、費用は100,000円かかりますが本契約の際にこの費用は契約金額に充当されます。
</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">07</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">VARIOUS MEETINGS</h3>
          <p class="flow__list__sub">照明、設備、仕様の打合せ</p>
          <p class="flow__list__text">詳細図面を作成と同時に細かい仕様や、照明、設備、仕上げなどを決めていくのに打合せをしていきます。</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">08</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">CONTRACT</h3>
          <p class="flow__list__sub">本契約(工事請負契約)</p>
          <p class="flow__list__text">細かい仕様や詳細図面が決定し、最終的なご予算にご納得頂けたら工事請負契約を締結いたします。ここから工事着工準備へかかります。</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">09</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">GROUND INVESTIGATION</h3>
          <p class="flow__list__sub">地盤調査</p>
          <p class="flow__list__text">家を建てる敷地の地盤を調査します。<br>
地盤に問題なく設計通りに進められるのであれば、引き継ぎ本工事の準備をします。もし地盤が弱く、地盤改良が必要な場合は地盤改良工事の準備をします。</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">10</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">GROUNDBREAKING CEREMONY</h3>
          <p class="flow__list__sub">地鎮祭</p>
          <p class="flow__list__text">工事着工する前に、その土地に住む神様を祝い鎮め、土地を利用させてもらう許可を得て、これからの工事の安全と家の繁栄を祈願する儀式を行います。</p>
        </div>
      </div>
    </div>
    <div class="flow__bg__02 flow__bg">
    <?php 
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'iPhone') !== false || strpos($user_agent, 'iPad') !== false || strpos($user_agent, 'iPod') !== false) {
?>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-bg-02.png" width="1368px" height="1286px" alt="製図">
<?php 
} 
?>

    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">11</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">BUILDING CONFIRMATION APPLICATION</h3>
          <p class="flow__list__sub">建築確認申請</p>
          <p class="flow__list__text">家を建てるために役所に設計図、仕様などを提出し建築の許可をいただきます。<br>
（申請から許可までおおよそ１カ月ほどかかります）
</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">12</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">START OF FOUNDATION WORK</h3>
          <p class="flow__list__sub">基礎工事着工</p>
          <p class="flow__list__text">建築確認の許可がおりたら、いよいよ家の土台となる基礎工事にかかります。<br>
（およそ１カ月程度）
</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">13</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">CONSTRUCTION</h3>
          <p class="flow__list__sub">上 棟</p>
          <p class="flow__list__text">基礎工事が完成したら建物本体の骨組みを組み上げます。<br>
家全体の大きさや空間イメージを感じることができ、この時に初めて家が建つ実感があり感動もあります。<br>
家の骨組み、屋根が出来上がる頃、中間検査を行います。
</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">14</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">COMPLETE</h3>
          <p class="flow__list__sub">本体完成、外構、庭工事</p>
          <p class="flow__list__text">各所の工事を終えいよいよ本体工事の完成です。外装、内装、照明、設備なども設置され、同時に外構工事と庭の植栽をしていき、さらに自分らしい暮らし方のイメージも大きくなるでしょう。
</p>
        </div>
      </div>
    </div>
    <div class="flow__list__item">
      <div class="flow__list__box">
        <p class="flow__num">15</p>
        <div class="flow__list__wrap">
          <div class="flow__border"></div>
          <h3 class="flow__list__title">HANDING OVER THE HOUSE</h3>
          <p class="flow__list__sub">引渡し・お引越し</p>
          <p class="flow__list__text">さあいよいよ実際の暮らしがスタートします。<br>
ここから先は好きなものだけを集めた自分スタイルに仕上げていくための楽しみが待っています。<br>
同時に私たちTOKUとの本当のお付き合いも始まります。
</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
<script>

</script>