<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/amazeui.min.css" />
		<link rel="stylesheet" href="css/admin.css" />
	</head>

	<body>
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新闻管理</strong><small></small></div>
			</div>

			<hr>

			<div class="am-g">
				<div class="am-u-sm-12 am-u-md-6">
					<div class="am-btn-toolbar">
						<div class="am-btn-group am-btn-group-xs">
							<button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
						</div>
					</div>
				</div>
				<div class="am-u-sm-12 am-u-md-3">

				</div>
				<div class="am-u-sm-12 am-u-md-3">
					<div class="am-input-group am-input-group-sm">
						<input type="text" class="am-form-field">
						<span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
					</div>
				</div>
			</div>
			<div class="am-g">
				<div class="am-u-sm-12">
					<form class="am-form">
						<table class="am-table am-table-striped am-table-hover table-main">
							<thead>
								<tr>
									<th class="table-check"><input type="checkbox"></th>
									<th class="table-id">ID</th>
									<th class="table-title">新闻类型</th>
									<th class="table-type">类别</th>
									<th class="table-author am-hide-sm-only">作者</th>
									<th class="table-date am-hide-sm-only">修改日期</th>
									<th class="table-set">操作</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox"></td>
									<td>1</td>
									<td>
										<a href="#">9岁男孩因成绩不理想</a>
									</td>
									<td>文化</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<!-- <tr>
									<td><input type="checkbox"></td>
									<td>2</td>
									<td>
										<a href="#">9岁男孩因成绩不理想</a>
									</td>
									<td>文化</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>3</td>
									<td>
										<a href="#">看完这张图后你会惊呼</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>4</td>
									<td>
										<a href="#">麦蒂正式入名人堂 勇士老板暗示或拆4巨头</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>5</td>
									<td>
										<a href="#">纳达尔横扫新星第11次夺法网冠军 </a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>6</td>
									<td>
										<a href="#">麦蒂正式入名人堂 勇士老板暗示或拆4巨头</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>7</td>
									<td>
										<a href="#">欧洲杯闯进4强</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>8</td>
									<td>
										<a href="#">推荐几个互联网资讯类的网站</a>
									</td>
									<td>国际新闻</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>9</td>
									<td>
										<a href="#">麦蒂正式入名人堂 勇士老板暗示或拆4巨头</a>
									</td>
									<td>国内新闻</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>10</td>
									<td>
										<a href="#">新闻有哪几类</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>11</td>
									<td>
										<a href="#">世界杯身价最高的球员</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>12</td>
									<td>
										<a href="#">麦蒂正式入名人堂 勇士老板暗示或拆4巨头</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>13</td>
									<td>
										<a href="#">麦蒂正式入名人堂 勇士老板暗示或拆4巨头</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>14</td>
									<td>
										<a href="#">麦蒂正式入名人堂 勇士老板暗示或拆4巨头</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>15</td>
									<td>
										<a href="#">麦蒂正式入名人堂 勇士老板暗示或拆4巨头</a>
									</td>
									<td>体育</td>
									<td class="am-hide-sm-only">管理员</td>
									<td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
											</div>
										</div>
									</td>
								</tr> -->
							</tbody>
						</table>
						<div class="am-cf">
							共 5 条记录
							<div class="am-fr">
								<ul class="am-pagination">
									<li class="am-disabled">
										<a href="#">«</a>
									</li>
									<li class="am-active">
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li>
										<a href="#">3</a>
									</li>
									<li>
										<a href="#">4</a>
									</li>
									<li>
										<a href="#">5</a>
									</li>
									<li>
										<a href="#">»</a>
									</li>
								</ul>
							</div>
						</div>
						<hr>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>