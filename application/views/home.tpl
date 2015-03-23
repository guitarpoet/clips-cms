{html}
	{head}
	{/head}
	{body}
		{h1}{$header}{/h1}
		{dl}
			{dt}First Example{/dt}
			{dd}This is the first example{/dd}
		{/dl}
		{dl items=['a' => 'This is A', 'b' => 'This is B']}
		{/dl}
		{dl items=['a' => 'This is A', 'b' => 'This is B']}
			{literal}
			{dt}
				{span style="color: blue;"}{$key}{/span}
			{/dt}
			{dd}
				{span style="color: blue;"}{$value}{/span}
			{/dd}
			{/literal}
		{/dl}
	{/body}
{/html}
