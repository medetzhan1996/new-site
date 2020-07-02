@extends('layout')
@section('content')
<!-- product section -->
	<section class="product-section">
		<div class="container">
			@if($send_order)
				<div class="alert alert-success alert-dismissible">
				  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Ваш заказ успешно отправлен!</strong>
				</div>
			@endif
			<div class="row">
				<div class="col-lg-6">
					<div class="background">	
						<div id="img-content">
							<div id="img">

							</div>
						</div>
						<div class="background-btn">
							<span id="large-img" class="btn btn-sm btn-info">+</span>
							<span id="reduce-img" class="btn btn-sm btn-info">-</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title" style="font-weight: 400;">Защитный Чехол Для Телефона</h2>
					<h3 class="p-price">10000 тг</h3>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="input-text-modal">
					     <div class="form-group">
						    <label for="exampleFormControlSelect1">Марка:</label>
						    <select class="form-control form-contact">
						      <option>iPhone 11</option>
						    </select>
						  </div>
					     <!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <form method="GET" action="">
							    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Заказать </h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
										  <div class="form-group">
										    <label for="exampleInputEmail1">Введите имя</label>
										    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="имя">
										  </div>
										  <div class="form-group">
										    <label for="exampleInputPassword1">Введите номер телефона</label>
										    <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="номер телефон">
										  </div>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Закрыть</button>
								        <input type="submit" name="send-order" class="btn btn-sm btn-primary" value="Отправить">
								      </div>
							    </div>
						    </form>
						  </div>
						</div>
						<!-- Modal -->
					</div>
					<div class="custom-file form-group">
						<input type="file" class="custom-file-input"  id="file_input" required>
						<label class="custom-file-label" for="validatedCustomFile">Выберите изображение...</label>
						<div class="invalid-feedback">Example invalid custom file feedback</div>
					  </div>
					<!-- <a href="#" class="site-btn">SHOP NOW</a> --><!--input type="file" id="file_input"--->
					<a href="" class="site-btn" data-toggle="modal" data-target="#exampleModal">Заказать</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Информация</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p class="p-text">{!!$product->information!!}</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Подробности  </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<p>Цвет <output class="pull-right">Черный</output> </p>
									<p>Материал <output class="pull-right">Soft Shell Matte</output> </p>
									<p>Вес <output class="pull-right">17,4 Г</output> </p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">доставка и возврат</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<p>Вы можете выбрать способ доставки при оформлении заказа</p>
									<p>Доставка в среднем : <span>3 - 4 дня</span></p>
									<p>Сертификат качества на 3 года.  За это время мы вам, совершенно БЕСПЛАТНО: почистим, отремантируем</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->
@endsection
@section('js')
<script type="text/javascript">
</script>
<script>
	TouchEmulator();
  	Konva.hitOnDragEnabled = true;
  	Konva.captureTouchEventsEnabled = true
  	var stage = new Konva.Stage({
    	container: 'img',
    	width: 200,
    	height: 300
  	});
  	var layer = new Konva.Layer();
  	stage.add(layer);
  	stage.draw();

  	// listen for the file input change event and load the image.
  	$("#file_input").change(function(e){
      	var URL = window.webkitURL || window.URL;
      	var url = URL.createObjectURL(e.target.files[0]);
      	var img = new Image();
      	img.src = url;
      	img.onload = function() {
        var img_width = img.width;
        var img_height = img.height;
        // calculate dimensions to get max 300px
        var max = 300;
        var ratio = (img_width > img_height ? (img_width / max) : (img_height / max))
        // now load the Konva image
        var theImg = new Konva.Image({
          image: img,
          x: 50,
          y: 30,
          width: img_width/ratio,
          height: img_height/ratio,
          draggable: true
        });
        layer.add(theImg);
        layer.draw();
      }
  	});
  	var scaleBy = 1.01;
  	stage.on('wheel', (e) => {
        e.evt.preventDefault();
        var oldScale = stage.scaleX();
        var pointer = stage.getPointerPosition();
        var mousePointTo = {
          x: (pointer.x - stage.x()) / oldScale,
          y: (pointer.y - stage.y()) / oldScale,
        };
        var newScale =
          e.evt.deltaY > 0 ? oldScale * scaleBy : oldScale / scaleBy;
        stage.scale({ x: newScale, y: newScale });
        var newPos = {
          x: pointer.x - mousePointTo.x * newScale,
          y: pointer.y - mousePointTo.y * newScale,
        };
        stage.position(newPos);
        stage.batchDraw();
  	});
	$(document).on("click", "#large-img", function(e) {
		var x = stage.scaleX()
		var y = stage.scaleY()
		var x_r = x+=0.1
		var y_r = y+=0.1
		stage.scaleX(x_r);
		stage.scaleY(y_r);
		stage.batchDraw();
	})
	$(document).on("click", "#reduce-img", function(e) {
		var x = stage.scaleX()
		var y = stage.scaleY()
		var x_r = x-=0.1
		var y_r = y-=0.1
		stage.scaleX(x_r);
		stage.scaleY(y_r);
		stage.batchDraw();
	})		
</script>
@endsection