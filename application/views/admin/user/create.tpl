{extends file='admin-layout.tpl'}
	{block name="main"}
		{container}
			{row}
				{form name="admin/user_create"}
					{field field="username"}{/field}
					{field field="group_id"}
						{select name="group_id" blank=true options=$groups label-field="name" value-field="id"}{/select}
					{/field}
					{field field="password"}
						{password}
					{/field}
					{row class="action"}
						{submit}
					{/row}
				{/form}
			{/row}
		{/container}
	{/block}
