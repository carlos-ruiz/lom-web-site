<!DOCTYPE html>
<html>	
	<body>
		<div style="background-color:#EB2234; color: white;">
			<table>
				<tr>
					<td>
						<a href="http://www.botasbom.com/" style="float:left;">
							<img class="img" src="bom.png" alt="logo"  height="50" width="60" class="logo-default" alt="botasbom.com" />
						</a>
					</td>
					<td style="text-align: center;" width="100%">
						<h1 style="color: white; display: inline-block;"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
					</td>
				</tr>
			</table>
		</div>
		<br />
		<section class="contenido">
			<h2 style="color:#777;font-size:16px;padding-top:5px;">
				<?php if(isset($data['description'])) echo $data['description'];  ?>
			</h2>
			<p>
				<?php echo $content ?>
			</p>
		</section>
		<div style="background-color:#EB2234; color: white;">
			<p style="text-align: center;"> “Botas y botines BOM agradece su preferencia.” <br/>
				Para cualquier aclaración comunicarse al: (443) 3-22-11-22.
			</p>
		</div>
	</body>
</html>