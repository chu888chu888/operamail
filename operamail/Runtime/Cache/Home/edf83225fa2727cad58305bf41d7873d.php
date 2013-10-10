<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='__PUBLIC__/Css/base.css' rel='stylesheet' />
<script src='__PUBLIC__/Js/jquery-1.7.1.min.js'></script>
<script src='__PUBLIC__/Js/app.js?v131010'></script>
</head>
<body>
<div class='left sidebar'>
	<div class='toolbary'>
		<span class='holdery'></span>
		<span class='icontols'><i class='icon icon-bookmark'></i></span>
		<span class='icontols'><i class='icon icon-mail icon-mailselected'></i></span>
		<span class='icontols'><i class='icon icon-notes'></i></span>
		<span class='icontols'><i class='icon icon-downloads'></i></span>
		<span class='icontols'><i class='icon icon-history'></i></span>
		<span class='icontols'><i class='icon icon-add'></i></span>
	</div>
</div>
<div class='left mailist'>
	<div class='toolbar'>
		<div class='borderbg'>
			<span class='holder fl'></span>
			<span class='icontols fl'>
				<i class='icon icon-text dropdowndiv'>邮件
					<i class='dropdown'></i>
				</i>
			</span>
			<span class='holder fr'></span>
			<span class='icontols fr'><i class='icon icon-close'></i></span>
		</div>
	</div>
	<div class='border'>
		<div class='toolbar panelbar'>
			<span class='icontols fl'><i class='icon icon-reload' title='更新全部(CTRL+R)'></i></span>
			<span class='icontols fr'>
				<i class='icon icon-config dropdowndiv' title='查看'>
					<i class='dropdown'></i>
				</i>
			</span>
		</div>
		<div class='accordbar'>
			<div class='accordtitle'>网源
				<span class='icontolsmall fr'>
				<i class='icon icon-config menu-item'>
					<ul class='menu'>
						<li class='mread icon-mail-small'>读取网源</li>
						<li class='mread icon-feeds'>添加网源</li>
						<li class='mread icon-add-small'>新建文件夹</li>
						<li class='mread'><hr></li>
						<li class='sub-menu-item'>
						自定义
							<ul class='submenu'>
								<li>1</li>
							</ul>
						</li>
					</ul>
				</i>
				</span>
				<span class='fr'><i class='icon icon16 icon-reload-anim' title='更新'></i></span>
				
			</div>
			<ul class='rsslis'>
				<?php if(is_array($nodes)): $i = 0; $__LIST__ = $nodes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<img src='<?php echo ($vo["ico"]); ?>'>
						<span class='rsstitle'>
							<?php if(empty($vo["bid"])): $count = '0'; ?>
							<?php else: ?>
							<?php $count = $vo["count"]; endif; ?>
							<a class='rssreada' href='javascript:;' title='<?php echo ($vo["name"]); ?>(<?php echo ($count); ?>封未读，共<?php echo ($count); ?>封)' data-id='<?php echo ($vo["id"]); ?>' data-lastread='<?php echo ($vo["lastread"]); ?>'><?php echo ($vo["name"]); ?></a>
						</span>
						<span class='rsscount fr'><?php echo ($count); ?></span>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class='accordtitle'>标签
				<span class='icontolsmall fr'>
				<i class='icon icon-config'>
				</i>
				</span>
			</div>
		</div>
	</div>
</div>
<div class='left arclist'>
	<div class='toolbar'>
		<div class='borderbg'>
			<span class='holder fl'></span>
			<span class='search fl'>
				<form action=''>
					<input class='searchtxt' type='text' name='' placeholder='搜索文章' />
					<input type='button' class='searchdrop' />
				</form>
			</span>
			<span class='icontols fl'><i class='icon icon-reload' title='更新(CTRL+R)'></i></span>
			<span class='holder fr'></span>
			<span class='icontols fr'>
				<i class='icon icon-listsort dropdowndiv' title='此视图的设置：'>
					<i class='dropdown'></i>
				</i>
			</span>
		</div>
	</div>
	<div class='arcs'>
	</div>
</div>
<div class='left content'>
	<div class='toolbar'>
		<span class='holder fl'></span>
		<span class='icontols fl'><i class='icon icon-read' title='已阅读(K)'></i></span>
		<span class='icontols fl'>
			<i class='icon icon-delete dropdowndiv' title='删除'>
				<i class='dropdown'></i>
			</i>
		</span>
		<span class='holder fr'></span>
		<span class='icontols fr'>
			<i class='icon icon-config dropdowndiv' title='邮件的默认设置'>
				<i class='dropdown'></i>
			</i>
		</span>
		
	</div>
	<div class='mcont'>
		<div class='ltitle'>
			<h1> </h1>
			<div class='linfo'><span class='lauthor'></span> <span class='time'></span></div>
		</div>
	</div>
	<hr>
	<div class='mcont main'>
		<p>

		</p>
		<p></p>
		<p></p>
		<p><a href='' target='_blank' class='readetail'>阅读全文</a><p>
	</div>
</div>
</body>
</html>