@extends('layouts.logged_in')

@section('content')
<body>
    <div id="header" th:replace="~{layout/header :: loggedInHeader}"></div>
    <body>
  <!--カルーセルの表示-->
  <div id="carouselExampleSlidesOnly" class="carousel slide"
  data-ride="carousel">
  <!-- インジケータの設定 -->
  <ol class="carousel-indicators">
    <li data-target="carouselExampleSlidesOnly" data-slide-to="0"
      class="active<"></li>
    <li data-target="carouselExampleSlidesOnly" data-slide-to="1"></li>
    <li data-target="carouselExampleSlidesOnly" data-slide-to="2"></li>
  </ol>
  <!-- スライドさせる画像の設定 -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block mx-auto" src="images/carousel1.jpg"
        alt="第1スライド">
    </div>
    <div class="carousel-item">
      <img class="d-block  mx-auto" src="images/carousel2.jpg"
        alt="第2スライド">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto" src="images/carousel3.jpg"
        alt="第3スライド">
    </div>
    <!-- /.carousel -->
  </div>
  <!-- /.carousel-inner -->
  <!-- スライドコントロールの設定 -->
  <a class="carousel-control-prev" href="#carouselExampleSlidesOnly"
    role="button" data-slide="prev"> <span
    class="carousel-control-prev-icon" aria-hidden="true"></span> <span
    class="sr-only">Previous</span>
  </a> <a class="carousel-control-next" href="#carouselExampleSlidesOnly"
    role="button" data-slide="next"> <span
    class="carousel-control-next-icon" aria-hidden="true"></span> <span
    class="sr-only">Next</span>
  </a>
</div>
    <main>
        <div id="main" th:include="__${main}__"></div>
    </main>
    <link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}">
</head>
</body>
<!-- Bootstrap用のJavaScriptを記述 -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
	<div class="container contents">
		<h1>Search</h1>
		<div class="row">
			<form class="search col-6">
				<div class="input-group">
					<input class="form-control" type="text" name="keyword" placeholder="キーワード検索">
					<span class="input-group-append">
						<input class="btn btn-outline-secondary" type="submit" value="検索" >
					</span>
				</div>
			</form>
		</div>
		<h2>Topics</h2>
		<div class="row">
			<div class="col-3">
				<img src = "images/kotatsu02.jpg">
			</div>
			<div class="col-3">
				<img src = "images/world_ice02.jpg">
			</div>
			<div class="col-3">
				<img src = "images/morning_ice01.jpg">
			</div>
			<div class="col-3">
				<img src = "images/cone_01.jpg">
			</div>
			<div class="col-3">
				<p>冬アイス始めませんか？</p>
				<button type="button" class="mb-3 btn btn-primary" data-toggle="modal" data-target="#Modal1">Check</button>
			</div>
				<div class="col-3">
				<p>世界の珍アイス</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">Check</button>
			</div>
				<div class="col-3">
				<p>朝アイスの意外過ぎる健康効果</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal3">Check</button>
			</div>
				<div class="col-3">
				<p>アイスの“アレ”のトリビア</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal4">Check</button>
			</div>
			<div class="col-3">
				<div class="card border-transparent">
          <div class="card-header bg-transparent"><h2>Menu</h2></div>
          <div class="card-body">
              <div class="panel panel-default">
                  <ul class="nav nav-pills nav-stacked" style="display:block;">
                      <div class="card-header bg-transparent"><h2>Aria</h2>エリアで探す</div>
                      <li><i class="fas fa-user-alt"></i> <a href="#">高知</a></li>
                      <li><i class="fas fa-user-alt"></i> <a href="#">愛媛</a></li>
                      <li><i class="fas fa-user-alt"></i> <a href="#">香川</a></li>
                      <li><i class="fas fa-user-alt"></i> <a href="#">徳島</a></li>
                      <div class="card-header bg-transparent"><h2>Type</h2>種類で探す</div>
                      <li><i class="fas fa-user-alt"></i> <a href="#">アイスクリーム</a></li>
                      <li><i class="fas fa-user-alt"></i> <a href="#">アイスミルク</a></li>
                      <li><i class="fas fa-user-alt"></i> <a href="#">地域限定アイス</a></li>
                      <li><i class="fas fa-user-alt"></i> <a href="#">氷菓</a></li>
                      <div class="card-header bg-transparent"><h2>Flaver</h2>味で探す</div>
                      <li><i class="fas fa-user-alt"></i> <a href="#">バニラ/プレーン</a></li>
                      <li><i class="fas fa-user-alt"></i> <a href="#">チョコレート</a></li>
                      <li><i class="fas fa-user-alt"></i> <a href="#">和風</a></li>
                      <li><i class="fas fa-user-alt"></i> <a href="#">その他</a></li>
                </ul>
              </div>
          </div>
      </div>
			</div>
			
			
			<div class="col-9">
			  @forelse($items as $item)
				  <div class="card item">
					<div class="row item_row">
						<div class="col-6 item_figure">
						    @if($item->image !== '')
                    <img class="img-fluid" src="{{ secure_asset($item->image) }}">
                @else
                    <img src="{{ secure_asset('images/no_image.png') }}">
                @endif
						</div>
						<div class="col-6 item_description">
							<h2 class="item_title">
							    <a href="{{ route('items.show', $item) }}">
                      {{ $item->name }}: 
                  </a>
              </h2>
              @if($item->stock > 0)
                  <div>{{ $item->price }}円</div>
              @else
                  <div>売り切れ</div>
              @endif
							<div>{{ $item->description }}</div>
						</div>
					</div>
				</div>
				@empty
          <p>出品商品はありません。</p>
				@endforelse
			</div>
		</div>
	</div>
	<!-- モーダル -->
