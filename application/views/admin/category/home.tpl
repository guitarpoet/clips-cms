{extends file="bootstrap-layout.tpl"}
							{block name="toolbar"}
								{action action=$create class=["btn", "btn-primary"]}{/action}
								{action datatable-for="category" action=$show class=["btn", "btn-info"]}{/action}
								{action datatable-for="category" action=$edit class=["btn", "btn-warning"]}{/action}
								{action datatable-for="category" action=$delete class=["btn", "btn-danger"]}{/action}
							{/block}
									{block name="workbench"}
										{datatable name="category"}
									{/block}
