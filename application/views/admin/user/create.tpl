{extends file='admin-layout.tpl'}
	{block name="main"}
		{container}
			{row layout=[2,10] layout-1280=[3,9]}
				{form name="admin/user_create"}
					{field field="username"}{/field}
					{field field="password"}{password}{/field}
					{div class="action"}
						{submit}
					{/div}
				{/form}
			{/row}
		{/container}
	{/block}
