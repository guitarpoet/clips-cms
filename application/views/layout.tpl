{extends file='admin-layout.tpl'}
	{block name="main"}
		{container}
			{row}
				{button id="toggle" caption="Toggle"}
					$("#container").toggleClass("abs");
				{/button}
				{hr}
			{/row}
			{row}
				{div id="container"}
				{/div}
			{/row}
		{/container}
	{/block}
