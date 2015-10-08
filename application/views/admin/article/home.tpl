{extends file="bootstrap-layout.tpl"}
							{block name="toolbar"}
								{action action=$create class=["btn", "btn-primary"]}{/action}
								{action datatable-for="article" action=$show class=["btn", "btn-info"]}{/action}
								{action datatable-for="article" action=$edit class=["btn", "btn-warning"]}{/action}
								{action datatable-for="article" action=$delete class=["btn", "btn-danger"]}{/action}
							{/block}
									{block name="workbench"}
										{datatable name="article"}
									{/block}
