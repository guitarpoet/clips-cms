{extends file='admin-layout.tpl'}
	{block name="main"}
		{container}
			{row id="toolbar"}
				{a class="btn btn-primary" uri="admin/user/create"}
					{lang}Save{/lang}
				{/a}
			{/row}
			{row}
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
