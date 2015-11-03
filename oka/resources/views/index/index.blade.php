@extends('main')

@section('content')
  <div id="brick-wrap" class="clearfix">
    <header class="archive-header brick brick-cat-title">
      <h1 class="archive-title"><span class="title"><i class="fa fa-fire"></i>すべての動画｜動画総数&nbsp;{{ number_format($contents['count']) }}&nbsp;本</span></h1>
    </header>
      <div class="brick brick-small" style="display: inline-block; _display: inline;">
        <div class="panel">
          <div class="brick-media">
            <span class="cat 43"><a href="http://cpz.to/index.cgi?13886" title="CPZ Online"><i class="fa fa-tags"></i>お勧め</a></span>
            <a href="http://cpz.to/index.cgi?13886"><img src="http://www.rr.iij4u.or.jp/~co-gal/100100.jpg" width="133" height="135" alt="サンプル" /></a>
            <span class="time"><i class="fa fa-play"></i></span>
          </div>
          <div class="brick-content">
            <p class="date"><span class="year"><?php echo date("Y"); ?></span><span class="count"><?php echo date("m/d"); ?></span></p>
            <h3><a href="http://cpz.to/index.cgi?13886">お勧め</a></h3>
          </div> <!-- .brick-content -->
        </div> <!-- .panel -->
      </div>  <!-- .brick -->
    @foreach($contents['list'] as $content)
      <?php
          $format    = 'Y-m-d H:i:s';
          $date_time = date_parse_from_format($format, $content['regist_date']);
      ?>
      
      <div class="brick brick-small" style="display: inline-block; _display: inline;">
        <div class="panel">
          <div class="brick-media">
            <span class="cat 43"><a href="http://okazux.com/{{ $content['category_id'] }}" title="{{ $content['name'] }}"><i class="fa fa-tags"></i>{{ $content['name'] }}</a></span>
            <a href="/detail/{{ $content['id'] }}"><img src="{{ $content['thumbnail_url'] }}" width="133" height="135" alt="{{ $content['title'] }}" /></a>
            <span class="time"><i class="fa fa-play"></i>{{ $content['time'] }}</span>
          </div>
          <div class="brick-content">
            <p class="date"><span class="year">{{ $date_time['year'] }}</span><span class="count">{{ $date_time['month'] }}/{{ $date_time['day'] }}</span></p>
            <h3><a href="/detail/{{ $content['id'] }}">{{ $content['title'] }}</a></h3>
          </div> <!-- .brick-content -->
        </div> <!-- .panel -->
      </div>  <!-- .brick -->
    @endforeach
    <div id="loadimg"></div>
  </div><!-- #wrapper -->
@endsection
