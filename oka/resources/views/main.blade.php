<!DOCTYPE html>
<html>
  <head>
  <title>OKAZUX</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" itemprop="description" content="スマホにも対応☆騙しリンク無しでもう迷わない！サイト内ですべての動画が完全無料で見放題♪さらにすべての動画には一発ダウンロードリンク付き♪" />
  <meta name="keywords" itemprop="keywords" content="おかず,okazu,エロ動画,無修正,ダウンロード,無料,xvideo,素人,女子高生,人妻,AV,コスプレ" />
  <link href="{{ asset('/css/base.css') }}" rel="stylesheet" type="text/css" >
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{{asset('/js/jquery.bottom-1.0.js')}}}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55035645-1', 'auto');
  ga('send', 'pageview');
  $(function() {
   
      // オプションのproximityでbottom.jsを発生する位置を指定する
      $(window).bottom({proximity: 0.05});
      $(window).bind('bottom', function() {
   
          var obj = $(this);
   
          // 「loading」がfalseの時に実行
          if (!obj.data('loading')) {
   
              // 「loading」をtrueにする
              obj.data('loading', true);
   
              // ローディング画像を表示
              $('#loadimg').html("<img src=\"{{ asset('/img/loading.gif') }}\" alt=\"loading\" />");
   
              // 追加したい処理を記述
              setTimeout(function() {
   
                  // ローディング画像を削除
                  $('#loadimg').html('');
   
                  $.ajax({
                    type: "POST",
                    url: "http://okazux.com",
                    data: { name: "John", location: "Boston" }
                  }).done(function( msg ) {
                    alert( "データ保存: " + msg );
                  });
                  $('#wrap').append('<div class="box">test</div><div class="box">test</div><div class="box">test</div>');
   
                  // 処理が完了したら「loading」をfalseにする
                  obj.data('loading', false);
   
              }, 1500);
          }
   
      });
   
      // リロードしたときにページの先頭を表示する
      $('html,body').animate({ scrollTop: 0 }, '1');
   
  });
</script>
  </head>
<body class="home page page-id-5 page-template page-template-page-templates page-template-template-homepage page-template-page-templatestemplate-homepage-php custom-background style-default">
  <div id="wrapper" class="clearfix">
    <div id="menu-strip">
      <header>
        <label id="menu-open" for="check" onclick></label>
        <h1><a href="http://okazux.com"><img src="{{ asset('/img/main/logo-mobile.png') }}" alt="OKAZUX.com" /></a></h1>
      </header>
    </div>
    <div id="sidebar-bg"></div>
    <div id="left-sidebar-wrap">
      <input type="checkbox" id="check" name="check" />
      <div id="sidebar-top"><a href="http://okazux.com" id="logo"><img class="has-retina" alt="OkazuLogo" src="{{ asset('/img/main/logo.png') }}"><img class="is-retina" alt="OkazuLogo" src="{{ asset('/img/main/logo-retina.png') }}">
        </a>
    </div> <!-- #sidebar-top -->
    <div id="sidebar-wrap" class="popup">
      <div id="sidebar">
        <div id="main-menu">
          <div class="menu-main-container">
            <ul id="menu-main" class="menu">
              <li id="menu-item-1341" class="menu-title menu-item menu-item-type-custom menu-item-object-custom menu-item-1341"><a>メインメニュー</a></li>
              <li id="menu-item-1327" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5 current_page_item menu-item-1327"><a href="http://okazux.com/">すべての動画</a></li>
<!--
              <li id="menu-item-2524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2524"><a href="http://okazux.com/lanking">人気動画ランキング</a></li>
              <li id="menu-item-2734" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2734"><a href="http://okazux.com/category">カテゴリーリスト</a></li>
-->
            </ul>
          </div>
          <div class="search">
            <form role="search" method="post" id="searchform" action="http://okazux.com/search/">
              <div>
                <input type="text" value="" name="value" />
                <input type="submit" id="searchsubmit" value="Search" />
              </div>
            </form>
          </div>
        </div>
        <div id="main-menu">
          <div class="menu-main-container">
            <ul id="menu-category">
              <li class="cat-item"><span class="cat-title">人気カテゴリー</span></li>
              @foreach($category as $value)
                <li class="cat-item cat-item-35"><a href="http://okazux.com/{{ $value['category_id'] }}" >{{ $value['name'] }} &nbsp;({{ $value['count'] }})</a> </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div id="secondary-menu">
          <div class="menu-secondary-container">
            <ul id="menu-secondary" class="menu">
              <li id="menu-item-1342" class="menu-title menu-item menu-item-type-custom menu-item-object-custom menu-item-1342"><a>サイトについて</a></li>
              <li id="menu-item-2525" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2525"><a href="http://okazux.com/contact">お問い合わせ</a></li>
            </ul>
          </div>
        </div>
        <div id="social-menu" class="clearfix"></div> <!-- #social-menu -->
        <span id="copy">okazux.com©2014 All Rights Reserved.</span>
        <a href="http://click.dtiserv2.com/Click102/1006006-6-172514" target="_blank"><img src="http://affiliate.dtiserv.com/image/carib/06-150-02.jpg" border="0"></a>
      </div> <!-- #sidebar -->
    </div> <!-- #sidebar-wrap -->
  </div>
  @yield('content')
</body>
</html>
