{extends file='admin-layout.tpl'}
	{block name="main"}
		{container}
			{row}
				{form name="admin/group_edit"}
					{row}
						{field field="id" readonly=true}
						{/field}
					{/row}
					{row}
						{field field="name"}{/field}
					{/row}
					{row class="action"}
						{submit}
					{/row}
				{/form}
			{/row}
		{/container}
	{/block}
