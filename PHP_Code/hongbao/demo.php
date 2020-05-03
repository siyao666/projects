<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP实现发红包功能</title>
		<script src="jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
				$("button").click(function(){
					/*jq选取元素的几种常规方式
					1.通过id来选取   $("#id的名称")
					2.通过class类名来选取   $(".类名称")
					3.通过属性来选取   $("标签名[属性名=值]")*/
					
					//var money = $("input:eq(0)").val(); eq表示等于 第一个input 从0开始算
					if($('#money').val()=='' || $('#num').val()==''){
						alert('请填写您要发的红包金额或者红包个数');
						return false;
					}
					var money = $("input[name='money']").val();
					var num = $("input[name='num']").val();
					$.ajax({
						url:'hongbao.php',
						type:'POST',
						dataType:'json',
						data:{'money':money,'num':num},
						success:function(json){
							if(json.msg==1){//红包已经分配完成
								var str = "";
								var res = json.res;
								$.each(res,function(index,array){
									str += '<p>第'+array['i']+'个红包，金额为'+array['money']+'，余额为'+array['total']+'</p>';
								})
								$("#result").html(str);
							}else{
								alert("程序出错了");
							}
						}
					})
				})
			})
		</script>
		<style type="text/css">
			.box{
				width: 300px;
				margin:auto;
				margin-top: 2%;
				text-align: center;
				border: 2px solid #EE4000;
				background-color: #EE2C2C;
				color: #EEDC82;
				padding: 3% 0;
			}
			.box div{
				font-size: 27px;
				margin-bottom: 10%;
			}
			.section{
				font-size: 18px;
			}
			input{
				margin-left: 10px;
				margin-bottom: 20px;
				outline: none !important;
			}
			input[type='text']{
				background-color: lightgoldenrodyellow;
				border: 2px solid #EEDC82;
				padding-left: 5px;
			}
			.box button{
				width: 70px;
				height: 70px;
				border-radius: 50%;
				border: 0;
				font-size: 28px;
				background-color: #EEDC82;
				outline: none !important;
			}
			#result{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="box">
			<div>恭喜发财，大吉大利!</div>
			<p class="section">
				红包金额
				<input type="text" name="money" id="money" value="" /><br />
				红包个数
				<input type="text" name="num" id="num" value="" />
			</p>
			<p><button>開</button></p>
		</div>
		<div id="result"> </div>
	</body>
</html>
