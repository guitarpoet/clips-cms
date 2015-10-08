{extends file="bootstrap-layout.tpl"}
							{block name="toolbar"}
								{action action=$edit class=["btn", "btn-primary"]}{/action}
							{/block}
									{block name="workbench"}
										{form name="category_edit" state="readonly"}
											{field field="id" state="hidden"}{/field}
											{field field="name"}{/field}
											{field field="notes"}{/field}
											{field field="parent_id"}
												{select options=$categories label-field="name" value-field="id"}
												{/select}
											{/field}
										{/form}
									{/block}
