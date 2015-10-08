{extends file="bootstrap-layout.tpl"}
							{block name="toolbar"}
								{a class="btn btn-primary" form-for="category_create"}
									{lang}Create{/lang}
								{/a}
							{/block}
									{block name="workbench"}
										{form name="category_create"}
											{field field="name"}{/field}
											{field field="notes"}{/field}
											{field field="parent_id"}
												{select options=$categories label-field="name" value-field="id"}
												{/select}
											{/field}
										{/form}
									{/block}
