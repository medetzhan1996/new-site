@extends('layout')
@section('content')
	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="{{ asset('img/soufeel/'.$product->src) }}" alt="...">
						</div>
						@if($product->src_extra1)
							<div class="carousel-item">
							  <img src="{{ asset('img/soufeel/'.$product->src_extra1) }}" class="d-block w-100" alt="...">
							</div>
						@endif
						@if($product->src_extra2)
							<div class="carousel-item">
							  <img src="{{ asset('img/soufeel/'.$product->src_extra2) }}" class="d-block w-100" alt="...">
							</div>
						@endif
						@if($product->src_extra3)
							<div class="carousel-item">
							  <img src="{{ asset('img/soufeel/'.$product->src_extra3) }}" class="d-block w-100" alt="...">
							</div>
						@endif
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title" style="font-weight: 400;">{{$product->title}}</h2>
					<h3 class="p-price" style="font-weight: 600;">
						@if($product->old_price)
							{{$product->price}} тг
							<del style="color: #de0047;font-weight: 600;margin-left: 5px;font-size: 18px;">
								{{$product->old_price}} тг
							</del>
						@else	
							{{$product->price}} тг
						@endif
					</h3>
					<!--h4 class="p-stock">В наличии: <span>Есть</span></h4-->
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<div class="input-text-modal">
						<div class="form-group">
						    <label for="validationTooltipUsername">Пред. осмотр: </label>
						    <span id="preview-content" class="{{$product->font_family}}"></span>
						    <input type="text" id="preview-text" class="form-control form-contact"  placeholder="Введите имя или текст здесь ..." required>
						  </div>
					     <div class="form-group">
						    <label for="exampleFormControlSelect1">Выберите материал:</label>
						    <select class="form-control form-contact">
						      <option value="Серебро">Серебро</option>
						      <option value="Подзолото">Подзолото</option>
						      <option value="Золото">Золото</option>
						    </select>
						  </div>
						  <a href="" class="site-btn" data-toggle="modal" data-target="#exampleModal">Заказать</a>
					     <!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Заказать </h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Введите имя</label>
								    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="имя">
								  </div>
								  <div class="form-group">
								    <label for="exampleInputPassword1">Введите номер телефона</label>
								    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="номер телефон">
								  </div>
								</form>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Закрыть</button>
						        <button type="button" class="btn btn-sm btn-primary">Отправить</button>
						      </div>
						    </div>
						  </div>
						</div>
						<!-- Modal -->
					</div>

					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button style="min-height: 50px;" class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Информация</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p class="p-text">{!!$product->information!!}</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">информация об уходе </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="./img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">доставка и возврат</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 spad">
					<div class="frcontainer">
						<div class="row">
							<div class="col-md-4">
								<div class="media">
								  <div class="media-left">
								    <a href="#" class="icon-slaider">
								      <i class="fa fa-diamond" aria-hidden="true"></i>
								    </a>
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">неподдельный</h4>
								    Драгоценные металлы
								  </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
								  <div class="media-left">
								    <a href="#" class="icon-slaider">
								      <i class="fa fa-shield" aria-hidden="true"></i>
								    </a>
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">100% безопасность</h4>
								    Оплата
								  </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
								  <div class="media-left">
								    <a href="#" class="icon-slaider">
								      <i class="fa fa-diamond" aria-hidden="true"></i>
								    </a>
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">БЕСПЛАТНО KZ ПЕРЕВОЗКА</h4>
								    ...
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('js')
	<script type="text/javascript">
		$(document).on('input', '#preview-text', function() {
		  var text = $(this).val()
		  $('#preview-content').html(text)
		});
	</script>
@endsection