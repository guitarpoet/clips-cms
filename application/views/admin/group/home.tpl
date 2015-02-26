{extends file='admin-layout.tpl'}
	{block name="main"}
		{container}
			{row id="toolbar"}
				{a class="btn btn-default" uri="admin/group/create"}
					{lang}Add{/lang}
				{/a}
			{/row}
			{row}
				{datatable name="admin_group_home"}
			{/row}
		{/container}
	{/block}