<div class="modal fade" tabindex="-1" id="Modal1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">寒い冬にアイスが食べたくなる理由</h5>
        <button type="button" class="close" data-dismiss="modal"
          aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- /.modal-header -->
      <div class="modal-body">
        <img class="img-fluid" src="images/kotatsu01.jpg"/>
        <p>ある調査ではアイスがおいしく食べられる気温は25℃前後という結果が出ており、一般的に、気温が22℃～23℃を超えるとアイスがよく売れるようになるんだとか。<br>暖かい室内にこもりがちなこの季節はアイスを食べるのにピッタリ。「冬アイス」始めませんか？</p>
      </div>
      <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
          data-dismiss="modal">閉じる</button>
      </div>
      <!-- /.modal-footer -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class="modal fade" tabindex="-1" id="Modal2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">想像できる？世界の珍妙なアイス</h5>
        <button type="button" class="close" data-dismiss="modal"
          aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- /.modal-header -->
      <div class="modal-body">
        <img class="img-fluid" src="images/world_ice01.jpg"/>
        <p>イタリア発祥のアイスクリーム「ジェラート」には珍しいテイストがたくさんあり、隠れた人気があるのだそうです。<br>フォアグラ味、フライドチキン味、チーズスパゲティ味…と個性豊かな中でも注目なのは「ベッドでの朝食味」。一体どんな味なのでしょう？ジェラートの中には、メープルシロップとカリカリベーコンが入っているそうですよ。</p>
      </div>
      <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
          data-dismiss="modal">閉じる</button>
      </div>
      <!-- /.modal-footer -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class="modal fade" tabindex="-1" id="Modal3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">朝アイスで始める健康習慣</h5>
        <button type="button" class="close" data-dismiss="modal"
          aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- /.modal-header -->
      <div class="modal-body">
        <img class="img-fluid" src="images/morning_ice02.jpg"/>
        <p>「ピノ」で有名な森永乳業と杏林大学が行った実験によると、アイスには脳を活性化させる効果があり、リラックスを促し、頭の回転が速くなったり、朝の目覚めが良くなるそう。<br>今でこそ嗜好品として愛されるアイスクリームですが、ルーツは兵士の疲労回復として作られた健康食品。朝食にアイス80〜120gを食べるだけとお手軽なので、気になる方はぜひ試してみて下さいね！</p>
      </div>
      <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
          data-dismiss="modal">閉じる</button>
      </div>
      <!-- /.modal-footer -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
</div>
<div class="modal fade" tabindex="-1" id="Modal4">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">アイスのコーン＝トウモロコシではない</h5>
        <button type="button" class="close" data-dismiss="modal"
          aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- /.modal-header -->
      <div class="modal-body">
        <img class="img-fluid" src="images/cone_02.jpg"/>
        <p>アイスクリームの相棒として人気でサクサクとした食感がたまらないコーン。<br>コーンと聞いて連想するのが「トウモロコシ(corn)」ですが、実は「円錐形(cone)」が由来で、英語圏ではアイスのコーンのことは「ポーク(poke)」や「コルネット(cornet)」と呼ばれることもあるそうですよ。</p>
      </div>
      <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
          data-dismiss="modal">閉じる</button>
      </div>
      <!-- /.modal-footer -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>




<!-- /.modal -->
	<footer class="text-center">
		<p><small>&copy;CodeCamp All Rights Reserved.</small></p>
	</footer>

@endsection